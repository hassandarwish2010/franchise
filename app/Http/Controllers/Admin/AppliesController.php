<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobApply;

class AppliesController extends Controller
{
  /**
   * Show all job appies
   *
   * @return response
   */
  public function index(JobApply $apply) {
     $applies = $apply->orderBy('id', 'asc')->with('job')->get();

     return view('admin.applies.index', compact('applies'));
  }

  /**
   * show Job apply details
   *
   * @return response
   */
  public function show($id) {
    $apply = JobApply::where('id', $id)->with('job')->first();
    if (! $apply) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }

    return view('admin.applies.show', compact('apply'));
  }

  /**
   * Delete job apply by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $apply = JobApply::find($id);

    if (! $apply) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    JobApply::destroy($id);
    return redirect()->back()->with(['success' => 'Apply deleted successfully']);
  }
}
