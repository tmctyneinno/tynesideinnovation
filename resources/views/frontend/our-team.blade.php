@extends('layouts.app')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
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
                    <h2>Team <span>Member</span></h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                            <li><span></span></li>
                            <li>Team Member</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-page">
            <div class="container">
                <div class="section-title-two text-center sec-title-animation animation-style2">
                    <div class="section-title-two__tagline-box justify-content-center">
                        <div class="section-title-two__tagline-icon-box">
                            <div class="section-title-two__tagline-icon-1"></div>
                            <div class="section-title-two__tagline-icon-2"></div>
                        </div>
                        <span class="section-title-two__tagline">Creative Team</span>
                    </div>
                    <h2 class="section-title-two__title title-animation">Connect with our
                        <span>skilled team</span></h2>
                </div>
                <div class="row">
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/emma.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Emmanuel Amusa</a></h4>
                                <p class="team-page__text">Digital Marketing Specialist</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/deji.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Oladeji Adeloye</a></h4>
                                <p class="team-page__text">Digital Marketing Specialist</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/mat.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Matthew T. Adeosun</a></h4>
                                <p class="team-page__text">Supervisor, Designs and Production.
                                    </p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/mike.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Michael Ozoudeh</a></h4>
                                <p class="team-page__text">Software Developer (Team Lead)</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/est.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Esther Akinyemi</a></h4>
                                <p class="team-page__text">UI/UX Designer</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}
                     <!--Team Page Single Start-->
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/jos.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Joseph Iwuji</a></h4>
                                <p class="team-page__text">Fullstack Developer</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}
                     <!--Team Page Single Start-->
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/taj.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Bello Tajudeen</a></h4>
                                <p class="team-page__text">Business Development Executive</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}
                     <!--Team Page Single Start-->
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/alex.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Alex Duru</a></h4>
                                <p class="team-page__text">Business Development Executive</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}

                    {{-- ------end---- --}}
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/uka.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Ukamaka Ibilibor</a></h4>
                                <p class="team-page__text">Human Resources Manager</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}

                    {{-- ------end---- --}}
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/dan.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Daniel Eshanokpe</a></h4>
                                <p class="team-page__text">Fullstack Developer</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}

                     {{-- ------end---- --}}
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/assets/images/team/olawale.png')}}" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Abdulganiyu Ibrahim
                                </a></h4>
                                <p class="team-page__text">Production & Creative designer</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                        {{-- <img src="assets/images/shapes/team-page-social-shape-2.png" alt=""> --}}
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------end---- --}}

                   
                  
                </div>
            </div>
        </section>
        <!--Team Page End-->




@endsection
