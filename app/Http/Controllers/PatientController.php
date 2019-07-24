<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $patients = DB::table('patients')
        // ->join('divisions','patients.division_id','=','divisions.id')
        // ->join('treatments','patients.id','=','treatments.patient_id')
        // ->select(
        //     'patients.*',
        //     'divisions.name as divisions_name',
        //     'treatments.name as treatments_name',
        //     'treatments.created_at as treatments_date',
        // )
        // ->orderBy('patients.id','asc')
        // ->orderBy('treatments.created_at', 'desc')
        // ->paginate(20)
        // ->get();

        //--success order by
        // $patients = DB::table('patients')
        //                 ->join('divisions','patients.division_id','=','divisions.id')
        //                 ->join('treatments','patients.id','=','treatments.patient_id')
        //                 ->select(
        //                             'patients.*',
        //                             'divisions.name as divisions_name',
        //                             'treatments.name as treatments_name',
        //                             'treatments.created_at as treatments_date',
        //                         )
        //                  ->orderBy('patients.id','asc')
        //                  ->orderBy('treatments.created_at', 'desc')
        //                 ->paginate(20);


            // $latest = DB::table('treatments')
            //             ->select('patient_id', 'name as treatment_name',  DB::raw('MAX(updated_at) as latest_treat'))
            //             ->groupBy('patient_id','name')
            //             ->orderBy('patient_id','asc')
            //             ->orderBy('updated_at', 'desc');

            // $latest = DB::table('treatments')
                        //  ->whereRaw('patient_id in (select max(updated_at) as latest_treat from treatments group by (patient_id))');

            $latest = DB::table('treatments')
                         ->select('patient_id',  DB::raw('MAX(updated_at) as latest_treat'))
                        ->groupBy('patient_id');
                       

            $patients = DB::table('patients')
                        ->join('divisions','patients.division_id',"=",'divisions.id')
                        ->joinSub($latest, 'patient', function ($join){
                            $join->on('patient_id','=','patients.id');
                        
                            })
                        ->select(
                            'patients.*',
                            'divisions.name as division_name',
                            'latest_treat',
                   
                            )
                         ->paginate(20);
                      //  ->get();

      
       

        //return $patients;
        //$patients = \App\Patient::paginate(20);
       // $patients = DB::table('patients')->paginate(15);
     return view('patient')->with(['patients'=>$patients]);
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
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
