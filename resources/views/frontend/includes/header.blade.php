{{-- <nav id="navbar_top" class="navbar navbar-expand-md shadow-md py-0" style="height:4rem; background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand p-0 m-0" href="{{ url('/') }}">
            @include('common.logo')
        </a>
        <a href="{{ route('cart') }}" class="navbar-toggler" type="button" >
            <i class="fa-solid fa-cart-shopping" style=";"></i>
            <span class="total_cart_items">{{ Cart::count() }}</span>
        </a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @include('frontend.includes.top-menu-title')

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <style>
                        .btn:hover {
                            color: unset;
                            border: none;
                            background-color: unset;
                            border-color: unset;
                        }

                        .display-none {
                            display: none;
                        }
                    </style>
                    <div class="input-group"
                        style="border: 1px solid #ccc;
                     {{ request()->routeIs('products') ? 'top:6px;' : 'top:2px;' }}">
                        <input type="text" name="search" required class="form-control" style="border-radius: 0"
                            placeholder="Search" style="">
                        <span class="input-group-btn">
                            <button class="btn btn-theme" type="submit" style="margin: 0"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart') }}" type="button"
                        class="btn btn-sm wishList {{ request()->routeIs('products') ? '' : 'display-none' }}">
                        <i class="fa-solid fa-cart-shopping" style=";"></i>
                        <span class="total_cart_items">{{ Cart::count() }}</span>
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item userName dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Auth::user()->photo != null)
                                <img src="{{ asset('UserPhoto') }}/{{ Auth::user()->photo }}" width="35">
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav> --}}

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ url('/') }}">
                @include('common.logo')
            </a>
            <!-- Left links -->
            {{-- @if (Route::CurrentRouteName() != 'index') --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                        href="{{ Route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}"
                        href="{{ Route('products') }}">Service product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('service-page') ? 'active' : '' }}"
                        href="{{ Route('service-page') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('professional-network-page') ? 'active' : '' }}"
                        href="{{ Route('professional-network-page') }}">Professional network</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('who-we-are') ? 'active' : '' }}"
                        href="{{ Route('who-we-are') }}">Who we are</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('agent-finder') ? 'active' : '' }}"
                        href="{{ Route('agent-finder') }}">Professional finder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('allVideo'))  ? 'active' : '' }}"
                        href="{{ Route('allVideo') }}">Kribtree video</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('') ? 'active' : '' }}" href="#">What
                                we do</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('') ? 'active' : '' }}" href="#">How we
                                do it</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('') ? 'active' : '' }}" href="#">What
                                they're saying</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('') ? 'active' : '' }}" href="#">What
                                we're saying</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('') ? 'active' : '' }}" href="#">Find
                                KRIBTREE</a>
                        </li>
                    </ul>
                </li>
            </ul>
            {{-- @endif --}}

            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <form class="input-group w-auto my-auto d-sm-flex" style="margin-right:5px;">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search"
                    style="min-width: 125px;" />
                <span class="input-group-text border-0 d-none d-lg-flex" style="margin-right:5px;"><i
                        class="fas fa-search"></i></span>
            </form>
            {{-- <a class="link-secondary me-3" href="{{ route('cart') }}">
                <i class="fas fa-shopping-cart"></i>{{ Cart::count() }}
            </a> --}}

            @auth
                <a class="link-secondary" href="{{ route('user.dashboard') }}">
                    Dashboard
                </a>
            @else
                <a class="link-secondary" href="{{ route('login') }}">
                    Login
                </a>
            @endauth

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
