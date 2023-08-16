<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>
    
    @include('index_template.patials.modal')
    
    @include('index_template.patials.topNavbar')

    @include('index_template.patials.navbar')


    @yield('content')

    @include('index_template.patials.footer')

    @include('index_template.patials.footer_script')
</body>

</html>
