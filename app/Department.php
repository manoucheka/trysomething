<?php

namespace App;

use App\Doctor;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    

    protected $fillable=[
        
        'department',
        'description'
        
    ];
     
     public function doctors() 
        {
        	return $this->hasMany('App\Doctor');
        } 

}
