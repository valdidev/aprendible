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

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

$posts = [
    ['title' => 'First post'],
    ['title' => 'Second post'],
    ['title' => 'Third post'],
    ['title' => 'Fourth post']
];

/* Route::get('/', function () {
    return view('welcome');
}); */

// no logic here then we can use:
// both are the same thing
// to get and head requests
Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

// Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');
// Route::get('/blog', PostController::class)->name('blog');
Route::get('/blog', [PostController::class, 'index'])->name('blog');

/* Route::post();
Route::patch();
Route::put();
Route::delete();

Route::options(); */

// to response several methods in one route, example
// Route::match(['put','patch'], '/', function () {});

// to response any methods in one route, example
// Route::any('/', function(){});
