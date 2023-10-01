<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="  {{ asset('backend/assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
          
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
      <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
      <a class="sidebar-link" href="{{route('cate.index')}}" aria-expanded="false">
       
      <span>
      <i class="ti ti-layout-dashboard"></i>
      </span>
      <span class="hide-menu"> Categories</span>
      </a>

      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="  {{route('evant.create')}}" aria-expanded="false">
         
        <span>
        <i class="ti ti-layout-dashboard"></i>
        </span>
        <span class="hide-menu"> Party</span>
        </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            
          <span>
          <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">Reservations</span>
          </a>
          </li>
        </ul>
   
            <div class="unlimited-access-img">
            <img src="  {{ asset('public/backend/assets/images/backgrounds/rocket.png') }}" alt="" class="img-fluid">
            </div>
              </div>
                </nav>
      <!-- End Sidebar navigation -->

    <!-- End Sidebar scroll-->
  </aside>