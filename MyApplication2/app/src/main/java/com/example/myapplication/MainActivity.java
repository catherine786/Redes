package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
private Button btn1, btn2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(v -> {
            Intent primers = new Intent(getApplicationContext(), Calculadora.class);
            startActivity(primers);
        });
        btn2 = (Button) findViewById(R.id.button2);
        btn2.setOnClickListener(v -> {
            Intent primers = new Intent(getApplicationContext(), Sensor.class);
            startActivity(primers);
        });
    }
}