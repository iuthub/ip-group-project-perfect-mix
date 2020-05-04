<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Food;
use App\FoodType;
use App\User;
use App\Role;
use App\Vaucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PostsController extends Controller
{
    public function getIndex(){
    	return view('mainPage.index');
    }

    public function getDashboardIndex(){
            
        if(Auth::user()->role->name=='admin'){
                $users = User::orderBy('full_name','desc')->get();
            return view('admin.index', [
             'users' => $users
        ]);
            //return view('admin.index');
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

    public function getUserEdit(){

        $user = Auth::user();
        return view('auth.edit', [
             'user' => $user
        ]);
    }

    public function postUserEdit(Request $request){

        $user = Auth::user();
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        
        $user->full_name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if ($request->input('password')) {
            if($request->input('password')==$request->input('password_confirmation')){
                $user->password = Hash::make($request->input('password'));
            else{
                return redirect()->back()->with([
                    'errors'=>'Password does not match'
                ]);
            }
        }
        
        $user->save();    

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully updated!']);

    }

    public function getAdminUserEdit($id) {
        
        $user = User::find($id);
        $roles = Role::all();
        $vauchers = Vaucher::all();

        return view('auth.edit', [
            'user' => $user,'roles' => $roles , 'vauchers' => $vauchers
        ]);
    }

    public function postAdminUserEdit(Request $request) {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        $user = User::find($request->input('id'));

        $user->full_name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));    
        }
        $user->vaucher_id = ($request->input('vaucher_id'))?$request->input('vaucher_id'):$user->vaucher_id;

        $user->role_id = ($request->input('role_id'))?$request->input('role_id'):$user->role_id;
        
        $user->save();
        
        return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully updated!']);
    }

    public function getAdminUserDelete($id) {
        $user = User::find($id);
        
        $user->delete();

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully deleted!'
        ]);
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
