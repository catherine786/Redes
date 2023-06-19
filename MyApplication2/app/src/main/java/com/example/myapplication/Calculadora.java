package com.example.myapplication;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Calculadora extends AppCompatActivity {
    private EditText num1, num2;
    private TextView resul;
    private Button btnSuma, btnRes, btnDiv, btnMul;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);
        num1 = findViewById(R.id.editText1);
        num2 = findViewById(R.id.editText2);
        resul = findViewById(R.id.resultado);
        btnSuma = findViewById(R.id.btnSum);
        btnRes = findViewById(R.id.btnRes);
        btnMul= findViewById(R.id.btnMul);
        btnDiv = findViewById(R.id.btnDiv);

        btnSuma.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                calculateResult('+');
            }
        });

       btnRes.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                calculateResult('-');
            }
        });

        btnMul.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                calculateResult('*');
            }
        });

        btnDiv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                calculateResult('/');
            }
        });
    }

    private void calculateResult(char operator) {
        String num1String = num1.getText().toString();
        String num2String = num2.getText().toString();
        double num1 = Double.parseDouble(num1String);
        double num2 = Double.parseDouble(num2String);
        double result = 0;

        if (operator == '+') {
            result = num1 + num2;
        } else if (operator == '-') {
            result = num1 - num2;
        } else if (operator == '*') {
            result = num1 * num2;
        } else if (operator == '/') {
            if (num2 == 0) {
                resul.setText("No se puede dividir por cero.");
                return;
            }
            result = num1 / num2;
        }

        resul.setText(String.valueOf("Resultado: "+ result));
    }
}