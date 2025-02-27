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
                            <li><i class="icon-home"></i><a href="index.html">Home</a></li>
                            <li><span></span></li>
                            <li>Team Member</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Page Start-->
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
                        <span>skilled team</span><br>and tap into their expertise.</h2>
                </div>
                <div class="row">
                    <!--Team Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="assets/images/team/team-page-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="team-details.html">Sarah Mitchell</a></h4>
                                <p class="team-page__text">Marketing Director</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-1">
                                        <img src="assets/images/shapes/team-page-social-shape-1.png" alt="">
                                    </div>
                                    <div class="team-page__social-shape-2">
                                        <img src="assets/images/shapes/team-page-social-shape-2.png" alt="">
                                    </div>
                                    <a href="#"><span class="icon-pinterest"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!--Team Page End-->




@endsection
