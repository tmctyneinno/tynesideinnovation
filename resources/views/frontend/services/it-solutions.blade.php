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
                  <h2>Managed IT Service</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="services.html">Services</a></li>
                          <li><span></span></li>
                          <li>Managed IT Service</li>
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
                              <img src="{{asset('/assets/images/it.png')}}" style="width: 400px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">Services Core Features</h3>
                              <p class="services-details__text-2">With our Managed IT Service, you will be ready to face all hurdles and challenges, no matter what!</p>
                              <div class="services-details__points-box">
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>SService Desk</p>
                                      </li>
                                      <p>Service Desk not only helps to solve major issues, but it also enhances business relationships.
                                        No wonder why it is known as the brain of any business.Staffed with only the most qualified professionals in the industry, our services can resolve any issue at any time of the day</p>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>End-User Compute</p>
                                      </li>
                                      <p>With an increase in technological advancements, people are now more connected than ever, but the same thing has also increased threat of online security has also increased. By engaging us, we will help you ensure your business is never harmed by such threats.</p>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Infrastructure Management</p>
                                      </li>
                                      <p>We all know what a single glitch in the management system is capable of.
                                        For your peace of mind, we will take care of any and every error that comes in the system, so that your business can run smoothly.
                                    </p>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Robotic Process Automation</p>
                                    </li>
                                    <p>Whether or not you agree, this is the century of ‘Automation’.
                                        With our swift automation software, we will be a bridge between complex systems and end-users, simplifying the processes to make sure your business is running smoothly.
                                  </p>
                                  <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <p>Service Integration & Management</p>
                                </li>
                                <p>SIAM services can wreak havoc and cause a total breakdown in business, if not operated by the right person.
                                    To make sure it doesn’t happen to anyone, our services will help you eliminate such complex errors. Thus, enhancing the efficiency of the business.
                              </p>
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
                          <a href="contact.html">Get Started <span class=" icon-right-arrow-1"></span></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--CTA One End -->

@endsection
