<?php

namespace App\Http\Controllers;

use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;


//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;
use App\Accountant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\AccountantFormRequest;


class AccountantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountantFormRequest $request)
    {
        $accountant = new Accountant(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'address' => $request->get('address'),

      'phone' => $request->get('phone'),


      'sexe' => $request->get('sexe')
      
    ));
      // commencement 

   $image=Input::file('image');
          
    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/accountants/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);

    $accountant->image = '/images/catalog/accountants/'.$filename;

              $accountant->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/accountants');


    // fin

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accountant = Accountant::find($id);
        return view('accountants.show', compact('accountant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function allaccountants() {
     
     //$createcode= $tostring();

  $accountants =Accountant::orderBy('created_at','desc')->paginate(5);
  
    return View::make('accountants.allaccountants')
              ->with('accountants',$accountants )

             // ->with('__toString ', $__toString )
              ;
     }
}
