<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\Vital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VitalController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childVitalMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.vital.create', compact('menuActive', 'childMenuActive'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'temperature' => ['required'],
            'systolic' => ['required'],
            'diastolic' => ['required'],
        ]);
        if($validated) {

            try {
                Vital::create($request->except('_token'));
                Session::flash('success', 'Thêm sinh hiệu thành công, tiếp tục thủ tục');
            } catch (\Exception $err) {
                Session::flash('error', $err->getMessage());
            }
            return redirect()->route('generalclinical.create');
            // dd($request->all());
        }
    }
}
