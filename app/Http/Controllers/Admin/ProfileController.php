<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Get profile details
     *
     * @return response
     */
    public function get() {
      $user = Auth::user();

      return view('admin.profile.get', compact('user'));
    }

    /**
     * Save profile data
     *
     * @return response
     */
    public function save(Request $request) {
      $user = Auth::user();

      if (! $user) {
        return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
      }

      $id = $user->id;
      request()->validate([
        'name' => 'required|string|min:2|max:191',
        'email' => 'required|email|unique:users,email,'.$id,
      ]);

      if ($request->password != null) {
        request()->validate([
          'password' => 'required|min:6',
        ]);
      }

      $user = $user->fill($request->except('password'));
      if ($request->password != null) {
        $user->password =  bcrypt($request->password);
      }
      $user->save();

     return redirect()->back()->with(['success' => 'Your profile updated successfully']);
    }
}
