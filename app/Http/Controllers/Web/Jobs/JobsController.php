<?php

namespace App\Http\Controllers\Web\Jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Carbon\Carbon;

class JobsController extends Controller
{
  /**
   * Show Jobs
   *
   * @return response
   */
  public function index($lang) {
    $jobs = Job::paginate();
    foreach ($jobs as $job) {
      $job->full_image = asset('public/uploads/' . $job->image);
      $job->image = asset('public/uploads/thumbs/' . $job->image);
      $job->en_name = clean_limit($job->en_name, 30);
      $job->ar_name = clean_limit($job->ar_name, 30);
      $job->en_details = clean_limit($job->en_details, 100);
      $job->ar_details = clean_limit($job->ar_details, 100);
    }

    return view('web.jobs.jobs', compact('jobs'));
  }

  /**
   * Show Job page by the given id
   *
   * @return response
   */
   public function job($lang, $id) {
     $job = Job::find($id);

     if ($job) {
       $date = Carbon::parse($job->created_at);
       $now = Carbon::now();

       $job->diff = $date->diffInDays($now);
     }

     return $job ? view('web.jobs.job', compact('job')) : view('web.errors.notfound');
   }
}
