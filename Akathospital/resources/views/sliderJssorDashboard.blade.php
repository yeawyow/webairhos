@extends('admin.adminDashboard')

@section('content')

<main class="content px-3 py-2 mt-3" style="margin-left: 1rem;">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h3>Slider Jssor </h3>
        </div>
        <!-- <div class="row my-15">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="text-dark"></h3>
                                <button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i
                                        class="bi-plus-circle me-2"></i>การจัดการ Slider Jssor</button>
                            </div>
                            <div class="card-body" id="show_all_sliderJssorDashboard">
                                <h1 class="text-center text-secondary my-5">Loading...</h1>
                            </div>
                        </div>
                    </div>
                </div> -->
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline" >
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Edit & Delete version: activate to sort column ascending">Edit & Delete</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($sdjs as $sd)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $sd->sdjs_id }}</td>
                                        <td>{{ $sd->sdjs_name }}</td>
                                        <td><img src="storage/images/sliderJssor/{{ $sd->sdjs_image }}" width="50" class="img-thumbnail rounded"></td>
                                        <td>
                                            <a href="#" id="{{ $sd->sdjs_id }}" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4"></i></a>
                                            <a href="#" id="{{ $sd->sdjs_id }}" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">1</td>
                                        <td class="dtr-control sorting_1" tabindex="0">Chanathip</td>
                                        <td class="dtr-control sorting_1" tabindex="0">Image</td>
                                        <td class="dtr-control sorting_1" tabindex="0">Edit Delete</td>
                                    </tr> -->
                                </tbody>
                                
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1">Platform(s)</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        {{-- new Slider Jssor modal --}}
        <div class="modal fade" id="sliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล Slider Jssor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" id="sliderJssor_form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body p-4 bg-light">
                            <div class="row">
                                <div class="col-lg">
                                    <label for="name">หัวข้อ</label>
                                    <input type="text" name="name" class="form-control" placeholder="title" required>
                                </div>
                            </div>
                            <div class="my-2">
                                <label for="image">เพิ่มรูปกิจกรรม</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="sliderJssor_btn" class="btn btn-primary">Add
                                Slider Jssor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- edit Slider Jssor modal --}}
        <div class="modal fade" id="sliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Slider Jssor </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" id="sliderJssor_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="sdjs_id" id="sdjs_id">
                        <input type="hidden" name="sdjs_image" id="sdjs_image">
                        <div class="modal-body p-4 bg-light">
                            <div class="row">
                                <div class="col-lg">
                                    <label for="name">ชื่อหัวข้อ</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="my-2">
                                <label for="image">รูปที่ต้องการอัพขึ้น Slider</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mt-2" id="image"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="sliderJssor_btn" class="btn btn-success">Update
                                Slider Jssor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('header')
    <title>Slider Jssor</title>
@endsection

@section('content')
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6"><h1 class="mb-4">Slider Jssor</h2></div>
                <div class="col-6" style="position: relative; right: -25rem;">
                    <button class="btn btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i
                        class="bi-plus-circle me-2" ></i>Add Slider Jssor</button>
                </div>
            </div>
            <div class="card p-3 rounded rounded-5">
                <div class="container">
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
                                <td><img src="storage/images/sliderJssor/{{ $sd->sdjs_image }}" alt="" width="50" class="img-thumbnail rounded"></td>
                                <td>
                                    <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4">Edit</i></a>
                                    <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-danger mx-1 deleteIcon"><i class="bi-trash h4">Delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection