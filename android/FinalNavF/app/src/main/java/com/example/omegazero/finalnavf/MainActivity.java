package com.example.omegazero.finalnavf;

import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.drawable.ColorDrawable;
import android.graphics.drawable.Drawable;
import android.net.Uri;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.NavigationView;
import android.support.design.widget.Snackbar;
import android.support.v4.app.Fragment;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.SubMenu;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.LinearLayout;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity  implements NavigationView.OnNavigationItemSelectedListener {
    DrawerLayout drawerLayout;


    // varialbles de mensajes
    String mensaje;

    String encabe="se a compartio con:";

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

        //utilizacxion del toolbar
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        if (toolbar != null)
            toolbar.setSubtitle(title);
        setSupportActionBar(toolbar);
       //open y close
        ActionBarDrawerToggle toogle = new ActionBarDrawerToggle(this, drawerLayout, toolbar,
                R.string.open_drawer, R.string.close_drawer);
        drawerLayout.addDrawerListener(toogle);
        toogle.syncState();
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
   //url con intent del menu 2
        Intent intentFac= new Intent(Intent.ACTION_VIEW, Uri.parse("http://facebook.com"));
        Intent intentTw= new Intent(Intent.ACTION_VIEW, Uri.parse("http://twitter.com/?lang=es"));
        Intent intentIn= new Intent(Intent.ACTION_VIEW, Uri.parse("http://www.intergames.si/"));
        Intent intentGo= new Intent(Intent.ACTION_VIEW, Uri.parse("http://google.com.ec"));
        // Inflate the menu; this adds items to the action bar if it is present.
       //colocacion de los iconos
        SubMenu sm= menu.addSubMenu("Aplicaciones");
        sm.add(0,1,1,"Facebook").setIcon(R.drawable.ic_menu_gallery).setIntent(intentFac);
        sm.add(0,2,2,"Twitwer").setIcon(R.drawable.ic_menu_manage).setIntent(intentTw);
        sm.add(0,3,3,"Integran").setIcon(R.drawable.ic_menu_camera).setIntent(intentIn);
        sm.add(0,3,3,"Google").setIcon(R.drawable.ic_menu_slideshow).setIntent(intentGo);

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

// ventana secundaria
// componentes
                final String[] lenguajes = {"Facebook","Twitter","Instagram","Google Puls", "Whatsapp", "Messenger","Sms"};
                final boolean[] checked = {false,false,false,false,false,false,false};
                AlertDialog.Builder builder = new AlertDialog.Builder(this);
//titulo
                builder.setTitle("Seleccione Donde quiers compartir esta aplicaciion");
                builder.setMultiChoiceItems(lenguajes, checked, new DialogInterface.OnMultiChoiceClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which, boolean isChecked) {

                    }
                });
// menseje con el true
                builder.setPositiveButton("OK", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        String result = "";
                        int cont = 1;
                        for (int i=0; i<checked.length;i++){
                            if (checked[i])
                                if ((cont != ((AlertDialog)dialog).getListView().getCheckedItemCount())) {
                                    result += lenguajes[i]+", ";
                                    cont++;
                                }
                                else result += lenguajes[i];
                        }

                        mensaje=result;
                        mesaje();





                    }
                });
// menseje con el false
            builder.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {


                }
            });
                builder.create().show();



            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    public  void mesaje(){


        Toast.makeText(this, encabe+""+mensaje, Toast.LENGTH_SHORT).show();
    }

    @Override
    public boolean onNavigationItemSelected(MenuItem item) {

        LinearLayout layout =(LinearLayout)findViewById(R.id.cajaInicial);





        int id = item.getItemId();

        Fragment fragment = null;

        switch (id) {
            case R.id.nav_home:

                // cambio del tema
                setTheme(R.style.PurpleTheme);

                fragment = new MainFragment();

                break;
            case R.id.nav_Fac:
                // cambio del tema
                setTheme(R.style.NegroTheme);

                // cambio fondo
                layout.setBackgroundResource(R.drawable.fac);

   // cambio de vista
                fragment = new FaceFragment();

                break;

            case R.id.nav_Int:
                // cambio del tema
                setTheme(R.style.PinkTheme);
                // cambio fondo
                layout.setBackgroundResource(R.drawable.ins);
                // cambio de vista
                fragment = new InstaFragmet();
                break;
            case R.id.nav_Tw:
                // cambio del tema
                setTheme(R.style.AzulTheme);

                // cambio fondo
                layout.setBackgroundResource(R.drawable.twi);
                // cambio de vista
                fragment = new TwiFragment();
                break;

            case  R.id.nav_Goo:

                // cambio del tema
                setTheme(R.style.RedTheme);
                // cambio fondo
                layout.setBackgroundResource(R.drawable.goo);
                // cambio de vista
                fragment = new GoogleFragmet();
                break;



        }

        if (fragment != null)
            getSupportFragmentManager().beginTransaction()
                    .replace(R.id.container, fragment)
                    .addToBackStack(null)
                    .commit();

        drawerLayout.closeDrawer(GravityCompat.START);
        return true;
    }


}
