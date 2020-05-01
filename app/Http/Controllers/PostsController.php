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
}
