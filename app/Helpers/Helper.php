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

    public static function getEthnicName($id)
    {
        if($id != null){
            $ethnic = DB::table('ethnics')->where('ethnic_id', $id)->first()->name;
            return $ethnic;
        }
        return '';

    }
}
