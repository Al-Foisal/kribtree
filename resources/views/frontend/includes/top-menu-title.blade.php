<style>
    .dynamic li a {font-size: 16px;}
    .dynamic li .active{ color: #000; font-weight: bold; }
    .dynamic .nav-item a:hover{ color: rgb(0, 106, 255); }
    .dropdown-item.active, .dropdown-item:active { background-color: unset; }
</style>

@if(Route::CurrentRouteName() != 'index')
    <ul class="navbar-nav ms-auto dynamic">
        
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('index'))  ? 'active' : '' }}" 
                href="{{ Route('index') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('products'))  ? 'active' : '' }}"
                href="{{Route('products')}}">Service product</a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('service-page'))  ? 'active' : '' }}"
                href="{{Route('service-page')}}">Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('professional-network-page'))  ? 'active' : '' }}"
                href="{{Route('professional-network-page')}}">Professional network</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('who-we-are'))  ? 'active' : '' }}" 
                href="{{ Route('who-we-are') }}">Who we are</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('agent-finder'))  ? 'active' : '' }}"
                href="{{ Route('agent-finder') }}">Agent finder</a>
        </li>       
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item {{ (request()->routeIs(''))  ? 'active' : '' }}"
                        href="#">What we do</a>
                </li>
                <li>
                    <a class="dropdown-item {{ (request()->routeIs(''))  ? 'active' : '' }}"
                        href="#">How we do it</a>
                </li>
                <li>
                    <a class="dropdown-item {{ (request()->routeIs(''))  ? 'active' : '' }}"
                        href="#">What they're saying</a>
                </li>
                <li>
                    <a class="dropdown-item {{ (request()->routeIs(''))  ? 'active' : '' }}"
                        href="#">What we're saying</a>
                </li>
                <li>
                    <a class="dropdown-item {{ (request()->routeIs(''))  ? 'active' : '' }}"
                        href="#">Find KRIBTREE</a>
                </li>
            </ul>
        </li>
    </ul>
@endif
