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
<<<<<<< HEAD
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
=======
    $artcile = new Article();
    $artcile->nam = $request->nam;
    $artcile->mashik_bey = $request->mashik_bey;
    $artcile->mashik_ay = $request->mashik_ay ;
    $artcile->krishijomi_ache_kina = $request->krishijomi_ache_kina;
    $artcile->krishijomi_promian = $request->krishijomi_promian;
    $artcile->krishijomi_promian_unit = $request->krishijomi_promian_unit;
    $artcile->boshot_bhitar_dhoron = $request->boshot_bhitar_dhoron;
    $artcile->gobadi_poshu_songkha_hash = $request->gobadi_poshu_songkha_hash;
    $artcile->gobadi_poshu_songkha_murgi = $request->gobadi_poshu_songkha_murgi;
    $artcile->gobadi_poshu_songkha_goru = $request->gobadi_poshu_songkha_goru;
    $artcile->gobadi_poshu_songkha_chagol = $request->gobadi_poshu_songkha_chagol;
    $artcile->pukure_mach_chash_kore_kina = $request->pukure_mach_chash_kore_kina;
    $artcile->mach_theke_bochore_koto_ay_kore = $request->mach_theke_bochore_koto_ay_kore;
    $artcile->boshot_bari_khoy_khoti_yesorno = $request->boshot_bari_khoy_khoti_yesorno;
    $artcile->boshot_bari_khoy_khotir_dhoron = $request->boshot_bari_khoy_khotir_dhoron;
    $artcile->boshot_bari_khoy_khotir_poriman = $request->boshot_bari_khoy_khotir_poriman;
    $artcile->krishi_jomir_khoti_hoyeche_kina = $request->krishi_jomir_khoti_hoyeche_kina;
    $artcile->krishi_jomir_ki_dhoroner_khoti = $request->krishi_jomir_ki_dhoroner_khoti;
    $artcile->krishi_jomir_ki_poriman_khoti_takay = $request->krishi_jomir_ki_poriman_khoti_takay;
    $artcile->fosholer_khoti = $request->fosholer_khoti;
    $artcile->fosholer_khotir_poriman_takay = $request->fosholer_khotir_poriman_takay;
    $artcile->pukure_macher_khoti = $request->pukure_macher_khoti;
    $artcile->pukure_macher_khotir_poriman_takay = $request->pukure_macher_khotir_poriman_takay;
    $artcile->onnanno_khotir_dhoron = $request->onnanno_khotir_dhoron;
    $artcile->onnanno_khotir_poriman_takay = $request->onnanno_khotir_poriman_takay;
    $artcile->arthik_koto_taka = $request->arthik_koto_taka;
    $artcile->shohayotar_dhoron = $request->shohayotar_dhoron;
    $artcile->kar_kach_theke_asha_koren = $request->kar_kach_theke_asha_koren;
    $artcile->onnanno_ki_dhoroner_shoyayota = $request->onnanno_ki_dhoroner_shoyayota;
    $artcile->bijer_poriman = $request->bijer_poriman;
    $artcile->mp_poriman = $request->mp_poriman;
    $artcile->tsp_poriman = $request->tsp_poriman;
    $artcile->uria_poriman = $request->uria_poriman;
    $artcile->dap_poriman = $request->dap_poriman;
    $artcile->kitnashok_poriman = $request->kitnashok_poriman;
    $artcile->save();
>>>>>>> 1ad8f054de9845fac69601abdfa4c279e9d7a9ff
    return "success";
});
