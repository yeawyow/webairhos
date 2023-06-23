<?php
    // session_start();

    // if (isset('clickLogout')) {
    //     session_unset();
    //     session_destroy();
    //     header('location: ../../index.php');
    // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar_navbar</title>
</head>

<body>
    <div id="sidebar">
        <div class="sidebar-header">
            <h3><img src="https://co-vaccine.moph.go.th/assets/images/moph-logo.gif" class="img-fluid" /><span>Back
                    Office</span></h3>
        </div>
        <ul class="list-unstyled component m-0">
            <li class="">
                <a href="../weblab/index.php" class="dashboard "><i class="material-icons">dashboard</i>dashboard </a>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">aspect_ratio</i>IT Service
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li><a href="../weblab/survey.php">สำรวจครุภัณฑ์คอมพิวเตอร์</a></li>
                    <li><a href="#">layout 2</a></li>
                    <li><a href="#">layout 3</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">apps</i>UI Customize
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                    <li><a href="../weblab/navbar.php">Navbar</a></li>
                    <li><a href="../weblab/carousel.php">Carousel</a></li>
                    <li><a href="../weblab/weblink.php">Weblink</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">equalizer</i>charts
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                    <li><a href="#">Pages 1</a></li>
                    <li><a href="#">Pages 2</a></li>
                    <li><a href="#">Pages 3</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">extension</i>UI Element
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu4">
                    <li><a href="#">Pages 1</a></li>
                    <li><a href="#">Pages 2</a></li>
                    <li><a href="#">Pages 3</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">border_color</i>forms
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu5">
                    <li><a href="#">Pages 1</a></li>
                    <li><a href="#">Pages 2</a></li>
                    <li><a href="#">Pages 3</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">grid_on</i>tables
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu6">
                    <li><a href="#">table 1</a></li>
                    <li><a href="#">table 2</a></li>
                    <li><a href="#">table 3</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">content_copy</i>Pages
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu7">
                    <li><a href="#">Pages 1</a></li>
                    <li><a href="#">Pages 2</a></li>
                    <li><a href="#">Pages 3</a></li>
                </ul>
            </li>


            <li class="">
                <a href="#" class=""><i class="material-icons">date_range</i>copy </a>
            </li>
            <li class="">
                <a href="#" class=""><i class="material-icons">library_books</i>calender </a>
            </li>

        </ul>
    </div>

    <!-------sidebar--design- close----------->



    <!-------page-content start----------->

    <div id="content">

        <!------top-navbar-start----------->

        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt</span>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2">Go
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                                <ul class="nav navbar-nav flex-row ml-auto">
                                    <li class="dropdown nav-item">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <ul class="dropdown-menu small-menu">
                                            <li><a href="#">
                                                    <span class="material-icons">person_outline</span>
                                                    Profile
                                                </a></li>
                                            <li><a href="#">
                                                    <span class="material-icons">settings</span>
                                                    Settings
                                                </a></li>
                                            <li><a href="../../SRC/index.php" name="clickLogout">
                                                    <span class="material-icons">logout</span>
                                                    Logout
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>




            </div>
        </div>
        <!------top-navbar-end----------->



</body>

</html>