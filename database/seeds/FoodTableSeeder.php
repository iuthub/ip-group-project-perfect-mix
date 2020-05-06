<?php

use Illuminate\Database\Seeder;
use App\Food;
class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new Food([
            'name' => 'White Truffle Mac & Cheese',
            'description' => '1/2 C. butter
                            1/2 C. chopped red onion
                            1/2 C. chopped garlic
                            1/2 C. all purpose flour', 
            'cuisine_id' => '1',
            'type_id' => '1',
            'price' => '50000',
            'photo_path' =>'assets/img/coast.jpg'
        ]);
        $food->save();

        $food = new Food([
            'name' => 'Cheese',
            'description' => '1/2 C. butter
                            1/2 C. chopped red onion', 
            'cuisine_id' => '3',
            'type_id' => '2',
            'price' => '20000',
            'photo_path' =>'assets/img/hero.jpg'
        ]);
        $food->save();

        $food = new Food([
            'name' => 'Mac',
            'description' => '
                            1/2 C. chopped garlic
                            1/2 C. all purpose flour', 
            'cuisine_id' => '3',
            'type_id' => '1',
            'price' => '35000',
            'photo_path' =>'assets/img/img1.jpg'
        ]);
        $food->save();
    }
}
