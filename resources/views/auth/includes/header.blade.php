
<nav id="navbar_top" class="navbar navbar-expand-md shadow-md py-0"
    style="height:4rem; background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand p-0 m-0" href="{{ url('/') }}">
            @include('common.logo')
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
               @guest
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin') }}">{{ __('Login') }}</a>
                  </li>
                  {{-- @if (Route::has('register'))
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                  @endif --}}
               @else
               <li class="nav-item userName dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @if (Auth::user()->photo != null)
                        <img src="{{asset('UserPhoto')}}/{{Auth::user()->photo}}"  width="35">
                     @endif
                     {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </div>
               </li>
               @endguest
            </ul>

        </div>
    </div>
</nav>
