<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        

        @include('admin.patials.head')
    </head>
    <body>
        
        <div class="warpper">
            {{-- Sidebar --}}
            @include('admin.patials.sidebar')
            {{-- Main Component --}}
            <div class="main">
                
                @include('admin.patials.navbar_toggle')
                
                @yield('content')
                
            </div>
            
        </div>

        {{-- @include('admin.patials.footer') --}}

        @include('admin.patials.footer_script')
    </body>
</html>