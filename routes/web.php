<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' =>'visitors'], function() {

 Route::get('/register', 'RegistrationController@register');

Route::post('/register', 'RegistrationController@postRegister');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
//Route::get('/profile', 'RegistrationController@profile');
Route::get('/profile', 'RegistrationController@profile');
});

Route::get('admin/index',array('as'=>'admin','uses'=>'HomeController@admin'))->middleware('admin');

Route::get('/', 'HomeController@index');



/********* administration des patients ************/
Route::resource('patients', 'PatientsController');

   Route::get('admin/patients','PatientsController@allpatients')->middleware('admin');
   
/********* fin administration des patients ************/

/**  administration des departement *************/

Route::resource('departments', 'DepartmentsController');

Route::get('admin/departments','DepartmentsController@alldepartments')->middleware('admin');

/************ fin adm department****************/

/******************* doctor admin********************/
Route::resource('doctors', 'DoctorsController');
Route::get('admin/doctors','DoctorsController@alldoctors');
/**************** fin **********/

/*********** nurse **********************/
Route::resource('nurses', 'NursesController');

Route::get('admin/nurses','NursesController@allnurses')->middleware('admin');

/************** fin *********************/

/****************** pharmacists *******************/

Route::resource('pharmacists', 'PharmacistsController');

Route::get('admin/pharmacists','PharmacistsController@allpharmacists')->middleware('admin');
/**************** fin ***********************/

/**************** laboratorists ***********************/
Route::resource('laboratorists', 'LaboratoristsController');

Route::get('admin/laboratorists','LaboratoristsController@alllaboratorists')->middleware('admin');
/******************** laboratorists fin************************/

/**************** Accountant **********************/
Route::resource('accountants', 'AccountantsController');

Route::get('admin/accountants','AccountantsController@allaccountants')->middleware('admin');
/********************* fin *******************/


/**************** Receptionist **********************/
Route::resource('receptionists', 'ReceptionistsController');

Route::get('admin/receptionists','ReceptionistsController@allreceptionists')->middleware('admin');
/********************* fin *******************/


Route::get('/func', function () {
    return MyFuncs::create_code("John","123455555");
});


 /** catalyst/sentinel or manage user ******************/

  //Route::get('/register', 'RegistrationController@register');

//Route::post('/register', 'RegistrationController@postRegister');

//Route::get('/login', 'LoginController@login');
//Route::post('/login', 'LoginController@postLogin');
Route::post('/logout', 'LoginController@logout');

/******* end catalyst ********************************/

/*** admin controller ***************/

Route::get('/earnings', 'AdminController@earnings')->middleware('admin');
/********** fin admin controller **********/
Route::get('/tasks', 'managerController@tasks')->middleware('manager');

/******** index ***************************/
Route::get('/', 'HomeController@index');

//Route::get('/profile', 'RegistrationController@profile')->middleware('admin');
//Route::get('/profile', 'RegistrationController@profile');
/********** fin index ********************/
