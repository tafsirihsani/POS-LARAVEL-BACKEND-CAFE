<div class="main-sidebar sidebar-style-2">
    {{-- <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">POS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{route('user.index')}}">All Users</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{route('product.index')}}">All Products</a>
                    </li>
                </ul>
            </li>
    </aside> --}}
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">POS Anak Gembeng</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PAG</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class={{ Request::is('home') ? 'active' : '' }}>
                <a class="nav-link" href="{{ url('home') }}">
                <i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class={{ Request::is('user*') ? 'active' : '' }}>
                <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-user"></i> <span>Users</span></a>
            </li>
            <li class={{ Request::is('product*') ? 'active' : '' }}>
                <a class="nav-link" href="{{ route('product.index') }}">
                <i class="fas fa-cart-shopping"></i> <span>Products</span></a>
            </li>
            <li class={{ Request::is('order*') ? 'active' : '' }}>
                <a class="nav-link" href="{{ route('order.index') }}">
                <i class="fa-solid fa-window-restore"></i> <span>Orders</span></a>
            </li>

            {{-- <li class="menu-header">Report</li>

            <li class={{ Request::is('report*') ? 'active' : '' }}>
                <a class="nav-link" href="{{ route('report.index') }}">
                <i class="fas fa-book"></i> <span>Report</span></a>
            </li> --}}

    </aside>
</div>
