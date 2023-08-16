<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardIndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return view('admin/dashboardIndex');
        } else {
            return view('/');
        }
    }
}
