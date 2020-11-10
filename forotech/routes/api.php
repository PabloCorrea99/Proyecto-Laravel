<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts', 'Api\PostApi@index')->name("api.post.index");
Route::get('/posts/{id}', 'Api\PostApi@show')->name("api.post.show");
Route::get('/v2/posts', 'Api\PostApiV2@index')->name("api.v2.post.index");
Route::get('/v2/posts/{id}', 'Api\PostApiV2@show')->name("api.v2.post.show");
Route::get('/v3/posts', 'Api\PostApiV3@index')->name("api.v3.post.index");
Route::get('/v3/posts/paginate', 'Api\PostApiV3@paginate')->name("api.v3.post.paginate");


