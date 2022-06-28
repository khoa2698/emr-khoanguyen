<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
