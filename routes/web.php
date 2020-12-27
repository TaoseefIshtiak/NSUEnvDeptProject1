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
Route::get('/showKrishiJomi', 'ArticleController@showKrishiJomi');
Route::get('/showBoroChashi', 'ArticleController@showBoroChashi');
Route::get('/showBorgaChashi', 'ArticleController@showBorgaChashi');
Route::get('/showChotoChashi', 'ArticleController@showChotoChashi');
Route::get('/showMap', 'ArticleController@showMap');
Route::get('/showFloodVuln', 'ArticleController@showFloodVuln');
Route::get('/showAgriVuln', 'ArticleController@showAgriVuln');
Route::get('/showUsageSummary', 'ArticleController@showUsageSummary');
Route::get('/sanitationSystem', 'ArticleController@sanitationSystem');
Route::get('/showSanitationData', 'ArticleController@showSanitationData');


