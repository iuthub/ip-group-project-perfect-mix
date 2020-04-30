<?php

use Illuminate\Database\Seeder;

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
                            1/2 C. all purpose flour
                            2 C. whole milk
                            1 1/2 C. cooked cavatappi pasta
                            2 Tbsp. plus 2 teaspoons chopped fresh rosemary
                            2 Tbsp. plus 2 teaspoons chopped fresh thyme
                            2 Tbsp. plus 2 teaspoons chopped fresh basil
                            1/4 C. infused white truffle oil
                            1.2 C. grated Parmesan
                            1/4 C. Japanese bread crumbs (panko)
                            to taste salt and freshly ground black pepper',
            'cuisine' => 'American',
            'type' => 'dessert',
            'price' => 'UZS 50,000'
        ]);
        $food->save();
    }
}
