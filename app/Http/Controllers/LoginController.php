<?php

namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function login(){
    	return view('authentication.login');
    	//return redirect ('admin/index');
    }


    public function postLogin(Request $request){
         Sentinel::authenticate($request->all());
         //return Sentinel::check();

         return redirect ('admin/index');
    }
}
