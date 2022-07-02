<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\HospitalHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HospitalHistoryController extends Controller
{
    public $menuActive = 'patientMenu';
    public $childMenuActive = 'childHospitalHistoryMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.hospitalhistory.create', compact('menuActive', 'childMenuActive'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'date_attented' => ['required'],
            'date_admitted' => ['required'],
            'admit_dept' => ['required'],
            'reason' => ['required'],
        ]);
        if($validated) {

            try {
                HospitalHistory::create($request->except('_token'));
                Session::flash('success', 'Thêm lịch sử khám thành công, tiếp tục thủ tục');
            } catch (\Exception $err) {
                Session::flash('error', $err->getMessage());
            }
            return redirect()->route('vital.create');
            // dd($request->all());
        }
    }
}
