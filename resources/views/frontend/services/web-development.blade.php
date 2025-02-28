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
                          <li><i class="icon-home"></i><a href="index.html">Home</a></li>
                          <li><span></span></li>
                          <li><a href="services.html">Services</a></li>
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
                              <h3 class="services-details__title-2">Services Core Features</h3>
                              <p class="services-details__text-2">We perform in-depth research to analyze market
                                  trends, competitor tactics, and audience behavior, ensuring your campaigns are
                                  data-driven and strategically effective. We work with you to set clear, measurable
                                  objectives that align with your business goals.</p>
                              <div class="services-details__points-box">
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Strategic Campaign Planning</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Social Media Management</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Targeted Audience Engagement</p>
                                      </li>
                                  </ul>
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Data-Driven Performance Analytics</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Comprehensive Brand Visibility</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Innovative Digital Marketing Tools</p>
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
                                              <p>Market Trend<br> Analysis</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-2.png" alt="">
                                              </div>
                                              <p>Competitor<br> Strategy </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-3.png" alt="">
                                              </div>
                                              <p>Audience Behavior<br> Research</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-6 col-md-6">
                                          <div class="services-details__single-service">
                                              <div class="services-details__single-icon">
                                                  <img src="assets/images/icon/services-details-icon-4.png" alt="">
                                              </div>
                                              <p>Custom Campaign<br> Development</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="services-details__progress-box">
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6">
                                          <div class="services-details__progress-left">
                                              <h3 class="services-details__progress-left-title">Benefits of Our
                                                  Services</h3>
                                              <p class="services-details__progress-left-text">Enhance your social
                                                  media profiles and produce compelling content to strengthen your
                                                  brand's online visibility and grow your follower base. We use
                                                  targeted advertising and robust SEO strategies to attract
                                                  high-quality traffic to your website, leading to improved conversion
                                                  rates.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6">
                                          <div class="services-details__progress-right">
                                              <ul class="services-details__progress-list list-unstyled">
                                                  <li>
                                                      <div class="progress-levels">
                                                          <!--Skill Box-->
                                                          <div class="progress-box">
                                                              <div class="inner count-box">
                                                                  <div class="text">Success Ration</div>
                                                                  <div class="bar">
                                                                      <div class="bar-innner">
                                                                          <div class="skill-percent">
                                                                              <span class="count-text"
                                                                                  data-speed="3000"
                                                                                  data-stop="100">0</span>
                                                                              <span class="percent">%</span>
                                                                          </div>
                                                                          <div class="bar-fill" data-percent="100">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="progress-levels">
                                                          <!--Skill Box-->
                                                          <div class="progress-box">
                                                              <div class="inner count-box">
                                                                  <div class="text">Positive Brand Image</div>
                                                                  <div class="bar">
                                                                      <div class="bar-innner">
                                                                          <div class="skill-percent">
                                                                              <span class="count-text"
                                                                                  data-speed="3000"
                                                                                  data-stop="80">0</span>
                                                                              <span class="percent">%</span>
                                                                          </div>
                                                                          <div class="bar-fill" data-percent="70">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="progress-levels">
                                                          <!--Skill Box-->
                                                          <div class="progress-box">
                                                              <div class="inner count-box">
                                                                  <div class="text">Website Rankig</div>
                                                                  <div class="bar">
                                                                      <div class="bar-innner">
                                                                          <div class="skill-percent">
                                                                              <span class="count-text"
                                                                                  data-speed="3000"
                                                                                  data-stop="98">0</span>
                                                                              <span class="percent">%</span>
                                                                          </div>
                                                                          <div class="bar-fill" data-percent="80">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <h3 class="services-details__title-3">Why Our Services</h3>
                              <p class="services-details__text-3">Tailored strategies and campaigns crafted to address
                                  your specific business objectives and requirements. Our team of skilled
                                  professionals boasts a proven history of success in digital marketing and social
                                  media. We leverage the latest technology and tools to enhance the effectiveness of
                                  your campaigns.</p>
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
                                                  <p>We utilize the latest technology and tools to optimize your
                                                      campaigns</p>
                                              </li>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Enhance your social media profiles and produce compelling content
                                                  </p>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="col-xl-6">
                                          <div class="services-details__points-img">
                                              <img src="assets/images/services/services-details-points-img-1.jpg"
                                                  alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p class="services-details__text-4">The concept gained popularity in the 1960s with the
                                  introduction of Letraset sheets featuring Lorem Ipsum passages, and it has continued
                                  to evolve with the advent of desktop publishing software such as Aldus PageMaker,
                                  which includes different versions of Lorem Ipsum.</p>
                              <div class="services-details__img-two">
                                  <img src="assets/images/services/services-details-img-2.jpg" alt="">
                              </div>
                              <h3 class="services-details__title-4">Get Started:</h3>
                              <p class="services-details__text-5">By leveraging these benefits, your business can
                                  achieve greater online visibility, improved engagement, and increased conversions,
                                  ultimately driving growth and success.</p>
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
                              <p class="services-details__contact-text">Lorem Ipsum is simply dummy text of the
                                  printing and typesetting industry. </p>
                              <div class="services-details__contact-btn-box">
                                  <a href="#" class="services-details__contact-btn thm-btn"><i
                                          class="icon-right"></i>Send
                                      Message</a>
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
