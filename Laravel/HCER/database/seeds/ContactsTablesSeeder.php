<?php

use Illuminate\Database\Seeder;
use App\contact;

class ContactsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         contact::create([
            
            'detail'=>'Padre'
            
        ]);

        contact::create([
            
            'detail'=>'Madre'
            
        ]);

        contact::create([
            
            'detail'=>'Cónyuge'
            
        ]);

         contact::create([
            
            'detail'=>'Hijo'
            
        ]);

        contact::create([
            
            'detail'=>'Hermano(a)'
            
        ]);
        contact::create([
            
            'detail'=>'Tio(a)'
            
        ]);

        contact::create([
            
            'detail'=>'Primo(a)'
            
        ]);
        contact::create([
            
            'detail'=>'Abuelo(a)'
            
        ]);
        contact::create([
            
            'detail'=>'Encargado(a)'
            
        ]);

        contact::create([
            
            'detail'=>'Otros'
            
        ]);




    }
}
