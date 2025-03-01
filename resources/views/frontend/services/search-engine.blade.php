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
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Keyword research and optimization</p>
                                      </li>
                                      <p>We can help you with routine audits to determine an SEO strategy that will drive visitors to your website. We will assist with identifying your key audience and mapping keywords that help you achieve your goals.</p>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>E-commerce SEO</p>
                                      </li>
                                      <p>Word of mouth is no longer enough when it comes to raising brand awareness and increasing sales. A competitive e-commerce SEO strategy will ensure your site is visible to maximize your profits.</p>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Local SEO</p>
                                      </li>
                                      <p>Local SEO is critical when it comes to drawing in customers from across the area. Our team provides strong SEO services to make sure your company is visible in local search results.</p>
                                      <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Technical SEO</p>
                                    </li>
                                    <p>Our team will help you improve your organic rankings by improving your technical SEO strategy. We will assist in improving all the technical aspects of your website to increase your rankings in all the major search engines.</p>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Video search optimization</p>
                                    </li>
                                    <p> Every day, we see more than 15,000 marketing messages — and most of us have become experts at tuning them out. To attract new customers, it’s important for you to create content that stands out. Our team is committed to implementing a successful video search optimization strategy that does just that</p>
                               
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
