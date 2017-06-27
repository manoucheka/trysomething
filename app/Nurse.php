<?php

namespace App;

//use App\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
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
