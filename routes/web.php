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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/patients', function () {
//    return view('patient');
// });

Route::get('/patients','PatientController@index')->middleware('auth');

Route::get('/patientsDataTables',function(){

   // $patients = \App\patient::all();
       $patients = DB::table('patients')
         ->join('divisions','patients.division_id','=','divisions.id')
         ->join('treatments','patients.id','=','treatments.patient_id')
         ->select(
             'patients.*',
             'divisions.name as divisions_name',
             'treatments.name as treatments_name',
             'treatments.created_at as treatments_date',
         )
         ->orderBy('patients.id','asc')
         ->orderBy('treatments.created_at', 'desc')
         //->paginate(20);
        ->get();
    return view('patientsDataTables')->with(['patients'=>$patients]);
 });

Route::get('/testDataTables', function () {
    return view('testDataTables');
});
