@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 

<!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{asset('assets/images/header-inner/17.jpg')}}');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <div class="header-inner-title text-center position-relative">
                <h1 class="text-white fw-normal">Service Detail</h1>
                <h2 class="text-white mb-0">{{$solutionItem->title }}</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      inner banner -->
  
     

     <!--=================================
    About -->
    <section id="overview" class="space-ptb bg-light ">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img style="object-fit: cover; max-width:100%; max-height:100%;  height:300px" class="img-fluid border-radius" src="{{ asset( $solutionItem->image )}}" alt="">
               
            </div>
            <div class="col-lg-6">
              <h4 class="text-dark">{{$solutionItem->title }}</h4>
              <p>{!! $solutionItem->content !!} </p>

            </div>
          </div>
        </div>
      </section>
      <!--=================================
      About -->

       <!--=================================
    Testimonial -->
    <section class=" space-ptb ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-12 text-center">
            <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
              <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-avatar shadow">
                    <img class="img-fluid rounded-circle" src="{{ asset('assets/images/avatar/01.jpg')}}" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="mb-1">Alice Williams</h6>
                      <span>Vetrov Systems Development</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-avatar shadow">
                    <img class="img-fluid rounded-circle" src="{{ asset('assets/images/avatar/02.jpg')}}" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>The Hi-soft database has been one of our current sources for recruitment, backed by a very experienced team who would go out of their way to make sure that requests are taken ahead.</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="mb-1">Michael Bean</h6>
                      <span>Web Developer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Testimonial -->


@endsection
