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
                  <h2>SEO Expert</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>SEO Expert</li>
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
                              <img src="{{asset('/assets/images/seo.jpg')}}"  style="width:500px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">Services Core Features</h3>
                              <p class="services-details__text-2">Tyneside Innovation is an SEO agency specializing in enhancing online visibility and search optimization through a range of services, 
                                including SERP optimization and on-page SEO. Across reviews, 100% of clients highlight their exceptional project management, responsiveness,
                                 and measurable success in improving website ranking and organic search optimization, with many noting dramatic increases in first-page rankings and consistent growth in website traffic</p>
                              <div class="services-details__points-box">
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
                                       <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','financial-technology-distribution')}}">Financial Technology Distribution</a></p>
                                  </li>
                              </ul>
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
                                      <p><a href="digital-marketing.html">Digital Marketing </a></p>
                                  </li>
                                  <li class="active">
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="web-design-development.html">Web Design & Development</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="search-engine-optimization.html">Search Engine Optimization</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="design-and-branding.html">Design & Branding</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="app-development.html">App Development</a></p>
                                  </li>
                              </ul>
                          </div>
                   
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--Services Details End-->




@endsection
