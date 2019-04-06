<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show dashboard for admin
   *
   * @return response
   */
  public function index() {
    return view('admin.dashboard.index');
  }
}
