<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['username', 'gps_long', 'gps_lat', 'shomoykal', 'mot_jomir_poriman', 'chashkrito_jomir_poriman', 'potito_jomir_poriman',
        'chashir_dhoron', 'moushume_kotobar_bij_kroy', 'ekadhikbar_kroy_korbar_karon', 'bijer_poriman', 'uria_sharer_poriman',
        'tsp_sharer_poriman', 'mp_sharer_poriman', 'dap_sharer_poriman', 'kitnashoker_poriman',
        'shech_shubidha_paykina', 'sech_babod_khoroch', 'nijosho_jontropati_ache_kina', 'chashabad_babod_khoroch', 'dhaner_chara_lagano_babod_khoroch', 'dhaner_marai_lagano_babod_khoroch',
        'mot_utpadito_dhaner_poriman', 'mot_dhan_bikri_babod_taka', 'utpadito_khorer_dam', 'net_munafa', 'b_c_r'];
}
