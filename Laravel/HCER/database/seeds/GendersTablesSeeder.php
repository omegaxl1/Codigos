<?php

use Illuminate\Database\Seeder;
use App\gender;

class GendersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        gender::create([
        	'gender'=>'M'

        ]);
        gender::create([
        	'gender'=>'F',
        	
        ]);
    }
}
