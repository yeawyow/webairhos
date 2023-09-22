<aside id="sidebar">
    <div class="h-100 ">
        <div class="sidebar-logo fixed-sidebar">
            <img src="https://co-vaccine.moph.go.th/assets/images/moph-logo.gif" class="image me-3 ms-3" alt="">
            <a href="#">Akathospital</a>
            {{-- Sidebar Navigation --}}
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Tools & Components
                </li>
                <li class="sidebar-item">
                    <a href="{{ url('/home') }}" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="fa-regular fa-file-lines pe-2"></i>
                        UI Customize
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item ms-4">
                            <a href="#" class="sidebar-link">Analytics</a>
                        </li>
                        <li class="sidebar-item ms-4">
                            <a href="#" class="sidebar-link">Ecommerce</a>
                        </li>
                        <li class="sidebar-item ms-4">
                            <a href="#" class="sidebar-link">Crypto</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="fa-solid fa-table pe-2"></i>
                        Activities
                    </a>
                    <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('offsiteActivitiesDashboard') }}" class="sidebar-link ms-4">Off-site Activities</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                        aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-earth-americas pe-2"></i>
                        WebPage
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('sliderJssorDashboard') }}" class="sidebar-link ms-4">Slider Jssor</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#testCRUD"
                        aria-expanded="false" aria-controls="auth">
                        <i class="fa-regular fa-user pe-2"></i>
                        Test CRUD
                    </a>
                    <ul id="testCRUD" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('testCRUD') }}" class="sidebar-link">Test</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header ">
                    Multi Level Nav
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                        aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-share-nodes pe-2"></i>
                        Multi Lavel
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
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
                <li class="sidebar-header">
                    Option
                </li>
            </ul>
        </div>
    </div>
</aside>
