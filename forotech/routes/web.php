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

Route::get('/', 'HomeController@index')->name("home.index");

Route::get('/home', 'HomeController@home')->name("home.home");

Route::get('/comment/show', 'CommentController@show')->name("comment.show");

Route::get('/comment/create', 'CommentController@create')->name("comment.create");

Route::post('/comment/save', 'CommentController@save')->name("comment.save");

Route::post('/comment/delete', 'CommentController@delete')->name("comment.delete");

Route::get('/post/show/{id}', 'PostController@show')->name("post.show");

Route::get('/post/show', 'PostController@list')->name("post.list");

Route::get('/post/create', 'PostController@create')->name("post.create");

Route::post('/post/save', 'PostController@save')->name("post.save");

Route::post('/post/delete', 'PostController@delete')->name("post.delete");

Route::get('/product/show/{id}', 'ProductController@show')->name("product.show");

Route::get('/product/show', 'ProductController@list')->name("product.list");

Route::get('/product/create', 'ProductController@create')->name("product.create");

Route::post('/product/save', 'ProductController@save')->name("product.save");

Route::post('/product/delete', 'ProductController@deleteProduct')->name("product.delete");

Auth::routes();