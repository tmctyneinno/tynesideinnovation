@extends('layouts.app')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 
<!--=================================
    Header Inner --> 
    <section class="header-inner header-inner-menu bg-overlay-black-30" style="background-image: url('{{asset('assets/images/header-inner/16.jpg')}}');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <div class="header-inner-title text-center position-relative">
                <h1 class="text-white fw-normal">Our Values</h1>
                <p class="text-white mb-0">For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding</p>
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.pages', 'mission-vision') }}">Mission and vision</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{ route('home.pages', 'career') }}">Careers</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home.pages', 'our-value') }}">Our values</a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Header Inner -->
  
      <!--=================================
      About -->
      <section class="space-ptb pb-md-5 bg-dark">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-lg-10 text-center text-white">
              <h2 class="text-white mb-4">Our values mold the way we work with our clients, delivering excellent user experience supported by cutting-edge technologies</h2>
              <p class="mb-0"> Each week he focused his attention on a different virtue. Over time, through repetition, he hoped to one day experience the pleasure of, He says that he carried out this personal examination for years.</p>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      About -->
  
      <!--=================================
      About -->
      <section class="bg-dark-half-sm">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="position-relative">
                <img class="img-fluid border-radius" src="{{ asset('assets/images/blog/01.jpg')}}" alt="">
                <a class="icon-btn icon-btn-lg icon-btn-all-center btn-animation popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"><i class="fas fa-play fa-1x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      About -->
  
      <!--=================================
      Category -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>01</span>
                  <h5 class="mb-0 ms-4 feature-info-title">We know your business already</h5>
                </div>
                <p class="mt-4 mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>02</span>
                  <h5 class="mb-0 ms-4 feature-info-title">Building context – not just code</h5>
                </div>
                <p class="mt-4 mb-0">What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>03</span>
                  <h5 class="mb-0 ms-4 feature-info-title">We are responsive and flexible</h5>
                </div>
                <p class="mt-4 mb-0">This is perhaps the single biggest obstacle that all of us must overcome in order to be successful.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>04</span>
                  <h5 class="mb-0 ms-4 feature-info-title">10 years experience – and counting</h5>
                </div>
                <p class="mt-4 mb-0">To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>05</span>
                  <h5 class="mb-0 ms-4 feature-info-title">Making the decision</h5>
                </div>
                <p class="mt-4 mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>06</span>
                  <h5 class="mb-0 ms-4 feature-info-title">Clarity – developing the Vision</h5>
                </div>
                <p class="mt-4 mb-0">Having clarity of purpose and a clear picture of what you desire, is probably the single most important.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="feature-info feature-info-style-06">
                <div class="feature-info-number mb-0">
                  <span>07</span>
                  <h5 class="mb-0 ms-4 feature-info-title">Focus – having a plan</h5>
                </div>
                <p class="mt-4 mb-0">So, make the decision to move forward. Commit your decision to paper, just to bring it into focus.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Category -->
  
    
@endsection
