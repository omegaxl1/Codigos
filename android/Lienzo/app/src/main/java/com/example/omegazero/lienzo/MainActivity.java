package com.example.omegazero.lienzo;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Path;
import android.graphics.Point;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MotionEvent;
import android.view.View;
import android.widget.LinearLayout;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        Lienzo lienzo= new Lienzo(this);
        setContentView(lienzo);



}
}
class Lienzo extends View {

    private List<Point> points = new ArrayList<Point>(); //Creamos un array de coordenadas X , Y para guardar el punto donde queremos dibujar
    float x=getX();
    float y =getY();
    int id=0;
    // Path path= new Path();
    // Paint paint= new Paint();
    // Point p = new Point();

    public Lienzo(Context context){
        super(context);
        Paint paint= new Paint();
        paint.setColor(Color.BLUE);

    }

    public void onDraw(Canvas canvas){
        super.onDraw(canvas);
        Paint paint= new Paint();
        paint.setStyle(Paint.Style.STROKE);
        canvas.drawColor(Color.WHITE);
        canvas.drawPaint(paint);
        paint.setStrokeWidth(10);
        paint.setAntiAlias(true);
        Path path= new Path();


        //cambios de estado
        if(id==1){
            path.moveTo(x, y);
        }
        if(id==2){

        }
        if(id==3){
            for(Point point: points){ //En este ciclo es donde se dibujan realmente los rectangulos que quedan acumulados en pantalla
                //canvas.drawBitmap(b,point.x,point.y,paint);
                canvas.drawOval(point.x,point.y, point.x+50, point.y+100, paint);
            }
            path.moveTo(x, y);
            invalidate();
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
        if(a== MotionEvent.ACTION_UP){
            Point p = new Point();     //Utilizamos el Action Up para pasar los parametros al arreglo de puntos, dichos parametros son los X,Y que vamos a usar para dibujar los rectangulos
            p.x = (int)event.getX();
            p.y = (int)event.getY();
            points.add(p);
            id=3;
            invalidate();
        }

        invalidate();

        return true;
    }



}