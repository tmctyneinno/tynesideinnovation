@extends('layouts.app')

@section('content')
 
        <!--Page Header Start-->
        <section class="page-header">
          <div class="page-header__bg" style="background-image: url(assets/images/shapes/page-header-bg-shape.png);">
          </div>
          <div class="page-header__shape-1">
              <img src="assets/images/shapes/page-header-shape-1.png" alt="">
          </div>
          <div class="container">
              <div class="page-header__inner">
                  <h2>App Development</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>App Development</li>
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
                              <img src="{{asset('/assets/images/app.gif')}}" style="width:500px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-2">We Design & Develop AI-Driven Mobile Apps</h3>
                              <p class="services-details__text-2">Where Innovation Meets Impeccable Design!
                                Join Tyneside Innovation and reshape mobile app development, transforming businesses with cutting-edge technology and design.</p>
                                <h3 class="services-details__title-2">Beyond Functionality: Transformative Development Solutions</h3>
                                <p class="services-details__text-2">Where Innovation Meets Impeccable Design!
                                    At Tyneside Innovation , we're not merely developers; we're architects of digital brilliance, shaping your concepts into impactful reality. In the ever-evolving digital landscape, your ideas thrive under our meticulous craftsmanship. Our unwavering dedication propels your brand beyond challenges, ensuring a unique and distinguished presence. Your journey with Tyneside Innovation  isn't just about development; it's a transformative experience where your brand becomes a beacon of distinction and success, navigating the complexities of the digital world with confidence and innovation. Here, we don't just build; 
                                    we cultivate a digital legacy that stands the test of time, ensuring your brand continues to shine and evolve in the dynamic realms of the digital universe.</p>

                                    <p style="padding-top:10px">  <strong> Unleash the potential of your app with our transformative features. From innovative solutions to client-centric approaches, we craft success in every line of code.</strong></p>
                              <div class="services-details__points-box">
                              
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We 0ffers easy pricing models, designed to offer exceptional value without compromising on the qualityg</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Immerse your users in a captivating experience with Tyneside Innovation's custom UI/UX designs to keep users engaged & satisfied</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Tyneside Innovation's streamlined development processes, ensuring you stay ahead of market demands and gain a competitive edge </p>
                                      </li>
                                      <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Our commitment to integrating the latest technologies provides your app with standout features that surpass industry standards  </p>
                                    </li>
                                  </ul>
                              </div>
                              <div class="services-details__single-service-box">
                                  <div class="row">
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="{{asset('assets/images/service1.svg')}}" alt="">
                                              </div>
                                              <p>Mobile App Development</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="services-details__single-service">
                                            <div class="services-details__single-icon">
                                                <img src="{{asset('assets/images/service2.svg')}}" alt="">
                                            </div>
                                            <p>Cross-platform App Development</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="services-details__single-service">
                                            <div class="services-details__single-icon">
                                                <img src="{{asset('assets/images/service3.svg')}}" alt="">
                                            </div>
                                            <p>M-commerece B2B & B2C</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="services-details__single-service">
                                            <div class="services-details__single-icon">
                                                <img src="{{asset('assets/images/service4.svg')}}" alt="">
                                            </div>
                                            <p>App Prototype and Strategy</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                      <div class="services-details__right">
                          <div class="services-details__more-services">
                              <h3>More Services</h3>
                              <span></span>
                                <ul class="services-details__more-services-list list-unstyled">
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','digital-marketing')}}">Digital Marketing </a></p>
                                  </li>
                                  <li class="active">
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','web-development')}}">Web Design & Development</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','search-engine')}}">Search Engine Optimization</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','branding-design')}}">Design & Branding</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','app-development')}}">App Development</a></p>
                                  </li>
                              </ul>
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
