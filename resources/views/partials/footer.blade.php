
    <!--=================================
    footer-->
    <footer class="footer pt-0 pt-lg-5 bg-dark">
      <div class="">
        <div class="footer-top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-3">
                <a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo.png')}}" alt="logo"></a>
              </div> 
              <div class="col-sm-9 text-sm-end mt-4 mt-sm-0">
                <ul class="list-unstyled mb-0 social-icon">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-github"></i></a></li>
                  <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
            <hr class="my-4 my-sm-5 pb-0">
          </div>
        </div> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
              <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
              <div class="footer-link">
                <ul class="list-unstyled mb-0">
                  <li><a href="{{ route('home.pages','cloud-services')}}">Cloud Services</a></li>
                  <li><a href="{{ route('home.pages','it-consultancy')}}">IT Consultancy</a></li>
                  <li><a href="{{ route('home.pages','cyber-security-solution')}}">Cyber Security Solution</a></li>
                  <li><a href="{{ route('home.pages','manage-it-services')}}">Manage IT Services</a></li>
                </ul>
                <ul class="list-unstyled mb-0">
                  <li><a href="{{ route('home.pages','multimedia')}}">Multimedia</a></li>
                  <li><a href="{{ route('home.pages','animation-design')}}">Animation Design</a></li>
                  <li><a href="{{ route('home.pages','imaging-and-digital-printing')}}">Imaging & Digital Printing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
              <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
              <div class="footer-link">
                <ul class="list-unstyled mb-0">
                  <li><a href="{{ route('home.pages','about-us')}}">About</a></li>
                  <li><a href="{{ route('home.pages','our-values')}}">Our Value</a></li>
                  <li><a href="{{ route('home.pages','blog')}}">Blog</a></li>
                  <li><a href="{{ route('home.pages','mission-and-vision')}}">Mission and Vision</a></li>
                  <li><a href="{{ route('home.pages','career')}}">Careers </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
              <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
              <div class="footer-link">
                <ul class="list-unstyled mb-0">
                  <li><a href="{{ route('home.pages','faq')}}">Help & FAQs</a></li>
                  <li><a href="{{ route('home.pages','contact')}}">Contact Us</a></li>
                  {{-- <li><a href="#">Pricing And Plans</a></li> --}}
                  {{-- <li><a href="#">Cookies Policy</a></li> --}}
                  <li><a href="{{ route('home.pages','privacy-policy')}}">Privacy Policy</a></li>
                  <li><a href="{{ route('home.pages','terms-conditions')}}">Terms and Conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="footer-contact-info">
                <h5 class="text-primary mb-3">Contact Tyneside Innovation</h5>
                <div class="contact-address" >
                  <div class="contact-item" >
                    <p style="color: white">EUROPE: Tyneside Innovations UK Limited,
                      6, Canterbury Court Pontefract,
                      West Yorkshire, WF8 2UH
                      United Kingdom</p>


                  </div> 
                  <div class="contact-item" >
                    <p style="color: white">AFRICA: 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos Nigeria 2341</p>
                  </div>
                  <div class="contact-item" >
                    <p style="color: white">ASIA:      21 Gillabbey Terrace, Gillabbey Street, Cork, T12 KPN4, Republic of Ireland</p>
                  </div>
                  <div class="contact-item" >
                
                    <p style="color: white" class="mb-0 "> Phone: (+234) 915 3414 314</p>
                  </div>
                  <div class="contact-item">
                  
                    <a  style="color: white" href="#">  Email: enquiries@tynesideinnovation.com, info@tynesideinnovation.com, </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom py-sm-5 py-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <p class="mb-0" style="color: white">©Copyright {{ date('Y') }} <a href="#">Tynesideinnovation</a> All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </footer>
      <!--=================================
      footer-->
  
      <!--=================================
      Back To Top-->
      <div id="back-to-top" class="back-to-top">up</div>
      <!--=================================
      Back To Top-->
  
      <!--=================================
      Javascript -->
      <!-- JS Global Compulsory (Do not remove)-->
      <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{ asset('assets/js/popper/popper.min.js')}}"></script>
      <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
  
      <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
      <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
      <script src="{{ asset('assets/js/swiper/swiper.min.js')}}"></script>
      <script src="{{ asset('assets/js/swiperanimation/SwiperAnimation.min.js')}}"></script>
      <script src="{{ asset('assets/js/counter/jquery.countTo.js')}}"></script>
      <script src="{{ asset('assets/js/owl-carousel/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('assets/js/jarallax/jarallax.min.js')}}"></script>
      <script src="{{ asset('assets/js/jarallax/jarallax-video.min.js')}}"></script>
      <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('assets/js/shuffle/shuffle.min.js')}}"></script>
      <script src="{{ asset('assets/js/typer/jquery.typer.js')}}"></script>
  
      <!-- Template Scripts (Do not remove)-->
      <script src="{{ asset('assets/js/custom.js')}}"></script>
    