<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">
<!--Head-->
@include('admin.includes.head')
<!-- Start body -->
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('favicon.ico')}}" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <x-alert />
    @auth
    @include('admin.includes.sidebar')
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('admin.includes.header')
        <!--  Header End -->
        <!-- Main content -->
        @yield('content')
        <!-- End Main content -->
        <!-- Search Bar -->
        @include('admin.includes.search')
        <!--  Let user choose dark or light mode -->
        @include('admin.includes.theme-button')

    </div>
    @else
    @yield('content')
    @endauth
    <!-- Js files -->
    @include('admin.includes.scripts')
</div>
</body>

</html>