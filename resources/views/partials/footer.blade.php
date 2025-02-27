   <!--Site Footer Two Start-->
   <footer class="site-footer-two">
    <div class="site-footer-two__shape-bg"
        style="background-image: url(assets/images/shapes/ite-footer-two-shape-bg.png);"></div>
    <div class="site-footer-two__top">
        <div class="site-footer-two__main-content">
            <div class="container">
                <div class="site-footer-two__main-content-inner">
                    <div class="row">

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget-two__about">
                                <div class="footer-widget-two__about-logo">
                                    <a href="{{route('index')}}"><img src="{{asset('/assets/images/Tyneside.png')}}"  width="130px" alt=""></a>
                                </div>
                                <ul class="footer-widget-two__get-in-touch-list list-unstyled">
                                    <li>
                                        {{-- <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div> --}}
                                        <div class="text">
                                            <p>EUROPE: 85 Great Portland Street, First Floor, London W1W 7LT, United Kingdom</p>
                                           <p> AFRICA: 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos Nigeria 2341</p>
                                            <p>ASIA:      21 Gillabbey Terrace, Gillabbey Street, Cork, T12 KPN4, Republic of Ireland</p>
                                        </div>
                                    </li>
                                    <li>
                                        {{-- <div class="icon">
                                            <span class="icon-envelope"></span>
                                        </div> --}}
                                        <div class="text">
                                            <p><a href="mailto:support@domain.com">enquiries@tynesideinnovation.com, info@tynesideinnovation.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        {{-- <div class="icon">
                                            <span class="icon-phone"></span>
                                        </div> --}}
                                        <div class="text">
                                            <p><a href="tel:001234568900"> (+234) 915 3414 314, +44 74665 88324</a></p>
                                        </div>
                                    </li>
                                </ul>
                           
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget-two__quick-links">
                                <h4 class="footer-widget-two__title">Quick Links</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{ route('home.pages','about-us')}}">About</a></li>
                                    <li><a href="{{ route('home.pages','our-values')}}">Our Value</a></li>
                                    <li><a href="{{ route('home.pages','blog')}}">Blog</a></li>
                                    <li><a href="{{ route('home.pages','mission-and-vision')}}">Mission and Vision</a></li>
                                    <li><a href="{{ route('home.pages','career')}}">Careers </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-two__support">
                                <h4 class="footer-widget-two__title">IT Services</h4>
                                <ul
                                    class="footer-widget-two__quick-links-list footer-widget-two__support-list list-unstyled">
                                    <li><a href="{{ route('home.pages','cloud-services')}}">Cloud Services</a></li>
                                    <li><a href="{{ route('home.pages','it-consultancy')}}">IT Consultancy</a></li>
                                    <li><a href="{{ route('home.pages','cyber-security-solution')}}">Cyber Security Solution</a></li>
                                    <li><a href="{{ route('home.pages','manage-it-services')}}">Manage IT Services</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget-two__services">
                                <h4 class="footer-widget-two__title">Support</h4>
                                <ul
                                    class="footer-widget-two__quick-links-list footer-widget-two__services-list list-unstyled">
                                    <li><a href="{{ route('home.pages','faq')}}">Help & FAQs</a></li>
                                    <li><a href="{{ route('home.pages','contact')}}">Contact Us</a></li>
                                    <li><a href="{{ route('home.pages','privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{ route('home.pages','terms-conditions')}}">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-two__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-two__bottom-inner">
                        <div class="site-footer-two__copyright">
                            <p class="site-footer-two__copyright-text">
                                ©Copyright {{ date('Y') }} <a href="#">Tynesideinnovation</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer Two End-->




</div><!-- /.page-wrapper -->

@include('partials.mobileNav')

@include('partials.scripts')