package com.example.omegazero.log2;

import android.app.Notification;
import android.app.NotificationManager;
import android.content.Intent;
import android.graphics.Color;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.Gravity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    // Editext de las entradas de la pantalla inicial
    private EditText usuario,pass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    //notificacion de  recuperacion
    public void notificar(View view){
        //mensaje
        Snackbar snackbar= Snackbar.make(view,"los datos se a enviado a su correo",Snackbar.LENGTH_LONG)
                .setAction("recuperacion", new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {

                        Toast.makeText(MainActivity.this,"listo", Toast.LENGTH_LONG).show();
                    }
                });
        //color
        snackbar.setActionTextColor(Color.GREEN);
        View snackBarView = snackbar.getView();
        snackBarView.setBackgroundColor(Color.BLUE);
        //muestrame la notificacion
        snackbar.show();

    }

    //funcion de ir a la galeria y validacion
    public void IrGaleria(View view){
        //  notificacion
        NotificationManager notificationManager =(NotificationManager)getSystemService(NOTIFICATION_SERVICE);
        // inicializacion del editext
        usuario = (EditText) findViewById(R.id.usuario);
        pass =(EditText) findViewById(R.id.pass);
        // asignación del tipo a string del editext
        String us = usuario.getText().toString();
        String ps = pass.getText().toString();

        //validacion de campos vacios
        if(TextUtils.isEmpty(us) || TextUtils.isEmpty(ps)){

            Toast.makeText(this, "Ingrese un usuario o contraseña", Toast.LENGTH_SHORT).show();
            return;
        }
        // si el editext esta con valores
        else {

            //notificaion de ingreso correcto
            Notification notfi = new Notification.Builder(this)
                    .setSmallIcon(R.drawable.fot3)

                    .setContentTitle("ingreso ok")
                    .build();
            notificationManager.notify(0,notfi);
            // cambio de layout a galeria
            Intent intent = new Intent(this, Galeria.class);
            startActivity(intent);

        }


    }
    //metodo de recuperacion
    public void Recuperar (View view){
        // creacion del toast de recuperacion
        Toast toast2 = Toast.makeText(getApplicationContext(),
                "se envio los datos de la recuperacion del usuario y clave al correo", Toast.LENGTH_SHORT);
        // posicion del toast
        toast2.setGravity(Gravity.CENTER| Gravity.LEFT,0,0);
        // muestra de toast en layout
        toast2.show();
    }
}
