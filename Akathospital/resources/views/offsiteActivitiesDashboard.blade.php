@extends('admin.dashboard')

    @section('content')

        <main class="content px-3 py-2 mt-3 " >
            <div class="container-fluid">
                <div class="mb-3 mt-3">
                    <h3>Off-site Activities</h3>
                </div>
                <div class="row my-15">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="text-dark">การจัดการหน้ากิจกรรมนอกพื้นที่</h3>
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addOffsiteActivitiesModal"><i
                                        class="bi-plus-circle me-2"></i> เพิ่มข้อมูลกิจกรรมนอกพื้นที่</button>
                            </div>
                            <div class="card-body" id="show_all_offsiteActivitiesDashboard">
                                <h1 class="text-center text-secondary my-5">Loading...</h1>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- new off-site activities modal --}}
                <div class="modal fade" id="addOffsiteActivitiesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลกิจกรรมนอกพื้นที่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="add_OffsiteActivities_form" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body p-4 bg-light">
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="title">หัวข้อ</label>
                                            <input type="text" name="title" class="form-control" placeholder="title" required>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                            <label for="content">เนื้อหา</label>
                                            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    <div class="my-2">
                                        <label for="date">วันที่ทำกิจกรรม</label>
                                        <input type="date" name="date" class="form-control" placeholder="date" required>
                                    </div>
                                    <div class="my-2">
                                        <label for="image">เพิ่มรูปกิจกรรม</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="add_OffsiteActivities_btn" class="btn btn-primary">Add
                                        Off-site Activities</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- edit Off-site Activities modal --}}
                <div class="modal fade" id="editOffsiteActivitiesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Off-site Activities </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="edit_OffsiteActivities_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="emp_id" id="emp_id">
                                <input type="hidden" name="emp_avatar" id="emp_avatar">
                                <div class="modal-body p-4 bg-light">
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                placeholder="First Name" required>
                                        </div>
                                        <div class="col-lg">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="E-mail" required>
                                    </div>
                                    <div class="my-2">
                                        <label for="avatar">Select Avatar</label>
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                    <div class="mt-2" id="avatar"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="edit_OffsiteActivities_btn" class="btn btn-success">Update
                                        Offsite Activities</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        
        

    @endsection