<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummaryEmrController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childSummaryEmrMenu';
    public function index()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.summaryemr.index', compact('menuActive', 'childMenuActive'));
    }
}
