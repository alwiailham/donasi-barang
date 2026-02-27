<!--start sidebar-->
<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Roksyn</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-symbols-outlined">close</span>
        </div>
    </div>

    <div class="sidebar-nav" data-simplebar="true">

        <ul class="metismenu" id="menu">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <div class="parent-icon"><span class="material-symbols-outlined">home</span></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <!-- Donatur -->
            <li>
                <a href="{{ route('donatur.index') }}">

                    <div class="parent-icon"><span class="material-symbols-outlined">group</span></div>
                    <div class="menu-title">Manajemen Donatur</div>
                </a>
            </li>

            <!-- Donasi Barang -->
            <li>
                <a href="{{ route('admin.donasi.index') }}">
                    <div class="parent-icon"><span class="material-symbols-outlined">inventory_2</span></div>
                    <div class="menu-title">Manajemen Donasi Barang</div>
                </a>
            </li>

            <!-- Penyaluran Barang -->
            <li>
                <a href="{{ route('tujuan.index') }}">
                    <div class="parent-icon"><span class="material-symbols-outlined">local_shipping</span></div>
                    <div class="menu-title">Tujuan</div>
                </a>
            </li>

            <!-- Logout -->
            <li>
                <a href="{{ route('login') }}">
                    <div class="parent-icon"><span class="material-symbols-outlined">logout</span></div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>

        </ul>

    </div>

    <div class="sidebar-bottom dropdown dropup-center dropup">
    <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
        <div class="user-img">
            <img src="{{ asset('assets/images/avatars/01.png') }}" alt="">
        </div>
        <div class="user-info">
            <h5 class="mb-0 user-name">{{ session('admin_name') ?? 'Admin' }}</h5>
            <p class="mb-0 user-designation">Administrator</p>
        </div>
    </div>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><span class="material-symbols-outlined me-2">dashboard</span><span>Dashboard</span></a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}"><span class="material-symbols-outlined me-2">logout</span><span>Logout</span></a></li>
        </ul>
    </div>
</aside>
<!--end sidebar-->



@yield('content')