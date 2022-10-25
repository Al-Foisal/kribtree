<nav id="navbar_top" class="navbar navbar-expand-md shadow-md py-0" style="height:4rem; background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand p-0 m-0" href="{{ url('/') }}">
            @include('common.logo')
        </a>
        <a href="{{ route('cart') }}" class="navbar-toggler" type="button" >
            <i class="fa-solid fa-cart-shopping" style=";"></i>
            <span class="total_cart_items">{{ Cart::count() }}</span>
        </a>
        {{-- <style>
            @media only screen and (min-width: 991px) {
                .vvv {
                    display: none;
                }
            }
        </style>
        <ul class="navbar-nav ms-auto ">

            <li class="nav-item vvv">
                <div class="input-box-search" style="width: 35rem;">
                    <input type="text" class="form-control">
                    <i class="fa fa-search"></i>
                </div>
                <style>
                    .btn:hover {
                        color: unset;
                        border: none;
                        background-color: unset;
                        border-color: unset;
                    }
                </style>
                <div class="input-group" style="border: 1px solid #ccc;
                top:0px;">
                    <input type="text" name="search" required class="form-control" style="border-radius: 0"
                        placeholder="Search" style="">
                    <span class="input-group-btn">
                        <button class="btn btn-theme" type="submit" style="margin: 0"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </li>
        </ul> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @include('frontend.includes.top-menu-title')

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- <div class="input-box-search" style="width: 35rem;">
                        <input type="text" class="form-control">
                        <i class="fa fa-search"></i>
                    </div> --}}
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
                    {{-- data-bs-toggle="modal" data-bs-target="#shopping"               --}}
                    <a href="{{ route('cart') }}" type="button"
                        class="btn btn-sm wishList {{ request()->routeIs('products') ? '' : 'display-none' }}">
                        <i class="fa-solid fa-cart-shopping" style=";"></i>
                        <span class="total_cart_items">{{ Cart::count() }}</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <button type="button" class="btn btn-sm wishList" data-bs-toggle="modal"
                        data-bs-target="#userLogin">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </li> --}}
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
</nav>
