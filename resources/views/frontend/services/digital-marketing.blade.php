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
                  <h2>Digital Marketing</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="services.html">Services</a></li>
                          <li><span></span></li>
                          <li>Digital Marketing</li>
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
                              <img src="{{asset('/assets/images/digis.png')}}" style="width:500px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">Grow Your Business With Digital Marketing</h3>
                              <p class="services-details__text-2">We can help you develop and execute digital marketing solutions that deliver real results.</p>
                              <div class="services-details__points-box">
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We help write amazing contents for your upcoming projects</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We utilize proven result-driven advertising, SEO and Social media marketing</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We help write amazing contents for your upcoming projects</p>
                                      </li>
                                  </ul>
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We help write amazing contents for your upcoming projects</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>
                                            We utilize proven result-driven advertising, SEO and Social media marketing</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>We help write amazing contents for your upcoming projects</p>
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
                                              <p>ATTRACT LEADS</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-2.png" alt="">
                                              </div>
                                              <p>NURTURE & CONVERT </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-3.png" alt="">
                                              </div>
                                              <p>BRAND SUSTENANCE</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                           
                              <h3 class="services-details__title-3">Our Services</h3>
                             
                              <div class="services-details__points-and-img">
                                  <div class="row">
                                      <div class="col-xl-12">
                                          <ul class="services-details__points-1 list-unstyled">
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Lead Generation Projects </p>
                                              </li>
                                              <p>Looking to generate leads for your business? We can help. Our lead generation service focuses on identifying your ideal target audience and creating lead magnets to attract them to your business.</p>
                                              
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Mobile Marketing </p>
                                              </li>
                                              <P> Let’s help you reach your consumers through mobile marketing using various mobile platforms like: Whatsapp, SMS, Mobile App</P>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Professional Services Marketing</p>
                                              </li>
                                              <p> Firms that offer Professional Services cannot be promoted the same way that product brands are promoted.</p>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Email Marketing
                                                  </p>
                                              </li>
                                              <p>Several research has proven that email marketing still delivers a higher return on investment than any other Digital Marketing medium.</p>
                                              <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <p>Content Marketing
                                                </p>
                                            </li>
                                            <p>Content drives all digital marketing elements. And great content added to good design can drive significant sales and engagement..</p>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <p>Growth Marketing Services
                                                </p>
                                            </li>
                                            <p>Our Growth Marketing Service utilizes multiple digital marketing tactics and platforms to create awareness, engage with prospects and generate leads.</p>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <p>Social Media Marketing
                                                </p>
                                            </li>
                                            <p>Your customers and prospects are on Social media. Your brand should be too.</p>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <p>Search Engine Optimisation
                                                </p>
                                            </li>
                                            <p>There are 3.5 billion searches on Google daily. Clearly, consumers are turning more to search engines help them take buying decisions.</p>
                                          </ul>
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
                          <a href="contact.html">Get Started <span class=" icon-right-arrow-1"></span></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--CTA One End -->

@endsection
