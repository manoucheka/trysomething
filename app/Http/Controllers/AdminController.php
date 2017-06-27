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


class AdminController extends Controller
{
    public function earnings()
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
        
       	return view('admins.earnings')->with(array(
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

       
}
