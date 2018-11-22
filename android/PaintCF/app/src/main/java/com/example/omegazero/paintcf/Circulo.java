package com.example.omegazero.paintcf;

import android.content.Context;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Path;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Toast;


/**
 * Created by Omega Zero on 16/10/2016.
 */

public class Circulo extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_circulo);

   //mensaje del toast
        Toast.makeText(this, getString(R.string.Cir), Toast.LENGTH_SHORT).show();

      //inicializacion del lienzo
        LienzoC lienzo= new LienzoC(this);
        setContentView(lienzo);

    }
}

//metodo de lienzo
class LienzoC extends View {
 // eje x y y
    float x=200;
    float y =200;
    Path path= new Path();

    Paint paint= new Paint();


    public LienzoC(Context context){
        super(context);

        //color
        paint.setColor(Color.rgb(40,133,255));

    }

    public void onDraw(Canvas canvas){
        canvas.drawColor(Color.WHITE);
        paint.setStyle(Paint.Style.FILL);

        paint.setAntiAlias(true);
        canvas.drawPath(path, paint);
        path.addCircle(x, y, 50, Path.Direction.CW);
    }

    public boolean onTouchEvent(MotionEvent event){

  //posiciones del toque del usuario
        if(event.getAction()== MotionEvent.ACTION_DOWN) {
            x=event.getX();
            y=event.getY();
        }

        invalidate();

        return true;
    }



}

