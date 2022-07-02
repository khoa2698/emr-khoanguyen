<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;

class LabResultController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childLabResultMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.labresult.create', compact('menuActive', 'childMenuActive'));
    }
    public function selectSubclinicalPatient(Request $request)
    {
        $selectedpatient = DB::table('subclinical_service')->where('patient_id', $request->selected_patient)->where('name', 'Xét nghiệm máu')->get();
        // dd($selectedpatient);
        if(count($selectedpatient) != 0) {
            // dd(1);
            $request->session()->put('patient_id', $request->selected_patient);
            return redirect()->route('labresult.create');
        }
        else{
            // dd(0);
            Session::forget('patient_id');
            return redirect()->route('labresult.create')->withErrors('Bệnh nhân chưa yêu cầu dịch vụ'); 
        }
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'name_subclinical_service' => ['required'],
            'url' => ['required'],
            'comment' => ['required'],
        ]);
        if($validated) {
            $params = [
                'patient_id' => $request->patient_id,
                'name' => $request->name_subclinical_service,
                'url' => $request->url,
                'comment' => $request->comment,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            try {
                DB::table('lab_result')->insert($params);
                Session::flash('success', 'Thêm kết quả xét nghiệm thành công');
            } catch (\Exception $err) {
                Session::flash('error', $err->getMessage());
            }
            return redirect()->route('labresult.create');
            // dd($request->all());
        }
    }
}
