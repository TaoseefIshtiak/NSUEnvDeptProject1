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
    return view('compiledAgriculturePanelData');
});

Route::get('/showAgriculturePanelData', 'ArticleController@index');
Route::get('/showKrishiJomi', 'ArticleController@krishiJomi');
Route::get('/showBoroChashi', 'ArticleController@boroChashi');
Route::get('/showBorgaChashi', 'ArticleController@borgaChashi');
Route::get('/showChotoChashi', 'ArticleController@chotoChashi');
Route::get('/showMap', 'ArticleController@showMap');
