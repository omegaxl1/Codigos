<?php

use Illuminate\Database\Seeder;
use App\Entities\Role;
class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'id'=>'1',
            'rol'=>'Administrador'

        ]);
        Role::create([
            'id'=>'2',
            'rol'=>'Nivel1'

        ]);
        Role::create([
            'id'=>'3',
            'rol'=>'Nivel2'

        ]);
        Role::create([
            'id'=>'4',
            'rol'=>'Nivel3'

        ]);

    }
}
