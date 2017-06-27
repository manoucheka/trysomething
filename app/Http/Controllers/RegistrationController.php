<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use Sentinel;
use Auth;
class RegistrationController extends Controller
{
    public function register() {
     return view('authentication.register');
  }


  public function postRegister(Request $request) {

$user = Sentinel::registerAndActivate($request->all());

$role = Sentinel::findRoleBySlug('manager');
$role->users()->attach($user);                    
                   
return redirect ('/');
      }

public function profile()
       {
       	return view('profile', array('user' => Auth::user()));
         //return view('/profile')->with(array('user'=>Auth()));

          
       }
      


}
