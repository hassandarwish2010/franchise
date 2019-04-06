<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Webview;
use App\Http\Requests\Admin\WebviewRequest;

class PageController extends Controller
{
  /**
   * Show all pages
   *
   * @return response
   */
    public function index(Webview $pages,$type) {
        $pages = $pages->where('type',$type)->orderBy('id', 'asc')->get();
        foreach ($pages as $service) {
            $service->details = clean_limit($service->details);
        }
        return view('admin.pages.index', compact('pages'));
    }

  /**
   * Create new pages
   *
   * @return response
   */
  public function create() {

  }

  /**
   * Store new pages
   *
   * @return response
   */
  public function store(WebviewRequest $request) {

  }

  /**
   * edit existing pages
   *
   * @return response
   */
  public function edit($id,$type) {
    $page = Webview::find($id);

      $array_lang=['ar','en'];
    if (! $page) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }


    return view('admin.pages.edit', compact('page','array_lang','type'));
  }

  /**
   * update existing pages
   *
   * @return response
   */
  public function update($id, WebviewRequest $request) {
    $service = Webview::find($id);

    if (! $service) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }



    $pages = $service->fill($request->except('image'));

    $pages->save();

   return redirect()->back()->with(['success' => 'page updated successfully']);
  }

  /**
   * Delete pages by the given id
   *
   * @return message
   */
  public function destroy($id) {

  }
}
