package com.example.omegazero.myapplication.adatador;

import android.content.Context;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentStatePagerAdapter;

import com.example.omegazero.myapplication.BookFragment;
import com.example.omegazero.myapplication.GamesFragment;
import com.example.omegazero.myapplication.MoviesFragment;
import com.example.omegazero.myapplication.MusicFragment;
import com.example.omegazero.myapplication.R;


public class TabAdapter extends FragmentStatePagerAdapter {

    private Context context;

    public TabAdapter(FragmentManager manager, Context context) {
        super(manager);
        this.context = context;
    }

    @Override
    public Fragment getItem(int position) {
        switch (position) {
            case 0: return new MusicFragment();
            case 1: return new MoviesFragment();
            case 2: return new BookFragment();
            case 3: return new GamesFragment();
        }
        return null;
    }

    @Override
    public int getCount() {
        return 4;
    }

    @Override
    public CharSequence getPageTitle(int position) {
        switch (position) {
            case 0: return context.getString(R.string.music);
            case 1: return context.getString(R.string.movies);
            case 2: return context.getString(R.string.books);
            case 3: return context.getString(R.string.games);
        }
        return super.getPageTitle(position);
    }
}
