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
            <h2>Management Team </h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                    <li><span></span></li>
                    <li>Management Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Team Details Start-->
<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="team-details__left">
                    <div class="team-details__img">
                        <img src="{{asset('/assets/images/management/folusho.jpeg')}}" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="team-details__right">
                    <div class="team-details__client-name">
                        <h3>Dr. Foluso Amusa , PhD
                        </h3>
                        <p>Non Executive Director @ The Marie Trust | Governance, Risk and Compliance, MD Morgans Consortium</p>
                    </div>
                    <p>As a seasoned professional with over 27 years of experience in governance, risk, and compliance, I have developed a strong expertise in managing complex projects and leading teams. I hold a PhD in Governance, Risk, Compliance, and Financial Crime Prevention from Atlantic International University, an MBA from Anglia Ruskin University, and a Postgraduate Diploma in Governance, Risk, and Compliance from the International Compliance Association.</p>
                    <div class="team-details__social">
                        <a href="https://www.linkedin.com/in/folusoaa/"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
<hr>
        <div class="row pt-5">
            <div class="col-xl-6 col-lg-6">
                <div class="team-details__left">
                    <div class="team-details__img">
                        <img src="{{asset('/assets/images/management/alaba.jpeg')}}" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="team-details__right">
                    <div class="team-details__client-name">
                        <h3>Alaba Durojaiye
                        </h3>
                        <p>Head of IT and Operations</p>
                    </div>
                    {{-- <p>As a seasoned professional with over 27 years of experience in governance, risk, and compliance, I have developed a strong expertise in managing complex projects and leading teams. I hold a PhD in Governance, Risk, Compliance, and Financial Crime Prevention from Atlantic International University, an MBA from Anglia Ruskin University, and a Postgraduate Diploma in Governance, Risk, and Compliance from the International Compliance Association.</p> --}}
                    <div class="team-details__social">
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--Team Details End-->

@endsection