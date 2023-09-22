@extends('admin.dashboard')

    @section('content')

        <main class="content px-3 py-2 mt-3 " >
            <div class="container-fluid">
                <div class="mb-3 mt-3">
                    <h3>Slider Jssor </h3>
                </div>
                <div class="row my-15">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="text-dark"></h3>
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i
                                        class="bi-plus-circle me-2"></i>การจัดการ Slider Jssor</button>
                            </div>
                            <div class="card-body" id="show_all_sliderJssorDashboard">
                                <h1 class="text-center text-secondary my-5">Loading...</h1>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- new Slider Jssor modal --}}
                <div class="modal fade" id="sliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล Slider Jssor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                <div class="modal fade" id="sliderJssorModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Slider Jssor </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
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