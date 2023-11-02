<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
    public function index(){
        $template = 'backend.dashboard.home.home';
        $title = 'Dashboard';
        return view('backend.dashboard.layout', compact('template','title'));
    }
}
