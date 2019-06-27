<?php

use Illuminate\Http\Request;

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

Route::get('v1/noticias/', 'NoticiasController@noticias')->middleware('cors');
Route::get('v1/noticia/{slug}', 'NoticiasController@noticia')->middleware('cors');

Route::get('v1/fotos/', 'FotosController@fotos')->middleware('cors');
Route::get('v1/foto/{slug}', 'FotosController@foto')->middleware('cors');

Route::get('v1/videos/', 'VideosController@videos')->middleware('cors');
Route::get('v1/video/{slug}', 'VideosController@video')->middleware('cors');