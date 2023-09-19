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


<!-- Offsite Activities Dashboard Start -->
<script>
    $ (function() {
        // Fetch All Offsite Activities ajax request Start
        fetchAllOffsiteActivitiesDashboard();

        function fetchAllOffsiteActivitiesDashboard() {
            $.ajax({
                url: '{{ route('fetchAllOffsiteActivitiesDashboard') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_offsiteActivitiesDashboard").html(response);
                }
            });
        }
        // Fetch All Offsite Activities ajax request End
    });
</script>
<!-- Offsite Activities Dashboard End -->
