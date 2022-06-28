<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HospitalHistoryController extends Controller
{
    public $menuActive = 'patientMenu';
    public $childMenuActive = 'childHospitalHistoryMenu';
    public function create()
    {
        // Session::flush();
        // $patient_id = Session::get('patient_id');
        // if(is_null($patient_id)) {
        //     Session::put('patient_id',1);
        // } else {
        //     Session::forget('patient_id');
        // }
        // dd($patient_id);
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.hospitalhistory.create', compact('menuActive', 'childMenuActive'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
