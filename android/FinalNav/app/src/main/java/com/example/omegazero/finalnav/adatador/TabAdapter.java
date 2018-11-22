package com.example.omegazero.finalnav.adatador;

import android.content.Context;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentStatePagerAdapter;

import com.example.omegazero.finalnav.R;

import layout.Notificaciones;
import layout.Publicaciones;
import layout.Solicitudes;

/**
 * Created by Omega Zero on 03/11/2016.
 */

public class TabAdapter  extends FragmentStatePagerAdapter {

    private Context context;

    public TabAdapter(FragmentManager manager, Context context) {
        super(manager);
        this.context = context;
    }
    @Override
    public Fragment getItem(int position) {
        switch (position) {
           case 0: return new Notificaciones();
           case 1: return new Solicitudes();
           case 2: return new Publicaciones();

        }
        return null;
    }

    @Override
    public int getCount() {
        return 3;
    }

    @Override
    public CharSequence getPageTitle(int position) {
        switch (position) {
            case 0: return context.getString(R.string.not);
            case 1: return context.getString(R.string.sol);
            case 2: return context.getString(R.string.publi);

        }
        return super.getPageTitle(position);
    }
}