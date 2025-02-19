<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tyneside Innovation</title>
   

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="../../../fonts.googleapis.com/cssc15a.css?family=Archivo:400,400i,500,500i,600,600i,700,700i&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup/magnific-popup.css')}}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png')}}">

</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>
