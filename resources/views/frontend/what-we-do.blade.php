@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 

<!--=================================
    Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50"
    style="background-image: url('../assets/images/header-inner/01.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center position-relative">
            <div class="col-md-8">
                <div class="header-inner-title text-center">
                    <h1 class="text-white fw-normal">What we do</h1>
                    <p class="text-white mb-0">Our Expertise. Know more about what we do</p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link active" href="{{ route('home.pages', 'about-us') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'careers') }}">Careers</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'how-we-work') }}">How we work</a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'our-team') }}">Our team</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'mission-and-vision') }}">Mission and vision</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'our-value') }}">Our values</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
      Header Inne -->

<!--=================================
      History -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="section-title text-center">
                    <h2>TYNESIDE INNOVATION has been offering world-class information technology.</h2>
                    <p class="px-xl-5">
                        Those graphics that describe your brand, show you yourself in various colours; those adverts that take you where you want to be, the creative design , the social media marketing schemes that showcase not just your qualities, but your brand.
                    </p>
                    <br>
                    <p>
                        The face of your business, your logo designs with mind dazzling digital printing solution services… all of these are our specialties at TYNESIDE INNOVATIONs –here we CARVE your ARTS and BRANDS in sharp edges and taming colours. We are CARVERS of ARTS and BRANDS, we are TYNESIDE INNOVATIONs.
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--=================================
      History -->

<!--=================================
      portfolio -->
<section class="space-pb popup-gallery overflow-hidden">
    <div class="container-fluid">
        <div class="row d-flex align-items-end">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/01.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/01.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/02.jpg')}}">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/gallery/02.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/03.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/03.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/04.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/04.jpg')}}"alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/05.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/05.jpg')}}"  alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/06.jpg')}}">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/gallery/06.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/07.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/07.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="{{ asset('assets/images/gallery/08.jpg')}}">
                    <img class="img-fluid" src="{{ asset('assets/images/gallery/08.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!--=================================
      portfolio -->

<!--=================================
      Counter -->
<section class="py-4 bg-transparant border">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter counter-02">
                    <div class="counter-icon align-self-center">
                        <i class="flaticon-emoji"></i>
                    </div>
                    <div class="counter-content align-self-center">
                        <span class="timer" data-to="1790" data-speed="10000">1790</span>
                        <label>Happy Clients</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter counter-02">
                    <div class="counter-icon">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="245" data-speed="10000">32</span>
                        <label>Skilled Experts</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter counter-02">
                    <div class="counter-icon">
                        <i class="flaticon-strong"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="491" data-speed="10000">491</span>
                        <label>Finished Projects</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter counter-02">
                    <div class="counter-icon">
                        <i class="flaticon-icon-149196"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="1090" data-speed="10000">1090</span>
                        <label>Media Posts</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
      Counter -->

<!--=================================
      Testimonial -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
                <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1"
                    data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="testimonial-avatar shadow">
                                <img class="img-fluid rounded-circle" src="{{ asset('assets/images/avatar/01.jpg')}}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>We don't take ourselves too seriously, but seriously enough to ensure we're creating
                                    the best product and experience for our customers. I feel like Help Scout does the
                                    same.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="testimonial-name">
                                    <h6 class="mb-1">Alice Williams </h6>
                                    <span>Vetrov Systems Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="testimonial-avatar shadow">
                                <img class="img-fluid rounded-circle" src="{{ asset('assets/images/avatar/02.jpg')}}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>The hi-soft database has been one of our current sources for recruitment, backed by a
                                    very experienced team who would go out of their way to make sure that requests are
                                    taken ahead.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="testimonial-name">
                                    <h6 class="mb-1">Michael Bean</h6>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
      Testimonial -->

<!--=================================
      Client Logo -->
<section class="space-pb our-clients">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-4 mb-4 mb-md-0">
                <h5 class="text-primary mb-0">Awards and Nominees</h5>
            </div>
            <div class="col-xl-9 col-md-8">
                <div class="owl-carousel" data-nav-arrow="false" data-items="4" data-md-items="4" data-sm-items="4"
                    data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/01.svg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/02.svg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/03.svg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/04.svg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/05.svg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid w-75 grayscale" src="{{ asset('assets/images/award-logo/06.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
      Client Logo -->

<!--=================================
      Action Box -->
<section class="space-pb dark-background">
    <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">
            <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
            <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
            <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i
                    class="fas fa-arrow-right ps-3"></i></a>
        </div>
    </div>
</section>
<!--=================================
      Action Box -->


@endsection
