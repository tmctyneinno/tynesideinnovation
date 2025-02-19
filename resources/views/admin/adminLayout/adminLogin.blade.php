<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-sidebar="dark" data-sidebar-size="sm-hover" data-preloader="disable" card-layout="" data-bs-theme="light">

<head>

    <meta charset="utf-8" />
    <title> @yield('title') |  Admin Tyneside Innovation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png')}}">

    @include('admin.adminLayout.head-css')
</head> 

@yield('body')

@yield('content')

@include('admin.adminLayout.scripts')
</body>

</html>
