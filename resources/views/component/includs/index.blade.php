<!doctype html>
<html lang="en">

@include('component.includs.head')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!-- Sidebar Start -->
    @include('component.includs.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('component.includs.header')
      <!--  Header End -->
      <!--  Body End -->
      
        <div class="container-fluid">
  
         @yield('home')
        </div>
      <!--  Body End -->

      <!--  Footer Start -->
      @include('component.includs.footer')
      <!-- Footer End -->
      </div>
      </div>
      @include('component.includs.script')

    </body>
    </html>