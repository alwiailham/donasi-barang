<body class="home4">

    <!-- Header Section Start -->
    <header class="position-relative bg-secondary-light">

        <!-- Header Top -->
        <div class="header-top pt-3 bg-secondary white pb-5">
            <div class="container">
                <div class="header-top-inner">
                    <div class="row align-items-center">

                        <div class="col-12">
                            <div class="d-flex justify-content-end align-items-center">
                                <!-- Login -->
                                <a href="{{ route('login') }}" class="btn1" style="padding: 10px 20px;">
                                    Login
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- Navbar -->
        <div class="header-nav header-nav-menu" id="header-nav-menu">
            <div class="container">

                <div
                    class="header-nav-inner d-flex justify-content-between p-3 py-2 rounded-5 bg-secondary-light position-relative z-2">

                    <!-- Logo -->
                    <div class="header-logo">
                        <img src="{{ asset('images/logo1.png') }}" alt="logo">
                    </div>

                    <!-- Navigation -->
                    <div class="header-nav-right d-flex align-items-center">

                        <ul class="navbar-nav flex-row align-items-center" id="responsive-menu">

                            <!-- Home -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold {{ request()->is('/') ? 'active' : '' }}"
                                    href="{{ url('/') }}">Home</a>
                            </li>

                            <!-- About -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold {{ request()->is('about') ? 'active' : '' }}"
                                    href="{{ url('about') }}">About</a>
                            </li>

                            <!-- Donasi -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ url('donasi_list') }}">Donasi List</a>
                            </li>
                            <!-- Gallery -->
                            {{-- <li class="nav-item">
                                <a class="nav-link fw-bold {{ request()->is('galery') ? 'active' : '' }}"
                                    href="{{ url('galery') }}">Gallery</a>
                            </li> --}}

                            <!-- Contact -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold {{ request()->is('contact') ? 'active' : '' }}"
                                    href="{{ url('contact') }}">Contact</a>
                            </li>

                        </ul>

                        <!-- Search Icon -->
                        <a href="#search1" class="mt_search text px-3">
                            <i class="fa fa-search"></i>
                        </a>

                    </div> <!-- END header-nav-right -->

                </div> <!-- END nav-inner -->

                <div id="slicknav-mobile"></div>

            </div>

            <!-- Search Popup -->
            <div id="search1" class="search-popup">
                <button type="button" class="close">×</button>
                <form>
                    <input type="search" placeholder="Search...">
                    <button class="btn-primary rounded-0 border-0">
                        <i class="fa fa-search text-white"></i>
                    </button>
                </form>
            </div>

        </div> <!-- END header-nav -->

    </header>
    <!-- Header Section End -->

    @yield('content')