<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'ci'=>'1725706921',
            'name'=>'jose',
            'lastname'=>'pullaguari',
            'email'=>'x@gmail.com',
            'password'=>bcrypt('123123'),
            'id_role'=>1, 
            'id_user'=>1

        ]);


          User::create([
            'ci'=>'2',
            'name'=>'jose2',
            'lastname'=>'pullaguari',
            'email'=>'x2@gmail.com',
            'password'=>bcrypt('123123'),
            'id_role'=>2,
            'id_user'=>1,
            'id_specialty'=>1
        ]);

        User::create([
            'ci'=>'223',
            'name'=>'MEDIC',
            'lastname'=>'MEDICLASR',
            'email'=>'MEDICLASR@hotmail.com',
            'password'=>bcrypt('123123'),
            'id_role'=>2,
            'id_user'=>1,
            'id_specialty'=>1
        ]);


           User::create([
            'ci'=>'3',
            'name'=>'jose3',
            'lastname'=>'pullaguari',
            'email'=>'x3@gmail.com',
            'password'=>bcrypt('123123'),
            'id_role'=>3, 
            'id_user'=>1
        ]);

            User::create([
            'ci'=>'4',
            'name'=>'jose4',
            'lastname'=>'pullaguari',
            'email'=>'x4@gmail.com',
            'password'=>bcrypt('123123'),
            'id_role'=>4, 
            'id_user'=>1
        ]);
    }
}
