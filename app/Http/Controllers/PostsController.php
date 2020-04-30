<?php

namespace App\Http\Controllers;

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
}
