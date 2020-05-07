<?php

namespace App\Http\Controllers;
use DB;
use App\Cuisine;
use App\Food;
use App\FoodType;
use App\User;
use App\Role;
use App\OrderHistory;
use App\OrderProcess;
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
                $foods = Food::orderBy('name','desc')->get();
            return view('admin.index', [
             'users' => $users,
             'foods' => $foods
        ]);
            //return view('admin.index');
        }
        elseif(Auth::user()->role->name=='employer')
            {
                return view('employer.index');
            }
        else 
            {
                $user = Auth::user();
                // $userOrderProcess = OrderProcess::query()->where('user_id',
                //  'LIKE', "%{$user->id}%")->get();

                // $orderHistories = DB::table('order_histories')
                // ->join('foods','foods.id','=','order_histories.food_id')
                // ->select('foods.id','foods.name','foods.description','foods.photo_path','foods.price','order_histories.created_at','order_histories.quantity')
                // ->orderBy('created_at','desc')
                // ->where('order_histories.user_id',$user->id)
                // ->paginate(5);

                $orderHistories = DB::table('order_processes')
                ->join('foods','foods.id','=','order_processes.food_id')
                ->select('foods.id','foods.name','foods.description','foods.photo_path','foods.price','order_processes.created_at','order_processes.quantity')
                ->orderBy('created_at','desc')
                ->where('order_processes.user_id',$user->id)
                ->get();

                $countOrder = OrderProcess::query()->where('user_id',
                  'LIKE', "%{$user->id}%")->count();

                // $orderProcess = Food::query()->where('id',
                //  'LIKE', "%{$userOrderProcess->food_id}%")->get();
                return view('user.index',['user'=>$user,'orderHistories'=>$orderHistories,'countOrder'=>$countOrder]);
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
        ]);
        
        $user->full_name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if ($request->input('password')) {
            if($request->input('password')==$request->input('password_confirmation')){
                $this->validate($request, [
                    'password' => ['required', 'string', 'min:8', 'confirmed']
                ]);
                $user->password = Hash::make($request->input('password'));
            }
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
            $this->validate($request, [
                    'password' => ['required', 'string', 'min:8', 'confirmed']
                ]);
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

}
