package com.example.omegazero.finalnavf;

import android.content.Context;
import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

public class BaseFragment extends Fragment {

    //titulos y despcrpcion

    private String name;

    private String description;






    private static final String ARG_NAME = "name";

    private static final String ARG_DESCRIPTION = "description";


    public static BaseFragment getInstance(String name, String description) {
        BaseFragment fragment = new BaseFragment();

        Bundle args = new Bundle();
        args.putString(ARG_NAME, name);
        args.putString(ARG_DESCRIPTION, description);

        fragment.setArguments(args);
        return fragment;
    }






    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        Bundle args = getArguments();
        if (args != null) {
            name = args.getString(ARG_NAME);
            description = args.getString(ARG_DESCRIPTION);
        }
    }

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        return inflater.inflate(R.layout.fragment_base, container, false);
    }

    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        //id de la imagene de content
      ImageView im;
      im=(ImageView)view.findViewById(R.id.img_test);


//envio del texto

        ((TextView) view.findViewById(R.id.text_name)).setText(this.name);
        ((TextView) view.findViewById(R.id.text_description)).setText(this.description);

//selecion de iconos par als vistas

        //facebook
        if(name =="Noticias"){

         im.setImageResource(R.drawable.ic_store);



        }
        if(name =="Solicitudes"){

         im.setImageResource(R.drawable.ic_menu_share);



        }
        if(name =="Publicaciones"){

            im.setImageResource(R.drawable.ic_menu_send);



        }
        //integram

        if(name =="Buscar"){

            im.setImageResource(R.drawable.ic_buscar);



        }
        if(name =="Fotos"){

            im.setImageResource(R.drawable.ic_menu_camera);



        }
        if(name =="Favoritos"){

            im.setImageResource(R.drawable.ic_favoritos);



        }
//google
        if(name =="Colecion"){

            im.setImageResource(R.drawable.ic_notificaf);



        }
        if(name =="Comunidades"){

            im.setImageResource(R.drawable.ic_public);



        }
        if(name =="Notifcaciones"){

            im.setImageResource(R.drawable.ic_camp);



        }
//twi
        if(name =="Notificacion"){

            im.setImageResource(R.drawable.ic_store);



        }
        if(name =="Mensajes"){

            im.setImageResource(R.drawable.ic_menu_share);



        }
        if(name =="Busquedas"){

            im.setImageResource(R.drawable.ic_menu_send);



        }

    }
}
