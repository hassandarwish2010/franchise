<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\Http\Requests\Admin\JobRequest;

class JobsController extends Controller
{
  /**
   * Show all jobs
   *
   * @return response
   */
  public function index(Job $job) {
     $jobs = $job->orderBy('id', 'asc')->get();
     foreach ($jobs as $job) {
       $job->en_details = clean_limit($job->en_details);
     }
     return view('admin.jobs.index', compact('jobs'));
  }

  /**
   * Create new job
   *
   * @return response
   */
  public function create() {
    return view('admin.jobs.create');
  }

  /**
   * Store new jobs
   *
   * @return response
   */
  public function store(JobRequest $request) {
    $job = Job::create($request->all());
    $job->save();

    return redirect()->back()->with(['success' => 'Job inserted successfully']);
  }

  /**
   * edit existing job
   *
   * @return response
   */
  public function edit($id) {
    $job = Job::find($id);
    if (! $job) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }

    return view('admin.jobs.edit', compact('job'));
  }

  /**
   * update existing job
   *
   * @return response
   */
  public function update($id, JobRequest $request) {
    $job = Job::find($id);

    if (! $job) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $job = $job->fill($request->all());
    $job->save();

   return redirect()->back()->with(['success' => 'Job updated successfully']);
  }

  /**
   * Delete news by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $job = Job::find($id);

    if (! $job) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Job::destroy($id);
    return redirect()->back()->with(['success' => 'Job deleted successfully']);
  }
}
