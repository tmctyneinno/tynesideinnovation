<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @if(isset($title)) {{$title}} @else Tyneside  Innovation  @endif</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content=" Web Designers in Lagos: Tyneside Innovation provides Web Design Services for Corporate and E-commerce Websites, we also Design Logos and Market your products Online; Web Design Nigeria">
    <meta name="title" content="Web design Nigeria, located in Lagos. We also provide e-Commerce, SEO, Digital Marketing and Branding services">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="index, follow">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content=" Tyneside Innovation ">
    <meta name="application-name" content="https://tynesideinnovation.com/">

      <!-- Open Graph -->
      <meta property="og:site_name" content="Web Design Nigeria - Tyneside Innovation | Website Designer in Lagos">
      <meta property="og:title" content="Web Designers in Lagos | Affordable Web Design Nigeria">
      <meta property="og:description" content="Web Designers in Lagos: Tyneside Innovation  provides Web Design Services for Corporate and E-commerce Websites, we also Design Logos and Market your products Online; Web Design Nigeria">
      <meta property="og:image" content="https://tynesideinnovation.com/assets/images/Tyneside.png">
      <meta property="og:url" content="https://tynesideinnovation.com/">
      <meta property="og:locale" content="en_US" />
       <meta property="og:type" content="website" />
      
   <!-- Twitter -->
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Web Designers in Lagos | Affordable Web Design Nigeria ">
   <meta name="twitter:description" content="Web Designers in Lagos: Tyneside Innovation  provides Web Design Services for Corporate and E-commerce Websites, we also Design Logos and Market your products Online; Web Design Nigeria">
   <meta name="twitter:image" content="https://tynesideinnovation.com/assets/images/Tyneside.png">
   <link rel="canonical" href="https://tynesideinnovation.com/" />
   

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/images/tyne.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/images/tyne.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/images/tyne.png')}}" />
 
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
    <link rel="stylesheet" href="{{asset('assets/css/module-css/page-header.css')}}" />
    
@yield('style')
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
