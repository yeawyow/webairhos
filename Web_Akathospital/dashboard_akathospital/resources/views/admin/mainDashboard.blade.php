<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        

        @include('admin.patials.head')
    </head>
    <body>
        
        <div class="warpper">
            {{-- Sidebar --}}
            @include('admin.patials.nav')
            {{-- Main Component --}}
            <div class="main">
                
                @include('admin.patials.sidebar_toggle')
                
                @yield('content')
                
            </div>
            
        </div>

        {{-- @yield('scriptJS') --}}

        {{-- @include('admin.patials.footer') --}}

        @include('admin.patials.footer_script')
    </body>
</html>