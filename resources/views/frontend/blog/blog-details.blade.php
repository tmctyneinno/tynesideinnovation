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
                  <h2>Blog <span>Details</span></h2>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li>Blog Details</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--Page Header End-->

      <!--Blog Details Start-->
      <section class="blog-details">
          <div class="container">
              <div class="row">
                  <div class="col-xl-8 col-lg-7">
                      <div class="blog-details__left">
                          <div class="blog-details__img">
                              <img src="{{ asset($postItem->image) }}" alt="">
                          </div>
                          <div class="blog-details__content">

                              <h3 class="blog-details__title-1">     {{$postItem->title}}</h3>
                              <p class="blog-details__text-1">{!! $postItem->content !!}.</p>
                           
                             
                             
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
      </section>
      <!--Blog Details End-->
     
@endsection
