<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VitalController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childVitalMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.vital.create', compact('menuActive', 'childMenuActive'));
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
