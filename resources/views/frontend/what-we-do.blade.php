@extends('layouts.app')
 @section('style')
 <link rel="stylesheet" href="{{asset('/assets/css/module-css/awards.css')}}" />
 @endsection
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('/assets/images/abt.jpg')}});">
    </div>
    <div class="page-header__shape-1">
        <img src="{{asset('/assets/images/shapes/page-header-bg-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2> Ho<span>w Do </span>We</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i><a href="index.html">Home</a></li>
                    <li><span></span></li>
                    <li>How Do We</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="awards-one">
    <div class="container">
        <div class="row">
            <h2 class="section-title-two__title title-animation">We follow these simple steps to help our clients grow:
               </h2>
               <h4> DIGITAL SOLUTIONS FOR DIGITAL NEEDS</h4>
            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-icon-box">
                                <div class="section-title-two__tagline-icon-1"></div>
                                <div class="section-title-two__tagline-icon-2"></div>
                            </div>
                        </div>
            
                    </div>
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img21.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 1</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">Step One Discover</h3>
                                <h1>Knowing The Clients</h1>
                                <p>We make sure we inquiry everything from our client, from business goals to long-term planning, to ensure we come up with the right solutions</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 2</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">Step Two Define</h3>
                                <h1>Researching & Analysing</h1>
                                <p>Knowing our client isn’t enough, we do a proper deep-research and analysis from our end to come up with the best tactics and strategies to skyrocket their business.</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img22.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
      
        </div>

        <div class="row">
            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img23.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 3</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">Results</h3>
                                <h1>Knowing The Clients</h1>
                                <p>We make sure we inquiry everything from our client, from business goals to long-term planning, to ensure we come up with the right solutions</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
      
        </div>

</section>



<section class="awards-one">
    <div class="container">
        <div class="row">
            <h2 class="section-title-two__title title-animation">How Do We Improve Your Business?
               </h2>
               <h4> DIGITAL SOLUTIONS FOR DIGITAL NEEDS</h4>
            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-icon-box">
                                <div class="section-title-two__tagline-icon-1"></div>
                                <div class="section-title-two__tagline-icon-2"></div>
                            </div>
                        </div>
            
                    </div>
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img24.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 1</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">STEP ONE DISCOVER</h3>
                                <h1>Technological Advancement</h1>
                                <p>Are you tired of wasting your hours on a software that doesn’t even do half of your work? Well, that’s why we are here. With our state-of-the-art technology, you can do twice the work at no extra effort.</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 2</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">STEP TWO DEVELOP</h3>
                                <h1>Cost-Effective</h1>
                                <p>With our top-notch software, we will help your business reduce costs by a huge margin, and increase revenues at the same time!</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img25.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
      
        </div>

        <div class="row">
            <div class="col-xl-7">
                <div class="awards-one__left" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                
                    <div class="awards-one__img-box">
                        <div class="awards-one__img">
                            <img src="{{asset('assets/images/img13.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="awards-one__right">
                    <ul class="awards-one__awards-list list-unstyled">
                      
                        <li>
                            <div class="icon">
                                <p style="font-size:30px; color:#fff"> 3</p>
                            </div>
                            <div class="content">
                                <h3 style="color:red">STEP THREE RESULT</h3>
                                <h1>IT Issues</h1>
                                <p>It is common that every piece of software has some kind of issue but not in our case. With our state-of-the-art software, you can run your business seamlessly. Even if you face any minor issue, our experts will be right there to fix it within minutes.</p>
                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
      
        </div>

</section>


@endsection
