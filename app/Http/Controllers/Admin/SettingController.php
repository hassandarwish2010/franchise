<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use App\Http\Requests\Admin\SettingRequest;

class SettingController extends Controller
{
  /**
   * Show setting
   *
   * @return response
   */
   public function index(Setting $setting) {
     $setting = $setting->first();

     return view('admin.setting.index', compact('setting'));
   }

   /**
    * Update setting
    *
    * @return response
    */
   public function update(SettingRequest $request) {
     $setting = Setting::first();
     if($setting) {
       $setting->update($request->except('_token', '_method'));
     } else {
       Setting::insert($request->except('_token', '_method'));
     }
     return redirect()->back()->with(['success' => 'Setting updated successfully']);
   }
}
