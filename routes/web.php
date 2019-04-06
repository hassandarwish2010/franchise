<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User routes
//Main landing page
Route::get('/', 'Web\Landing\HomeController@landing')->name('landing');

// set cookie language
Route::get('/set-language/{lang}', 'Web\Landing\HomeController@setLanguage')->name('set.language')->where('lang', 'ar|en');

// Routes with lang prefix
Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(en|ar)'],
    'middleware' => 'lang'
], function() {
    // Landing page in lang

    // Contact page
    Route::get('/contact', 'Web\Contacts\ContactsController@index')->name('contact');
});


//Admin routes
Route::prefix('admin-panel')->group(function () {
  //Auth routes
  Route::get('/', 'Auth\LoginController@showLoginForm')->name('home.login');
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');


  Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');

    //Admins
    Route::resource('/admins', 'Admin\AdminsController', ['except' => ['show']]);

    //Categories
    Route::resource('/categories', 'Admin\CategoriesController', ['except' => ['show']]);
      //countries
      Route::resource('/countries', 'Admin\CountryController', ['except' => ['show']]);

      //markets
      Route::resource('/markets', 'Admin\MarketController', ['except' => ['show']]);

    //Settings
    Route::get('/setting', 'Admin\SettingController@index')->name('setting.index');
    Route::put('/setting', 'Admin\SettingController@update')->name('setting.update');
//conferances

      Route::resource('/conferances', 'Admin\ConferanceController', ['except' => ['show']]);
//courses
      Route::resource('/courses', 'Admin\CourseController', ['except' => ['show']]);
//services
      Route::resource('/services', 'Admin\ServiceController', ['except' => ['show']]);
      //types
      Route::resource('/types', 'Admin\TypeController', ['except' => ['show']]);
//periods
      Route::resource('/periods', 'Admin\PeriodController', ['except' => ['show']]);
      //pages
      Route::get('page/{type}', 'Admin\PageController@index');

      Route::get('page/{id}/{type}', 'Admin\PageController@edit')->name('pages.edit');
      Route::Put('page/{id}', 'Admin\PageController@update')->name('pages.update');

      //Mails
    Route::resource('{status}/mails', 'Admin\MailsController', ['except' => ['create', 'edit', 'update', 'store']]);
    Route::post('/mails/{mail_id}/reply', 'Admin\MailsController@reply')->name('mails.reply');



    // Profile page
    Route::get('/profile', 'Admin\ProfileController@get')->name('admin.get.profile');
    Route::post('/profile', 'Admin\ProfileController@save')->name('admin.profile.save');
    //////////////////////////////////
      /// images
      Route::get('images/{id}/{type}/', 'Admin\ImageController@index')->name('image');
      Route::get('images/create/{id}/{type}', 'Admin\ImageController@create')->name('image_create');
      Route::post('images/store/{id}/{type}', 'Admin\ImageController@store')->name('image_store');
      Route::get('images/edit/{id}/{type}', 'Admin\ImageController@edit')->name('image_edit');
      Route::put('images/update/{id}/{type}', 'Admin\ImageController@update')->name('image_update');
      Route::DELETE('images/destroy/{id}/{type}', 'Admin\ImageController@destroy')->name('image_destroy');

  });
});
