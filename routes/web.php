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
//    $latest = DB::table('treatments')
//             ->select('patient_id',  DB::raw('MAX(updated_at) as latest_treat'))
//             ->groupBy('patient_id');
            

//     $patients = DB::table('patients')
//                 ->join('divisions','patients.division_id',"=",'divisions.id')
//                 ->joinSub($latest, 'patient', function ($join){
//                     $join->on('patient_id','=','patients.id');
            
//                 })
//                 ->select(
//                     'patients.*',
//                     'divisions.name as division_name',
//                     'latest_treat',
//                 )
//                  ->get();

  //  $patients = Patient::paginate(20);
    $patients = \App\patient::all();
    return view('patientsDataTables')->with(['patients'=>$patients]);
 });

Route::get('/testDataTables', function () {
    return view('testDataTables');
});

Route::get('/mypatients', 'showPatientController@index');
