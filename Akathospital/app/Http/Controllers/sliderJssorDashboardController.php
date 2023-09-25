<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sliderJssorDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderJssorDashboardController extends Controller
{
    public function index() {
        $sdjs = sliderJssorDashboard::all();
        return view('sliderJssorDashboard', compact('sdjs'));
    }

    // public function fetchAll() {
    //     $sliderJssor = sliderJssorDashboard::all();
    //     $output = '';
    //     if ($sliderJssor->count() > 0) {
    //         $output .= '<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
    //                         <thead>
    //                             <tr>
    //                                 <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
    //                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending>Name</th>
    //                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Image</th>
    //                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Edit & Delete: activate to sort column ascending">Edit & Delete</th>
    //                             </tr>
    //                         </thead>
    //                         <tbody>';
    //                         foreach ($sliderJssor as $sj) {
    //                             $output .= '<tr class="odd">
    //                                 <td class="dtr-control sorting_1" tabindex="0">' . $sj->sdjs_id . '</td>
    //                                 <td>' . $sj->sdjs_name . '</td>
    //                                 <td><img src="storage/images/sliderJssor/' . $sj->sdjs_image .'" width="50" class="img-thumbnail rounded"></td>
    //                                 <td>
    //                                     <a href="#" id="' . $sj->sdjs_id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4"></i></a>
    //                                     <a href="#" id="' . $sj->sdjs_id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
    //                                 </td>
    //                             </tr>';
    //                         }
    //                         '</tbody>          
    //                     </table>
    //         ';
    //         echo $output;
    //     } else {
    //         echo '<h1 class="text-center text-secondary my-5">No record in the database</h1>';
    //     }
    // }

    public function store(Request $request) {
        $file = $request->file('image');

        // ตรวจสอบสกุลของไฟล์
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $extension = $file->getClientOriginalExtension();

        if (!in_array($extension, $allowedExtensions)) {
            return response()->json([
                'status' => 400,
                'message' => 'ไม่อนุญาตให้อัปโหลดไฟล์นี้'
            ]);
        }

        // ทำการอัปโหลดไฟล์
        $fileName = time() . '.' . $extension;
        $file->storeAs('public/images/sliderJssor', $fileName);

        // บันทึกข้อมูลลงฐานข้อมูล
        $sdjsData = ['sdjs_name' => $request->name, 'sdjs_image' => $fileName];
        sliderJssorDashboard::create($sdjsData);

        return response()->json([
            'status' => 200,
        ]);
    }
}
