package com.example.omegazero.listadinamica;

import android.app.FragmentManager;
import android.app.FragmentTransaction;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        FragmentManager fragmentManager = getFragmentManager();
        FragmentTransaction fragmentTransaction = fragmentManager.beginTransaction();
        Email email = new  Email();
        fragmentTransaction.add(R.id.contenedor, email);
        fragmentTransaction.commit();
    }



    public void mostrar(View view){

        FragmentManager fragmentManager = getFragmentManager();
        FragmentTransaction fragmentTransaction = fragmentManager.beginTransaction();

        Email email = new Email();
        fragmentTransaction.add(R.id.contenedor, email);
        fragmentTransaction.commit();

    }

}
