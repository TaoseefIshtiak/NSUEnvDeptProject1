package com.example.floodrelateddataloggernsuenvdept;

import android.app.ProgressDialog;
import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.Toolbar;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.AsyncHttpResponseHandler;
import com.loopj.android.http.RequestParams;

import cz.msebera.android.httpclient.Header;

public class MainActivity extends AppCompatActivity {

    EditText mashik_bey, mashik_ay, krishijomi_promian, gobadi_poshu_songkha_hash, gobadi_poshu_songkha_murgi, gobadi_poshu_songkha_goru, gobadi_poshu_songkha_chagol, mach_theke_bochore_koto_ay_kore,
    boshot_bari_khoy_khotir_poriman, krishi_jomir_ki_poriman_khoti_takay, fosholer_khotir_poriman_takay, pukure_macher_khotir_poriman_takay,
            onnanno_khotir_dhoron, onnanno_khotir_poriman_takay, arthik_koto_taka;
    private RadioGroup radioKrishiJomiAcheKina, radioKrishiJomiPoriman, radioBoshotVitarDhoron, radioPukureMachChashKoreKina,
            radioBoshotBarirKhoti, radioKrishiJomiKhoti, radioFoshol, radioPukurerMach, radioEMuhurteShahajjo, radioSohayotarDhoron,
            radioOnudanAsha, radioOnnannohole;

    private Spinner spinnerKrishiJomiPoriman ;

    public String[] jomirUnit = new String[]{"শতক", "বিঘা", "কাঠা", "পাথি"};

    Button logoutButton;
    FirebaseAuth mAuth;

    String phone_number, user_name = "";

    TextView profilePhone, profileName;

    //values
    String total_income, total_expence, total_balance, over_spending;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Toolbar myToolbar = findViewById(R.id.my_toolbar);
        setSupportActionBar(myToolbar);
        setContentView(R.layout.activity_main);

        mAuth = FirebaseAuth.getInstance();
        phone_number = mAuth.getCurrentUser().getPhoneNumber();
        checkForPhoneNumber(phone_number);

