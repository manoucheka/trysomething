<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/index',array('as'=>'admin','uses'=>'HomeController@admin'));

Route::get('/', 'HomeController@index');



/********* administration des patients ************/
Route::resource('patients', 'PatientsController');

   Route::get('admin/patients','PatientsController@allpatients');



/********* fin administration des patients ************/


Route::get('/func', function () {
    return MyFuncs::create_code("John","123455555");
});


 /** catalyst/sentinel or manage user ******************/

  Route::get('admin/register', 'RegistrationController@register');

Route::post('/register', 'RegistrationController@postRegister');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
/******* end catalyst ********************************/



/******** index ***************************/
Route::get('/', 'HomeController@index');


/********** fin index ********************/
