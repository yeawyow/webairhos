<!-- To TOP Start -->
<button onclick="topFunction()" class="btn To-Top" id="myBtn" title="Go to top"><i class="fa-solid fa-chevron-up fa-beat-fade" ></i></button>
<!-- To TOP End -->

{{-- Login Dashboard Start --}}
<div class="modal fade" id="manageWebPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="login" class="col-md-4 col-form-label text-md-end">Username</label>
                        <div class="col-md-6">
                            <input id="login" type="text" class="form-control
                                {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" autofocus>

                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
                <!-- {{ __('You are logged in!') }} -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- Login Dashboard End --}}
<div class="modal fade " id="maphospital" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center">
        <div class="modal-content" style="width: 800px; height: 550px;">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Map Hospital</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="model-body">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Akathospital&t=&z=19&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://2yu.co">2yu</a><br>
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

{{-- dropdown menu header navbar --}}
<div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" data-bs-backdrop="false"
    id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel1">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel1">เกี่ยวกับองค์กร</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="d-column">
            <li><a class="col" href="#">ประวัติองค์กร</a></li>
            <li><a class="col" href="#">วิสัยทัศน์ พันธกิจ</a></li>
            <li><a class="col" href="#">คณะกรรมการบริหาร</a></li>
            <li><a class="col" href="#">แผนยุทธศาสตร์</a></li>
            <li><a class="col" href="#">กรอบโครงสร้างองค์กร</a></li>
            <li><a class="col" href="#">วิสัยทัศน์ พันธกิจ ค่านิยม MOPH</a></li>
        </ul>
    </div>
</div>
<div class="offcanvas offcanvas-start" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="offcanvas offcanvas-start" tabindex="1" data-bs-scroll="true" data-bs-backdrop="false"
    id="offcanvasScrolling2" aria-labelledby="offcanvasScrollingLabel2">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel2">ข่าวสาร</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="d-column">
            <li><a class="col" href="#">ข่าวประชาสัมพันธ์</a></li>
            <li><a class="col" href="#">ข่าวจัดซื้อจัดจ้าง</a></li>
        </ul>
    </div>
</div>
