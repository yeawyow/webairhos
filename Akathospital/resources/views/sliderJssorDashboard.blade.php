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
                    <button class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#addSliderJssorModal"><i
                            class="bi-plus-circle "></i>Add Slider Jssor</button>
                </div>
            </div>
        </div>
        <div class="" id="show_all_sliderJssor"></div>
        {{-- <table id="myTable" class="table table-striped" style="width:100%">
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
                            <a href="#" id="{{ $sd->sdjs_id }}" class="btn btn-sm btn-success mx-1 editIcon"
                                data-bs-toggle="modal" data-bs-target="#editSliderJssorModal"><i
                                    class="bi-pencil-square h4"></i></a>
                            <a href="#" id="{{ $sd->sdjs_id }}" class="btn btn-sm btn-danger mx-1 deleteIcon"><i
                                    class="bi-trash h4"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
        {{-- new Slider Jssor modal Start --}}
        <div class="modal fade" id="addSliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูล Slider Jssor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" id="add_sliderJssor_form" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body p-4 bg-light">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="floatingInput"
                                        placeholder="title">
                                    <label for="floatingInput">หัวข้อ</label>
                                </div>
                                <div class="my-2">
                                    <label for="image">เพิ่มรูปกิจกรรม</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="add_sliderJssor_btn" class="btn btn-primary">Add
                                    Slider Jssor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- new Slider Jssor modal End --}}
        {{-- edit Slider Jssor modal --}}
        <div class="modal fade" id="editSliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Name" required>
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
@endsection
