<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
