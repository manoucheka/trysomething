<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;

//use Request;
use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;


//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;
use App\Patient;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\PatientFormRequest;
class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$patients=Patient::all();
        //return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

      public function store(PatientFormRequest $request)
{
    //$book=Request::all();
   //Book::create($book);
   //return redirect('books');

// commencement 
   // $book = new Book();


     $patient = new Patient(array(
      //'code' => $request->get('__toString '),
      'firstname' => $request->get('firstname'),
      'lastname' => $request->get('lastname'),
      'phone' => $request->get('phone'),

      'mobile' => $request->get('mobile'),

      'bloodgroup' => $request->get('bloodgroup'),
      'sexe' => $request->get('sexe'),
      'birthday' => $request->get('birthday'),

      'email' => $request->get('email'),
      'address' => $request->get('address')
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $patient->image = '/images/catalog/'.$filename;


              $patient->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/patients');


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
        //
        $patient = Patient::find($id);
        return View('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
   $patient=Patient::find($id);
   return view('patients.edit',compact('patient'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update($id)
{
   //
   $patientUpdate=Request::all();
   $patient=Patient::find($id);
   $patient->update($patientUpdate);
   return redirect('admin/patients');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


    public function destroy($id)
{
   Patient::find($id)->delete();
   return redirect('admin/patients');
}


public function allpatients() {
     
     //$createcode= $tostring();

  $patients =Patient::orderBy('created_at','desc')->paginate(5);
  
    return View::make('patients.allpatients')
              ->with('patients',$patients )

             // ->with('__toString ', $__toString )
              ;
     }



}
