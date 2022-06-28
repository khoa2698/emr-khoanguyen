<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagingResultController extends Controller
{
    public $menuActive = 'treatmentMenu';
    public $childMenuActive = 'childImagingMenu';
    public function create()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('admin.imagingresult.create', compact('menuActive', 'childMenuActive'));
    }
}
