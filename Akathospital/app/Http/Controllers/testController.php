<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sliderJssorDashboard;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index() {
        $sdjs = sliderJssorDashboard::paginate();
        return view('test', compact('sdjs'));
    }
}
