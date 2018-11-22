package com.example.omegazero.swipe;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;

/**
 * Created by Omega Zero on 25/09/2016.
 */
public class ProgramacionManana extends Fragment {

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.programacion_manana, container, false);

        String [] programacion_manana = new String[] {"Noticias Sports", "Arsenal vs. Chelsea"};
        ArrayAdapter arrayAdapter = new ArrayAdapter(getActivity(),
                android.R.layout.simple_list_item_1, programacion_manana);
        ListView listView = (ListView) view.findViewById(R.id.programacion_manana);
        listView.setAdapter(arrayAdapter);

        return view;
    }

    @Override
    public void setUserVisibleHint(boolean isVisibleToUser) {
        super.setUserVisibleHint(isVisibleToUser);

        if(isVisibleToUser){
         //   getActivity().setTitle("Programación de Mañana");
        }

    }

}
