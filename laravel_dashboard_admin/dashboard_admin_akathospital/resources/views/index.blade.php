<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    {{-- google mmaterial icon --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}

    {{-- css.index.css --}}
    <link rel="stylesheet" href="{{url('css/index.css')}}">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

    

    <title>Dashboard</title>

</head>
<body>
    
    <div class="warpper">
        {{-- Sidebar --}}
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="https://co-vaccine.moph.go.th/assets/images/moph-logo.gif" class="image me-3 ms-3" alt="">
                    <a href="#">Akathospital</a>
                    {{-- Sidebar Navigation --}}
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Tools & Components
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-list pe-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="fa-regular fa-file-lines pe-2"></i>
                                UI Customize
                            </a>
                            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Analytics</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Ecommerce</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Crypto</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="fa-solid fa-sliders pe-2"></i>
                                Dashboard
                            </a>
                            <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Dashboard Analytics</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Dashboard Ecom</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                                <i class="fa-regular fa-user pe-2"></i>
                                Auth
                            </a>
                            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Login</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Register</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-header">
                            Multi Level Nav
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                                <i class="fa-solid fa-share-nodes pe-2"></i>
                                Multi Lavel
                            </a>
                            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                        <i class="fa-solid fa-share-nodes pe-2"></i>
                                        Two Links
                                    </a>
                                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">Link 1</a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">Link 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        {{-- Main Component --}}
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                {{-- Button for sidebar toggle --}}
                <button class="btn" type="button" data-bs-theme="dark" >
                    <span class="navbar-toggler-icon" ></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3 mt-3">
                        <h3>Dashboard</h3>
                    </div>
                </div>
            </main>
        </div>
    </div>



    {{-- <nav class="navbar navbar-light bg-light">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-warp flex-md-nowrap justify-content-between">
            <a href="#" class="navbar-brand">Simeple Dashboard</a>

            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 753px">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-white" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
                </a>
            </li>
          <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
                </a>
          </li>
          <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Orders
                </a>
          </li>
          <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Products
                </a>
          </li>
          <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Customers
                </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
      </div> --}}

    
                                                                                                                                                                                                                                          

    {{-- JS.index.js --}}
    <script src="{{ url('js/index.js') }}"></script>

    {{-- JS Bootstrap 5 --}}
    {{-- Bundle Bootstrap 5 --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    


    {{-- Separate Bootstrap 5 --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
    {{--END JS Bootstrap 5 --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>