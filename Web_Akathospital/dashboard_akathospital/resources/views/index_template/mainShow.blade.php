<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>

    @include('index_template.patials.modal')

    {{-- Map Footer Alert Start --}}
    
    {{-- Map Footer Alert End --}}

    @include('index_template.patials.navbar')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-4">
                @include('index_template.patials.menuBar')
            </div>
            <div class="col-8">
                @yield('content')
            </div>
        </div>
    </div>


    @include('index_template.patials.footer')

    @include('index_template.patials.footer_script')
</body>

</html>
