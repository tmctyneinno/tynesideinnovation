@extends('layouts.app')
@section('content')

   <section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('/assets/images/abt.jpg')}});">
    </div>
    <div class="page-header__shape-1">
        <img src="{{asset('/assets/images/shapes/page-header-bg-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>About <span>Us</span></h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                    <li><span></span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-three__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="250">
                    <div class="about-three__img-box">
                        <div class="about-three__img">
                            <img src="{{asset('/assets/images/laptop.png')}}" alt="">
                        </div>
                        <div class="about-three__img-2">
                            <img src="{{asset('/assets/images/Tynes.jpg')}}g" alt="">
                        </div>
                        <div class="about-three__video-link">
                            <a href="{{asset('assets/images/small2.mp4')}}" class="video-popup">
                                <div class="about-three__video-icon">
                                    <span class="icon-play-buttton"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-three__right">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-icon-box">
                                <div class="section-title-two__tagline-icon-1"></div>
                                <div class="section-title-two__tagline-icon-2"></div>
                            </div>
                            <span class="section-title-two__tagline">About Us</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">Discover more about <span>our
                                identity </span><br>and our work.</h2>
                    </div>
                    <p class="about-three__text">Those graphics that describe your brand, show you yourself in various colours; those adverts that take you where you want to be, the creative design , the social media marketing schemes that showcase not just your qualities, but your brand.

                        The face of your business, your logo designs with mind dazzling digital printing solution services… all of these are our specialties atTYNESIDE INNOVATIONs –here we CARVE your ARTS and BRANDS in sharp edges and taming colours. We are CARVERS of ARTS and BRANDS, we are TYNESIDE INNOVATIONs.</p>

                </div>
            </div>
        </div>
    </div>
</section>


      <!--Services Three Start -->
      <section class="services-three">
        <div class="services-three__shape-1"></div>
        <div class="services-three__shape-2 zoominout"></div>
        <div class="services-three__shape-3"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-icon-box">
                        <div class="section-title__tagline-icon-1"></div>
                        <div class="section-title__tagline-icon-2"></div>
                    </div>
                    <span class="section-title__tagline">Our Expertise </span>
                </div>
            </div>
            <div class="row">
                <!--Services Three Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/icon7.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">WEBSITE DEVELOPMENT</a></h3>
                            <p class="services-three__text">
                              Get a unique, fully tailored website that aligns with your brand and business goals. We ensures a flawless experience on all devices, from desktops to smartphones.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/icon8.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">IMAGING & DIGITAL PRINTING</a></h3>
                            <p class="services-three__text">
                                We offer professional imaging and digital printing services that bring your ideas to life with precision and clarity. Whether you need business materials, promotional prints, or large-format signage, our advanced printing technology ensures vibrant colors, sharp details, and long-lasting quality.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/icon6.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">DIGITAL & SOCIAL MEDIA MARKETING</a>
                            </h3>
                            <p class="services-three__text">
                              We help businesses thrive in the digital space with strategic online marketing solutions. From increasing brand awareness to driving sales, our expert team creates data-driven marketing campaigns tailored to your goals.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/Nico.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">MOBILE APP CREATION</a></h3>
                            <p class="services-three__text">
                              Mobile applications bring human wants to their tables, secure human properties with tracking systems, and also save the world of boredom with selected gaming apps for entertainment and relaxation.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/Nico1.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">SEARCH ENGINE OPTIMIZATION</a></h3>
                            <p class="services-three__text">
                              we help businesses dominate search engines with powerful SEO strategies, our SEO services include  On-Page SEO, Off-Page SEO, Technical SEO, Keyword Research & Strategy, Local SEO, SEO Content Strategy, E-Commerce SEO
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="900">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                          <img src="{{asset('/assets/images/Nico2.png')}}" alt="">
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="services.html">IT SOLUTION DESIGNS</a></h3>
                            <p class="services-three__text">
                              We provide end-to-end IT solutions that enhance efficiency, security, and scalability. Whether you're a startup, small business, or enterprise, our expert IT team ensures you have the right technology to drive success. From cloud computing to cybersecurity, we tailor our services to meet your unique needs.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
            </div>
        </div>
    </section>
    <!--Services Three End -->


