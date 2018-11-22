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
 * Created by Omega Zero on 05/11/2016.
 */

public class FaceFragment extends Fragment {
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        return inflater.inflate(R.layout.app_bar_with_tabs, container, false);
    }

    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        //varialbles de iconos
        Drawable icon = null;
        Drawable icon2 = null;
        Drawable icon3 = null;
        ViewPager viewPager = (ViewPager) view.findViewById(R.id.view_pager);
        viewPager.setAdapter(new FaceViewPagerAdapter(getActivity().getSupportFragmentManager()));


        TabLayout tabLayout = (TabLayout) view.findViewById(R.id.tab_layout);
        tabLayout.setupWithViewPager(viewPager);

        //iconos y utilizacion tab con iconos
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
       //actualicacion del view
        if (getActivity() instanceof MainActivity) {
            MainActivity activity = (MainActivity) getActivity();
            activity.updateView(getString(R.string.Fac));
        }
    }

    @Override
    public void onResume() {
        super.onResume();
        MainActivity activity = (MainActivity) getActivity();
        activity.navigationView.setCheckedItem(R.id.nav_Fac);
    }

    private class FaceViewPagerAdapter extends BaseViewPagerAdapter {
  // titulos y descripcion
        public FaceViewPagerAdapter(FragmentManager manager) {
            super(manager, new String[]{"Noticias", "Solicitudes", "Publicaciones"}, new String[]{
                    "noticias recientes",
                    "Solicitudes de amigos",
                    "publicaciones recientes"
            });
        }
    }
}