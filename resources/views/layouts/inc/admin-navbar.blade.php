<nav class="sb-topnav navbar navbar-expand navbar-dark navatas">
    <!-- Navbar Brand-->
    <a class="navbar-brand" href="{{ url('admin/dashboard') }}"><img class="imagelogo" src="{{asset('public/assets/img/logo.png')}}"/></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 navatas" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">   Nabila Arista        <img class="imagelogo2" src="{{ asset('public/assets/img/bila2.jpg')}} "/><i class="fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
            </ul>
        </li>
    </ul> 
</nav>
       
