<?php

namespace App\Http\Controllers;
use DB;
use App\Cuisine;
use App\FoodType;
use App\Food;
use App\Role;
use App\Vaucher;
use Illuminate\Http\Request;
use App\OrderProcess;
use Illuminate\Support\Facades\Auth;

class FoodsController extends Controller
{
    public function getAddFood()
    {
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }

        $food_types = FoodType::all();
        $cuisines = Cuisine::all();
        return view('food.addFood', ['cuisines'=>$cuisines , 'food_types'=>$food_types]);
    }

    public function getFood()
    {
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }

        $foods = Food::orderBy('name','desc')->get();
        $types = FoodType::all();
        $cuisines = Cuisine::all();
        return view('admin.foods', ['foods'=>$foods, 
            'cuisines'=>$cuisines,
            'types'=>$types]
        );
    }

    public function getMenuIndex(){
        $foods = Food::orderBy('type_id','asc')->get();;
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
        
        $this->validate($request, [
            'name' => 'required|regex:/[A-z]{2,}/',
        ]);
        
        $type = new FoodType ([
            'name' => $request->input('name'),
            'photo_path' => $photo
        ]);
        $type->save();
        
        return redirect()->route('getFoods')->with('info', 'Type created');
    }

    public function getDeleteFoodType($id){
        $type = FoodType::find($id);
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $type->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }

    public function getDeleteFoodCuisine($id){
        $cuisine = Cuisine::find($id);
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $cuisine->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }

    public function postAddFoodCuisine(Request $request)
    {
        $photo = $request->photo_path->store('images/food','public');
        $this->validate($request, [
            'name' => 'required|regex:/[A-z]{2,}/',
        ]);
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
            'name' => 'required|regex:/[A-z]{2,}/',
            'description' => 'required',
            'type_id' => 'required',
            'cuisine_id' => 'required',
            'price' => 'required|regex:/^[0-9]*\.?[0-9]*$/'
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
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'errors'=>'You are not authorized!']);            
        }
    	return view('food.editFood', [
            'food' => $food , 'cuisines'=>$cuisines , 'food_types'=>$food_types
        ]);

    }

    public function postEditFood(Request $request){
    	$this->validate($request, [
            'name' => 'required|regex:/[A-z]{2,}/',
            'description' => 'required',
            'price' => 'required|regex:/^((([1-9]\d*)|0)(.\d+)?)$/'
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
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $food->delete();

        return redirect()->route('getFoods')->with([
            'info'=>'Successfully deleted!'
        ]);
    }

    public function statusFoods(){
        
        $user = Auth::user();
        $roles = Role::all();
        $vauchers = Vaucher::all();
        $procesess = DB::table('order_processes')
                ->join('users','users.id','=','order_processes.user_id')
                ->join('foods','foods.id','=','order_processes.food_id')
                ->select('order_processes.id','users.full_name','foods.name','order_processes.created_at','order_processes.quantity')
                ->orderBy('created_at','desc')
                ->where('user_id',$user->id)
                ->get();
                
        $tables = DB::table('tables')
                ->join('users','users.id','=','tables.user_id')
                ->select('users.full_name','tables.number_of_people','tables.seat_number','tables.timeStart','tables.timeEnd','tables.id')
                ->orderBy('seat_number','desc')
                ->where('user_id',$user->id)
                ->get();

        return view('mainPage.status', ['user'=>$user,'procesess'=>$procesess, 
            'tables'=>$tables,'roles'=>$roles,'vauchers' => $vauchers]
        );
    }

}
