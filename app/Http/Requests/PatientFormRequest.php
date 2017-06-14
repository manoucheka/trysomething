<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'firstname' => 'required',
            'lastname' =>'required',

            'phone' =>'required',
            'mobile' =>'required',
            'bloodgroup' =>'required',
            'sexe' =>'required',
            'birthday' =>'required',
            'email' =>'required',

            'address'=>'required',
            //'activation' => 'required',
            
            'image' => 'required|mimes:jpeg,png,gif'



        ];
    }
}
