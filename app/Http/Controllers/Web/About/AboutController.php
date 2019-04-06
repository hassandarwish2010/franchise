<?php

namespace App\Http\Controllers\Web\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
  /**
   * Show about page
   *
   * @return response
   */
  public function index($lang, $permalink) {
    $about = About::where('permalink', $permalink)->first();

    return $about ? view('web.about.index', compact('about')) : view('web.errors.notfound');
  }
}
