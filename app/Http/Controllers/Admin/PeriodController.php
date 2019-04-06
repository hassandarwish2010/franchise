<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Period;
use App\Http\Requests\Admin\PeriodRequest;

class PeriodController extends Controller
{
  /**
   * Show all periods
   *
   * @return response
   */
  public function index(Period $period) {
     $periods = $period->orderBy('id', 'asc')->get();

     return view('admin.periods.index', compact('periods'));
  }

  /**
   * Create new $period
   *
   * @return response
   */
  public function create() {
    return view('admin.periods.create');
  }

  /**
   * Store new $period
   *
   * @return response
   */
  public function store(PeriodRequest $request) {
    $period = Period::create($request->all());
    $period->save();

    return redirect()->back()->with(['success' => 'Period inserted successfully']);
  }

  /**
   * edit existing $period
   *
   * @return response
   */
  public function edit($id) {
    $period = Period::where('id', $id)->first();

    if (! $period) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.periods.edit', compact('period'));
  }

  /**
   * update existing $period
   *
   * @return response
   */
  public function update($id, PeriodRequest $request) {
    $period = Period::where(['id' => $id])->first();

    if (! $period) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $period = $period->fill($request->all());
    $period->save();

   return redirect()->back()->with(['success' => 'Period updated successfully']);
  }

  /**
   * Delete $period by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $period = Period::where(['id' => $id])->first();

    if (! $period) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Period::destroy($id);
    return redirect()->back()->with(['success' => 'Period deleted successfully']);
  }
}
