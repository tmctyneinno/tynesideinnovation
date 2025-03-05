@extends('layouts.app')
@section('content')

        <!-- Banner Two Start -->
        <section class="banner-two">
          <div class="banner-two__shape-bg"
              style="background-image: url({{asset('/assets/images/layer.jpg')}});"></div>
          <div class="banner-two__shape-1 img-bounce">
              <img src="assets/images/shapes/banner-two-shape-1.png" alt="">
          </div>
          <div class="container">
              <div class="banner-two__inner">
                  <div class="row">
                      <div class="col-xl-4 col-lg-6">
                          <div class="banner-two__left" data-aos="slide-right" data-aos-duration="1200"
                              data-aos-delay="100">
                              <div class="banner-two__left-content">
                                  <h2 class="banner-two__title">
                                    DIGITAL SOLUTIONS FOR DIGITAL NEEDS 
                                    <br>
                                      <span class="typed-effect" id="type-1"
                                          data-strings="Grow Your Businesss, Grow with Tyneside Innovation">
                                      </span>
                                  </h2>
                                  <div class="banner-two__satisfied-client-box">
                                      <ul class="list-unstyled banner-two__satisfied-client-list">
                                          <li>
                                              <div class="banner-two__satisfied-client-img">
                                                  <img src="{{asset('/assets/images/layer.jpg')}}"
                                                      alt="">
                                              </div>
                                          </li>
                                      </ul>
                                      <div class="banner-two__satisfied-client-content">
                                          <div class="banner-two__satisfied-client-count count-box">
                                              <h4 class="count-text" data-stop="2140" data-speed="2500">2140</h4>
                                              <span class="banner-two__satisfied-client-count-plus">+</span>
                                          </div>
                                          <p class="banner-two__satisfied-client-count-text">Happy Clients</p>
                                      </div>
                                  </div>
                                  {{-- <div class="banner-two__btn-box">
                                      <a href="about.html" class="banner-two__btn thm-btn thm-btn-two"><span
                                              class="icon-right"></span> Know More</a>
                                  </div> --}}
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-5 col-lg-6">
                          <div class="banner-two__img-box" data-aos="slide-up" data-aos-duration="1200"
                              data-aos-delay="150">
                              <div class="banner-two__img float-bob-y">
                                  <img src="{{asset('/assets/images/layer1.png')}}" alt="">
                                  <div class="banner-two__img-shape-box">
                                      <div class="banner-two__img-shape-1">
                                          <div class="banner-two__img-shape-2"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3">
                          <div class="banner-two__right" data-aos="slide-left" data-aos-duration="1200"
                              data-aos-delay="200">
                              <p class="banner-two__text">Leading the way in bespoke Creative Designs & Arts, Digital Prints, and IT Solution Managed Services</p>
                              <div class="banner-two__active-customer-img-box">
                                  {{-- <img src="{{asset('/assets/images/resources/banner-two-active-customer-img-1.png')}}" alt=""> --}}
                                  <img src="{{asset('/assets/images/resources/newsletter-one-img-2.png')}}" alt="">
                              </div>
                              <div class="banner-two__active-customer">
                                  <div class="banner-two__active-customer-count count-box">
                                      <h4 class="count-text" data-stop="2" data-speed="2500">00</h4>
                                      <span class="banner-two__active-customer-count-plus">00</span>
                                  </div>
                                  <p class="banner-two__active-customer-text">Empowered over <br> Businesses</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--Banner Two End -->


      <!--About Two Start -->
      <section class="about-two">
        <div class="about-two__shape-box">
            <div class="about-two__shape-1">
                <div class="about-two__shape-2">
                    <div class="about-two__shape-3"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-two__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-icon-box">
                                    <div class="section-title-two__tagline-icon-1"></div>
                                    <div class="section-title-two__tagline-icon-2"></div>
                                </div>
                                <span class="section-title-two__tagline">About Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">MEET THE TYNESIDE INNOVATION…</h2>
                        </div>
                        <div class="about-two__img">
                            <img src="{{asset('/assets/images/layer.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-two__right">
                        <p class="about-two__text">Getting value for your designs and digital intelligence is paramount in these times.

                            You’d rather join the endless throng of life-changing and world integrating service creators online, and keep visiting us at TYNESIDE INNOVATIONs, as we make our creative space your dwelling place.</p>
                        <div class="about-two__points-box">
                            <ul class="list-unstyled about-two__points">
                                <li data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-two-icon-1.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Innovative Strategies</h3>
                                        <p>We develop fresh, out of the box ideas tailored to your brand's unique
                                            identity.</p>
                                    </div>
                                </li>
                                <li data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-two-icon-2.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Visual Design Excellence</h3>
                                        <p>Deliver stunning visuals that captivate and reflect your brand's essence.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled about-two__points">
                                <li data-aos="fade-left" data-aos-duration="1200" data-aos-delay="150">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-two-icon-3.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Brand Storytelling</h3>
                                        <p>Craft compelling narratives that resonate with your audience and build
                                            lasting connections.</p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-duration="1200" data-aos-delay="250">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-two-icon-4.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Cross-Platform Expertise</h3>
                                        <p>Seamlessly integrate your brand across digital and traditional platforms
                                            for maximum impact.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-two__bottom">
                            <div class="about-two__btn-and-call-box">
                                <div class="about-two__btn-box">
                                    <a href="about.html" class="about-two__btn thm-btn thm-btn-two"><span
                                            class="icon-right"></span> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->


      <!-- Why Choose One Start -->
      <section class="why-choose-one pdt120">
          <div class="why-choose-one__shape-bg"
              style="background-image: url(assets/images/shapes/why-choose-one-shape-bg.png);"></div>
          <div class="container">
              <div class="row">
                  <div class="col-xl-6">
                      <div class="why-choose-one__left">
                          <div class="section-title text-left sec-title-animation animation-style2">
                              <div class="section-title__tagline-box">
                                  <div class="section-title__tagline-icon-box">
                                      <div class="section-title__tagline-icon-1"></div>
                                      <div class="section-title__tagline-icon-2"></div>
                                  </div>
                                  <span class="section-title__tagline">Why Choose Us</span>
                              </div>
                              <h2 class="section-title__title title-animation">
                                  More than 8+ years we <br>provided IT solutions to<span> many Businesses</span>
                              </h2>
                          </div>
                          <p class="why-choose-one__text">
                            Those graphics that describe your brand, show you yourself in various colours; those adverts that take you where you want to be, the creative design , the social media marketing schemes that showcase not just your qualities, but your brand.

                            The face of your business, your logo designs with mind dazzling digital printing solution services… all of these are our specialties at TYNESIDE INNOVATIONs – here we CARVE your ARTS and BRANDS in sharp edges and taming colours. We are CARVERS of ARTS and BRANDS, we are TYNESIDE INNOVATIONs.
                          </p>
                          <ul class="list-unstyled why-choose-one__list">
                              <li>
                                  <div class="icon">
                                      <img src="assets/images/icon/why-choose-one-icon-1.png" alt="">
                                  </div>
                                  <div class="content">
                                      <p><a href="about.html">Time Saving</a></p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <img src="assets/images/icon/why-choose-one-icon-2.png" alt="">
                                  </div>
                                  <div class="content">
                                      <p><a href="about.html">Modern Customer Support</a></p>
                                     
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <img src="assets/images/icon/why-choose-one-icon-3.png" alt="">
                                  </div>
                                  <div class="content">
                                      <p><a href="about.html">Wide Range of choices</a></p>
                                      
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                      <div class="why-choose-one__right">
                          <div class="why-choose-one__circle rotate-me"></div>
                          <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6">
                                  <div class="why-choose-one__content-one">
                                      <div class="why-choose-one__img-one">
                                          <img src="{{asset('/assets/images/layer.jpg')}}" alt="">
                                      </div>
                                      <div class="why-choose-one__round-text-box">
                                          <div class="why-choose-one__round-text-box-inner">
                                              <div class="why-choose-one__curved-circle rotate-me">
                                                  8+ Years Of Experience. 8+ Years Of Experience.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6">
                                  <div class="why-choose-one__content-two">
                                      <div class="why-choose-one__icon">
                                          <img src="assets/images/icon/why-choose-one-icon-4.png" alt="">
                                      </div>
                                      <div class="why-choose-one__img-two">
                                          <img src="{{asset('/assets/images/layer3.jpg')}}" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Why Choose One End -->

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
                      <span class="section-title__tagline">Our Services</span>
                  </div>
                  <h2 class="section-title__title title-animation">
                      We provide the best <span>services</span> <br> For It Solution
                  </h2>
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


      <section class="portfolio-one">
        <div class="portfolio-one__shape-bg"
            style="background-image: url(assets/images/shapes/portfolio-one-hape-bg.jpg);"></div>
        <div class="portfolio-one__shape-bg-two"
            style="background-image: url(assets/images/shapes/portfolio-one-shpe-bg-two.jpg);"></div>
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box justify-content-center">
                <div class="section-title__tagline-icon-box">
                    <div class="section-title__tagline-icon-1"></div>
                    <div class="section-title__tagline-icon-2"></div>
                </div>
                <span class="section-title__tagline" style="color:#1c1a1a">Our Portfolio</span>
            </div>
            <h2 class="section-title__title title-animation" style="color:#2a2424">Discover Our Successful <br> <span>Case Studies</span>
            </h2>
        </div>
        <div class="portfolio-one__carousel owl-theme owl-carousel">
            @foreach ($portfolioCategory as $key => $category)
            @php
            $filteredPortfolio = $portfolio->where('category_id', $category->id);
        @endphp
        @if($filteredPortfolio->isEmpty())
        @else
            @foreach ($filteredPortfolio as $item)
            <div class="item">
                <div class="portfolio-one__single">
                    <div class="portfolio-one__img-box">
                        <div class="portfolio-one__img">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="portfolio-one__content">
                            <h3 class="portfolio-one__title">
                                <a href=" {{$item->link}}">
                                    {!! $item->title !!}
                                </a>
                            </h3>
                            <div class="portfolio-one__btn-box">
                                <a href=" {{$item->link}}" class="portfolio-one__btn thm-btn"><span
                                        class="icon-right"></span> Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endforeach
        


        </div>
    </section>
    <!-- Portfolio One End -->


        <!-- Process One Start -->
        <section class="process-one">

            <div class="process-one__top">
                <div class="container">
                    <div class="process-one__top-title-box">
                        <div class="process-one__top-icon">
                            <img src="assets/images/icon/process-one-top-icon-1.png" alt="">
                        </div>
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-icon-box">
                                    <div class="section-title__tagline-icon-1"></div>
                                    <div class="section-title__tagline-icon-2"></div>
                                </div>
                                <span class="section-title__tagline">Working Process</span>
                            </div>
                            <h2 class="section-title__title title-animation">Explore Our Effortless <br> <span>Work
                                    Process.</span></h2>
                        </div>
                        <div class="process-one__star rotate-me">
                            <img src="assets/images/shapes/process-one-star.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="process-one__bottom">
                <div class="container">
                    <ul class="row list-unstyled">
                        <!-- Working Process Single Start -->
                        <li class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="250">
                            <div class="process-one__single process-one__single-1">
                                <div class="process-one__title-box">
                                    <div class="process-one__icon">
                                        <img src="assets/images/icon/process-one-icon-1.png" alt="">
                                    </div>
                                    <h3 class="process-one__title">Identify The <br> Problems</h3>
                                </div>
                                <p class="process-one__text">This process involves collaborating with clients to
                                    identify
                                    their business goals and challenges.</p>
                                <div class="process-one__count"></div>
                                <div class="process-one__arrow">
                                    <img src="assets/images/shapes/process-one-arrow.png" alt="">
                                </div>
                            </div>
                        </li>
                        <!-- Working Process Single End -->
                        <!-- Working Process Single Start -->
                        <li class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="200">
                            <div class="process-one__single process-one__single-2">
                                <div class="process-one__title-box">
                                    <div class="process-one__icon">
                                        <img src="assets/images/icon/process-one-icon-2.png" alt="">
                                    </div>
                                    <h3 class="process-one__title">Client Needs <br> Assessment</h3>
                                </div>
                                <p class="process-one__text">This process involves collaborating with clients to
                                    identify
                                    their business goals and challenges.</p>
                                <div class="process-one__count"></div>
                                <div class="process-one__arrow">
                                    <img src="assets/images/shapes/process-one-arrow.png" alt="">
                                </div>
                            </div>
                        </li>
                        <!-- Working Process Single End -->
                        <!-- Working Process Single Start -->
                        <li class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="150">
                            <div class="process-one__single process-one__single-3">
                                <div class="process-one__title-box">
                                    <div class="process-one__icon">
                                        <img src="assets/images/icon/process-one-icon-3.png" alt="">
                                    </div>
                                    <h3 class="process-one__title">Market Research <br> Analysis</h3>
                                </div>
                                <p class="process-one__text">This process involves collaborating with clients to
                                    identify
                                    their business goals and challenges.</p>
                                <div class="process-one__count"></div>
                                <div class="process-one__arrow">
                                    <img src="assets/images/shapes/process-one-arrow.png" alt="">
                                </div>
                            </div>
                        </li>
                        <!-- Working Process Single End -->
                        <!-- Working Process Single Start -->
                        <li class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="100">
                            <div class="process-one__single process-one__single-4">
                                <div class="process-one__title-box">
                                    <div class="process-one__icon">
                                        <img src="assets/images/icon/process-one-icon-4.png" alt="">
                                    </div>
                                    <h3 class="process-one__title">Growth Plan <br> Execution</h3>
                                </div>
                                <p class="process-one__text">This process involves collaborating with clients to
                                    identify
                                    their business goals and challenges.</p>
                                <div class="process-one__count"></div>
                                <div class="process-one__arrow">
                                    <img src="assets/images/shapes/process-one-arrow.png" alt="">
                                </div>
                            </div>
                        </li>
                        <!-- Working Process Single End -->
                    </ul>
                </div>
            </div>
        </section>
        <!-- Process One End -->



        <section class="blog-one">
            <div class="container">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon-box">
                            <div class="section-title__tagline-icon-1"></div>
                            <div class="section-title__tagline-icon-2"></div>
                        </div>
                        <span class="section-title__tagline">Our Blogs</span>
                    </div>
                    <h2 class="section-title__title title-animation">Discover our latest Blogs
                    </h2>
                </div>
                <div class="blog-one__carousel owl-theme owl-carousel">
                    @forelse ($blogs as $blog)
                    <div class="item">
                        <div class="blog-one__single" style="width: 400px">
                            <div class="blog-one__img">
                                <img src="{{ asset($blog->image) }}" alt="" >
                                <div class="blog-one__plus">
                                    <a href="{{ route('blog.details', $blog->slug) }}"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h3 class="blog-one__title"><a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title}}</a></h3>
                                {{-- <p class="blog-one__text">   {!! Str::limit($blog->content, 30) !!} </p> --}}
                               
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                </div>
            </div>
        </section>
@endsection
