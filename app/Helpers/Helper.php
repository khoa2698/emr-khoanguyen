<?php

namespace App\Helpers;

use App\Models\Patient;
use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class Helper
{
    public static function getPatientAddress($province_id, $district_id, $ward_id, $home_address)
    {
        // dd(($home_address));
        $html = '';
        if($home_address != null) {
            $html .= $home_address . ', ';
        }
        $ward = Ward::where('id', $ward_id)->first()->name;
        $district = District::where('id', $district_id)->first()->name;
        $province = Province::where('id', $province_id)->first()->name;
        $html .= $ward . ', ' . $district . ', ' . $province;
        return $html;
    }

    public static function getPatientInfo($patient_id)
    {
        $html = '';
        $patient = Patient::where('patient_id', $patient_id)->first();
        if(!empty($patient)) {
            $html .= $patient->patient_id .'-'. $patient->full_name .'-'. self::getPatientAddress($patient->city_id, $patient->district_id, $patient->ward_id, $patient->home_address);
            return $html;
        }
        $html .= 'Bệnh nhân không tồn tại, vui lòng chọn lại';
        return $html;
    }
    
    public static function getEthnicName($id)
    {
        if($id != null){
            $ethnic = DB::table('ethnics')->where('ethnic_id', $id)->first()->name;
            return $ethnic;
        }
        return '';

    }

    public static function getLabResultLink($patient_id) {
        $html = '';
        $results = DB::table('lab_result')->where('patient_id', $patient_id)->orderByDesc('created_at')->get();
        if(count($results) > 0) {
            foreach($results as $result) {
                $html .= '<a target="_blank" href="'. $result->url .'">
                            <img style="width:250px" src="'. $result->url .'" alt="photo">
                        </a>';
            }
            return $html;
        }
        $html .= 'Chưa có kết quả xét nghiệm';
        return $html;
        
    }
    public static function getImagingResultLink($patient_id) {
        $html = '';
        $results = DB::table('imaging_result')->where('patient_id', $patient_id)->orderByDesc('created_at')->get();
        if(count($results) > 0) {
            foreach($results as $result) {
                $html .= '<a target="_blank" href="'. $result->url .'">
                            <img style="width:250px" src="'. $result->url .'" alt="photo">
                        </a>';
            }
            return $html;
        }
        $html .= 'Chưa có kết quả ảnh chụp';
        return $html;
        
    }
}
