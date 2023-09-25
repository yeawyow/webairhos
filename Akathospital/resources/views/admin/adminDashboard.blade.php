<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.LTEpatials.header')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            @include('admin.LTEpatials.preloader')

            <!-- Navbar -->
            @include('admin.LTEpatials.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('admin.LTEpatials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->
            @include('admin.LTEpatials.footer')

            <!-- Control Sidebar -->
            @include('admin.LTEpatials.controlSidebar')
            <!-- /.control-sidebar -->
        </div>
            <!-- ./wrapper -->

            @include('admin.LTEpatials.footerScript')
    </body>
</html>
