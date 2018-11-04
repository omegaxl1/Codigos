<?php

use Illuminate\Database\Seeder;
use App\im;
class ImsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      im::create([
          'ims'=>'Peso Bajo'
        ]);
        im::create([
        	'ims'=>'Normal'
        ]);

        im::create([
        	'ims'=>'Sobre Peso'
        ]);

        im::create([
        	'ims'=>'Obesidad'
        ]);
        im::create([
        	'ims'=>'Obesidad I'
        ]);

         im::create([
        	'ims'=>'Obesidad II'
        ]);

          im::create([
        	'ims'=>'Obesidad III Extrema o Morbida'
        ]);


    }
}
