<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sliderJssorDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderJssorDashboardController extends Controller
{
    public function index() {
        return view('sliderJssorDashboard');
    }

    public function fetchAll() {
        $sliderJssor = sliderJssorDashboard::all();
        $output = '';
        if ($sliderJssor->count() > 0) {
            $output .= '<table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>image</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($sliderJssor as $sj) {
                $output .= '<tr>
                    <td>' . $sj->sdjs_id . '</td>
                    <td>' . $sj->sdjs_name . '</td>
                    <td><img src="storage/images/sliderJssor/' . $sj->sdjs_image .'" width="50" class="img-thumbnail rounded-circle"></td>
                    <td>
                        <a href="#" id="' . $sj->sdjs_id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4"></i></a>
                        <a href="#" id="' . $sj->sdjs_id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database</h1>';
        }
    }

    public function store(Request $request) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images/sliderJssor', $fileName); // php artisan storage:link

        $sdjsData = ['sdjs_name' => $request->name, 'sdjs_image' => $fileName];
        sliderJssorDashboard::create($sdjsData);
        return response()->json([
            'status' => 200,
        ]);
    }
}
