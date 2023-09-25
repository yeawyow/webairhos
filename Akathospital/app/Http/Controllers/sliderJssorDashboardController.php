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

    public function fetchAll() {
        $sliderJssor = sliderJssorDashboard::all();
        $output = '';
        if ($sliderJssor->count() > 0) {
            // $output .= '<table id="myTable" class="display" style="width: 100%;">
            //                 <thead>
            //                     <tr>
            //                         <th>
            //                             ID
            //                         </th>
            //                         <th>Name</th>
            //                         <th>Image</th>
            //                         <th>Edit & Delete</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>';
            //                 foreach ($sliderJssor as $sj) {
            //                     $output .= '<tr>
            //                         <td>' . $sj->sdjs_id . '</td>
            //                         <td>' . $sj->sdjs_name . '</td>
            //                         <td><img src="storage/images/sliderJssor/' . $sj->sdjs_image .'" width="50" class="img-thumbnail rounded"></td>
            //                         <td>
            //                             <a href="#" id="' . $sj->sdjs_id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4"></i></a>
            //                             <a href="#" id="' . $sj->sdjs_id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
            //                         </td>
            //                     </tr>';
            //                 }
            //                 '</tbody>          
            //             </table>
            // ';
            $output .= '<table id="myTable" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id = "uu">Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                
            </tbody>
        </table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database</h1>';
        }
    }

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
