@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{asset('/assets/css/module-css/contact.css')}}" />
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
          <h2>Contact <span>Us</span></h2>
          <div class="thm-breadcrumb__inner">
              <ul class="thm-breadcrumb list-unstyled">
                  <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                  <li><span></span></li>
                  <li>Contact Us</li>
              </ul>
          </div>
      </div>
  </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
  <div class="container">
      <div class="row">
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__left">
                  <div class="row">
                      <!--Contact Page Contact Single Start-->
                      <div class="col-xl-12 col-lg-6 col-md-6">
                          <div class="contact-page__contact-single">
                              <div class="contact-page__contact-icon">
                                  <span class="icon-pin"></span>
                                  <div class="contact-page__contact-icon-shape"></div>
                              </div>
                              <h3 class="contact-page__contact-single-title">Our Address</h3>
                              
                               <p><strong>EUROPE: </strong> International House, 24 Holborn Viaduct, London, EC1A 2BN, United Kingdom
                              </p> 
                              <p> <strong>AFRICA:</strong>
                              1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos Nigeria 2341</p>
                            
                              <p> <strong> Asia: </strong>
                               21 Gillabbey Terrace, Gillabbey Street, Cork, T12 KPN4, Republic of Ireland</p>
                           
                          </div>
                      </div>
                      <!--Contact Page Contact Single End-->
                      <!--Contact Page Contact Single Start-->
                      <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="contact-page__contact-single">
                              <div class="contact-page__contact-icon">
                                  <span class="icon-user"></span>
                                  <div class="contact-page__contact-icon-shape"></div>
                              </div>
                              <h3 class="contact-page__contact-single-title">Phone Contact</h3>
                                                    <p>Nigeria – +2349153414314</p>
                                      <p>United Kingdom Tel:  +44 74665 88324</p>
                                      <p>Republic of Ireland: +353 877123968</p>
                                    
                          </div>
                      </div>
                      <!--Contact Page Contact Single End-->
                      <!--Contact Page Contact Single Start-->
                      <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="contact-page__contact-single">
                              <div class="contact-page__contact-icon">
                                  <span class="icon-live-chat"></span>
                                  <div class="contact-page__contact-icon-shape"></div>
                              </div>
                              <h3 class="contact-page__contact-single-title">Email Contact</h3>
                              <p>All enquiries:  <br>  enquiries@tynesideinnovation.com</p>
                              <p>Technical Assistance & Support : <br>  info@tynesideinnovation.com</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
         
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__right">
                  <div class="contact-page__contact-form-title-box">
                      <div class="contact-page__contact-form-title-icon">
                          <img src="assets/images/icon/contact-form-icon-1.png" alt="">
                      </div>
                      <h3 class="contact-page__contact-form-title">Send Us Message</h3>
                  </div>
                  <p class="contact-page__contact-form-text">Use this form to effortlessly contact us with any
                      questions, feedback, or inquiries.</p>
                      <p> @if(Session::has('message'))
                        <span class="btn btn-{{Session::get('alert')}}"> {{Session::get('message')}}</span>
                        @endif</p>
                      <form id="" novalidate="novalidate" class="cond " action="{{route('contact-email')}}"method="POST" data-toggle="validator">
                        @csrf 
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                  <div class="contact-page__input-icon">
                                      <span class="icon-user"></span>
                                  </div>
                                  <input type="text" name="name" placeholder="Name" required="">
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                  <div class="contact-page__input-icon">
                                      <span class="icon-envelope"></span>
                                  </div>
                                  <input type="email" name="email" placeholder="Email" required="">
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                  <div class="contact-page__input-icon">
                                      <span class="icon-resume"></span>
                                  </div>
                                  <input type="text" name="Phone" placeholder="Subjects" required="">
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div class="contact-page__input-box text-message-box">
                                  <div class="contact-page__input-icon">
                                      <span class="icon-write"></span>
                                  </div>
                                  <textarea name="message" placeholder="Message"></textarea>
                              </div>
                              <div class="col-xl-12">
                                <p> @php echo captcha_img() @endphp </p>
                                <input type="text" placeholder="Enter captcha" class="form-control"  name="captcha" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                              <div class="contact-page__btn-box">
                                  <button type="submit" class="thm-btn contact-page__btn"><span
                                          class="icon-right"></span>SEND MESSAGE</button>
                              </div>
                          </div>
                      </div>
                  </form>
                  <div class="result"></div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Contact Page End-->
@endsection
