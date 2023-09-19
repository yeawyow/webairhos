<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>

    @include('index_template.patials.modal')

    <div class="" style="border-top: 15px solid #0C4A60; border-bottom: 15px solid #0C4A60; ">
        @include('index_template.patials.navbar')
    </div>

    <div class="mt-5 mb-5">
        @yield('content')
    </div>
    
    <div id="info">
        @include('index_template.patials.footer')
    </div>

    @include('index_template.patials.footer_script')
</body>

</html>
