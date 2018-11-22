package com.example.omegazero.cardview;

import android.content.Context;
import android.content.res.Resources;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Toast;

/**
 * Created by Omega Zero on 08/10/2016.
 */

public class RecyclerAdapter  extends RecyclerView.Adapter<RecyclerViewHolder> {

    String [] arreglo;
    String [] intros;
    //String [] arreglo={"Layouts","Fragment","Items","Java","Android","prueba"};
    //String [] intros ={"t1","t2","t3","t4","t5","t6"};

    Context context;
    LayoutInflater inflater;
    public RecyclerAdapter(Context context){
        this.context=context;
        inflater=LayoutInflater.from(context);
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

        holder.t1.setText(arreglo[position]);
        holder.t2.setText(intros[position]);
        holder.im.setOnClickListener(onClickListener);
        holder.im.setTag(holder);


    }
    View.OnClickListener onClickListener= new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            RecyclerViewHolder vh=(RecyclerViewHolder)v.getTag();
            int posicion = vh.getAdapterPosition();

            switch(posicion) {
                case 0:
                    Toast.makeText(context,"La posicion es0"+posicion,Toast.LENGTH_SHORT).show();
                    break;
                case 1:
                    Toast.makeText(context,"La posicion es1"+posicion,Toast.LENGTH_SHORT).show();
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
