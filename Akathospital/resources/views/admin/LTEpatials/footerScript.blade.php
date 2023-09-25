<!-- jQuery -->
<script src="{{ url('adminLTE3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('adminLTE3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('adminLTE3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('adminLTE3.2.0/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('adminLTE3.2.0/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('adminLTE3.2.0/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('adminLTE3.2.0/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('adminLTE3.2.0/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('adminLTE3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('adminLTE3.2.0/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('adminLTE3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminLTE3.2.0/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('adminLTE3.2.0/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('adminLTE3.2.0/dist/js/pages/dashboard.js') }}"></script>
<!--SweetAlert2 CDN JS-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('adminLTE3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('adminLTE3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- Offsite Activities Dashboard Start -->
<script>
  $(function() {
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

    // Add New Offsite Activities ajax request Start
    $("#add_OffsiteActivities_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#add_OffsiteActivities_btn").text('Adding...');
      $.ajax({
        url: '{{ route('storeOffsiteActivitiesDashboard') }}',
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
              'Offsite Activities Added Successfully!',
              'success'
            )
            fetchAllOffsiteActivitiesDashboard();
          }
          $("#add_OffsiteActivities_btn").text('Add OffsiteActivities');
          $("#add_OffsiteActivities_form")[0].reset();
          $("#addOffsiteActivitiesModal").modal('hide');
        }
      });
    });
    // Add New Offsite Activities ajax request End
  });
</script>
<!-- Offsite Activities Dashboard End -->

<!-- Slider Jssor Dashboard Start -->
<script>
  $(function() {
    // Fetch All Offsite Activities ajax request Start
    fetchAllSliderJssor();

    function fetchAllSliderJssor() {
      $.ajax({
        url: '{{ route('fetchAllSliderJssorDashboard') }}',
        method: 'get',
        success: function(response) {
          $("#show_all_sliderJssorDashboard").html(response);
        }
      });
    }
    // Fetch All Offsite Activities ajax request End

    // Add new slider jssor ajax request Start
    $("#sliderJssor_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#sliderJssor_btn").text('Adding...');
      $.ajax({
        url: '{{ route('storeSliderJssorDashboard') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            swal.fire(
              'Successfully',
              'อัพโหลด File เสร็จสมบูรณ์',
              'success'
            )
            fetchAllSliderJssor();
          } else if (response.status == 400) {
            // จัดการเมื่อ response.status เป็น 400 โดยไม่มีข้อผิดพลาด
            // ตัวอย่าง:
            swal.fire(
              'ข้อผิดพลาดในการอัพโหลด File',
              'สกุลไฟล์ที่สามารถอัพโหลดได้คือ jpg, jpeg, png',
              'warning'
            );
          } else {
            // จัดการเมื่อ response.status ไม่ใช่ 200 และไม่ใช่ 400
            // ตัวอย่าง:
            swal.fire(
              'Error',
              'An error occurred while processing your request.',
              'error'
            );
          }
          $("#sliderJssor_btn").text('Add OffsiteActivities');
          $("#sliderJssor_form")[0].reset();
          $("#sliderJssorModal").modal('hide');
        }
      });
    });
    // Add new slider jssor ajax request End
  });
</script>
<!-- Slider Jssor Dashboard End -->