<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{ asset('assets/img/logo.png') }}" width="50" alt=""></i>RENT CAR</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->role }}</span>
            </div>
        </div>
        @if (Auth::check())
            <div class="navbar-nav w-100">
                <a href="{{ route('dashboard') }}"
                    class="nav-item nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                </a>
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('transaksi') }}"
                        class="nav-item nav-link {{ Request::routeIs('transaksi') ? 'active' : '' }}">
                        <i class="fa fa-tags me-2"></i>Transaksi
                    </a>
                    <a href="{{ route('laporan') }}"
                        class="nav-item nav-link {{ Request::routeIs('laporan') ? 'active' : '' }}">
                        <i class="fa fa-file-archive me-2"></i>Laporan Transaksi
                    </a>
                    <a href="{{ route('mobil') }}"
                        class="nav-item nav-link {{ Request::routeIs('mobil') ? 'active' : '' }}">
                        <i class="fa fa-car me-2"></i>Mobil
                    </a>
                    <a href="{{ route('users') }}"
                        class="nav-item nav-link {{ Request::routeIs('users') ? 'active' : '' }}">
                        <i class="fa fa-users me-2"></i>Users
                    </a>
                @endif
            </div>

        @endif
    </nav>
</div>
<!-- Sidebar End -->
