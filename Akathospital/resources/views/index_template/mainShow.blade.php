<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>

    @include('index_template.patials.modal')

    @include('index_template.patials.navbar')

    <div class="mt-5 mb-5">
        @yield('content')
    </div>
    
    <div class="mt-5">
        @include('index_template.patials.footer')
    </div>

    @include('index_template.patials.footer_script')
</body>

</html>
