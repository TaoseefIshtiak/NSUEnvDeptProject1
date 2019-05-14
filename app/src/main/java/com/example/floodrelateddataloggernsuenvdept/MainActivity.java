package com.example.floodrelateddataloggernsuenvdept;

import android.app.ProgressDialog;
import android.content.pm.PackageInfo;
import android.content.pm.PackageManager;
import android.content.pm.Signature;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Base64;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.AsyncHttpResponseHandler;
import com.loopj.android.http.RequestParams;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import cz.msebera.android.httpclient.Header;

public class MainActivity extends AppCompatActivity {

    EditText mashik_bey, mashik_ay, krishijomi_promian, krishijomi_promian_unit, boshot_bhitar_dhoron, gobadi_poshu_songkha_hash, gobadi_poshu_songkha_murgi, gobadi_poshu_songkha_goru, gobadi_poshu_songkha_chagol, pukure_mach_chash_kore_kina, mach_theke_bochore_koto_ay_kore,
    boshot_bari_khoy_khoti_yesorno, boshot_bari_khoy_khotir_dhoron, boshot_bari_khoy_khotir_poriman, krishi_jomir_khoti_hoyeche_kina, krishi_jomir_ki_dhoroner_khoti, krishi_jomir_ki_poriman_khoti_takay, fosholer_khoti, fosholer_khotir_poriman_takay, pukure_macher_khoti, pukure_macher_khotir_poriman_takay,
            onnanno_khotir_dhoron, onnanno_khotir_poriman_takay, arthik_koto_taka, shohayotar_dhoron, kar_kach_theke_asha_koren, onnanno_ki_dhoroner_shoyayota;
    private RadioGroup radioKrishiJomiAcheKina, radioKrishiJomiPoriman, radioBoshotVitarDhoron, radioPukureMachChashKoreKina;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mashik_bey = findViewById(R.id.input1);
        radioKrishiJomiAcheKina = (RadioGroup) findViewById(R.id.radioKrishiJomiAcheKina);
        //printKeyHash();

    }


    public void toastMsg(String msg) {

        Toast toast = Toast.makeText(this, msg, Toast.LENGTH_LONG);
        toast.show();

    }

    public void httpCallFunction(View v) {

        // get selected radio button from radioGroup
        int selectedIdRG1 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();

        // find the radiobutton by returned id
        RadioButton krishijomi_ache_kina = (RadioButton) findViewById(selectedIdRG1);

        Toast.makeText(this,
                krishijomi_ache_kina.getText(), Toast.LENGTH_SHORT).show();

        final ProgressDialog bar = new ProgressDialog(this);
        bar.setMessage("Sending Data");

        AsyncHttpClient client = new AsyncHttpClient();
        RequestParams req = new RequestParams();
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("krishijomi_ache_kina", krishijomi_ache_kina.getText().toString());
        client.post("http://192.168.0.103/envdeptDataLogger/public/api/articles", req, new AsyncHttpResponseHandler() {

            @Override
            public void onStart() {

                bar.show();
            }

            @Override
            public void onSuccess(int statusCode, Header[] headers, byte[] response) {
                bar.dismiss();
                toastMsg("data sent");
            }

            @Override
            public void onFailure(int statusCode, Header[] headers, byte[] errorResponse, Throwable e) {
                bar.dismiss();
                toastMsg("failed to sent");
            }

        });

    }

    //Call this printKeyHash() method in your onCreateMethod() and check the logcat for your hash key.

}
