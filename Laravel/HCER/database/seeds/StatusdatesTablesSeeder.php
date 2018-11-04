<?php

use Illuminate\Database\Seeder;
use App\statusdate;

class StatusdatesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statusdate::create([
       'status'=>'Pentiente'
        ]);


        statusdate::create([
       'status'=>'Confirmada'
        ]);

       

     
    }
}
