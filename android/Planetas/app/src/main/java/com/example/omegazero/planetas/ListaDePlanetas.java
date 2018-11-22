package com.example.omegazero.planetas;

import android.app.FragmentTransaction;
import android.app.ListFragment;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;

/**
 * Created by Omega Zero on 24/09/2016.
 */
public class ListaDePlanetas extends ListFragment {

    @Override
    public void onActivityCreated(Bundle savedInstanceState) {
        super.onActivityCreated(savedInstanceState);

        BaseDeDatos baseDeDatos = new BaseDeDatos();
        ListAdapter listAdapter = new ArrayAdapter<String>(
                getActivity(), android.R.layout.simple_list_item_1, baseDeDatos.planetas);
        setListAdapter(listAdapter);
    }

    @Override
    public void onListItemClick(ListView l, View v, int position, long id) {

        Venus venus = new Venus();

        FragmentTransaction fragmentTransaction = getActivity().getFragmentManager().beginTransaction();

        switch (position){
            case 0:
                fragmentTransaction.replace(R.id.lista_de_planetas, venus);
                fragmentTransaction.addToBackStack(null);
                fragmentTransaction.commit();
                break;
            default:
                break;
        }

    }
    @Override
    public void onResume() {
        super.onResume();
        getActivity().setTitle("Lista de Planetas");
    }

}