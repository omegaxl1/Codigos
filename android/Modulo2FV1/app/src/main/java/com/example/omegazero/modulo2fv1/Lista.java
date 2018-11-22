package com.example.omegazero.modulo2fv1;
import android.app.Fragment;
import android.app.FragmentTransaction;
import android.app.ListFragment;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;

/**
 * Created by Omega Zero on 25/09/2016.
 */
public class Lista extends ListFragment

{


    public Lista() {
        // Constructor
    }

    @Override
    public void onActivityCreated(Bundle savedInstanceState) {
        super.onActivityCreated(savedInstanceState);

        String [] listaDeCategorias = getResources().getStringArray(R.array.Instrumentos);

        ListAdapter listAdapter = new ArrayAdapter<String>(getActivity(), android.R.layout.simple_list_item_1, listaDeCategorias);
        setListAdapter(listAdapter);
    }

    @Override
    public void onListItemClick(ListView l, View v, int position, long id) {
        Fragment fragment = new Fragment();
        FragmentTransaction fragmentTransaction = getActivity().getFragmentManager().beginTransaction();

        switch (position){
            case 0:{
                fragment = new Cuerda();
                break;
            }
            case 1:{
                fragment = new Percusion();
                break;
            }
            case 2:{
                fragment = new Viento();
                break;
            }
            case 3:{
                fragment = new Electricos();
                break;
            }
            default:{
                break;
            }
        }

        fragmentTransaction.replace(R.id.dinamico,fragment);
        fragmentTransaction.commit();
    }
}

