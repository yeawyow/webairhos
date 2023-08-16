<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardEditNavbarController extends Controller
{
    public function index() {
        return view('dashboard_edit_navbar');
    }
}
