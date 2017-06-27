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
use App\Laboratorist;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\LaboratoristFormRequest;


class LaboratoristsController extends Controller
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
        return view('laboratorists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboratoristFormRequest $request)
    {
        $laboratorist = new Laboratorist(array(
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
$path = public_path('images/catalog/laboratorists/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);

    $laboratorist->image = '/images/catalog/laboratorists/'.$filename;

              $laboratorist->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/laboratorists');


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
        $laboratorist = Laboratorist::find($id);
        return view ('laboratorists.show', compact('laboratorist'));
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

    public function alllaboratorists() {
     
     //$createcode= $tostring();

  $laboratorists =Laboratorist::orderBy('created_at','desc')->paginate(5);
  
    return View::make('laboratorists.alllaboratorists')
              ->with('laboratorists',$laboratorists )

             // ->with('__toString ', $__toString )
              ;
     }

}
