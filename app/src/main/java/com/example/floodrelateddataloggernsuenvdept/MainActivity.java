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

    EditText mashik_bey, mashik_ay, krishijomi_promian, gobadi_poshu_songkha_hash, gobadi_poshu_songkha_murgi, gobadi_poshu_songkha_goru, gobadi_poshu_songkha_chagol, mach_theke_bochore_koto_ay_kore,
    boshot_bari_khoy_khotir_poriman, krishi_jomir_ki_poriman_khoti_takay, fosholer_khotir_poriman_takay, pukure_macher_khotir_poriman_takay,
            onnanno_khotir_dhoron, onnanno_khotir_poriman_takay, arthik_koto_taka;
    private RadioGroup radioKrishiJomiAcheKina, radioKrishiJomiPoriman, radioBoshotVitarDhoron, radioPukureMachChashKoreKina,
            radioBoshotBarirKhoti, radioKrishiJomiKhoti, radioFoshol, radioPukurerMach, radioEMuhurteShahajjo, radioSohayotarDhoron,
            radioOnudanAsha, radioOnnannohole;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mashik_bey = findViewById(R.id.input1);
        mashik_ay = findViewById(R.id.input2);
        krishijomi_promian = findViewById(R.id.input3);
        gobadi_poshu_songkha_hash = findViewById(R.id.input4);
        gobadi_poshu_songkha_murgi = findViewById(R.id.input5);
        gobadi_poshu_songkha_goru = findViewById(R.id.input6);
        gobadi_poshu_songkha_chagol = findViewById(R.id.input7);
        mach_theke_bochore_koto_ay_kore = findViewById(R.id.input8);
        boshot_bari_khoy_khotir_poriman = findViewById(R.id.input9);
        krishi_jomir_ki_poriman_khoti_takay = findViewById(R.id.input10);
        fosholer_khotir_poriman_takay = findViewById(R.id.input11);
        pukure_macher_khotir_poriman_takay = findViewById(R.id.input12);
        onnanno_khotir_dhoron = findViewById(R.id.input13);
        onnanno_khotir_poriman_takay = findViewById(R.id.input14);
        arthik_koto_taka = findViewById(R.id.input15);

        //radio button inputs
        radioKrishiJomiAcheKina = (RadioGroup) findViewById(R.id.radioKrishiJomiAcheKina);
        radioKrishiJomiPoriman = (RadioGroup) findViewById(R.id.radioKrishiJomiPoriman);//unit
        radioBoshotVitarDhoron = (RadioGroup) findViewById(R.id.radioBoshotVitarDhoron);
        radioPukureMachChashKoreKina = (RadioGroup) findViewById(R.id.radioPukureMachChashKoreKina);
        radioBoshotBarirKhoti = (RadioGroup) findViewById(R.id.radioBoshotBarirKhoti);
        radioKrishiJomiKhoti = (RadioGroup) findViewById(R.id.radioKrishiJomiKhoti);
        radioFoshol = (RadioGroup) findViewById(R.id.radioFoshol);
        radioPukurerMach = (RadioGroup) findViewById(R.id.radioPukurerMach);
        radioEMuhurteShahajjo = (RadioGroup) findViewById(R.id.radioEMuhurteShahajjo);
        radioSohayotarDhoron = (RadioGroup) findViewById(R.id.radioSohayotarDhoron);
        radioOnudanAsha = (RadioGroup) findViewById(R.id.radioOnudanAsha);
        radioOnnannohole = (RadioGroup) findViewById(R.id.radioOnnannohole);

        //printKeyHash();

    }


    public void toastMsg(String msg) {

        Toast toast = Toast.makeText(this, msg, Toast.LENGTH_LONG);
        toast.show();

    }

    public void httpCallFunction(View v) {

        // get selected radio button from radioGroup
        int selectedIdRG1 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG2 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG3 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG4 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG5 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG6 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG7 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG8 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG9 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG10 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG11 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        int selectedIdRG12 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();

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
