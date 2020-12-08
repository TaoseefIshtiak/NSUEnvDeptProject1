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


Use App\Article;

Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});

Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    $article = new Article();
    $article->accelerometer_x = $request->accelerometer_x;
    $article->accelerometer_y = $request->accelerometer_y ;
    $article->accelerometer_z = $request->accelerometer_z;
    $article->gyroscope_x = $request->gyroscope_x;
    $article->gyroscope_y = $request->gyroscope_y;
    $article->gyroscope_z = $request->gyroscope_z;
    $article->magnetometer_x = $request->magnetometer_x;
    $article->magnetometer_y = $request->magnetometer_y;
    $article->magnetometer_z = $request->magnetometer_z;
    $article->ligt_sensor = $request->ligt_sensor;
    $article->gravity_x = $request->gravity_x;
    $article->gravity_y = $request->gravity_y;
    $article->gravity_z = $request->gravity_z;
    $article->label = $request->label;
    $article->save();
    return "success";
});