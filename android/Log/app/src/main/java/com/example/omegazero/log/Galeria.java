package com.example.omegazero.log;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Toast;

public class Galeria extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_galeria);
    }

    // estados del layout por cada ciclo
    //inicio del layout
    @Override
    protected void onStart() {
        super.onStart();
        Toast.makeText(this, "Inicio", Toast.LENGTH_SHORT).show();
    }
    //reinicio del layout
    @Override
    protected void onRestart() {
        super.onRestart();
        Toast.makeText(this, "Reinicio", Toast.LENGTH_SHORT).show();
    }
    //resumen del layout
    @Override
    protected void onResume() {
        super.onResume();
        Toast.makeText(this, "Resum", Toast.LENGTH_SHORT).show();
    }
    //pausado del layout
    @Override
    protected void onPause() {
        super.onPause();
        Toast.makeText(this, "pausado", Toast.LENGTH_SHORT).show();
    }
    //alto del layout
    @Override
    protected void onStop() {
        super.onStop();
        Toast.makeText(this, "Alto", Toast.LENGTH_SHORT).show();
    }
}
