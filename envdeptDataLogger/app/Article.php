<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['mashik_bey', 'mashik_ay', 'krishijomi_ache_kina', 'krishijomi_promian', 'krishijomi_promian_unit', 'gobadi_poshu_songkha_hash', 'gobadi_poshu_songkha_murgi',
        'gobadi_poshu_songkha_goru', 'gobadi_poshu_songkha_chagol', 'pukure_mach_chash_kore_kina', 'mach_theke_bochore_koto_ay_kore', 'boshot_bari_khoy_khoti_yesorno',
        'boshot_bari_khoy_khotir_dhoron', 'boshot_bari_khoy_khotir_poriman', 'krishi_jomir_khoti_hoyeche_kina', 'krishi_jomir_ki_dhoroner_khoti',
        'krishi_jomir_ki_poriman_khoti_takay', 'fosholer_khoti', 'fosholer_khotir_poriman_takay', 'fosholer_khoti', 'pukure_macher_khoti', 'pukure_macher_khotir_poriman_takay',
        'onnanno_khotir_dhoron', 'onnanno_khotir_poriman_takay', 'prottashito_shohayota', 'arthik_koto_taka', 'shohayotar_dhoron', 'kar_kach_theke_asha_koren', 'onnanno_ki_dhoroner_shoyayota'];
}
