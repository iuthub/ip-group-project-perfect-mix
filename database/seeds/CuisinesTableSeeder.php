<?php

use Illuminate\Database\Seeder;
use App\Cuisine;
class CuisinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $cuisine = new Cuisine([
            'name' => 'Uzbek'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'European'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'Chinese'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'Italian'
        ]);
        $cuisine->save();
    }
}
