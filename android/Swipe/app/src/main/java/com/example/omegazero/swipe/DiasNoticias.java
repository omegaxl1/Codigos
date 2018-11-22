package com.example.omegazero.swipe;



import android.support.v4.app.FragmentManager;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentPagerAdapter;

/**
 * Created by Next University.
 */
public class DiasNoticias extends FragmentPagerAdapter{

    static final int CANT_PAG = 3;

    public DiasNoticias(FragmentManager fm){
        super(fm);
    }

    @Override
    public Fragment getItem(int position) {

        if(position == 0){
            return new ProgramacionAyer();
        }
        if(position == 1){
            return new ProgramacionHoy();
        }
        else{
            return new ProgramacionManana();
        }

    }

    @Override
    public int getCount() {
        return CANT_PAG;
    }
}
