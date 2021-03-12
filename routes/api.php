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
//categoria
Route:: apiResource ( 'categoría' , '\ App \ Http \ Controllers \ CategoriaController' );
//post
Route::apiResource('postresource','\App\Http\Controllers\PostController');

Route::get('postCategory/{id}','\App\Http\Controllers\PostController@categoryPost');
Route::get('postCategory','\App\Http\Controllers\PostController@categoryPosthome'); 