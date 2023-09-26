@extends('admin.adminDashboard')

@section('header')
    <title>Slider Jssor</title>
@endsection

@section('content')
    <div id="content" class="p-4 p-md-5 pt-5 mt-5">
        <div class="row">
            <div class="col-8">
                <h1>Slider Jssor</h1>
            </div>
            <div class="col-4">
                <div class="add-menu d-flex justify-content-end" style="">
                    <button class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i
                            class="bi-plus-circle "></i>Add Slider Jssor</button>
                </div>
            </div>
        </div>
        <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Edit & Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sdjs as $sd)
                    <tr>
                        <td>{{ $sd->sdjs_id }}</td>
                        <td>{{ $sd->sdjs_name }}</td>
                        <td><img src="storage/images/sliderJssor/{{ $sd->sdjs_image }}" alt="" width="50"
                                class="img-thumbnail rounded"></td>
                        <td>
                            <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-success mx-1 editIcon"
                                data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i
                                    class="bi-pencil-square h4">Edit</i></a>
                            <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-danger mx-1 deleteIcon"><i
                                    class="bi-trash h4">Delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
