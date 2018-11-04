<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

          $this->call(RolesTablesSeeder::class);
          $this->call(UsersTablesSeeder::class);
          $this->call(SpecialtiesTablesSeeder::class);
          $this->call(ContactsTablesSeeder::class);
          $this->call(GendersTablesSeeder::class);
          $this->call(BloodtypesTablesSeeder::class);
          $this->call(ImsTablesSeeder::class);
          $this->call(CpspsTablesSeeder::class);
          $this->call(Cis10TablesSeeder::class);
          $this->call(StatusdatesTablesSeeder::class);
    
          

    }
}
