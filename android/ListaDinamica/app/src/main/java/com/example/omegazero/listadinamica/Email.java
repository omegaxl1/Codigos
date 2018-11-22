package com.example.omegazero.listadinamica;

import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;

/**
 * Created by Omega Zero on 22/09/2016.
 */
public class Email  extends Fragment {

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {

        View view = inflater.inflate(R.layout.email, container, false);
        String [] emails = new String[]{"Juan Perez", "María Villa", "Luis Campos", "Cristiano Ronaldo",
                "Lionel Messi"};

        ArrayAdapter arrayAdapter = new ArrayAdapter(getActivity(), android.R.layout.simple_list_item_1, emails);
        ListView listView = (ListView) view.findViewById(R.id.email);
        listView.setAdapter(arrayAdapter);

        return view;

    }}
