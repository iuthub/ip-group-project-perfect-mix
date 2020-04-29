<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getIndex(){
    	return view('mainPage.index');
    }

    public function loginIndex(){
    	return view('auth.login');
    }

    public function createAdmin(Request $req){
    	// $this->validate($req,['
			
    	// 	']);
    		
    	return view('mainPage.index');


    }
}
