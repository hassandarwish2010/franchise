<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Webview;
use App\Http\Requests\Admin\WebviewRequest;

class ConferanceController extends Controller
{
  /**
   * Show all conferances
   *
   * @return response
   */
  public function index(Webview $conferances) {
      $conferances = $conferances->where('type','conferance')->orderBy('id', 'asc')->get();
     foreach ($conferances as $conferance) {
       $conferance->details = clean_limit($conferance->details);
         $conferance->image = asset('public/uploads/thumbs/' . $conferance->image);
     }
     return view('admin.conferances.index', compact('conferances'));
  }

  /**
   * Create new conferances
   *
   * @return response
   */
  public function create() {
      $array_lang=['ar','en'];
    return view('admin.conferances.create',compact("array_lang"));
  }

  /**
   * Store new conferances
   *
   * @return response
   */
  public function store(WebviewRequest $request) {
    request()->validate([
     'image' => 'required|image|max:5000',
     'date' => 'required|date',
    ]);

    $request->image = uploadImage($request->image);

    $conferances = Webview::create($request->all());
    $conferances->image = $request->image;
    $conferances->save();

    return redirect()->back()->with(['success' => 'Webview inserted successfully']);
  }

  /**
   * edit existing conferances
   *
   * @return response
   */
  public function edit($id) {
    $conferance = Webview::find($id);
      $array_lang=['ar','en'];
    if (! $conferance) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    $conferance->image = asset('public/uploads/thumbs/' . $conferance->image);

    return view('admin.conferances.edit', compact('conferance','array_lang'));
  }

  /**
   * update existing conferances
   *
   * @return response
   */
  public function update($id, WebviewRequest $request) {
    $conferance = Webview::find($id);

    if (! $conferance) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }



    $conferances = $conferance->fill($request->except('image'));
     if($request->hasFile('image')) {
         $conferances->image = uploadImage($request->image);
     }
    $conferances->save();

   return redirect()->back()->with(['success' => 'Webview updated successfully']);
  }

  /**
   * Delete conferances by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $conferances = Webview::find($id);

    if (! $conferances) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Webview::destroy($id);
    return redirect()->back()->with(['success' => 'Webview deleted successfully']);
  }
}
