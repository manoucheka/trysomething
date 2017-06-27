<?php

namespace App;

//use App\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    

    protected $fillable=[
        
        'name',
        'email',
        'address',
        'phone',
        'sexe',
        'image'
        
    ];
     
  

}
