<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100">
            <ul class="navbar-nav flex-row">
                <li>
                    <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item has-icon text-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- <div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    {{-- <div class="d-flex justify-content-between w-100"> --}}
    {{-- <form class="form-inline mr-auto"> --}}
        {{-- <ul class="navbar-nav mr-3,">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <li class="dropdown form-check-inline mr-auto, d-flex justify-content-between w-200"><a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="{{ asset('img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> --}}

                {{-- <a href="#"
                    class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
        </li>
    </ul> --}}
{{-- </div> --}}
{{-- </nav> --}}

