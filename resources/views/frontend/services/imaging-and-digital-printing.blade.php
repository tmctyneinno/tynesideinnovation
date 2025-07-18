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
                  <h2>Create Design and Printing</h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>Create Design and Printing</li>
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
                              <img src="{{asset('/assets/images/machine.jpeg')}}" style="width: 600px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h3 class="services-details__title-1"></h3>
                              <div class="services-details__shape-1"></div>
                              <p class="services-details__text-1"></p>
                              <h3 class="services-details__title-2">Create Design and Printing</h3>
                              <p class="services-details__text-2">As we all know, imagining is the backbone of the digital world’s revolution, where a million stories can be told in a single image, nailing the storytelling.

                                Oh, you are looking for the exact thing? Welcome the powerhouse of imaging!</p>
                                <h3 class="services-details__title-2">Hey there…</h3>
                              <p class="services-details__text-2">You’d rather join the endless throng of life-changing and world integrating service creators online, and keep visiting us at TYNESIDE INNOVATIONs, as we make our creative space your dwelling place.</p>
                              <div class="services-details__points-box">
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Time Saving</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Modern Customer Support</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Wide Range of choices</p>
                                      </li>

                                      <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Offers eco-friendly packaging and on-demand printing</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Offers online ordering and delivery nationwide</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>A top printing company that offers a variety of printing services, including business cards, invitations, and t-shirts</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Serves small businesses, large companies, and more</p>
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
          </div>
      </section>
      <!--Services Details End-->

      <section class="team-carousel-page">
        <div class="container">   
             <h1>Our Machine and Products</h1>
            <div class="team-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Team Page Single Start-->
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine1.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine3.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine4.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine5.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-page__single">
                        <div class="team-page__img-box">
                            <div class="team-page__img">
                                <img src="{{asset('assets/images/machine.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

 

@endsection
