<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(VauchersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CuisinesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
    }
}
