<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.patial.header')

        @yield('header')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        
            <div class="wrapper d-flex align-items-stretch">

                @include('admin.patial.menu')

                <!-- Preloader -->
                @include('admin.patial.preloader')

                <!-- Main Sidebar-->
                @include('admin.patial.sidebar')

                <!-- Content Wrapper. Contains page content -->
                @yield('content')

            </div>
                <!-- ./wrapper -->

            @include('admin.patial.script')
    </body>
</html>
