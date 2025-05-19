@extends('layouts.app')

@section('content')
 
        <!--Page Header Start-->
        <section class="page-header">
          <div class="page-header__bg" style="background-image: url({{asset('/assets/images/Contact.jpg')}});">
          </div>
          <div class="page-header__shape-1">
              <img src="assets/images/shapes/page-header-shape-1.png" alt="">
          </div>
          <div class="container">
              <div class="page-header__inner">
                  <h2>BRANDING & LOGO DESIGNS</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>BRANDING & LOGO DESIGNS</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--Page Header End-->

      <!--Services Details Start-->
      <section class="services-details">
          <div class="container">
              <div class="row">
                  <div class="col-xl-8 col-lg-7">
                      <div class="services-details__left">
                          <div class="services-details__img">
                              <img src="{{asset('/assets/images/los.webp')}}" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">WHAT WE DO</h3>
                              <p class="services-details__text-2">We are a Leading Logo Design Agency, offering Branding and Rebranding Services</p>
                              <div class="services-details__points-box">
                                <p>If you are searching for logo design and branding companies in Nigeria, you have come to the right place. Your logo is likely the first piece of information your audience has about your company. Having a professional brand identity is no trivial matter; instead, it is a powerful tool that instantly communicates your corporate style and philosophy and sets you above your competition. To say the least: Your logo can make or Br e-Ak your company, no pressure, right?

                              </div>
                           
                              <h3 class="services-details__title-3">We Create Identifiable and Trustworthy Brand Names for Successful Companies and Products</h3>
                              <p class="services-details__text-3">We help founders to name their business or product</p>
                              <div class="services-details__points-and-img">
                                  <div class="row">
                                  <p>Whether you are a fledgeling entrepreneur, a startup or an established company undergoing a brand refresh, your name and tagline/slogan are critical identity assets.  Tyneside Innovation is a naming agency that will help you develop a business name and tagline that illuminate the brand value and encourage buy-in. Combined with visual impact and a strategy that sings, you will be ready to tackle any market challenge!</p>
                                  </div>
                              </div>
                              <p class="services-details__text-4">We build optimized websites that rank high on search engines so that potential customers that require your services can always find you easily when searches are made.</p>
                              <div class="services-details__img-two">
                                  <img src="{{asset('assets/images/qw.webp')}}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                      <div class="services-details__right">
                          <div class="services-details__more-services">
                              <h3>Our Services</h3>
                              <span></span>
                              <ul class="services-details__more-services-list list-unstyled">
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home', 'digital-marketing')}}">Digital Marketing </a></p>
                                  </li>
                                  <li class="active">
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home', 'web-development')}}">Web Design & Development</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home', 'search-engine')}}">Search Engine Optimization</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home', 'branding-design')}}">Design & Branding</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home', 'app-development')}}">App Development</a></p>
                                  </li>
                              </ul>
                          </div>
                          <div class="services-details__contact-box">
                              <h3>Contact Us</h3>
                              <span></span>
                              <p class="services-details__contact-text">We are very close to your doorsteps</p>
                              <div class="services-details__contact-btn-box">
                                  <a href="#" class="services-details__contact-btn thm-btn"><i
                                          class="icon-right"></i>Contact Us</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--Services Details End-->



      <!--CTA One Start -->
      <section class="cta-one cta-two">
          <div class="container">
              <div class="cta-one__inner">
                  <div class="cta-one__img">
                      <img src="assets/images/resources/cta-one-img-1.png" alt="">
                  </div>
                  <div class="cta-one__inner-content">
                      <div class="cta-one__shape-bg"
                          style="background-image: url(assets/images/shapes/cta-one-shape-bg.png);"></div>
                      <h3 class="cta-one__title">Start your journey with our <br> exceptional services.</h3>
                      <div class="cta-one__btn">
                          <a href="{{ route('home.pages','contact')}}">Contact Us <span class=" icon-right-arrow-1"></span></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--CTA One End -->

@endsection
