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
    $artcile = new Article();
    $artcile->mashik_bey = $request->mashik_bey;
    $artcile->mashik_ay = $request->mashik_ay ;
    $artcile->krishijomi_ache_kina = $request->krishijomi_ache_kina;
    $artcile->krishijomi_promian = $request->krishijomi_promian;
    $artcile->krishijomi_promian_unit = $request->krishijomi_promian_unit;
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
    $artcile->save();
    return "success";
});