package com.example.floodrelateddataloggernsuenvdept;

import android.app.ProgressDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.AsyncHttpResponseHandler;
import com.loopj.android.http.RequestParams;

import cz.msebera.android.httpclient.Header;

public class MainActivity extends AppCompatActivity {

    EditText text;
    private RadioGroup body;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        text = findViewById(R.id.input1);
        body = (RadioGroup) findViewById(R.id.radioKrishiJomiAcheKina);

    }


    public void toastMsg(String msg) {

        Toast toast = Toast.makeText(this, msg, Toast.LENGTH_LONG);
        toast.show();

    }

    public void httpCallFunction(View v) {

        // get selected radio button from radioGroup
        int selectedId = body.getCheckedRadioButtonId();

        // find the radiobutton by returned id
        RadioButton radioSexButton = (RadioButton) findViewById(selectedId);

        Toast.makeText(this,
                radioSexButton.getText(), Toast.LENGTH_SHORT).show();

        final ProgressDialog bar = new ProgressDialog(this);
        bar.setMessage("Sending Data");

        AsyncHttpClient client = new AsyncHttpClient();
        RequestParams req = new RequestParams();
        req.put("mashik_bey", text.getText().toString());
        req.put("krishijomi_ache_kina", radioSexButton.getText().toString());
        client.post("http://192.168.0.105/envdeptDataLogger/public/api/articles", req, new AsyncHttpResponseHandler() {

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

            @Override
            public void onRetry(int retryNo) {
                // called when request is retried
            }
        });

    }
}
