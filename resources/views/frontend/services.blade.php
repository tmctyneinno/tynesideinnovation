@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')

     <!--=================================
    Header Inner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{asset('assets/images/header-inner/18.jpg')}}');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <div class="header-inner-title text-center position-relative">
                <h1 class="text-white fw-normal">Our Services</h1>
                <p class="text-white mb-0">Award-winning website design & creative digital agency services</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Header Inner -->
  
      <!--=================================
      Category -->
      <section class="space-ptb bg-light position-relative">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
              <div class="section-title text-center">
                <h2>This is what we do and we do it perfectly.</h2>
                {{-- <p>Award-winning website design & creative digital agency services</p> --}}
              </div>
            </div>
          </div>
  
          <div class="row">
              @forelse ($services as $service)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="feature-info feature-info-style-01" 
                          style="background-image: url('{{ asset($service->image) }}'); 
                                background-size: cover; 
                                background-position: center; 
                                background-repeat: no-repeat; 
                                height: 300px;">
                          <!-- Overlay -->
                          <div class="overlay" style="position: absolute; top: 0; left: 0; 
                              right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 1;">
                          </div>
                          {{-- <div class="feature-info-icon">
                              <i class="flaticon-data"></i>
                          </div> --}}
                          <div class="feature-info-content" style="z-index: 2; position: relative;">
                              <h5 class="mb-3 feature-info-title text-white">{{ $service->title }}</h5>
                              <p class="mb-0 text-white">{!! Str::limit(strip_tags($service->content), 120, '..') !!}</p>
                              {{-- <a href="{{ $service->slug }}" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a> --}}
                          </div>
                      </div>
                  </div>
              @empty
                  <p>No Data</p>
              @endforelse
          </div>
        </div>
      </section>
      <!--=================================
      Category -->

       <!--=================================
    Action Box -->
    <section class="space-pb dark-background">
        <div class="container">
          <div class="bg-dark text-center rounded py-5 px-3">
            <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
            <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
            <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
          </div>
        </div>
      </section>
      <!--=================================
      Action Box -->

     
  
    
@endsection
