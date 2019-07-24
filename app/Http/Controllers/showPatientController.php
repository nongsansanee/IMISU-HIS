<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;




class showPatientController extends Controller
{
    /**
     * Display the products dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $showpatients = create_show_patient::sortable()->paginate(5);
       // return view('createshowpatients',compact('showpatients'));

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

       return view('createshowpatients')->with(['patients'=>$patients]);
    }


}