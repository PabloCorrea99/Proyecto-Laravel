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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'HomeController@index')->name("home.index");

Route::get('/comment/show', 'CommentController@show')->name("comment.show");

Route::get('/comment/create', 'CommentController@create')->name("comment.create");

Route::post('/comment/save', 'CommentController@save')->name("comment.save");

Route::post('/comment/delete', 'CommentController@delete')->name("comment.delete");