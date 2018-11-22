package com.example.omegazero.paintcf;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Adapter;
import android.widget.Toast;

/**
 * Created by Omega Zero on 08/10/2016.
 */

public class RecyclerAdapter  extends RecyclerView.Adapter<RecyclerViewHolder>{
  // array
    String [] arreglo;
    String [] intros;

    Context context;
    LayoutInflater inflater;
    public RecyclerAdapter(Context context){
        this.context=context;
        inflater=LayoutInflater.from(context);
        //selecion array en archivo xml
         arreglo = context.getResources().getStringArray(R.array.Lienzo);
        intros = context.getResources().getStringArray(R.array.Carect);


    }

    @Override
    public RecyclerViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View v=inflater.inflate(R.layout.item,parent,false);
        RecyclerViewHolder view1= new RecyclerViewHolder(v);
        return view1;
    }

    @Override
    public void onBindViewHolder(RecyclerViewHolder holder, int position) {
        //colocacion de cada mensaje
        holder.t1.setText(arreglo[position]);
        holder.t2.setText(intros[position]);
        holder.im.setOnClickListener(onClickListener);
        //asignacion iconos por cada  RecyclerViewHolder

        if(position==0) {
            holder.im.setImageResource(R.drawable.circulo);


        }if(position==1) {
            holder.im.setImageResource(R.drawable.ova);
        }
        if(position==2) {
            holder.im.setImageResource(R.drawable.cua);
        }
        if(position==3) {
            holder.im.setImageResource(R.drawable.rec);
        }
        if(position==4) {
            holder.im.setImageResource(R.drawable.lib);
        }


        holder.im.setTag(holder);


    }





    View.OnClickListener onClickListener= new View.OnClickListener() {

        @Override
        public void onClick(View view) {
            RecyclerViewHolder vh=(RecyclerViewHolder)view.getTag();
            int posicion = vh.getAdapterPosition();
            Intent intent=null;




            // cambio de frramente por cada acccion
            switch(posicion) {
                case 0:
                    intent = new Intent( context.getApplicationContext(),Circulo.class);intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                    context.getApplicationContext().startActivity(intent);

                    break;
                case 1:
                    intent = new Intent( context.getApplicationContext(),Ovalo.class);intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                    context.getApplicationContext().startActivity(intent);
                    break;
                case 2:
                    intent = new Intent( context.getApplicationContext(),Cuadr.class);intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                    context.getApplicationContext().startActivity(intent);
                    break;
                case 3:
                    intent = new Intent( context.getApplicationContext(),Recta.class);intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                    context.getApplicationContext().startActivity(intent);
                    break;
                case 4:
                    intent = new Intent( context.getApplicationContext(),Libre.class);intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                    context.getApplicationContext().startActivity(intent);
                    break;

                default:




            }

        }
    };

    @Override
    public int getItemCount() {
        return arreglo.length;
    }

}
