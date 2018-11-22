package com.example.omegazero.cardview;

import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

/**
 * Created by Omega Zero on 08/10/2016.
 */

public class RecyclerViewHolder extends RecyclerView.ViewHolder {
    TextView t1,t2;
    ImageView im;

    public RecyclerViewHolder(View itemView) {
        super(itemView);
        t1= (TextView)itemView.findViewById(R.id.titulo);
        t2= (TextView)itemView.findViewById(R.id.texto);
        im=(ImageView)itemView.findViewById(R.id.imagenlista);
    }
}
