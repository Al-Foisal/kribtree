<aside class="main-sidebar sidebar-dark-primary elevation-4" >
   <a href="{{url('/admin')}}" class="brand-link bbg-light">
      <i lass="nav-icon fas fa-school"></i>
      <span class="brand-text font-weight-light text-center pl-2">Admin Menu</span>
   </a>
   <div class="sidebar">
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item as-treeview">
               <a href="{{ route('home') }}" class="nav-link {{ (request()->routeIs('home*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('product') }}" class="nav-link {{ (request()->routeIs('product*'))  ? 'active' : '' }}">
                  <i class="nav-icon far fa-address-card"></i>
                  <p>Product</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('useful') }}" class="nav-link {{ (request()->routeIs('useful*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-flask"></i>
                  <p>Useful Link</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('leadership') }}" class="nav-link {{ (request()->routeIs('leadership*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Leadership</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('social') }}" class="nav-link {{ (request()->routeIs('social*'))  ? 'active' : '' }}">
                  <i class="nav-icon far fa-hand-point-left"></i>
                  <p>Social site</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('contact') }}" class="nav-link {{ (request()->routeIs('contact*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Contact Us</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('service') }}" class="nav-link {{ (request()->routeIs('service*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Service page</p>
               </a>
            </li>
            
            <li class="nav-item as-treeview">
               <a href="{{ route('professional-network') }}" class="nav-link {{ (request()->routeIs('professional-network*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Professional network</p>
               </a>
            </li>

            <li class="nav-item as-treeview">
               <a href="{{ route('agent') }}" class="nav-link {{ (request()->routeIs('agent*'))  ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Agent list</p>
               </a>
            </li>

            
            
         </ul>
      </nav>
   </div>
</aside>
