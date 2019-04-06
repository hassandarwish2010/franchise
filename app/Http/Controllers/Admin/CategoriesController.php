<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\Admin\CategoryRequest;

class CategoriesController extends Controller
{
  /**
   * Show all categories
   *
   * @return response
   */
  public function index(Category $category) {
     $categories = $category->orderBy('id', 'asc')->get();
      foreach ($categories as $category) {

          $category->image = asset('public/uploads/thumbs/' . $category->image);
      }


      return view('admin.categories.index', compact('categories'));
  }

  /**
   * Create new category
   *
   * @return response
   */
  public function create() {
    return view('admin.categories.create');
  }

  /**
   * Store new category
   *
   * @return response
   */
  public function store(CategoryRequest $request) {
     // dd($request->all());
      request()->validate([
          'image' => 'required|image|max:7000',
      ]);
      $request->image = uploadImage($request->image);
    $category = Category::create($request->all());
      $category->image = $request->image;
    $category->save();

    return redirect()->back()->with(['success' => 'Category inserted successfully']);
  }

  /**
   * edit existing category
   *
   * @return response
   */
  public function edit($id) {
    $category = Category::where('id', $id)->first();

    if (! $category) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      $category->image = asset('public/uploads/thumbs/' . $category->image);
      return view('admin.categories.edit', compact('category'));
  }

  /**
   * update existing category
   *
   * @return response
   */
  public function update($id, CategoryRequest $request) {
    $category = Category::where(['id' => $id])->first();

    if (! $category) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }
      if($request->hasFile('image')) {
          request()->validate([
              'image' => 'image|max:7000',
          ]);
      }
      $category->fill($request->except('image'));
      if($request->hasFile('image')) {
          $category->image = uploadImage($request->image);
      }
      $category->save();

   return redirect()->back()->with(['success' => 'Category updated successfully']);
  }

  /**
   * Delete category by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $category = Category::where(['id' => $id])->first();

    if (! $category) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Category::destroy($id);
    return redirect()->back()->with(['success' => 'Category deleted successfully']);
  }
}
