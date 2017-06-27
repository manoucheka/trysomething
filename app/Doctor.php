<?php

namespace App;

use App\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    

    protected $fillable=[
        
        'name',
        'email',
        'address',
        'phone',
        'department_id',
        'sexe',
        'image'
        
    ];
     
  public function department(){ 
           return $this->belongsTo('App/Department');           
                            }

}
