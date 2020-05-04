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
            'name' => 'Shellfish'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Seafood'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Soups'
        ]);
        $food_type->save();

        $food_type = new FoodType([
            'name' => 'Sandwiches'
        ]);
        $food_type->save();

		$food_type = new FoodType([
            'name' => 'Salads'
        ]);
        $food_type->save();

    }
}
