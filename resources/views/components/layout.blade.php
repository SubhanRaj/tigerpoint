<!-- Default Layout -->
<!DOCTYPE html>
<html lang="en_IN">
<!-- head -->
@include('includes.head')
<!-- Body -->
<body>
<!-- Loader -->
<div class="lx-loader">
    <div>
        <h1>Tiger Point v1.0</h1>
        <img src="{{asset('images/oval.svg')}}" alt="Loading" />
        <p>Designed & Developed by SIBIN Tech Solutions</p>
    </div>
</div>
<!-- Background -->
<div class="lx-background">
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
    <div class="lx-background-item"></div>
</div>
<!-- Wrapper -->
<div class="lx-wrapper">
    <!-- Theme Style -->
    <div class="lx-theme-style">
        <a href="javascript:;">Dark Mode</a>
    </div>
    <!-- header -->
    @include('includes.header')
    <!-- main body -->
    <div class="lx-main">
        {{$slot}}
    </div>
    <!-- footer -->
    @include('includes.footer')
</div>
</body>
</html>