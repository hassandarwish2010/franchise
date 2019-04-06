<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
use App\About;
use App\Category;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $lang = request()->segment(1);
        view()->share('lang', $lang);

        $setting = Setting::first() ?: null;
        if (! $setting) {
          $setting_lat = '30.1';
          $setting_lon = '29.1';
        } else {
          $setting_lat = $setting->lat;
          $setting_lon = $setting->lon;
        }
        view()->share('setting', $setting);
        view()->share('setting_lat', $setting_lat);
        view()->share('setting_lon', $setting_lon);

        $about_pages = About::all() ?: null;
        view()->share('about_pages', $about_pages);

        $random_categories = Category::join('products', 'products.category_id', '=', 'categories.id')->select('categories.*')->distinct('categories.id')->limit(5)->get();
        foreach ($random_categories as $category) {
          $category->products = Product::where('category_id', $category->id)->limit(5)->get();
        }
        view()->share('random_categories', $random_categories);

        $factory_page = About::where('permalink', 'factory')->first() ?: null;
        view()->share('factory_page', $factory_page);

        $about_us_page = About::where('permalink', 'about-us')->first() ?: null;
        if ($about_us_page) {
          $about_us_page->en_details = clean_limit($about_us_page->en_details, 50);
          $about_us_page->ar_details = clean_limit($about_us_page->ar_details, 50);
        }
        view()->share('about_us_page', $about_us_page);

        $latest_3_products = Product::orderBy('id', 'desc')->limit(3)->get();
        foreach ($latest_3_products as $product) {
          $product->image = asset('public/uploads/thumbs/' . $product->image);
        }
        view()->share('latest_3_products', $latest_3_products);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