<section class="why-choose-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-four__left" data-aos="slide-right" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-icon-box">
                                <div class="section-title-two__tagline-icon-1"></div>
                                <div class="section-title-two__tagline-icon-2"></div>
                            </div>
                            <span class="section-title-two__tagline">Why Choose Us</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">Why you should choose us for<br>
                            your
                            <span>business needs.</span></h2>
                    </div>
                    <p class="why-choose-four__text">Touching the crest of creativity gets closer, when you visit pages where your best designs, adverts, business information, updates, bespoke development, social media marketing, and digital printings are best projected right? This is the secret of expert social media marketing strategies and optimization, when duly applied. This is exactly what we do at TYNESIDE INNOVATION!

                        We help carvea brand, your mobile app, website, or bespoke service site with features that hold viewers down till you are patronized.:
                    </p>
                    <div class="why-choose-four__img-box">
                        <div class="why-choose-four__img">
                            <img src="assets/images/resources/why-choose-four-img-1.jpg" alt="">
                        </div>
                        <div class="why-choose-four__img-shape-1 img-bounce">
                            <img src="assets/images/shapes/why-choose-four-img-shape-1.png" alt="">
                        </div>
                        <div class="why-choose-four__img-2">
                            <img src="assets/images/resources/why-choose-four-img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-four__right">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-four__single" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="100">
                                <div class="why-choose-four__icon">
                                    <img src="assets/images/icon/why-choose-four-single-icon-1-1.png" alt="">
                                </div>
                                <h3>Price Aren’t Overboard</h3>
                                <p>You want to keep a lid on cost, we know just how to help you deliver your project at a curtailed cost</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-four__single" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="200">
                                <div class="why-choose-four__icon">
                                    <img src="assets/images/icon/why-choose-four-single-icon-1-2.png" alt="">
                                </div>
                                <h3>Your Success is our Success</h3>
                                <p>We don’t only ask, but we listen to every bit of information and focus on your deepest concerns.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-four__single" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="300">
                                <div class="why-choose-four__icon">
                                    <img src="assets/images/icon/why-choose-four-single-icon-1-3.png" alt="">
                                </div>
                                <h3>We Deliver on Time</h3>
                                <p>We’re noble enough to understand how to not breach agreements, so we always keep our word </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-four__single" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="400">
                                <div class="why-choose-four__icon">
                                    <img src="assets/images/icon/why-choose-four-single-icon-1-4.png" alt="">
                                </div>
                                <h3>We’re Professionals</h3>
                                <p>We’ve worked hard over the years and have gathered professional experience which puts us in the best position to serve you</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-one">
    <div class="counter-one__shape-1 float-bob-x"
        style="background-image: url(assets/images/shapes/counter-one-shape-1.png);"></div>
    <div class="container">
        <ul class="list-unstyled counter-one__list">
            <li data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="counter-one__single">
                    <div class="counter-one__count count-box">
                        <p class="count-text" data-stop="240" data-speed="1500">00</p>
                        <span class="counter-one__count-plus">+</span>
                    </div>
                    <p class="counter-one__text">Projects Completed</p>
                </div>
            </li>
         
            <li data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="counter-one__single">
                    <div class="counter-one__count count-box">
                        <p class="count-text" data-stop="200" data-speed="1500">00</p>
                        <span class="counter-one__count-plus">+</span>
                    </div>
                    <p class="counter-one__text">Positive Review</p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-duration="1200" data-aos-delay="250">
                <div class="counter-one__single">
                    <div class="counter-one__count count-box">
                        <p class="count-text" data-stop="200" data-speed="1500">00</p>
                        <span class="counter-one__count-plus">+</span>
                    </div>
                    <p class="counter-one__text">Satisfied Client</p>
                </div>
            </li>
        </ul>
    </div>
</section>

@endsection
