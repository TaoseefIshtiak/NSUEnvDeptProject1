<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('mashik_bey');
            $table->text('mashik_ay');
            $table->text('krishijomi_ache_kina');
            $table->text('krishijomi_promian');
            $table->text('krishijomi_promian_unit');
            $table->text('gobadi_poshu_songkha_hash');
            $table->text('gobadi_poshu_songkha_murgi');
            $table->text('gobadi_poshu_songkha_goru');
            $table->text('gobadi_poshu_songkha_chagol');
            $table->text('pukure_mach_chash_kore_kina');
            $table->text('mach_theke_bochore_koto_ay_kore');
            $table->text('boshot_bari_khoy_khoti_yesorno');
            $table->text('boshot_bari_khoy_khotir_dhoron');
            $table->text('boshot_bari_khoy_khotir_poriman');
            $table->text('krishi_jomir_khoti_hoyeche_kina');
            $table->text('krishi_jomir_ki_dhoroner_khoti');
            $table->text('krishi_jomir_ki_poriman_khoti_takay');
            $table->text('fosholer_khoti');
            $table->text('fosholer_khotir_poriman_takay');
            $table->text('pukure_macher_khoti');
            $table->text('pukure_macher_khotir_poriman_takay');
            $table->text('onnanno_khotir_dhoron');
            $table->text('onnanno_khotir_poriman_takay');
            $table->text('prottashito_shohayota');
            $table->text('arthik_koto_taka');
            $table->text('shohayotar_dhoron');
            $table->text('kar_kach_theke_asha_koren');
            $table->text('onnanno_ki_dhoroner_shoyayota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
