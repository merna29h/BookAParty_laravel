<!doctype html>
<html class="no-js" lang="zxx">

@include('component.front end.includes.head')

<body>


    <!-- header-start -->
    @include('component.front end.includes.header')
    <!-- header-end -->


<div class="div">
    @yield('home')
</div>


    <!-- footer_start  -->
    @include('component.front end.includes.footer')
    <!-- footer_end  -->

    <!-- JS here -->
    @include('component.front end.includes.script')
      <!-- JS end -->
</body>

</html>