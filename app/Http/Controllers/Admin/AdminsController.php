<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Admin\AdminRequest;

class AdminsController extends Controller
{
  /**
   * Show all admins
   *
   * @return response
   */
  public function index(User $user) {
     $admins = $user->orderBy('id', 'asc')->get();

     return view('admin.admins.index', compact('admins'));
  }

  /**
   * Create new admin
   *
   * @return response
   */
  public function create() {
    return view('admin.admins.create');
  }

  /**
   * Store new admin
   *
   * @return response
   */
  public function store(AdminRequest $request) {
    request()->validate([
      'password' => 'required|min:6',
      'email' => 'required|email|unique:users',
    ]);
    $user = User::create($request->all());
    $user->password =  bcrypt($request->password);
    $user->save();

    return redirect()->back()->with(['success' => 'Admin inserted successfully']);
  }

  /**
   * edit existing admin
   *
   * @return response
   */
  public function edit($id) {
    $admin = User::where('id', $id)->first();

    if (! $admin) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.admins.edit', compact('admin'));
  }

  /**
   * update existing admin
   *
   * @return response
   */
  public function update($id, AdminRequest $request) {
    $admin = User::where(['id' => $id])->first();

    if (! $admin) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    request()->validate([
      'email' => 'required|email|unique:users,email,'.$id,
    ]);

    if ($request->password != null) {
      request()->validate([
        'password' => 'required|min:6',
      ]);
    }

    $admin = $admin->fill($request->except('password'));
    if ($request->password != null) {
      $admin->password =  bcrypt($request->password);
    }
    $admin->save();

   return redirect()->back()->with(['success' => 'Admin updated successfully']);
  }

  /**
   * Delete admin by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $admin = User::where(['id' => $id])->first();

    if (! $admin) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    User::destroy($id);
    return redirect()->back()->with(['success' => 'Admin deleted successfully']);
  }
}
