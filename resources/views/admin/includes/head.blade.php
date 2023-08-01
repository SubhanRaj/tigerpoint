<head>
    <!--  Title -->
    @auth
    if (Auth::user()->role == 'admin')
    <title> @yield('title') || Admin Dashbaord || {{ config('app.name') }}</title>
    @elseif (Auth::user()->role == 'user')
    <title> User Profile || {{ config('app.name') }} || Photo Journal & Blog</title>
    @endauth
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{asset('css/admin/style.min.css')}}" />
</head>