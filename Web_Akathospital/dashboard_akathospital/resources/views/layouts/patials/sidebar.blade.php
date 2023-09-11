<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ url('/dashboardIndex') }}">
                <img src="https://co-vaccine.moph.go.th/assets/images/moph-logo.gif" style="width: 60px; height: 60px;" alt="Mono">
                <span class="brand-name">Akathosptital</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active">
                    <a class="sidenav-item-link" href="#">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="section-title">
                    Web Page Management
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#email" aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-select"></i>
                        <span class="nav-text">UI</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Header</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Navbar</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Card Director</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <a href="#" data-toggle="tooltip"
                            title="Profile settings"><i class="mdi mdi-settings"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                class="mdi mdi-chat-processing"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>