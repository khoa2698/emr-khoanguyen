<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\HospitalHistory;
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
        // $lastest_subclinical = DB::table('subclinical_service')->where('patient_id', $request->selected_patient)->max('time');
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $request->selected_patient)->max('time');
        $selectedpatient = DB::table('subclinical_service')->where('patient_id', $request->selected_patient)->where('time', $lastest_hospitalhistory)->get();
        // Nếu bệnh nhân yêu cầu dịch vụ cls trong lần khám đó
        if(count($selectedpatient) != 0) {
            $request->session()->put('patient_id', $request->selected_patient);
            return redirect()->route('labresult.create');
        }
        else{
            Session::forget('patient_id');
            return redirect()->route('labresult.create'); 
        }
    }
    public function store(Request $request)
    {
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $request->patient_id)->max('time');
        // Kiểm tra trước khi lưu thông tin xét nghiệm
        $selectedpatient = DB::table('subclinical_service')->where('patient_id', $request->patient_id)->where('time', $lastest_hospitalhistory)->where('name', 'Xét nghiệm máu')->get();
        if(count($selectedpatient) == 0) {
            return redirect()->route('labresult.create')->withErrors('Bệnh nhân chưa yêu cầu dịch vụ xét nghiệm');
        }

        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'name_subclinical_service' => ['required'],
            'url' => ['required'],
            'comment' => ['required'],
        ]);
        if($validated) {
            $params = [
                'patient_id' => $request->patient_id,
                'time' => $lastest_hospitalhistory,
                'name' => $request->name_subclinical_service,
                'url' => $request->url,
                'comment' => $request->comment,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            try {
                DB::table('lab_result')->insert($params);
                Session::flash('success', 'Thêm kết quả '.$request->name_subclinical_service.' thành công');
            } catch (\Exception $err) {
                Session::flash('error', $err->getMessage());
            }
            return redirect()->route('labresult.create');
            // dd($request->all());
        }
    }
}
