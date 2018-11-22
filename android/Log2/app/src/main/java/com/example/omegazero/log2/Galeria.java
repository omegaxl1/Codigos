package com.example.omegazero.log2;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;


public class Galeria extends AppCompatActivity {
 private static final String TAG ="FI";
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
        Log.d(TAG,"Inicio");


    }
    //reinicio del layout
    @Override
    protected void onRestart() {
        super.onRestart();
        Log.d(TAG,"Reinicio");

    }
    //resumen del layout
    @Override
    protected void onResume() {
        super.onResume();
        Log.d(TAG,"Resum");

    }
    //pausado del layout
    @Override
    protected void onPause() {
        super.onPause();
        Log.d(TAG,"pausado");
    }
    //alto del layout
    @Override
    protected void onStop() {
        super.onStop();
        Log.d(TAG,"Alto");

    }
}
