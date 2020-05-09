<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Cuisine;
use App\Food;
use App\FoodType;
use App\User;
use App\Role;
use App\Tables;
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

    public function getUser()
    {
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }

        $users = User::orderBy('full_name','desc')->get();
        return view('admin.users', [
             'users' => $users,
        ]);
    }

    public function getAddUser(){
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        return view('admin.addUser');
    }

    public function postAddUser(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|regex:/[A-z]{2,}/',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required|regex:/^[0-9\+]{7,}$/',
            'password' => 'required|regex:/.{6,}/'
        ]);
        
        $user = new User ([
            'full_name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'password' => Hash::make($request->input('password'))
        ]);
        $user->save();
        
        return redirect()->route('getUsers')->with('info', 'User added');
    }

    public function getDashboardIndex(){
        if(Auth::user()->role->name=="admin"){
                $users = User::orderBy('full_name','desc')->get();
                $foods = Food::orderBy('name','desc')->get();
                $procesess = DB::table('order_processes')
                ->join('users','users.id','=','order_processes.user_id')
                ->join('foods','foods.id','=','order_processes.food_id')
                ->select('order_processes.id','users.full_name','foods.name','order_processes.created_at','order_processes.quantity')
                ->orderBy('created_at','desc')
                ->get();
                
                $tables = DB::table('tables')
                ->join('users','users.id','=','tables.user_id')
                ->select('users.full_name','tables.number_of_people','tables.seat_number','tables.timeStart','tables.timeEnd','tables.id')
                ->orderBy('seat_number','desc')
                ->get();


                $histories = DB::table('order_histories')
                ->join('users','users.id','=','order_histories.user_id')
                ->join('foods','foods.id','=','order_histories.food_id')
                ->select('users.id','users.full_name','foods.id','foods.name','order_histories.created_at','order_histories.quantity')
                ->orderBy('created_at','desc')
                ->paginate(10);
                
            return view('admin.index', [
                 'users' => $users,
                 'foods' => $foods,
                 'procesess' => $procesess,
                 'tables' => $tables,
                 'histories' => $histories,
            ]);

        }
        else 
            {
                $user = Auth::user();

                $orderHistories = DB::table('order_histories')
                ->join('foods','foods.id','=','order_histories.food_id')
                ->select('foods.id','foods.name','foods.description','foods.photo_path','foods.price','order_histories.created_at','order_histories.quantity')
                ->orderBy('created_at','desc')
                ->where('order_histories.user_id',$user->id)
                ->get();

                $countOrder = OrderHistory::query()->where('user_id',
                  'LIKE', "%{$user->id}%")->count();

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
            'name' => 'required|regex:/[A-z]{2,}/',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required|regex:/^[0-9\+]{7,}$/',
        ]);
        
        $user->full_name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if ($request->input('password')) {
            if($request->input('password')==$request->input('password_confirmation')){
                $this->validate($request, [
                    'password' => ['required', 'string', 'min:6', 'confirmed']
                ]);
                $user->password = Hash::make($request->input('password'));
            }
            else{
                return redirect()->back()->with([
                    'info'=>'Password does not match'
                ]);
            }
        }
        
        $user->save();    

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully updated!']);

    }

    public function getAdminUserEdit($id) {

        $user = User::find($id);
        
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $roles = Role::all();
        $vauchers = Vaucher::all();

        return view('auth.edit', [
            'user' => $user,'roles' => $roles , 'vauchers' => $vauchers
        ]);
    }

    public function postAdminUserEdit(Request $request) {


        $this->validate($request, [
            'name' => 'required|regex:/[A-z]{2,}/',
            'address' => 'required',
            'phone_number' => 'required|regex:/^[0-9\+]{7,}$/',
        ]);

        $user = User::find($request->input('id'));

        $user->full_name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if ($request->input('password')) {
            $this->validate($request, [
                    'password' => ['required', 'string', 'min:6', 'confirmed']
                ]);
            $user->password = Hash::make($request->input('password'));    
        }
        $user->vaucher_id = ($request->input('vaucher_id'))?$request->input('vaucher_id'):$user->vaucher_id;

        $user->role_id = ($request->input('role_id'))?$request->input('role_id'):$user->role_id;
        
        $user->save();
        
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully updated!']);            
        }
        
        return redirect()->route('getUsers')->with([
            'info'=>'Successfully updated!']);
    }

    public function getAdminUserDelete($id) {
        $user = User::find($id);
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $user->delete();

        return redirect()->route('getUsers')->with([
            'info'=>'Successfully deleted!'
        ]);
    }   

    public function tables(Request $request) {

        $user = Auth::user();

         $this->validate($request, [
            'table' => 'required',
            'numPeople' => 'required',
            'reserveStartTime' => 'required',
            'reserveEndTime' => 'required'
        ]);

        $table = new Tables ([
            'user_id' => $user->id,
            'seat_number' => $request->input('table'),
            'number_of_people' => $request->input('numPeople'),
            'timeStart' => $request->input('reserveStartTime'),
            'timeEnd' => $request->input('reserveEndTime')
        ]);
        $table->save();

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Table booked!'
        ]);
    }   

    public function acceptOrder(Request $request){

        $order = OrderProcess::find($request->input('id'));
        //$food = Food::find($order_id->food_id);
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'errors'=>'You are not authorized!']);            
        }
        $history = new OrderHistory ([
            'user_id' => $order->user_id,
            'food_id' => $order->food_id,
            'quantity' => $order->quantity,
        ]);
        $history->save();
        $order->delete();

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Order accepted!']);

    }

    public function acceptTable(Request $request){

        $table = Tables::find($request->input('id'));
        if(!(Auth::user()->role->name=="admin")){
            return redirect()->route('dashboardIndex')->with([
            'info'=>'You are not authorized!']);            
        }
        $table->delete();

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Table accepted!']);

    }

    public function sendEmail(Request $request){

        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required'
        ]);

        $user = Auth::user();
        Mail::to('info@perfectmix.uz')->send(new Contact($user->full_name,$request->input('subject'),$request->input('message')));

        return redirect()->route('dashboardIndex')->with([
            'info'=>'Message successfully sended!']);
    }


}
