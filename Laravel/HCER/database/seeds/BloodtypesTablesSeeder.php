<?php

use Illuminate\Database\Seeder;
use App\bloodtype;

class BloodtypesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	bloodtype::create([
			'blood'=>'AB+'
    	]);

    	bloodtype::create([
			'blood'=>'AB-'
    	]);

    	bloodtype::create([
			'blood'=>'A+'
    	]);

    	bloodtype::create([
			'blood'=>'A-'
    	]);

    	bloodtype::create([
			'blood'=>'B+'
    	]);

    	bloodtype::create([
			'blood'=>'B-'
    	]);

    	bloodtype::create([
			'blood'=>'O+'
    	]);

    	bloodtype::create([
			'blood'=>'O-'
    	]);
        
    }
}
