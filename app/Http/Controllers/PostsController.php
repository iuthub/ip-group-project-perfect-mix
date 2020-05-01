<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Food;
use App\FoodType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function getIndex(){
    	return view('mainPage.index');
    }

    public function adminInfoChange(){

        $user = Auth::user();
        return view('auth.change', [
             'user' => $user
        ]);
    }

     public function table(){

        $users = User::orderBy('full_name','desc')->get();
        return view('table', [
             'users' => $users
        ]);
    }

    public function createAdmin(Request $req){
    	// $this->validate($req,['

    	// 	']);

    	return view('mainPage.index');
    }

    public function getAddFood()
    {
        $cuisines = Cuisine::all();
        $food = Food::orderBy('created_at', 'desc')->paginate(2);
        return view('food.addFood', ['food'=>$food]);
    }

    public function postAddFood(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/^\D{2,}$/',
            'description' => 'required|regex:/^\w{10,}$/',
            'cuisine' => 'required|regex:/^\w{5,}$/',
            'type' => 'required|regex:/^\w{3,}$/',
            'price' => 'required|/^UZS [1-9][0-9]{0,2}(,[0-9]{3})*\.[0-9]{2}$/',
        ]);
        $food = new Food ([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'cuisine' => $request->input('cuisine'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
        ]);
        $food->save();
        $cuisines = Cuisine::all();
        return redirect()->route('mainPage.index')->with('info', 'Food created: ' . $request->input('name'));
    }

    public function populateCuisines()
    {
        $cuisines = Cuisine::all();
        return view('food.addFood', compact('cuisines'));
    }

    public function saveCuisine(Request $rq)
    {
        $selectedCuisine = new Cuisine;
        $selectedCuisine->name = $rq->cuisine_selected;
        $selectedCuisine->save();

        return redirect()->back()->with('success', 'Selected Cuisine added successfuly');
    }

    public function populateFoodType()
    {
        $foods = FoodType::all();
        return view('food.addFood', compact('foods'));
    }

    public function saveFoodType(Request $rq)
    {
        $selectedFoodType = new FoodType;
        $selectedFoodType->name = $rq->food_type_selected;
        $selectedFoodType->save();

        return redirect()->back()->with('success', 'Selected Food Type added successfuly');
    }
}
