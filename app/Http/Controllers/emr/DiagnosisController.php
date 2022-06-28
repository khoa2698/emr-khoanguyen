<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        dd($request->all());
    }
}
