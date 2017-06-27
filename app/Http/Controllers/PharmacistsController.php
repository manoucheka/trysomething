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
use App\Pharmacist;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\PharmacistFormRequest;

class PharmacistsController extends Controller
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
        return view('pharmacists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PharmacistFormRequest $request)
    {
        $pharmacist = new Pharmacist(array(
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
$path = public_path('images/catalog/pharmacists/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);

    $pharmacist->image = '/images/catalog/pharmacists/'.$filename;

              $pharmacist->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/pharmacists');


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
        $pharmacist = Pharmacist::find($id);
        return View('pharmacists.show', compact('pharmacist'));
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

    public function allpharmacists() {
     
     //$createcode= $tostring();

  $pharmacists =Pharmacist::orderBy('created_at','desc')->paginate(5);
  
    return View::make('pharmacists.allpharmacists')
              ->with('pharmacists',$pharmacists )

             // ->with('__toString ', $__toString )
              ;
     }


}
