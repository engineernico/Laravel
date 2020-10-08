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

Route::get('/', 'BlogController@home')->name('home');


Route::group(['prefix'=> 'courses'],function (){

    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('blogpost','BlogController@blog_post')->name('blog-post');
    Route::get('contact','BlogController@contact')->name('contact');

});
