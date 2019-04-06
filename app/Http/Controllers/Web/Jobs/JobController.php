<?php

namespace App\Http\Controllers\Web\Jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Jobs\ApplyRequest;
use App\JobApply;
use App\Job;

class JobController extends Controller
{
    /**
     * Save cv to datatase
     *
     * @return response
     */
    public function apply(ApplyRequest $request, $lang, $job_id) {
      if (Job::where('id', $job_id)->exists()) {
        $request->cv = uploadFile($request->cv);
        $data = array_merge($request->only(['name', 'email', 'details']), ['cv' => $request->cv, 'job_id' => $job_id]);
        JobApply::create($data)->save();
      }

      return response()->json(['errors' => '-1']);
    }
}
