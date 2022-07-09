<?php

namespace App\Helpers;

use App\Models\HospitalHistory;
use App\Models\Patient;
use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $patient_id)->max('time');
        $lastest_LabResult = DB::table('lab_result')->where('patient_id', $patient_id)->max('time');
        // Nếu chưa có kết quả lần khám mới nhất
        if($lastest_hospitalhistory != $lastest_LabResult) {
            $html .= 'Chưa có kết quả xét nghiệm lần khám '. $lastest_hospitalhistory;
        }
        $time_results = DB::table('lab_result')->select(['time'])->where('patient_id', $patient_id)->groupBy('time')->orderBy('time', 'desc')->get();
        if(count($time_results) > 0){
            foreach ($time_results as $time_result) {
                // dd($time_result);
                $html .= '<h5 style="margin-top:20px">Kết quả xét nghiệm lần khám ' . $time_result->time .'</h5>';
                $url_results = DB::table('lab_result')->select(['url'])->where('patient_id', $patient_id)->where('time', $time_result->time)->orderBy('created_at', 'desc')->get();
                foreach($url_results as $url_result) {
                    $html .= '<a target="_blank" href="'. $url_result->url .'">
                                <img style="width:250px; height:250px;margin-bottom: 10px" src="'. $url_result->url .'" alt="photo">
                            </a>';
                }
            }
        }
        return $html;
        
    }
    public static function getImagingResultLink($patient_id) {
        $html = '';
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $patient_id)->max('time');
        $lastest_ImagingResult = DB::table('imaging_result')->where('patient_id', $patient_id)->max('time');
        // Nếu chưa có kết quả lần khám mới nhất
        if($lastest_hospitalhistory != $lastest_ImagingResult) {
            $html .= 'Chưa có kết quả ảnh chụp lần khám '. $lastest_hospitalhistory;
        }
        $time_results = DB::table('imaging_result')->select(['time'])->where('patient_id', $patient_id)->groupBy('time')->orderBy('time', 'desc')->get();
        if(count($time_results) > 0){
            foreach ($time_results as $time_result) {
                // dd($time_result);
                $html .= '<h5 style="margin-top:20px">Kết quả ảnh chụp lần khám ' . $time_result->time .'</h5>';
                $url_results = DB::table('imaging_result')->select(['url'])->where('patient_id', $patient_id)->where('time', $time_result->time)->orderBy('created_at', 'desc')->get();
                foreach($url_results as $url_result) {
                    $html .= '<a target="_blank" href="'. $url_result->url .'">
                                <img style="width:250px; height:250px;margin-bottom: 10px" src="'. $url_result->url .'" alt="photo">
                            </a>';
                }
            }
        }
        return $html;
    }

    public static function checkLabService($patient_id)
    {
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $patient_id)->max('time');
        // Nếu lần khám cls khác lịch sử khám mới nhất thì xóa session và trả về false
        $selectedservices = DB::table('subclinical_service')->where('patient_id', $patient_id)->where('time', $lastest_hospitalhistory)->where('name', 'Xét nghiệm máu')->get();
        if(count($selectedservices) == 0)
        {
            return false;
        }
        return $selectedservices;
    }

    public static function checkImageService($patient_id)
    {
        $lastest_hospitalhistory = HospitalHistory::where('patient_id', $patient_id)->max('time');
        // Nếu lần khám cls khác lịch sử khám mới nhất thì xóa session và trả về false
        $selectedservices = DB::table('subclinical_service')->where('patient_id', $patient_id)->where('time', $lastest_hospitalhistory)->where('name', '<>', 'Xét nghiệm máu')->get();
        if(count($selectedservices) == 0)
        {
            return false;
        }
        return $selectedservices;
    }
}
