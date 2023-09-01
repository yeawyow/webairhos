<nav class="navbar navbar-expand  border-bottom d-flex " id="navbar" style="position:relative; z-index: 999;">
    {{-- Button for sidebar toggle --}}
    <div class="me-auto">
        <button class="btn" type="button" data-bs-theme="dark">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="btn-group text-end me-3">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end" >
            <li><a href="#" class="dropdown-item">Setting</a></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
