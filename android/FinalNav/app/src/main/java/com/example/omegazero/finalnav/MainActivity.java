package com.example.omegazero.finalnav;

import android.content.Intent;
import android.graphics.drawable.ColorDrawable;
import android.graphics.drawable.Drawable;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.support.design.widget.TabLayout;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.ViewPager;
import android.view.SubMenu;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.LinearLayout;

import com.example.omegazero.finalnav.adatador.TabAdapter;

public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {

    DrawerLayout drawerLayout;

    NavigationView navigationView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportFragmentManager().beginTransaction()
                .add(R.id.container, new MainFragment())
                .commit();

        drawerLayout = (DrawerLayout) findViewById(R.id.drawer_layout);

        navigationView = (NavigationView) findViewById(R.id.nav_view);
        if (navigationView != null)
            navigationView.setNavigationItemSelectedListener(this);





    }

    public void updateView(String title) {
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        if (toolbar != null)
            toolbar.setTitle(title);
        setSupportActionBar(toolbar);

        ActionBarDrawerToggle toogle = new ActionBarDrawerToggle(this, drawerLayout, toolbar,
                R.string.open_drawer, R.string.close_drawer);
        drawerLayout.addDrawerListener(toogle);
        toogle.syncState();
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        Intent intentFac= new Intent(Intent.ACTION_VIEW, Uri.parse("http://facebook.com"));
        Intent intentTw= new Intent(Intent.ACTION_VIEW, Uri.parse("http://twitter.com/?lang=es"));
        Intent intentIn= new Intent(Intent.ACTION_VIEW, Uri.parse("http://www.intergames.si/"));
        Intent intentGo= new Intent(Intent.ACTION_VIEW, Uri.parse("http://google.com.ec"));
        // Inflate the menu; this adds items to the action bar if it is present.
        SubMenu sm= menu.addSubMenu("Aplicaciones");
        sm.add(0,1,1,"Facebook").setIcon(R.drawable.ic_menu_gallery).setIntent(intentFac);
        sm.add(0,2,2,"Twitwer").setIcon(R.drawable.ic_menu_manage).setIntent(intentTw);
        sm.add(0,3,3,"Integran").setIcon(R.drawable.ic_menu_camera).setIntent(intentIn);
        sm.add(0,3,3,"Google").setIcon(R.drawable.ic_menu_slideshow).setIntent(intentGo);





        getMenuInflater().inflate(R.menu.main, menu);
        return true;


    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.


        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")

    public boolean onNavigationItemSelected(MenuItem item) {

        //encabezado

        LinearLayout layout =(LinearLayout)findViewById(R.id.cajaInicial);







        // camabio de colores
        final int colorPrimary1 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimary2);
        final int colorPrimaryDark1 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimaryDark2);

        final int colorPrimary2 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimary3);
        final int colorPrimaryDark2 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimaryDark3);

        final int colorPrimary3 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimary4);
        final int colorPrimaryDark3 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimaryDark4);


        final int colorPrimary4 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimary5);
        final int colorPrimaryDark4 = ContextCompat.getColor(getBaseContext(), R.color.colorPrimaryDark5);



        // Handle navigation view item clicks here.
        int id = item.getItemId();
   //1
        if (id == R.id.nav_camera) {
            // Handle the camera action
            Drawable bgColor4 = new ColorDrawable(colorPrimary4);
            layout.setBackgroundResource(R.drawable.side_nav_bar);
                getSupportActionBar().setBackgroundDrawable(bgColor4);
                getWindow().setStatusBarColor(colorPrimaryDark4);




        }//2
        else if (id == R.id.nav_gallery) {

                Drawable bgColor1 = new ColorDrawable(colorPrimary1);
                layout.setBackgroundResource(R.drawable.fac);

                getSupportActionBar().setBackgroundDrawable(bgColor1);
                getWindow().setStatusBarColor(colorPrimaryDark1);





        } else if (id == R.id.nav_slideshow) {
            Drawable bgColor2 = new ColorDrawable(colorPrimary2);
            layout.setBackgroundResource(R.drawable.twi);

                getSupportActionBar().setBackgroundDrawable(bgColor2);


                getWindow().setStatusBarColor(colorPrimaryDark2);


        } else if (id == R.id.nav_manage) {

            Drawable bgColor4 = new ColorDrawable(colorPrimary4);
            layout.setBackgroundResource(R.drawable.ins);


                getSupportActionBar().setBackgroundDrawable(bgColor4);



                getWindow().setStatusBarColor(colorPrimaryDark4);

        }
        else if (id == R.id.nav_google) {
            Drawable bgColor3 = new ColorDrawable(colorPrimary3);
            layout.setBackgroundResource(R.drawable.goo);


                getSupportActionBar().setBackgroundDrawable(bgColor3);



                getWindow().setStatusBarColor(colorPrimaryDark3);



        }




        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }


}
