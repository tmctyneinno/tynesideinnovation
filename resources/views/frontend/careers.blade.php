@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 
 <!--=================================
    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('{{asset('assets/images/header-inner/05.jpg')}}');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center position-relative">
              <h1 class="text-white fw-normal">Careers</h1>
              <p class="text-white mb-0">Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <ul class="nav">
                  <li class="nav-item"><a class="nav-link " href="{{ route('home.pages', 'about-us') }}">About us</a></li> 
                  <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'mission-and-vision') }}">Mission and vision</a></li>
                  <li class="nav-item"><a class="nav-link active" href="{{ route('home.pages', 'career') }}">Careers</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'our-value') }}">Our values</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Header Inner -->

  <!--=================================
    News -->
    <section class="space-ptb ">
      <div class="container">
        <div class="row dark-background">
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Managed IT Services</h4>
                <p>With our Managed IT Service, you will be ready to face all hurdles and challenges, no matter what!</p>
                <a href="#" class="btn btn-primary-round btn-round text-white">View Services<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Animation Design</h4>
                <p>Branding is exactly the description of what good and services you have to offer. Your brand is simply your identity and ambassador behind the walls of places where you are yet to physically appear.</p>
                <a href="#" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Multimedia</h4>
                <p>The cyber space is so wide, so the world awaits your mobile app. The TYNESIDE INNOVATIONs CARVES it for you with rare efficiency.</p>
                <a href="#" class="btn btn-primary-round btn-round text-white">Whay we do?<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!--=================================
    News -->
    
     <!--=================================
    History -->
    <section class="space-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title is-sticky">
              <h2>Web designers, developers & agencies in the world</h2>
              <p class="mb-4 mb-md-5">Process that guarantees high productivity and profitability for your solution.</p>
              <a href="{{ route('home.pages','contact')}}" class="btn btn-light-round btn-round">Let's Start Project<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-info feature-info-style-08">
              <div class="feature-info-inner">
                <div class="feature-info-item">
                  <div class="feature-info-number"><span>01</span></div>
                  <div class="feature-info-content">
                    <h5 class="mb-3 feature-info-title">Who Are We?</h5>
                    <p class="mb-0">
                      We Turn Mere Thoughts Into a Stunning Reality With a highly efficient team empowered with robust technologies, we are a company committed to make the even impossible possible and serve our customers.
                    </p>
                  </div>
                </div>
                <div class="feature-info-item">
                  <div class="feature-info-number"><span>02</span></div>
                  <div class="feature-info-content">
                    <h5 class="mb-3 feature-info-title">Web Development</h5>
                    <p class="mb-0">
                      The creative design , the social media marketing schemes that showcase not just your qualities, but your brand.
                    </p>
                  </div>
                </div>
                <div class="feature-info-item">
                  <div class="feature-info-number"><span>03</span></div>
                  <div class="feature-info-content">
                    <h5 class="mb-3 feature-info-title">Reliable Results</h5>
                    <p class="mb-0">
                      Getting value for your designs and digital intelligence is paramount in these times.
                    </p>
                  </div>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    History -->
    
      <!--=================================
      Category -->
      <section class="space-ptb bg-light">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
              <h2 class="mb-3 mb-lg-0">Four reasons why you should choose our service</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
              <a href="#" class="btn btn-white-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div>
          <div class="row mt-4 mt-lg-5">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-img">
                  <img class="img-fluid" src="{{ asset('assets/images/feature-info/01.jpg')}}" alt="">
                </div>
                <div class="feature-info-number mb-0">
                  <span>01</span>
                  <h5 class="mb-0 ms-4 feature-info-title">We know your business already</h5>
                </div>
                <p class="mt-4 mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-img">
                  <img class="img-fluid" src="{{ asset('assets/images/feature-info/02.jpg')}}" alt="">
                </div>
                <div class="feature-info-number mb-0">
                  <span>02</span>
                  <h5 class="mb-0 ms-4 feature-info-title">Building context – not just code</h5>
                </div>
                <p class="mt-4 mb-0">What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-img">
                  <img class="img-fluid" src="{{ asset('assets/images/feature-info/03.jpg')}}" alt="">
                </div>
                <div class="feature-info-number mb-0">
                  <span>03</span>
                  <h5 class="mb-0 ms-4 feature-info-title">We are responsive and flexible</h5>
                </div>
                <p class="mt-4 mb-0">This is perhaps the single biggest obstacle that all of us must overcome in order to be successful.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-img">
                  <img class="img-fluid" src="{{ asset('assets/images/feature-info/04.jpg')}}" alt="">
                </div>
                <div class="feature-info-number mb-0">
                  <span>04</span>
                  <h5 class="mb-0 ms-4 feature-info-title">10 years experience – and counting</h5>
                </div>
                <p class="mt-4 mb-0">To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Category -->

     
@endsection
