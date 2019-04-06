<?php

namespace App\Http\Controllers\Web\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Show products by the given category
     *
     * @return response
     */
    public function index($lang, $category_id) {
      if (! $category = Category::find($category_id)) {
        return view('web.errors.notfound');
      }

      $products = Product::where('category_id', $category_id)->paginate();
      foreach ($products as $product) {
        $product->image = asset('public/uploads/thumbs/' . $product->image);
        $product->en_name = clean_limit($product->en_name, 20);
        $product->ar_name = clean_limit($product->ar_name, 20);
        $product->en_details = clean_limit($product->en_details, 200);
        $product->ar_details = clean_limit($product->ar_details, 200);
      }

      return view('web.products.category', compact('products', 'category'));
    }
}
