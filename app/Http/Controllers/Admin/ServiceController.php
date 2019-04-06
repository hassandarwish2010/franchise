<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Webview;
use App\Http\Requests\Admin\WebviewRequest;

class ServiceController extends Controller
{
  /**
   * Show all services
   *
   * @return response
   */
  public function index(Webview $services) {
      $services = $services->where('type','service')->orderBy('id', 'asc')->get();
     foreach ($services as $service) {
       $service->details = clean_limit($service->details);
     }
     return view('admin.services.index', compact('services'));
  }

  /**
   * Create new services
   *
   * @return response
   */
  public function create() {
      $array_lang=['ar','en'];
    return view('admin.services.create',compact("array_lang"));
  }

  /**
   * Store new services
   *
   * @return response
   */
  public function store(WebviewRequest $request) {

    $services = Webview::create($request->all());
  
    $services->save();

    return redirect()->back()->with(['success' => 'service inserted successfully']);
  }

  /**
   * edit existing services
   *
   * @return response
   */
  public function edit($id) {
    $service = Webview::find($id);
      $array_lang=['ar','en'];
    if (! $service) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }


    return view('admin.services.edit', compact('service','array_lang'));
  }

  /**
   * update existing services
   *
   * @return response
   */
  public function update($id, WebviewRequest $request) {
    $service = Webview::find($id);

    if (! $service) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }



    $services = $service->fill($request->except('image'));

    $services->save();

   return redirect()->back()->with(['success' => 'service updated successfully']);
  }

  /**
   * Delete services by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $services = Webview::find($id);

    if (! $services) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Webview::destroy($id);
    return redirect()->back()->with(['success' => 'Webview deleted successfully']);
  }
}
