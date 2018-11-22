package com.example.omegazero.modulo2fv1;

import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentPagerAdapter;

/**
 * Created by Omega Zero on 26/09/2016.
 */
public class Mover extends FragmentPagerAdapter {

    static final int CANT_PAG = 3;

    public Mover(FragmentManager fm){
        super(fm);
    }

    @Override
    public Fragment getItem(int position) {

        if(position == 0){
            return new Cuerda1();
        }
        if(position == 1){
            return new Percusion1();
        }
        else{
            return new Viento1();
        }

    }

    @Override
    public int getCount() {
        return CANT_PAG;
    }
}
