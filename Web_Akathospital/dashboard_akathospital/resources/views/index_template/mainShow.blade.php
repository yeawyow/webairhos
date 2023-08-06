<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>
    {{-- Login Dashboard Start --}}
    <div class="modal fade " id="manageWebPage" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Login Dashboard End --}}

    {{-- Map Footer Alert Start --}}
    <div class="modal fade " id="maphospital" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center">
            <div class="modal-content" style="width: 800px; height: 550px;">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Map Hospital</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="model-body">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=Akathospital&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 510px;
                                    width: 770px;
                                }
                            </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 510px;
                                    width: 770px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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