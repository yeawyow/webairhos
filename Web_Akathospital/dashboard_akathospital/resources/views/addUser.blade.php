@extends('dashboard_template.mainDashboard')

@section('content')
    <main class="content px-3 py-2 mt-3 ">
        <div class="container-fluid ">
            <div class="mb-3 mt-3 ">
                <div class="row my-15">
                    <div class="col-lg-12">
                        <h2 class="text-light">Employee</h2>
                        <div class="card shadow mt-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="text-dark">Manage Employee</h3>
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addUserEmployee"><i
                                        class="bi-plus-circle me-2"></i> Add New Employee</button>
                            </div>
                            <div class="card-body" id="show_all_employees">
                                <h1 class="text-center text-secondary my-5">Loading...</h1>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- new employee modal --}}
                <div class="modal fade" id="addUserEmployee" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body p-4 bg-light">
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="username" required>
                                        </div>
                                        <div class="col-lg">
                                            <label for="password">password</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="password" required>
                                        </div>
                                    </div>
                                    <select class="form-select mt-3" aria-label="Default select example" name="status">
                                        <option selected>Status</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                      </select>
                                    <select class="form-select mt-3" aria-label="Default select example" name="pname">
                                        <option selected>คำนำหน้า</option>
                                        <option value="1">นาย</option>
                                        <option value="2">นาง</option>
                                        <option value="2">นางสาว</option>
                                    </select>
                                    <div class="row">
                                        <div class="col-lg my-2">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" name="fname" class="form-control" required>
                                        </div>
                                        <div class="col-lg my-2">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" name="lname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add User</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- edit employee modal --}}
                {{-- <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
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
                                    <button type="submit" id="edit_employee_btn" class="btn btn-success">Update
                                        Employee</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- <script>
            $(function() {

                // add new employee ajax request
                $("#add_employee_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_employee_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('store') }}',
                        method: 'post',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 200) {
                                swal.fire(
                                    'Added!',
                                    'Employee Added Successfully!',
                                    'success'
                                )
                                fetchAllEmployees();
                            }
                            $("#add_employee_btn").text('Add Employee');
                            $("#add_employee_form")[0].reset();
                            $("#addEmployeeModal").modal('hide');
                        }
                    });
                });

                // edit employee ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('edit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $("#fname").val(response.first_name);
                            $("#lname").val(response.last_name);
                            $("#email").val(response.email);
                            $("#avatar").html(
                                `<img src="storage/images/${response.avatar}" width="100" class="img-fluid img-thumbnail">`
                            );
                            $("#emp_id").val(response.id);
                            $("#emp_avatar").val(response.avatar);
                        }
                    });
                });

                // update employee ajax request
                $("#edit_employee_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_employee_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('update') }}',
                        method: 'post',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Updated!',
                                    'Employee Updated Successfully!',
                                    'success'
                                )
                                fetchAllEmployees();
                            }
                            $("#edit_employee_btn").text('Update Employee');
                            $("#edit_employee_form")[0].reset();
                            $("#editEmployeeModal").modal('hide');
                        }
                    });
                });

                // delete employee ajax request
                $(document).on('click', '.deleteIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    let csrf = '{{ csrf_token() }}';
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '{{ route('delete') }}',
                                method: 'delete',
                                data: {
                                    id: id,
                                    _token: csrf
                                },
                                success: function(response) {
                                    console.log(response);
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                    fetchAllEmployees();
                                }
                            });
                        }
                    })
                });

                // fetch all employees ajax request
                fetchAllEmployees();

                function fetchAllEmployees() {
                    $.ajax({
                        url: '{{ route('fetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_employees").html(response);
                            // $("table").DataTable({
                            //     order: [0, 'desc']
                            // });
                        }
                    });
                }

            });
        </script> --}}
    </main>
@endsection