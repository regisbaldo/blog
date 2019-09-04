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


Auth::routes();

/**************************************
 * 
 * 
 * Rotas do Site
 * 
 ***************************************/


Route::get('curso', function () {
    return view('curso');
});

Route::get('/', 'IndexController@index');

/**************************************
 * 
 * 
 * Rotas do Painel
 * 
 *************************************/
Route::group(['prefix'=>'painel'], function(){

    Route::get('/', 'PainelController@index');
    Route::get('/posts', 'PostsController@index')->middleware('auth');
    Route::get('/posts/create', 'PostsController@create')->middleware('auth');
    Route::post('/posts/store', 'PostsController@store')->middleware('auth');
    Route::get('/posts/edit/{id}', 'PostsController@edit')->middleware('auth');
    Route::post('/posts/update/{id}', 'PostsController@update')->middleware('auth');

});