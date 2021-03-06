<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
Route::get('/payments/create', 'PaymentController@create')->middleware('auth');
Route::post('/payments', 'PaymentController@store')->middleware('auth');
Route::get('/notifications', 'UserNotificationController@show');

Route::get('about', function (){
    return view('about', ['articles' => App\Article::latest()->get()]);
});

Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::post('articles', 'ArticleController@store');
Route::get('articles/create', 'ArticleController@create');
Route::get('articles/{article}', 'ArticleController@show')->name('article.show');
Route::get('articles/{article}/edit', 'ArticleController@edit');
Route::put('articles/{article}', 'ArticleController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
