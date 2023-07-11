<!DOCTYPE html>
<html lang="en">
<!--Head-->
@include('admin.includes.head')
<!-- Start body -->
<!-- Preloader -->
<div class="preloader">
    <img src="" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    @yield('content')
</div>
<!-- Js files -->
@include('admin.includes.scripts')
</body>
</html>