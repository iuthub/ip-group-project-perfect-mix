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

    public function getFood()
    {
        $foods = Food::orderBy('name','desc')->get();
        $types = FoodType::all();
        $cuisines = Cuisine::all();
        return view('admin.foods', ['foods'=>$foods, 
            'cuisines'=>$cuisines,
            'types'=>$types]
        );
    }

    public function getMenuIndex(){
        $foods = Food::all();
        $food_types = FoodType::all();
        $cuisines = Cuisine::all();
        
        return view('mainPage.menu',
            ['foods'=>$foods, 
            'cuisines'=>$cuisines,
            'food_types'=>$food_types]);
    }

    public function postAddFoodType(Request $request)
    {
        $photo = $request->photo_path->store('images/food','public');
        $type = new FoodType ([
            'name' => $request->input('name'),
            'photo_path' => $photo
        ]);
        $type->save();
        
        return redirect()->route('getFoods')->with('info', 'Type created');
    }

    public function getDeleteFoodType($id){
        $type = FoodType::find($id);
        
        $type->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }

    public function getDeleteFoodCuisine($id){
        $cuisine = Cuisine::find($id);
        
        $cuisine->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }

    public function postAddFoodCuisine(Request $request)
    {
        $photo = $request->photo_path->store('images/food','public');
        $cuisine = new Cuisine ([
            'name' => $request->input('name'),
            'photo_path' => $photo
        ]);
        $cuisine->save();
        
        return redirect()->route('getFoods')->with('info', 'Cuisine created');
    }

    public function postAddFood(Request $request)
    {
    	//validation
        $this->validate($request, [
            'name' => 'required|regex:/^\D{2,}$/',
            'description' => 'required'
            
        ]);
		

        $photo = $request->photo_path->store('images/food','public');
        $food = new Food ([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type_id' => $request->input('type_id'),
            'cuisine_id' => $request->input('cuisine_id'),
            'price' => $request->input('price'),
            'photo_path' => $photo
        ]);
        $food->save();
        
        return redirect()->route('getFoods')->with('info', 'Food created');
    }


    public function getEditFood($id){
    	$food = Food::find($id);
		$food_types = FoodType::all();
        $cuisines = Cuisine::all();

    	return view('food.editFood', [
            'food' => $food , 'cuisines'=>$cuisines , 'food_types'=>$food_types
        ]);

    }

    public function postEditFood(Request $request){
    	$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);
       	
        $food = Food::find($request->input('id'));
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->type_id = ($request->input('type_id'))?$request->input('type_id'):$food->type_id;
        $food->cuisine_id = ($request->input('cuisine_id'))?$request->input('cuisine_id'):$food->cuisine_id;
        $food->price = $request->input('price');
        if($request->photo_path){
 			$photo = $request->photo_path->store('images/food','public');        	
        	$food->photo_path = $photo;
		}

        $food->save();
        
        return redirect()->route('getFoods')->with([
            'info'=>'Successfully updated!']);
    }

    public function getDeleteFood($id){
    	
        $food = Food::find($id);
        $food->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }



}
