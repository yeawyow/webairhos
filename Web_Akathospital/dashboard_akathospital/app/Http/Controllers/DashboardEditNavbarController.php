<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardEditNavbarController extends Controller
{
    public function index() {
        return view('admin/dashboard_edit_navbar');
    }
}
