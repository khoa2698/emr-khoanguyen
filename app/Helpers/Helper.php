<?php

namespace App\Helpers;

use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;

class Helper
{
    public static function getPatientAddress($province_id, $district_id, $ward_id)
    {
        $html = '';
        $ward = Ward::where('id', $ward_id)->first()->name;
        $district = District::where('id', $district_id)->first()->name;
        $province = Province::where('id', $province_id)->first()->name;
        $html .= $ward . ', ' . $district . ', ' . $province;
        return $html;
    }
}
