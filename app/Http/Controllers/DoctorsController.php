<?php


namespace App\Http\Controllers;
use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;
//use App\Http\Controllers\Doctor;

//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;
use App\Doctor;
use App\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\DoctorFormRequest;

class DoctorsController extends Controller
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
           return view('doctors.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorFormRequest $request)
    {
        
            $doctor = new Doctor(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'address' => $request->get('address'),
      'phone' => $request->get('phone'),
      //$doctor->department_id =Input::get('department_id');
      'department_id' => $request->get('department_id'),
      'sexe' => $request->get('sexe')
      
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/doctors/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $doctor->image = '/images/catalog/doctors/'.$filename;


              $doctor->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/doctors');



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


   public function alldoctors() {



     
     //$createcode= $tostring();

  $doctors =Doctor::orderBy('created_at','desc')->paginate(5);
       
       $departments=array();
     foreach( Department::all() as $department){
     $departments[$department->id]=$department->department;
         }
  //$departments = Department::all();
  
    //return View::make('doctors.alldoctors')
              //->with('doctors',$doctors )
             // ->with('departments', $departments); 

      return View::make('doctors.alldoctors')->with(array('doctors'=>$doctors, 'departments'=>$departments));            
             
              
     }


}
