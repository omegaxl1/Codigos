package com.example.omegazero.myapplication;

import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.design.widget.TabLayout;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;

import com.example.omegazero.myapplication.adatador.TabAdapter;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);



       // icon = ContextCompat.getDrawable(this, R.drawable.ic_movies);

         vis();






    }


    public void vis( ){
        ViewPager viewPager = (ViewPager) findViewById(R.id.view_pager);
        viewPager.setAdapter(new TabAdapter(getSupportFragmentManager(), this));
        TabLayout tabLayout = (TabLayout) findViewById(R.id.tabs);




        Drawable icon=null;
        Drawable icon2=null;
        Drawable icon3 = null;


        tabLayout.setupWithViewPager(viewPager);
        TabLayout.Tab tab = tabLayout.getTabAt(0);
        icon = ContextCompat.getDrawable(this, R.drawable.ic_book);
        TabLayout.Tab tab2 = tabLayout.getTabAt(1);
        icon2 = ContextCompat.getDrawable(this, R.drawable.ic_book);

        TabLayout.Tab tab3 = tabLayout.getTabAt(2);
        icon3 = ContextCompat.getDrawable(this, R.drawable.ic_movies);

        tab.setIcon(icon);
        tab2.setIcon(icon2);
        tab3.setIcon(icon3);
        tab.setText(null);
        tab2.setText(null);
        tab3.setText(null);

    }



    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
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
}
