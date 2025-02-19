@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 <!--=================================
    Header Inner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('assets/images/header-inner/18.jpg')}}');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="header-inner-title text-center position-relative">
                    <h1 class="text-white fw-normal">Portfolio</h1>
                    <p class="text-white mb-0">Showcasing our finest work in web design, branding, and digital innovation.</p>
                </div>
                
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Header Inner -->
  
      <!--=================================
      Category -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            @forelse ($portfolio as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-info feature-info-style-02 h-100">
                    <div class="feature-info-icon">
                        
                        <h5 class="mb-0 ms-4 feature-info-title">{{ $item->title}}</h5>
                    </div>
                    <div class="feature-info-content">
                        <p class="mb-0">{!! $item->content !!}</p>
                        <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="feature-info-bg-img"  style="background-image: url('{{ asset($item->image)}}'); object-fit:cover; max-width:100%; max-height:100%; height:900px; width:500px"></div>
                    </div>
                </div>
            @empty
                <p>No Porfolio available</p>
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