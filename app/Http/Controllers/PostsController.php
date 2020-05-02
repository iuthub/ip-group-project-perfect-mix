<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Food;
use App\FoodType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function getDashboardIndex(){
            
        if(Auth::user()->role->name=='admin'){
            return view('admin.index');
        }
        elseif(Auth::user()->role->name=='employer')
            {
                return view('employer.index');
            }
        else 
            {
                return view('user.index');
            }
    }

    public function getAddFood()
    {
        $food_types = FoodType::all();
        $cuisines = Cuisine::all();
        //$foods = Food::orderBy('created_at', 'desc')->paginate(2);
        return view('food.addFood', ['cuisines'=>$cuisines , 'food_types'=>$food_types]);
    }


    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }


    public function postAddFood(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/^\D{2,}$/',
            'description' => 'required|regex:/^\w{10,}$/'
            
        ]);
        $request->photo_path->store('images/food','public');

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
