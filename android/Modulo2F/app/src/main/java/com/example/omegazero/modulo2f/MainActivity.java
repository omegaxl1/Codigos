package com.example.omegazero.modulo2f;


import android.app.FragmentTransaction;
import android.os.Bundle;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    static boolean dinamica;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    View view = findViewById(R.id.dinamico);
  //condicional
    if(view == null){
        dinamica = false;
    }
    else{

        // vista del Layout Nota  en dinamico visualizar los Layout
        Notas notas = new Notas();
        FragmentTransaction fragmentTransaction = getFragmentManager().beginTransaction();
        fragmentTransaction.add(R.id.dinamico, notas);
        fragmentTransaction.commit();


    }
}
  // regreso
    @Override
    public void onBackPressed() {
        if(getFragmentManager().getBackStackEntryCount()>0){
            getFragmentManager().popBackStack();
        }
        else{
            super.onBackPressed();
        }
    }
    // toast de favoritos

    public void favoritos(View view){

        Toast.makeText(this, "Se agregado a favoritos", Toast.LENGTH_SHORT).show();

    }
    // toast de reproducion
    public void Reproducir(View view){

        Toast.makeText(this, "se a reproucido", Toast.LENGTH_SHORT).show();

    }
}
