<?php

namespace App;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    

    protected $fillable=[
        'code',
        'firstname',
        'lastname',
        'phone',
        'mobile',

        'bloodgroup',
        'sexe',
        'birthday',
        'email',
        'address',
        'image'
    ];
 

}
