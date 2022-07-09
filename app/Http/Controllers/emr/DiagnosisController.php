<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DiagnosisController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childDiagnosisMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        $icd10s = DB::table('icd10')->orderBy('id', 'ASC')->get();
        return view('admin.diagnosis.create', compact('menuActive', 'childMenuActive', 'icd10s'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'icd10_main_code' => ['required'],
            'diagnosis' => ['required'],
            'disease_plan' => ['required'],
        ]);
        if($validated) {
            $params = [
                "patient_id" => $request->patient_id,
                "icd10_main_code" => $request->icd10_main_code,
                "icd10_sub_code" => $request->icd10_sub_code,
                "diagnosis" => $request->diagnosis,
                "disease_prognosis" => $request->disease_prognosis,
                "disease_plan" => $request->disease_plan,
            ];
            try {
                Diagnosis::create($params);
                Session::flash('success', 'Thêm kết quả chẩn đoán thành công, tiếp tục thủ tục');
            } catch (\Exception $err) {
                Session::flash('error', $err->getMessage());
                return redirect()->route('diagnosis.create');
            }
            return redirect()->route('diagnosis.create');
            // dd($request->all());
        }
    }
}
