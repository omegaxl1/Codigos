<?php

use Illuminate\Database\Seeder;
use App\Specialty;
class SpecialtiesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialty::create([
           
            'n_specialties'=>'anatomía patológica',

            'detail'=>' especialidad médica que se encarga del estudio de las lesiones celulares, tejidos, órganos, de sus consecuencias '


            
        ]);
    }
}
