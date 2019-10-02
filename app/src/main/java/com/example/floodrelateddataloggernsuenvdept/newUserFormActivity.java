package com.example.floodrelateddataloggernsuenvdept;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Spinner;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class newUserFormActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener {

    String user_education;
    Button buttonSave;
    EditText name, family_member, family_earning_member;

    private RadioGroup radioGroup;
    private RadioButton radioButton;

    // values
    String user_name, user_job, user_family_member, user_family_earning_member , phone_number;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_new_user_form);

        name = findViewById(R.id.name);
        family_earning_member = findViewById(R.id.family_earing_member);
        family_member = findViewById(R.id.family_member);

        radioGroup=(RadioGroup)findViewById(R.id.radioGroup);

        Spinner spinner = findViewById(R.id.spinner1);
        ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(this,
                R.array.education, android.R.layout.simple_spinner_item);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);
        spinner.setOnItemSelectedListener((AdapterView.OnItemSelectedListener) this);

        buttonSave = findViewById(R.id.buttonSave);
        buttonSave.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                user_name = name.getText().toString();
                user_family_member = family_member.getText().toString();
                user_family_earning_member = family_earning_member.getText().toString();

                int selectedId=radioGroup.getCheckedRadioButtonId();
                radioButton=(RadioButton)findViewById(selectedId);
                user_job = radioButton.getText().toString();

                if(user_name.matches("") || user_family_member.matches("") || user_family_earning_member.matches("")){
                    Toast.makeText(getApplicationContext(), "Please Enter All the Info!", Toast.LENGTH_SHORT).show();
                }else{
                    phone_number = FirebaseAuth.getInstance().getCurrentUser().getPhoneNumber();
                    FirebaseDatabase database = FirebaseDatabase.getInstance();
                    DatabaseReference myRef = database.getReference("users").child(phone_number);
                    myRef.setValue("old");

                    DatabaseReference infoRef1 = database.getReference("userInfo").child(phone_number).child("name");
                    infoRef1.setValue(user_name);
                    DatabaseReference infoRef2 = database.getReference("userInfo").child(phone_number).child("job");
                    infoRef2.setValue(user_job);
                    DatabaseReference infoRef3 = database.getReference("userInfo").child(phone_number).child("family_members");
                    infoRef3.setValue(user_family_member);
                    DatabaseReference infoRef4 = database.getReference("userInfo").child(phone_number).child("family_earning_members");
                    infoRef4.setValue(user_family_earning_member);

                    Toast.makeText(getApplicationContext(), "Saved!", Toast.LENGTH_SHORT).show();
                    gotoMainActivity();
                }
            }
        });


    }

    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
        user_education = parent.getItemAtPosition(position).toString();
    }

    @Override
    public void onNothingSelected(AdapterView<?> parent) {

    }

    public void gotoMainActivity(){
        Intent goToNextActivity = new Intent(getApplicationContext(), MainActivity.class);
        startActivity(goToNextActivity);
        finish();
    }
}
