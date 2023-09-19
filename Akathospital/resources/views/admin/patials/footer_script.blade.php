{{-- JS.index.js --}}
<script src="{{ url('adminDashboard/js/index.js') }}"></script>

{{-- JS Bootstrap 5 --}}
{{-- Bundle Bootstrap 5 --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}



{{-- Separate Bootstrap 5 --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
{{-- END JS Bootstrap 5 --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

{{-- Jquery --}}
<script src='https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js'></script>

<!--SweetAlert2 CDN JS-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>


<script>
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
</script>
