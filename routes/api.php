<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group([
    'namespace' => 'Api'
], function() {
    Route::group(['middleware' => 'auth:api'] , function(){
        //create token for user
        Route::post('register-token', 'AuthController@registerToken');
//remove token for user
        Route::post('remove-token', 'AuthController@removeToken');
        //complete user data
        Route::post('checkcompleteprofile', 'MainController@CheckComplete');
        Route::post('completeprofile', 'MainController@CompleteProfile');

    });

    //docmention
    Route::get('doc', 'MainController@docmention');
    //user
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('verfiy', 'AuthController@Verfiy');

    ///banners
    Route::get('banners/{lang}', 'MainController@Banner');
    //cats
    Route::get('cats', 'MainController@GetCats');
    Route::post('cat', 'MainController@GetCat');
    Route::post('catwithfranchise', 'MainController@GetCatFranchise');

    ////countries
    Route::get('countries', 'MainController@Countries');
    ////countries
    Route::get('markets', 'MainController@Markets');
    Route::get('money', 'MainController@Money');
    ////countries
    Route::get('getfranchisetype', 'FranchiseController@GetFranchiseType');
    ////getperiod
    Route::get('getperiod', 'FranchiseController@GetPeriod');

    //franchise
    Route::get('getallfranchises', 'FranchiseController@GetAllFranchise');
    Route::post('franchise', 'FranchiseController@GetFranchise');
    Route::post('createfranchise', 'FranchiseController@CreateFranchise');
    Route::post('getuserfranchises', 'FranchiseController@GetUserFranchise');
    Route::get('last-franchise', 'FranchiseController@LastFranchise');
    Route::post('deletefranchise', 'FranchiseController@DeleteFranchise');
///search
    Route::post('search', 'FranchiseController@Search');



    ///web views
    Route::get('page/{lang}/{type}', 'MainController@GetPage');
    Route::get('services/{lang}', 'MainController@Services');
    Route::get('courses/{lang}', 'MainController@Courses');
    Route::get('conferances/{lang}', 'MainController@Conferances');

  //emails
     Route::post('suggestions', 'MainController@Suggestion');
    Route::post('send-for-consultant', 'MainController@SendConsultant');
    Route::post('send-for-owner', 'MainController@SendOwner');
});
