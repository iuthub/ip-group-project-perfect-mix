<?php

use Illuminate\Database\Seeder;
use App\FoodType;
class FoodTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_type = new FoodType([
            'name' => 'Shellfish',
            'photo_path' => 'assets/img/mountain.jpg'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Seafood',
            'photo_path' => 'assets/img/mountain.jpg'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Soups',
            'photo_path' => 'assets/img/mountain.jpg'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Sandwiches',
            'photo_path' => 'assets/img/mountain.jpg'
        ]);
        $food_type->save();

		$food_type = new FoodType([
            'name' => 'Salads',
            'photo_path' => 'assets/img/mountain.jpg'
        ]);
        $food_type->save();

    }
}
