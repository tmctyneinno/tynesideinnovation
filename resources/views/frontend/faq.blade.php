@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('/assets/css/module-css/faq.css')}}" />
@endsection
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
            <h2>Our <span>Faq</span></h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                    <li><span></span></li>
                    <li>Our Faq</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Faq Page Start-->
<section class="faq-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="faq-one__right">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                      @foreach($faqs as $index => $faq)
                      <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>{{ $faq->question }}</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>{!! $faq->answer !!}</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!--Faq Page End-->
  
@endsection
