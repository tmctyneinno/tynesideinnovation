@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 
<!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('assets/images/header-inner/07.jpg')}}')">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="header-inner-title text-center position-relative">
                    <h1 class="text-white fw-normal">Privacy Policy</h1>
                    <p class="text-white mb-0">Your privacy is important to us. This policy outlines how we collect, use, and protect your personal information to ensure transparency and trust.</p>
                </div>                
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      inner banner -->
  
      <!--=================================
      Case Study Detail -->
      <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12">
              <h2 class="mb-3">Privacy Policy</h2>
            </div>
           
          </div>
          
          
          <div class="row justify-content-center mt-4 mt-md-5">
            <div class="col-lg-10">
              <div class="mb-3 d-flex">
                <div>
                  <p>
                    {!! $policies->content !!}
                  </p>
               
                </div>
              </div>
             
            </div>
          </div>
         
         
        </div>
      </section>
      <!--=================================
      Case Study Detail -->
  
      <!--=================================
      Action Box -->
      <section class="space-pb dark-background">
        <div class="container">
          <div class="bg-dark text-center rounded py-5 px-3">
            <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
            <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
            <a href="{{ route('home.pages','contact')}}" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
          </div>
        </div>
      </section>
      <!--=================================
      Action Box -->
  
  
  
   


@endsection
