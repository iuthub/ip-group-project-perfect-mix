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
            'name' => 'Uzbek',
            'photo_path' => 'assets/img/island.jpg'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'European',
            'photo_path' => 'assets/img/island.jpg'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'Chinese',
            'photo_path' => 'assets/img/island.jpg'
        ]);
        $cuisine->save();

        $cuisine = new Cuisine([
            'name' => 'Italian',
            'photo_path' => 'assets/img/island.jpg'
        ]);
        $cuisine->save();
    }
}
