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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
//website routes
Route::get('/', 'WebsiteController@index')->name('home');
//admin panel routes
// Route::get('', 'HomeController@index')->name('');
//register route
Route::get('signup', 'WebsiteController@signup')->name('');
Route::get('dash', 'WebsiteController@dash')->name('dash');
Route::get('forgot_password','WebsiteController@forgot_password')->name('');
Route::get('/signup', 'RegisterController@create');
Route::post('/signup', 'RegisterController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/login', 'loginController@login');
Route::post('/login', 'loginController@postLogin');
