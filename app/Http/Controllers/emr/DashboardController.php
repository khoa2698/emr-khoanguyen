<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $menuActive = 'dashboardtMenu';
    public $childMenuActive = 'childDashboardMenu';
    public function index()
    {
        $menuActive = $this->menuActive;
        $childMenuActive = $this->childMenuActive;
        return view('dashboard', [
            'title' => 'Dashboard',
            'menuActive' => $menuActive,
            'childMenuActive' => $childMenuActive,
        ]);
    }
}
