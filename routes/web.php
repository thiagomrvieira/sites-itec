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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// -- NOTÍCIAS --
Route::prefix('noticias')->group(function(){
    Route::get('/', 'NoticiasController@index');
    Route::post('/', 'NoticiasController@store');
    Route::get('/novo', 'NoticiasController@create');
    Route::get('/editar/{id}', 'NoticiasController@edit');
    Route::post('/editar/{id}', 'NoticiasController@update');
    Route::get('/apagar/{id}', 'NoticiasController@destroy');
    //CATEGORIAS
    Route::get('/categorias', 'CategoriasController@index');
    Route::post('/categorias', 'CategoriasController@store');
    Route::get('/categorias/editar/{id}', 'CategoriasController@destroy');
    Route::get('/categorias/apagar/{id}', 'CategoriasController@destroy');
}); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('summernote',array('as'=>'summernote.get','uses'=>'FileController@getSummernote'));
Route::post('summernote',array('as'=>'summernote.post','uses'=>'FileController@postSummernote')); 