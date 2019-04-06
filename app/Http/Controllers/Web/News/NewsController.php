<?php

namespace App\Http\Controllers\Web\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
  /**
   * Show Newspage
   *
   * @return response
   */
  public function index($lang) {
    $news = News::paginate();
    foreach ($news as $new) {
      $new->full_image = asset('public/uploads/' . $new->image);
      $new->image = asset('public/uploads/thumbs/' . $new->image);
      $new->en_title = clean_limit($new->en_title, 30);
      $new->ar_title = clean_limit($new->ar_title, 30);
      $new->en_details = clean_limit($new->en_details, 100);
      $new->ar_details = clean_limit($new->ar_details, 100);
    }

    return view('web.news.news', compact('news'));
  }

  /**
   * Show news page by the given permalink
   *
   * @return response
   */
   public function new($lang, $permalink) {
     $news = News::where('permalink', $permalink)->first();

     if ($news) {
       $news->full_image = asset('public/uploads/' . $news->image);
       $news->image = asset('public/uploads/thumbs/' . $news->image);
       $news->month = Carbon::parse($news->created_at)->format('M');
       $news->day = Carbon::parse($news->created_at)->day;

       $other_news = News::where('id', '!=', $news->id)->inRandomOrder()->limit(10)->get();
       foreach ($other_news as $n) {
         $n->image = asset('public/uploads/thumbs/' . $n->image);
         $n->en_title = clean_limit($n->en_title, 10);
         $n->en_title = clean_limit($n->en_title, 10);
         $n->en_details = clean_limit($n->en_details, 30);
         $n->ar_details = clean_limit($n->ar_details, 30);
       }
     }

     return $news ? view('web.news.new', compact('news', 'other_news')) : view('web.errors.notfound');
   }
}
