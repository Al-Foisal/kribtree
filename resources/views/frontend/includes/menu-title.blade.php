
<style>.list_item .active { background: rgba(255,255,255,.2); }</style>
<div class="side_menu">
    <div class="burger_box">
        <div class="menu-icon-container">
            <a href="#" class="menu-icon js-menu_toggle closed">
                <span class="menu-icon_box">
                    <span class="menu-icon_line menu-icon_line--1"></span>
                    <span class="menu-icon_line menu-icon_line--2"></span>
                    <span class="menu-icon_line menu-icon_line--3"></span>
                </span>
            </a>
        </div>
    </div>
    <div class="px-3">
        <h4 class="menu_title pt-2 text-white">Menu Title</h4>
        <ul class="list_load">
            <li class="list_item">
                <a class="{{ (request()->routeIs('products'))  ? 'active' : '' }}"
                    href="{{Route('products')}}">Service product</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs('service-page'))  ? 'active' : '' }}"
                    href="{{Route('service-page')}}">Service</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs('professional-network-page'))  ? 'active' : '' }}"
                    href="{{Route('professional-network-page')}}">Professional network</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs('who-we-are'))  ? 'active' : '' }}" 
                    href="{{ Route('who-we-are') }}">Who we are</a>
            </li>            
            <li class="list_item">
                <a class="{{ (request()->routeIs('agent-finder'))  ? 'active' : '' }}"
                    href="{{ Route('agent-finder') }}">Agent finder</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs(''))  ? 'active' : '' }}"
                    href="#">What we do</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs(''))  ? 'active' : '' }}"
                    href="#">How we do it</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs(''))  ? 'active' : '' }}"
                    href="#">What they're saying</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs(''))  ? 'active' : '' }}"
                    href="#">What we're saying</a>
            </li>
            <li class="list_item">
                <a class="{{ (request()->routeIs(''))  ? 'active' : '' }}"
                    href="#">Find KRIBTREE</a>
            </li>
        </ul>
    </div>
</div>