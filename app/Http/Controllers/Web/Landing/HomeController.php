<?php

namespace App\Http\Controllers\Web\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\About;
use App\Product;
use App\News;
use Carbon\Carbon;

class HomeController extends Controller
{
  /**
   * landing page
   *
   * @return response
   */
  
  public function landing() {
    $lang = cookie_get('lang', 'en');
    return redirect()->route('home', $lang);
  }

  /**
   * Set language
   *
   * @return response
   */
  public function setLanguage($lang) {
    $locales = locales();

    if (array_key_exists($lang, $locales)) {
        cookie_set('lang', $lang);
    }

    $prev_path = url()->previous();

    $current_path = preg_replace('/en|ar/', $lang, $prev_path, 1);

    return redirect(url($current_path));
  }

  /**
   * landing page
   *
   * @return response
   */
  public function index($lang, Request $request) {
    $banners = Banner::limit(3)->inRandomOrder()->get();
    foreach ($banners as $banner) {
      $banner->image = asset('public/uploads/thumbs/' . $banner->image);
    }

    $welcome = About::where('permalink', 'welcome')->first();
    if (isset($welcome)) {
      $welcome->en_details = clean_limit($welcome->en_details, 300);
      $welcome->ar_details = clean_limit($welcome->ar_details, 300);
    }

    $products = Product::limit(6)->inRandomOrder()->get();
    foreach ($products as $product) {
      $product->image = asset('public/uploads/thumbs/' . $product->image);
      $product->en_name = clean_limit($product->en_name, 15);
      $product->en_name = clean_limit($product->en_name, 15);
      $product->en_details = clean_limit($product->en_details, 50);
      $product->ar_details = clean_limit($product->en_details, 50);
    }

    $news = News::limit(6)->inRandomOrder()->get();
    foreach ($news as $new) {
      $new->image = asset('public/uploads/thumbs/' . $new->image);
      $new->en_title = clean_limit($new->en_title, 25);
      $new->ar_title = clean_limit($new->ar_title, 35);
      $new->en_details = clean_limit($new->en_details, 50);
      $new->ar_details = clean_limit($new->ar_details, 50);
      $new->month = Carbon::parse($new->created_at)->format('M');
      $new->day = Carbon::parse($new->created_at)->day;
    }

    return view('web.landing.index', compact('banners', 'welcome', 'products', 'news'));
  }
}
