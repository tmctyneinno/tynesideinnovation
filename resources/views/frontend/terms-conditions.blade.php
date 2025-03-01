@extends('layouts.app')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
<section class="page-header">
  <div class="page-header__bg" style="background-image: url(assets/images/shapes/page-header-bg-shape.png);">
  </div>
  <div class="page-header__shape-1">
      <img src="assets/images/shapes/page-header-shape-1.png" alt="">
  </div>
  <div class="container">
      <div class="page-header__inner">
          <h2>Terms and Conditions</h2>
          <div class="thm-breadcrumb__inner">
              <ul class="thm-breadcrumb list-unstyled">
                  <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                  <li><span></span></li>
                  <li><span></span></li>
                  <li></li>
              </ul>
          </div>
      </div>
  </div>
</section>
  

<section class="services-details">
  <div class="container">
      <div class="row">
          <div class="col-xl-8 col-lg-7">
              <div class="services-details__left">
                    {!! $termsCondition->content !!}
                  </p>
               
                </div>
              </div>
             
            </div>
          </div>
         
         
        </div>
      </section>
      
  
  
  
   


@endsection
