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

Route::get('/archive', 'PageController@archive');
Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');
Route::get('/', 'PageController@login');

//Route::post('/posts/{post}/comments', 'CommentController@store');

Route::resource('/posts','PostController');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
