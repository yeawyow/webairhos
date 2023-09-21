<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OffsiteActivitiesDashboard;
use Illuminate\Http\Request;

class offsiteActivitiesDashboardController extends Controller
{
    public function index() {
        return view('offsiteActivitiesDashboard');
    }

    public function fetchAll() {
        $offsiteActivities = OffsiteActivitiesDashboard::all();
        $output = '';
        if ($offsiteActivities->count() > 0) {
            $output .= '<table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($offsiteActivities as $osa) {
                $output .= '<tr>
                <td>' . $osa->osa_id . '</td>
                <td>' . $osa->osa_title . '</td>
                <td>' . $osa->osa_content . '</td>
                <td> <img src="storage/images/' . $osa->osa_image . '" width = "50" class="img-thumbnail rounded-circle"></td>
                <td>' . $osa->osa_date . '</td>
                <td>
                    <a href="#" id="' . $osa->osa_id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editOffsiteActivitiesModal"><i class="bi-pencil-square"></i></a>
                    <a href="#" id="' . $osa->osa_id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>';
            }
            $output .= '</tbody></table>';
            echo $output;        
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database!</h1>';
        }
    }

    public function store(Request $request) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName); // php artisan storage:link

        $offData = ['osa_title' => $request->title, 'osa_content' => $request->content, 'image' => $fileName, 'osa_date' => $request->date];
        OffsiteActivitiesDashboard::create($offData);
        return response()->json([
            'status' => 200,
        ]);
    }
}
