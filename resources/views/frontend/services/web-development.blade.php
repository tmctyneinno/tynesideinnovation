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
                  <h2>Web Design & Development</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>Web Design & Development</li>
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
                              <img src="{{asset('/assets/images/web.jpg')}}" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">WHAT WE DO</h3>
                              <p class="services-details__text-2">We help enterprises and startups move their ideas from concept to the market and offers web design services that promote your business</p>
                              <div class="services-details__points-box">
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Target your next customers</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Attract
                                            huge traffic</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Grow your Brand online</p>
                                      </li>
                                  </ul>
                              </div>
                              <div class="services-details__single-service-box">
                                  <div class="row">
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-1.png" alt="">
                                              </div>
                                              <p>User Friendly Designs</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-2.png" alt="">
                                              </div>
                                              <p>SEO Friendly Designs </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-3.png" alt="">
                                              </div>
                                              <p>Pay Good Attention to your colors</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-4.png" alt="">
                                              </div>
                                              <p>Cusomized interface just for you</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                             
                              <h3 class="services-details__title-3">Why Do you need a website</h3>
                              <p class="services-details__text-3">With billions of people visiting the web daily, you can get your next customers just by having a very good website that represents your organisation on the web.</p>
                              <div class="services-details__points-and-img">
                                  <div class="row">
                                      <div class="col-xl-6">
                                          <ul class="services-details__points-1 list-unstyled">
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Customized Solutions: We tailor our <br>strategies </p>
                                              </li>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Our team of experts brings extensive <br>knowledge </p>
                                              </li>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>We utilize the latest technology and tools in building your websites</p>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="col-xl-6">
                                          <div class="services-details__points-img">
                                              <img src="{{asset('/assets/images/layer1.png')}}"
                                                  alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p class="services-details__text-4">We build optimized websites that rank high on search engines so that potential customers that require your services can always find you easily when searches are made.</p>
                              <div class="services-details__img-two">
                                  <img src="{{asset('assets/images/services/services-details-img-2.jpg')}}" alt="">
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
                                          <img src="{{asset('assets/images/icon/services-details-more-services-icon.png')}}"
                                              alt="">
                                      </div>
                                      <p><a href="digital-marketing.html">Digital Marketing </a></p>
                                  </li>
                                  <li class="active">
                                      <div class="icon">
                                          <img src="{{asset('assets/images/icon/services-details-more-services-icon.png')}}"
                                              alt="">
                                      </div>
                                      <p><a href="web-design-development.html">Web Design & Development</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="{{asset('assets/images/icon/services-details-more-services-icon.png')}}"
                                              alt="">
                                      </div>
                                      <p><a href="search-engine-optimization.html">Search Engine Optimization</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="{{asset('assets/images/icon/services-details-more-services-icon.png')}}"
                                              alt="">
                                      </div>
                                      <p><a href="design-and-branding.html">Design & Branding</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="{{asset('assets/images/icon/services-details-more-services-icon.png')}}"
                                              alt="">
                                      </div>
                                      <p><a href="app-development.html">App Development</a></p>
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
