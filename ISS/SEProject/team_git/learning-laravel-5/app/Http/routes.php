<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
//    return view('welcome');
    return view('template.index');
});

Route::get('about', function () {
//    return view('welcome');
    return view('template.about');
});

Route::get('look', function () {
//    return view('welcome');
    return view('template.lookBook');
});

Route::get('features', function () {
//    return view('welcome');
    return view('template.features');
});

Route::get('pricing', function () {
//    return view('welcome');
    return view('template.pricing');
});

Route::get('love', function () {
//    return view('welcome');
    return view('template.loveStories');
});

Route::get('signup', function () {
//    return view('welcome');
    return view('pages.register');
});



Route::get('home2', function () {
//    return view('welcome');
    return view('home');
});

Route::get('mainpage','HomeController@index');

Route::get('login','LoginController@login');

Route::get('twitterREST','TwitterController@twitterRest');

//get('twitterRESTApi','TwitterController@twitterRESTApi');
//Route::get('twitterRESTApi','TwitterController@twitterRESTApi');


Route::group(['middleware' => 'auth'], function()
{
    Route::get('twitterRESTApi','TwitterController@twitterRESTApi');
    //Route::post('edit-data', 'DataController@editData');
});