<?php

namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;


class LoginController extends Controller
{
    
    public function profile()
       {
        return view('profile', array('user' => Auth::user()));
       }



    public function login(){
    	return view('authentication.login');
    	//return redirect ('admin/index');
    }


    public function postLogin(Request $request){
     

                       try {
                    if (Sentinel::authenticate($request->all())) {

                        $slug = Sentinel::getUser()->roles()->first()->slug;
                if($slug == 'admin')
         return redirect ('/earnings');
       elseif ($slug == 'manager') 
           return redirect('/tasks');
             # code...
         } else {
            return redirect()->back()->with(['error' =>' Wrong credentials. ']);
         } 
         

                    } catch (ThrottlingException $e) {

                               $delay = $e->getDelay();
                               return redirect()->back()->with(['error' =>
                                "you are banned for $delay seconds."]);

                                } 

         
       
    }

     public function logout() 
         {
         	Sentinel::logout();
         	return redirect('/');
         }
}
