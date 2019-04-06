<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Webview;
use App\Http\Requests\Admin\WebviewRequest;

class CourseController extends Controller
{
  /**
   * Show all courses
   *
   * @return response
   */
  public function index(Webview $courses) {
      $courses = $courses->where('type','course')->orderBy('id', 'asc')->get();
     foreach ($courses as $course) {
       $course->details = clean_limit($course->details);
         $course->image = asset('public/uploads/thumbs/' . $course->image);
     }
     return view('admin.courses.index', compact('courses'));
  }

  /**
   * Create new courses
   *
   * @return response
   */
  public function create() {
      $array_lang=['ar','en'];
    return view('admin.courses.create',compact("array_lang"));
  }

  /**
   * Store new courses
   *
   * @return response
   */
  public function store(WebviewRequest $request) {
    request()->validate([
     'image' => 'required|image|max:5000',
     'date' => 'required|date',
    ]);

    $request->image = uploadImage($request->image);

    $courses = Webview::create($request->all());
    $courses->image = $request->image;
    $courses->save();

    return redirect()->back()->with(['success' => 'course inserted successfully']);
  }

  /**
   * edit existing courses
   *
   * @return response
   */
  public function edit($id) {
    $course = Webview::find($id);
      $array_lang=['ar','en'];
    if (! $course) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    $course->image = asset('public/uploads/thumbs/' . $course->image);

    return view('admin.courses.edit', compact('course','array_lang'));
  }

  /**
   * update existing courses
   *
   * @return response
   */
  public function update($id, WebviewRequest $request) {
    $course = Webview::find($id);

    if (! $course) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }



    $courses = $course->fill($request->except('image'));
     if($request->hasFile('image')) {
         $courses->image = uploadImage($request->image);
     }
    $courses->save();

   return redirect()->back()->with(['success' => 'course updated successfully']);
  }

  /**
   * Delete courses by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $courses = Webview::find($id);

    if (! $courses) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Webview::destroy($id);
    return redirect()->back()->with(['success' => 'Webview deleted successfully']);
  }
}
