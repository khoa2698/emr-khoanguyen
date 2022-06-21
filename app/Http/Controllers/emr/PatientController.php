<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Http\Requests\emr\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;

class PatientController extends Controller
{
    public function index()
    {
        $all_patients = Patient::orderByDesc('id')->paginate(20)->withQueryString();
        return view('admin.patients.index', compact('all_patients'));
    }

    public function create()
    {
        $ethnics = DB::table('ethnics')->orderBy('id')->get();
        $provinces = Province::all();
        $province = Province::first();
        $districts = $province->districts;
        // $wards = Ward::all();
        return view('admin.patients.create', compact('ethnics', 'provinces', 'districts'));
    }

    public function loadDistrict(Request $request)
    {
        $province_id = (int)$request->province_id;
        $districts = District::where('province_id', $province_id)->get();
        $results = '<option value="">Chọn Quận / Huyện</option>';
        if ($districts) {
            foreach($districts as $district) {
                $results .= '<option value="'. $district->id .'">'. $district->name .'</option>';
            }
        }
        return $results;
    }

    public function loadWard(Request $request)
    {
        $district_id = (int)$request->district_id;
        $wards = Ward::where('district_id', $district_id)->get();
        $results = '<option value="">Chọn Phường / Xã</option>';
        if ($wards) {
            foreach($wards as $ward) {
                $results .= '<option value="'. $ward->id .'">'. $ward->name .'</option>';
            }
        }
        return $results;
    }

    public function store(PatientRequest $request)
    {
        $patient_id = 'BN' . time();
        $params = [
            'patient_id' => $patient_id,
            'title' => $request->title,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'identity_number' => $request->identity_number,
            'phone_patient' => $request->phone_patient,
            'occupation' => $request->occupation,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'ethnic_id' => $request->ethnic_id,
            'religion' => $request->religion,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'ward_id' => $request->ward_id,
            'home_address' => $request->home_address,
            'marital_status' => $request->marital_status,
            'name_next_of_kin' => $request->name_next_of_kin,
            'home_next_of_kin' => $request->home_next_of_kin,
            'phone_next_of_kin' => $request->phone_next_of_kin,
            'type_of_object' => $request->type_of_object,
            'health_insurance_id' => $request->health_insurance_id,
            'health_insurance_date' => $request->health_insurance_date,
        ];
        $new_patient = new Patient($params);
        if($new_patient->save()){
            return redirect()->route('patient.index')->withSuccess('Thêm bệnh nhân mới thành công.');
        }
        return redirect()->route('patient.index')->withErrors('Có lỗi, thử lại sau.');
    }
    public function edit($id)
    {
        
    }
}
