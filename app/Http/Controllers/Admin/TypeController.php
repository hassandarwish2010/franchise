<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FranchiseType;
use App\Http\Requests\Admin\TypeRequest;

class TypeController extends Controller
{
  /**
   * Show all types
   *
   * @return response
   */
  public function index(FranchiseType $type) {
     $types = $type->orderBy('id', 'asc')->get();

     return view('admin.types.index', compact('types'));
  }

  /**
   * Create new type
   *
   * @return response
   */
  public function create() {
    return view('admin.types.create');
  }

  /**
   * Store new type
   *
   * @return response
   */
  public function store(TypeRequest $request) {
    $type = FranchiseType::create($request->all());
    $type->save();

    return redirect()->back()->with(['success' => 'FranchiseType inserted successfully']);
  }

  /**
   * edit existing type
   *
   * @return response
   */
  public function edit($id) {
    $type = FranchiseType::where('id', $id)->first();

    if (! $type) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.types.edit', compact('type'));
  }

  /**
   * update existing type
   *
   * @return response
   */
  public function update($id, TypeRequest $request) {
    $type = FranchiseType::where(['id' => $id])->first();

    if (! $type) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $type = $type->fill($request->all());
    $type->save();

   return redirect()->back()->with(['success' => 'FranchiseType updated successfully']);
  }

  /**
   * Delete type by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $type = FranchiseType::where(['id' => $id])->first();

    if (! $type) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    FranchiseType::destroy($id);
    return redirect()->back()->with(['success' => 'FranchiseType deleted successfully']);
  }
}
