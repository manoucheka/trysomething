<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class UserController extends Controller
{
    //
    public function profile($id)
       {
       	return view('profile', array('user' => Sentinel::user()));
       }


   public function profil($id){ 
     if($id != Sentinel::user()->id) {
        return Redirect::to('logout');                
                                 }
     
   $sentinels = Sentinel::where('user_id','=',Sentinel::user()->id);
   return View::make('profile')->with(array('sentinels' => $sentinels)); 
 //return View::make('users.profile')->with(array('posts'=>$posts,'comments'=>$comments));
   
}



}
