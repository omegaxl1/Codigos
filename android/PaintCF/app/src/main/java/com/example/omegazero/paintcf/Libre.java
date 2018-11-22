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

public class Libre  extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_libre);
        Toast.makeText(this, getString(R.string.Lib), Toast.LENGTH_SHORT).show();

        Lienzo lienzo= new Lienzo(this);
        setContentView(lienzo);

    }
}
class Lienzo extends View {

    float x=200;
    float y =200;
    int id=0;
    Path path= new Path();
    Paint paint= new Paint();


    public Lienzo(Context context){
        super(context);
        paint.setColor(Color.BLACK);

    }

    public void onDraw(Canvas canvas){
        canvas.drawColor(Color.WHITE);
        paint.setStyle(Paint.Style.STROKE);
        paint.setStrokeWidth(10);
        paint.setAntiAlias(true);


        if(id==1){

            path.moveTo(x, y);
        }
        if(id==2){
            path.lineTo(x, y);
        }



        canvas.drawPath(path, paint);


    }

    public boolean onTouchEvent(MotionEvent event){
        int a= event.getAction();
        x=event.getX();
        y=event.getY();

        if(a== MotionEvent.ACTION_DOWN){
            id=1;

        }
        if(a== MotionEvent.ACTION_MOVE){

            id=2;
        }


        invalidate();

        return true;
    }



}