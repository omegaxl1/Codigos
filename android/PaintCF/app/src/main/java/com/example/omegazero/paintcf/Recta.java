package com.example.omegazero.paintcf;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Path;
import android.graphics.Point;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by Omega Zero on 16/10/2016.
 */

public class Recta extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_rec);
        //mensaje del toast
        Toast.makeText(this, getString(R.string.Rec), Toast.LENGTH_SHORT).show();
        //inicializacion del lienzo
        LienzoCu lienzo= new LienzoCu(this);
        setContentView(lienzo);

    }
}
//metodo de lienzo
class LienzoCu extends View {

    private List<Point> points = new ArrayList<Point>(); //Creamos un array de coordenadas X , Y para guardar el punto donde queremos dibujar
    // eje x y y
    float x=getX();
    float y =getY();
    int id=0;

    public LienzoCu(Context context) {
        super(context);
        Paint paint= new Paint();
        paint.setColor(Color.BLACK);

    }

    public void onDraw(Canvas canvas) {
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

        if(id==3){
            for(Point point: points){ //En este ciclo es donde se dibujan realmente los rectangulos que quedan acumulados en pantalla
               //dibujo del rectagulo
                canvas.drawRect(point.x,point.y, point.x+90, point.y+80, paint);


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
        //posiciones del toque del usuario
        if(a== MotionEvent.ACTION_DOWN){


            id=1;

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

