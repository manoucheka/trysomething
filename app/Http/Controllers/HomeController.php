<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\View;
use App\Patient;
use App\Department;
use App\Doctor;
use App\Nurse;
use App\Pharmacist;
use App\Laboratorist;
use App\Accountant;
use App\Receptionist;

class HomeController extends Controller
{


  public function admin()
      {

        $patients = Patient::count();
         $departments = Department::count();
          $doctors = Doctor::count();
           $nurses = Nurse::count();
            $pharmacists = Pharmacist::count();
             $laboratorists = Laboratorist::count();
              $accountants = Accountant::count();
               $receptionists = Receptionist::count();

         $lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
               

   return \View::make('home.admin')->with(array(
                  'patients' => $patients,
                  'departments'=>$departments,
                  'doctors'=>$doctors,
                  'nurses'=>$nurses,
                  'pharmacists'=>$pharmacists,
                  'laboratorists'=>$laboratorists,
                  'accountants'=>$accountants,
                  'receptionists'=>$receptionists
   ));  
      }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return \View::make('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

   



}
