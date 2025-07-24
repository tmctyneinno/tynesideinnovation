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
                    <h2>Our Leadership & Team</span></h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                            <li><span></span></li>
                            <li>Our Leadership & Team</li>
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
                        <span class="section-title-two__tagline">Our Leadership & Team</span>
                    </div>
                        <p>At Tyneside Innovation, we believe that strong leadership, strategic thinking, and shared values are the pillars of sustainable
                             innovation. Our multidisciplinary team combines deep expertise in financial technology,
                             infrastructure deployment, and enterprise transformation—delivering impactful solutions across Africa, the UK, and beyond.</p>
                </div>
                <div class="row">
                     <h2>🧑‍💼 Executive Leadership </h2>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/foluso.jpeg')}}" alt="">
                                </div>
                            </div>
                            <p> 🧑‍💼 Founder & Chairman</p>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Dr. Foluso Amusa, PhD</a></h4>
                                <p class="team-page__text"></p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                                     <p style="font-size: 12px">A visionary leader with over two decades of experience in  digital technology transformation ,  governance, risk, and compliance. Dr. Amusa is the strategic force behind The Morgans Consortium and Tyneside Innovation, pioneering solutions in infrastructure, risk intelligence , and technology deployment across international markets.</p>
                           
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/alabad.jpeg')}}" alt="">
                                </div>
                            </div>
                            <p>🧑‍💼 Chief Operating Officer</p>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Engr. Alaba Durojaiye</a></h4>
                                <p class="team-page__text"></p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                                <p style="font-size:12px">Oversees global operations and delivery frameworks. Brings a strong background in logistics,
                                     supply chain, and public-private partnerships, ensuring seamless execution and stakeholder alignment across projects.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <h2>👥 Management Team </h2>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/imag.png')}}" alt="">
                                </div>
                            </div>
                            <p style="font-size: 12px"> 🧑‍💼 Head of Business Development & Growth </p>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Mark Woodliffe</a></h4>
                                <p class="team-page__text">Founder & Chairman</p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                                     <p style="font-size: 12px">Leads market expansion strategies and international distributor 
                                        relations. Expert in partner onboarding, channel growth, and fintech integration.</p>
                           
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/imag.png')}}" alt="">
                                </div>
                            </div>
                            <p style="font-size: 12px">🧑‍💼 Technical Services Lead</p>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Michael Ozoudeh </a></h4>
                                <p class="team-page__text"></p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                                <p style="font-size:12px">Responsible for overseeing software development , equipment configuration,
                                     deployment logistics, and remote diagnostics. Ensures compliance with OEM guidelines and efficient servicing.</p>
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="team-page__single">
                            <div class="team-page__img-box">
                                <div class="team-page__img">
                                    <img src="{{asset('/imag.png')}}" alt="">
                                </div>
                            </div>
                            <p style="font-size: 12px">🧑‍💼 Finance & Administration Manager</p>
                            <div class="team-page__content">
                                <h4 class="team-page__title"><a href="#">Rebecca Thompson</a></h4>
                                <p class="team-page__text"></p>
                                <div class="team-page__social">
                                    <div class="team-page__social-shape-2">
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                                <p style="font-size:12px">Handles internal controls, supplier payment cycles, compliance reporting, and regulatory documentation across multiple regions.</p>
                            </div>
                        </div>
                    </div>

                    <h4>🤝 Our Broader Team</h4>
                    <p> 
                        We are supported by a global network of deployment specialists, compliance professionals, field engineers, and client engagement coordinators—each dedicated to upholding our mission of innovation, trust, and service excellence.</p>
             
                        <h4>✨ Our Promise</h4>
                        <p>
We combine deep technical know-how with a human-first approach—ensuring every solution we deliver is scalable, secure, and sustainable.</p>
                </div>


                     {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                     {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                      {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                    {{-- ------end---- --}}
                     <!--Team Page Single Start-->
                     {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}

                    

                    {{-- ------end---- --}}
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                    {{-- ------end---- --}}

                    {{-- ------end---- --}}
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                    </div> --}}
                    {{-- ------end---- --}}

                     {{-- ------end---- --}}
                     {{-- <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    </div>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- ------end---- --}}

                   
                  
                </div>
            </div>
        </section>
        <!--Team Page End-->




@endsection
