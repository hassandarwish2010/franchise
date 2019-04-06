<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Http\Requests\Admin\BannerRequest;

class BannersController extends Controller
{
  /**
   * Show all banners
   *
   * @return response
   */
  public function index(Banner $banner) {
     $banners = $banner->orderBy('id', 'asc')->get();

     foreach ($banners as $banner) {
       $banner->en_description = clean_limit($banner->en_description);
       $banner->image = asset('public/uploads/thumbs/' . $banner->image);
     }

     return view('admin.banners.index', compact('banners'));
  }

  /**
   * Create new banner
   *
   * @return response
   */
  public function create() {
      return view('admin.banners.create');
  }

  /**
   * Store new banner
   *
   * @return response
   */
  public function store(BannerRequest $request, Banner $banner) {
    request()->validate([
     'image' => 'required|image|max:7000',
    ]);

    $request->image = uploadImage($request->image, 1400, 550);

    $banner = Banner::create($request->all());
    $banner->image = $request->image;
    $banner->save();

    return redirect()->back()->with(['success' => 'Banner inserted succesfully']);
  }

  /**
   * Edit existing banner
   *
   * @return response
   */
  public function edit($id, Banner $banners) {
    $banner = $banners->find($id);

    if (! $banner) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }

    $banner->image = asset('public/uploads/thumbs/' . $banner->image);

    return view('admin.banners.edit', compact('banner'));
  }

  /**
   * Update existing banner
   *
   * @return response
   */
  public function update($id, BannerRequest $request) {
     $banner = Banner::find($id);

     if (! $banner) {
       return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
     }

     if($request->hasFile('image')) {
         request()->validate([
          'image' => 'image|max:7000',
         ]);
     }

     $banner->fill($request->except('image'));
      if($request->hasFile('image')) {
          $banner->image = uploadImage($request->image, 1400, 550);
      }
      $banner->save();

     return redirect()->back()->with(['success' => 'Banner updated successfully']);
  }

  /**
   * Delete banner by the given id
   *
   * @return message
   */
  public function destroy($id) {
      $banner = Banner::find($id);

      if (! $banner) {
        return redirect()->back()->with(['error' => 'Data Not Found']);
      }
      Banner::destroy($id);
      return redirect()->back()->with(['success' => 'Banner deleted successfully']);
  }
}
