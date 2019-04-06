<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\About;

class AboutController extends Controller
{
  /**
   * Show all about pages
   *
   * @return response
   */
  public function index(About $about) {
     $abouts = $about->orderBy('id', 'asc')->get();
     foreach ($abouts as $about) {
       $about->en_details = clean_limit($about->en_details);
     }
     return view('admin.abouts.index', compact('abouts'));
  }

  /**
   * Create new about page
   *
   * @return response
   */
  public function create() {
    return view('admin.abouts.create');
  }

  /**
   * Store new about page
   *
   * @return response
   */
  public function store(AboutRequest $request) {
    request()->validate([
      'permalink' => 'required|string|unique:abouts',
    ]);

    $about = About::create($request->all());
    $about->save();

    return redirect()->back()->with(['success' => 'About page inserted successfully']);
  }

  /**
   * edit existing about page
   *
   * @return response
   */
  public function edit($id) {
    $about = About::find($id);

    if (! $about) {
      return redirect()->back()->with(['error' => 'About page Not Found']);
    }

    return view('admin.abouts.edit', compact('about'));
  }

  /**
   * update existing about page
   *
   * @return response
   */
  public function update($id, AboutRequest $request) {
    $about = About::find($id);

    if (! $about) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    request()->validate([
      'permalink' => 'required|string|unique:abouts,permalink,'.$id,
    ]);

    $about = $about->fill($request->all());
    $about->save();

   return redirect()->back()->with(['success' => 'About page updated successfully']);
  }

  /**
   * Delete about page by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $about = About::find($id);

    if (! $about) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    About::destroy($id);
    return redirect()->back()->with(['success' => 'About page deleted successfully']);
  }
}
