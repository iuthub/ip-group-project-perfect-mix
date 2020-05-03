<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\FoodType;
use App\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function getAddFood()
    {
        $food_types = FoodType::all();
        $cuisines = Cuisine::all();
        return view('food.addFood', ['cuisines'=>$cuisines , 'food_types'=>$food_types]);
    }

    public function postAddFood(Request $request)
    {
    	//validation
        $this->validate($request, [
            'name' => 'required|regex:/^\D{2,}$/',
            'description' => 'required'
            
        ]);
		

        $request->photo_path->storeAs('images/food','public');

        $food = new Food ([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type_id' => $request->input('type_id'),
            'cuisine_id' => $request->input('cuisine_id'),
            'price' => $request->input('price'),
            'photo_path' => $request->photo_path->getClientOriginalName()
        ]);
        $food->save();
        
        return redirect()->route('mainIndex')->with('info', 'Food created: ' . $request->input('name'));
    }


    public function getEditFood($id){
    	$food = Food::find($id);
		$food_types = FoodType::all();
        $cuisines = Cuisine::all();

    	return view('food.editFood', [
            'food' => $food , 'cuisines'=>$cuisines , 'food_types'=>$food_types
        ]);

    }

    public function postEditFood(){
    	
    }

    public function getDeleteFood(){
    	
    }



}
