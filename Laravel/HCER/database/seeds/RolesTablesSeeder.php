<?php

use Illuminate\Database\Seeder;
use App\roles;
class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        roles::create([
            'id'=>'1',
            'rol'=>'Administrador'
            
        ]);


     roles::create([
            'id'=>'2',
            'rol'=>'Medico'
            
        ]);



      roles::create([
            'id'=>'3',
            'rol'=>'Enfermera-Auxiliar'
            
        ]);

       roles::create([
            'id'=>'4',
            'rol'=>'Recepcionista'
            
        ]);

    }
}
