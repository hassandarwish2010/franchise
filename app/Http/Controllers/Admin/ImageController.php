<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BannerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Http\Requests\Admin\NewsRequest;
use phpDocumentor\Reflection\Type;
use File;
class ImageController extends Controller
{
    /**
     * Show all news
     *
     * @return response
     */
    public function index($id=0,$type) {
        $banners =Image::where('type_id',$id)->where('type',$type)->orderBy('id', 'asc')->get();
        foreach ($banners as $banner) {
            $banner->image = asset('public/uploads/thumbs/' . $banner->image);
        }
        $type=$type;
        $id=$id;
      //dd($type);
        return view('admin.banners.index', compact('banners','type','id'));
    }

    /**
     * Create new news
     *
     * @return response
     */
    public function create($id=0,$type) {
        $type=$type;
        $id=$id;
       // dd($type);
        $array_lang=['ar','en'];
        return view('admin.banners.create',compact('type','id','array_lang'));
    }

    /**
     * Store new news
     *
     * @return response
     */
    public function store(BannerRequest $request,$id,$type) {
        //dd($request->all());
        request()->validate([
            'image' => 'required|image|max:5000',
            'lang' => 'required|in:ar,en',
        ]);
        $img=uploadImage($request->image);
        $image = Image::create([
            'type_id'=>$id,
            'image'=>$img,
            'lang'=>$request->lang,
            'type'=>$type,

        ]);

        return redirect()->back()->with(['success' => 'News inserted successfully']);
    }

    /**
     * edit existing news
     *
     * @return response
     */
    public function edit($id,$type) {
        //dd($id);
        $banner = Image::where('id', $id)->where('type', $type)->first();
        if (! $banner) {
            return redirect()->back()->with(['error' => 'Data Not Found']);
        }
        $banner->image = asset('public/uploads/thumbs/' . $banner->image);
        $array_lang=['ar','en'];
        return view('admin.banners.edit', compact('banner','type','id','array_lang'));
    }

    /**
     * update existing news
     *
     * @return response
     */
    public function update($id,$type, BannerRequest $request) {
        //dd($request->lang);
        $banner = Image::where('id', $id)->where('type', $type)->first();
        if (! $banner) {
            return redirect()->back()->with(['error' => 'Data Not Found']);
        }

        if($request->hasFile('image')) {
            request()->validate([
                'image' => 'image|max:7000',
            ]);
        }

        $banner->fill($request->except('image'));
        if($request->hasFile('image')) {
            $banner->image = uploadImage($request->image);
        }
       // $banner->lang = $request->lang;
        $banner->save();

        return redirect()->back()->with(['success' => 'Banner updated successfully']);
    }

    /**
     * Delete news by the given id
     *
     * @return message
     */
    public function destroy($id,$type) {
        // dd($page_id);
        $image = Image::where(['id' => $id,'type'=>$type])->first();
        //dd($image);
        $path=$image->image;
        $image_path = "public/uploads/thumbs/".$path;

//dd($image_path);

        if (! $image) {
            return redirect()->back()->with(['error' => 'Data Not Found']);
        }
        image::destroy($id);
        if(File::exists($image_path)) {
            File::delete($image_path);
            //dd($image_path);
        }
        return redirect()->back()->with(['success' =>'image deleted successfully']);
    }
}
