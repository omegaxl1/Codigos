<?php

use Illuminate\Database\Seeder;
use App\cpsp;

class CpspsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         cpsp::create([
            'dcpsp'=>'cp'
        ]);


          cpsp::create([
            'dcpsp'=>'sp'
           
            
        ]);
    }
}
