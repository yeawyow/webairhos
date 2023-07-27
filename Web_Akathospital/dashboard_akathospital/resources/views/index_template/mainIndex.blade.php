<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        

        @include('index_template.patials.head')
    </head>
    <body>
        
        <div class="warpper">
            {{-- Sidebar --}}
            {{-- @include('dashboard_template.patials.nav') --}}
            {{-- Main Component --}}
            <div class="main">
                
                {{-- @include('dashboard_template.patials.sidebar_toggle') --}}
                
                @yield('content')
                
            </div>
            
        </div>

        @include('index_template.patials.footer')

        @include('index_template.patials.footer_script')
    </body>
</html>