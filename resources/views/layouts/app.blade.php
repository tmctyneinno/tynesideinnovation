<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @isset('title') {{$title}} @else Tyneside  Innovation  @endisset</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="" />
    <meta name="description" content=" " />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/module-css/slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/brand.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/services.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/about.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/why-choose.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/process.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/portfolio.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/testimonial.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/pricing.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/blog.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/newsletter.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/cta.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/counter.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/team.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/sliding-text.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/serving.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/welcome.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
