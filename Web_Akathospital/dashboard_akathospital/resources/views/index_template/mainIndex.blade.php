<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('index_template.patials.head')
</head>

<body>
    {{-- Login Dashboard Start --}}
    <div class="modal fade " id="manageWebPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" >
                    @csrf
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div >
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    required>
                            </div>
                            <div >
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Login Dashboard End --}}

    @include('index_template.patials.navbar')


    @yield('content')

    @include('index_template.patials.footer')

    @include('index_template.patials.footer_script')
</body>

</html>
