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

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

// no logic here then we can use:
// both are the same thing
// to get and head requests
Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');

/* Route::post();
Route::patch();
Route::put();
Route::delete();

Route::options(); */

// to response several methods in one route, example
// Route::match(['put','patch'], '/', function () {});

// to response any methods in one route, example
// Route::any('/', function(){});