        profileName =findViewById(R.id.profileName);
        DatabaseReference profileRef = FirebaseDatabase.getInstance().getReference().child("userInfo").child(phone_number).child("name");
        profileRef.addListenerForSingleValueEvent(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                user_name = dataSnapshot.getValue(String.class);
                profileName.setText(user_name);
                profileName.setVisibility(View.VISIBLE);
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });

        profilePhone = findViewById(R.id.profilePhone);
        profilePhone.setText(phone_number);

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
        //radioKrishiJomiPoriman = (RadioGroup) findViewById(R.id.radioKrishiJomiPoriman);//unit
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

        //Spinner inputs
        spinnerKrishiJomiPoriman = (Spinner) findViewById(R.id.spinnerKrishiJomiPoriman);
        ArrayAdapter<String> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_dropdown_item, jomirUnit);
        spinnerKrishiJomiPoriman.setAdapter(adapter);

        //printKeyHash();

        logoutButton = findViewById(R.id.logoutButton);
        logoutButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                onStop();
                mAuth.signOut();

                Intent goToNextActivity = new Intent(MainActivity.this, LoginActivity.class);
                startActivity(goToNextActivity);
                finish();
            }
        });
    }

    public void getTotalIncome(EditText a, EditText b){
        int result = Integer.parseInt(String.valueOf(a)) *12 + Integer.parseInt(String.valueOf(a));
        total_income = String.valueOf(result);
    }

    public void getTotalExpences(EditText a, EditText b, EditText c, EditText d){
        int result = Integer.parseInt(String.valueOf(a)) + Integer.parseInt(String.valueOf(b)) + Integer.parseInt(String.valueOf(c)) + Integer.parseInt(String.valueOf(d));
        total_expence = String.valueOf(result);
    }

    public void getTotalBalance(String a, String b){
         int x, y;
         x = Integer.parseInt(a);
         y = Integer.parseInt(b);

         if(x>y){
             total_balance = String.valueOf(x-y);
             over_spending = "0";
         }
         else{
             total_balance = "0";
             over_spending = String.valueOf(y-x);
         }
    }

    public void checkForPhoneNumber(String number){
        DatabaseReference ref = FirebaseDatabase.getInstance().getReference();

        ref.orderByChild(number).equalTo("new").addListenerForSingleValueEvent(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                if(dataSnapshot.exists()){
                    Intent goToNextActivity = new Intent(MainActivity.this, newUserFormActivity.class);
                    startActivity(goToNextActivity);
                    finish();
                }
            }

            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });
    }

    private void setSupportActionBar(Toolbar myToolbar) {
    }


    public void toastMsg(String msg) {

        Toast toast = Toast.makeText(this, msg, Toast.LENGTH_LONG);
        toast.show();

    }

    public void httpCallFunction(View v) {

        // use this functions to calculate value

        //getTotalIncome(mashik_ay, mach_theke_bochore_koto_ay_kore);
        //getTotalExpences(krishi_jomir_ki_poriman_khoti_takay, fosholer_khotir_poriman_takay,pukure_macher_khotir_poriman_takay,onnanno_khotir_poriman_takay);
        //getTotalBalance(total_income, total_expence);


        // get selected radio button from radioGroup
        int selectedIdRG1 = radioKrishiJomiAcheKina.getCheckedRadioButtonId();
        //int selectedIdRG2 = radioKrishiJomiPoriman.getCheckedRadioButtonId();
        int selectedIdRG3 = radioBoshotVitarDhoron.getCheckedRadioButtonId();
        int selectedIdRG4 = radioPukureMachChashKoreKina.getCheckedRadioButtonId();
        int selectedIdRG5 = radioBoshotBarirKhoti.getCheckedRadioButtonId();
        int selectedIdRG6 = radioKrishiJomiKhoti.getCheckedRadioButtonId();
        int selectedIdRG7 = radioFoshol.getCheckedRadioButtonId();
        int selectedIdRG8 = radioPukurerMach.getCheckedRadioButtonId();
        int selectedIdRG9 = radioEMuhurteShahajjo.getCheckedRadioButtonId();
        int selectedIdRG10 = radioSohayotarDhoron.getCheckedRadioButtonId();
        int selectedIdRG11 = radioOnudanAsha.getCheckedRadioButtonId();
        int selectedIdRG12 = radioOnnannohole.getCheckedRadioButtonId();

        // find the radiobutton by returned id
        RadioButton krishijomi_ache_kina = (RadioButton) findViewById(selectedIdRG1);
        //RadioButton Krishi_Jomi_Poriman = (RadioButton) findViewById(selectedIdRG2);
        RadioButton Boshot_Vitar_Dhoron = (RadioButton) findViewById(selectedIdRG3);
        RadioButton Pukure_Mach_Chash_Kore_Kina = (RadioButton) findViewById(selectedIdRG4);
        RadioButton Boshot_Barir_Khoti = (RadioButton) findViewById(selectedIdRG5);
        RadioButton Krishi_Jomi_Khoti = (RadioButton) findViewById(selectedIdRG6);
        RadioButton Foshol_ = (RadioButton) findViewById(selectedIdRG7);
        RadioButton Pukurer_Mach = (RadioButton) findViewById(selectedIdRG8);
        RadioButton EMuhurte_Shahajjo = (RadioButton) findViewById(selectedIdRG9);
        RadioButton Sohayotar_Dhoron = (RadioButton) findViewById(selectedIdRG10);
        RadioButton Onudan_Asha = (RadioButton) findViewById(selectedIdRG11);
        RadioButton Onnannohole_ = (RadioButton) findViewById(selectedIdRG12);

        Toast.makeText(this,
                krishijomi_ache_kina.getText(), Toast.LENGTH_SHORT).show();

        final ProgressDialog bar = new ProgressDialog(this);
        bar.setMessage("Sending Data");

        AsyncHttpClient client = new AsyncHttpClient();
        RequestParams req = new RequestParams();
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_ay", mashik_ay.getText().toString());

        //req.put("krishijomi_promian", krishijomi_promian.getText().toString());
        req.put("krishijomi_promian", spinnerKrishiJomiPoriman.getSelectedItem().toString());

        req.put("krishijomi_promian", krishijomi_promian.getText().toString());
        req.put("gobadi_poshu_songkha_hash", gobadi_poshu_songkha_hash.getText().toString());
        req.put("gobadi_poshu_songkha_murgi", gobadi_poshu_songkha_murgi.getText().toString());
        req.put("gobadi_poshu_songkha_goru", gobadi_poshu_songkha_goru.getText().toString());
        req.put("gobadi_poshu_songkha_chagol", gobadi_poshu_songkha_chagol.getText().toString());
        req.put("mach_theke_bochore_koto_ay_kore", mach_theke_bochore_koto_ay_kore.getText().toString());
        req.put("boshot_bari_khoy_khotir_poriman", boshot_bari_khoy_khotir_poriman.getText().toString());
        req.put("krishi_jomir_ki_poriman_khoti_takay", krishi_jomir_ki_poriman_khoti_takay.getText().toString());
        req.put("fosholer_khotir_poriman_takay", fosholer_khotir_poriman_takay.getText().toString());
        req.put("pukure_macher_khotir_poriman_takay", pukure_macher_khotir_poriman_takay.getText().toString());
        req.put("onnanno_khotir_dhoron", onnanno_khotir_dhoron.getText().toString());
        req.put("onnanno_khotir_poriman_takay", onnanno_khotir_poriman_takay.getText().toString());
        req.put("arthik_koto_taka", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
        req.put("mashik_bey", mashik_bey.getText().toString());
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
