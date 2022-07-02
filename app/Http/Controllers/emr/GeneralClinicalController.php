<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\GeneralClinical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GeneralClinicalController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childClinicalMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.generalclinical.create', compact('menuActive', 'childMenuActive'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'patient_id' => ['bail','required', 'exists:patients,patient_id'],
            'name_subclinical_service' => ['required'],
        ]);
        if($validated) {
            $params = [
                'patient_id' => $request->patient_id,
                'diagnosis_tuanhoan' => $request->diagnosis_tuanhoan,
                'diagnosis_hohap' => $request->diagnosis_hohap,
                'diagnosis_tieuhoa' => $request->diagnosis_tieuhoa,
                'diagnosis_than_tietnieu_sinhduc' => $request->diagnosis_than_tietnieu_sinhduc,
                'diagnosis_thankinh' => $request->diagnosis_thankinh,
                'diagnosis_coxuongkhop' => $request->diagnosis_coxuongkhop,
                'diagnosis_taimuihong' => $request->diagnosis_taimuihong,
                'diagnosis_ranghammat' => $request->diagnosis_ranghammat,
                'diagnosis_mat' => $request->diagnosis_mat,
                'diagnosis_noitiet_dinhduong_khac' => $request->diagnosis_noitiet_dinhduong_khac,
                'diagnosis_syndrome' => $request->diagnosis_syndrome,
            ];
            $name_subclinical_service = '';
            $subclinical_services = $request->name_subclinical_service;
            foreach($subclinical_services as $subclinical_service) {
                $name_subclinical_service .= $subclinical_service . ',';
            }
            DB::beginTransaction();
            try {

                GeneralClinical::create($params);

                $subclinical_services = $request->name_subclinical_service;
                foreach($subclinical_services as $subclinical_service) {
                    DB::table('subclinical_service')->insert([
                        'patient_id' => $request->patient_id,
                        'name' => $subclinical_service,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }
                
                Session::flash('success', 'Thêm khám lâm sàng tổng quát thành công, tiếp tục thủ tục');
                DB::commit();
            } catch (\Exception $err) {
                DB::rollBack();
                Session::flash('error', $err->getMessage());
                return redirect()->route('generalclinical.create');
            }
            return redirect()->route('diagnosis.create');
            // dd($request->all());
        }
    }
}
