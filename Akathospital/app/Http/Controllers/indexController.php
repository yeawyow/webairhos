<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sliderJssorDashboard;

class indexController extends Controller
{
    //
    public function index() {
        // return view('index');

        $sdjs = sliderJssorDashboard::paginate(10);
        return view('index', compact('sdjs'));
    }
}
