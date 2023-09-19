<nav class="navbar navbar-expand  border-bottom d-flex " style="z-index: 999;" id="navbar">
    {{-- Button for sidebar toggle --}}
    <div class="me-auto">
        <button class="btn" type="button" data-bs-theme="dark">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="btn-group text-end me-3">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Username
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a href="#" class="dropdown-item">Profile</a></li>
            <li><a href="#" class="dropdown-item">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>


