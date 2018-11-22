package com.example.omegazero.finalnavf;

import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.design.widget.TabLayout;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.view.ViewPager;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.example.omegazero.finalnavf.adapter.BaseViewPagerAdapter;

/**
 * Created by Omega Zero on 06/11/2016.
 */

public class TwiFragment  extends Fragment {
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        return inflater.inflate(R.layout.app_bar_with_tabs, container, false);
    }
    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        // variables iconos
        Drawable icon = null;
        Drawable icon2 = null;
        Drawable icon3 = null;
        ViewPager viewPager = (ViewPager) view.findViewById(R.id.view_pager);
        viewPager.setAdapter(new TwViewPagerAdapter(getActivity().getSupportFragmentManager()));


        TabLayout tabLayout = (TabLayout) view.findViewById(R.id.tab_layout);
        tabLayout.setupWithViewPager(viewPager);

        //iconos utilizacion en tab
        TabLayout.Tab tab = tabLayout.getTabAt(0);
        icon = this.getResources().getDrawable(R.drawable.ic_store);
        tab.setIcon(icon);
        tab.setText(null);
        TabLayout.Tab tab1 = tabLayout.getTabAt(1);
        icon2 = this.getResources().getDrawable(R.drawable.ic_menu_share);
        tab1.setIcon(icon2);
        tab1.setText(null);
        TabLayout.Tab tab2 = tabLayout.getTabAt(2);
        icon3 = this.getResources().getDrawable(R.drawable.ic_menu_send);
        tab2.setIcon(icon3);
        tab2.setText(null);



    }

    @Override
    public void onActivityCreated(@Nullable Bundle savedInstanceState) {
        super.onActivityCreated(savedInstanceState);
  //actualizacion del view
        if (getActivity() instanceof MainActivity) {
            MainActivity activity = (MainActivity) getActivity();
            activity.updateView(getString(R.string.Tw));
        }
    }

    @Override
    public void onResume() {
        super.onResume();
        MainActivity activity = (MainActivity) getActivity();
        activity.navigationView.setCheckedItem(R.id.nav_Tw);
    }

    private class TwViewPagerAdapter extends BaseViewPagerAdapter {
  // titulo y descripciones
        public TwViewPagerAdapter(FragmentManager manager) {
            super(manager, new String[]{"Notificacion", "Mensajes", "Busquedas"},  new String[]{
                    "Notificaciones recientes",
                    "Mensajes recientes",
                    "Busquedas recientes"
            });
        }
    }
}
