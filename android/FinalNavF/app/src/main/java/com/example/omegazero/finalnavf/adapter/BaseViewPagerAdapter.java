package com.example.omegazero.finalnavf.adapter;


import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentStatePagerAdapter;

import com.example.omegazero.finalnavf.BaseFragment;


/**
 * Created by Omega Zero on 05/11/2016.
 */

public class BaseViewPagerAdapter extends FragmentStatePagerAdapter {
// tbas
    private String[] tabs;

    private String[] descriptions;

    public BaseViewPagerAdapter(FragmentManager manager, String[] tabs, String[] descriptions) {
        super(manager);
        this.tabs = tabs;
        this.descriptions = descriptions;
    }

    // utilizacion de base frgment
    @Override
    public Fragment getItem(int position) {
        return BaseFragment.getInstance(tabs[position], descriptions[position]);
    }

    @Override
    public int getCount() {
        return tabs.length;
    }

    @Override
    public CharSequence getPageTitle(int position) {
        return tabs[position];
    }
}