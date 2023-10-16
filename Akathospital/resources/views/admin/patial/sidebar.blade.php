<nav id="sidebar" class="" style="height: 100vh;">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4">
        <h1><a href="index.html" class="logo">Dashboard <span>Akathospital</span></a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="{{ '' == request()->path() ? 'active' : '' }}">
                <a href="#collapseExampleDB" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExampleDB"
                    aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-briefcase mr-3"></span>
                    Dashboard</a>
                <ul class="collapse" id="collapseExampleDB">
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#">Page 1</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#">Page 2</a>
                    </li>
                </ul>
            </li>
            <li class="{{ '' == request()->path() ? 'active' : '' }}">
                <a href="#collapseExampleBM" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExampleBM"
                    aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-briefcase mr-3"></span>
                    Button Menu</a>
                <ul class="collapse" id="collapseExampleBM">
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#">Home Page</a>
                    </li>
                </ul>
            </li>
            <li class="{{ '' == request()->path() ? 'active' : '' }}">
                <a href="#collapseExampleW" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExampleW"
                    aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-briefcase mr-3"></span>
                    Works</a>
                <ul class="collapse" id="collapseExampleW">
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#">Home Page</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
                <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
            </li> --}}
        </ul>
        {{-- <div class="mb-5">
            <h3 class="h6 mb-3">Subscribe for newsletter</h3>
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
            </form>
        </div> --}}
        <div class="footer">
            <p>
                Copyright ©
                <script>
                    document.write(new Date().getFullYear());
                </script>2023 All rights reserved | This template is made with <i class="icon-heart"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </p>
        </div>
    </div>
</nav>
