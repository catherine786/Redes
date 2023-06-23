package com.example.myapplication;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.util.Arrays;
import java.util.List;

public class MainActivity2 extends AppCompatActivity {
    private EditText editText1, editText2;
    private Button button;
    private TextView textView;

    // Array de arrays con los textos a verificar
    private String[][] arrayDeArrays = {
            {"user1", "12345"},
            {"user2", "23456"},
            {"user3", "34567"}
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        editText1 = findViewById(R.id.TextName);
        editText2 = findViewById(R.id.TextPasssword);
        button = findViewById(R.id.btn1);
        textView = findViewById(R.id.textView4);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String texto1 = editText1.getText().toString();
                String texto2 = editText2.getText().toString();

                if (verificarTextoEnArray(texto1, texto2)) {
                    textView.setText("A iniciado session correctamente ");
                } else {
                    textView.setText("No ha podido iniciar session");
                }
            }
        });
    }

    private boolean verificarTextoEnArray(String texto1, String texto2) {
        for (String[] array : arrayDeArrays) {
            if (Arrays.asList(array).contains(texto1) && Arrays.asList(array).contains(texto2)) {
                return true;
            }
        }
        return false;
    }
}