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
                  <h4 class="text-white">Infrastructure Equipment & Financial Technology Distribution</h4>
                  <div class="thm-breadcrumb__inner">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                          <li><span></span></li>
                          <li><a href="#">Services</a></li>
                          <li><span></span></li>
                          <li>Infrastructure Equipment & Financial Technology Distribution</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--Page Header End-->

      <!--Services Details Start-->
      <section class="services-details">
          <div class="container">
              <div class="row">
                  <div class="col-xl-8 col-lg-7">
                      <div class="services-details__left">
                          <div class="services-details__img">
                              <img src="{{asset('/assets/images/digis.png')}}" style="width:500px" alt="">
                          </div>
                          <div class="services-details__content">
                              <h5 class="services-details__title-4">Infrastructure Equipment & Financial Technology Distribution</h5>
                              <p class="services-details__text-2">Tyneside Innovation is a trusted distributor, deployment partner, and technical support provider for a wide range of mission-critical equipment used across banking, retail, government, and enterprise environments.</p>
                                                            <p class="services-details__text-2">Tyneside Innovation is a trusted distributor, deployment partner, and technical support provider for a wide range of mission-critical equipment used across banking, retail, government, and enterprise environments.</p>
                
                           
                              <h3 class="services-details__title-3">Our Product Categories</h3>
                             
                              <div class="services-details__points-and-img">
                                  <div class="row">
                                      <div class="col-xl-12">
                                          <ul class="services-details__points-1 list-unstyled">
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>ATM Machines </p>
                                              </li>
                                              <p>Secure, user-friendly ATMs from global manufacturers like Diebold Nixdorf, Hyosung, and NCR—ideal for banks, fintechs, retail outlets, and remote banking infrastructure. We provide full deployment, configuration, and servicing support.</p>
                                              
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p> Money Counters & Cash Handling Devices</p>
                                              </li>
                                              <P> From single-denomination counters to advanced multi-currency value counters with counterfeit detection. Brands include Safescan, Cassida, AccuBANKER, and more.</P>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p>Scanners & Printers</p>
                                              </li>
                                              <p> Including cheque and document scanners, ID verification devices, and high-speed receipt printers used in banking, healthcare, and public service environments.</p>
                                              <li>
                                                  <div class="icon">
                                                      <span class="icon-check"></span>
                                                  </div>
                                                  <p> IT Peripherals & Digital Accessories</p>
                                              </li>
                                              <p>POS terminals, biometric devices, card readers, display monitors, input devices, and peripherals—all configured for your specific operational environment</p>
                                              <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <p>Infrastructure Equipment</p>
                                            </li>
                                            <p>Power solutions, network hardware, secure cabinets, servers, and UPS systems for IT resilience and scalability.</p>
                                          </ul>
                                      </div>
                                      
                                  </div>
                              </div>

                               <h3 class="services-details__title-3"> 🔧 Deployment, Maintenance & Support Services</h3>
                             
                              <div class="services-details__points-and-img">
                                  <div class="row">
                                      <div class="col-xl-12">
                                          <ul class="services-details__points-1 list-unstyled">
                                              <li>
                                                  <div class="icon">
                                                     📦
                                                  </div>
                                                  <p> Hardware Deployment & On-Site Installation </p>
                                              </li>
                                              <p>Trained engineers handle delivery, installation, and commissioning of all devices across single or multi-site rollouts.</p>
                                              
                                              <li>
                                                  <div class="icon">
                                                ⚙️
                                                  </div>
                                                  <p> Configuration & Integration Support</p>
                                              </li>
                                              <P> Devices are configured to your environment—whether standalone, cloud-integrated, or API-linked to core systems.</P>
                                              <li>
                                                  <div class="icon">
                                                    🔄 
                                                  </div>
                                                  <p> Preventive Maintenance & Repairs</p>
                                              </li>
                                              <p> Scheduled checkups, software updates, and rapid response for breakdowns to ensure uninterrupted operations.p>
                                              <li>
                                                  <div class="icon">
                                                     📞 
                                                  </div>
                                                  <p>Technical Helpdesk & Remote Support</p>
                                              </li>
                                              <p>Multi-channel support (email, phone, remote access) to resolve issues quickly and minimize downtime.</p>
                                              <li>
                                                <div class="icon">
                                                 📚 
                                                </div>
                                                <p>Training & Documentation</p>
                                            </li>
                                            <p>Staff onboarding sessions and easy-to-follow guides included with every deployment.</p>
                                          </ul>
                                      </div>
                                      
                                  </div>
                              </div>
                              🌍 Why Choose Tyneside Innovation?
                              <div class="services-details__points-box"> 
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Direct supply from global OEMs and certified partners</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Experienced deployment teams in Africa, the UK, and the Middle East</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Scalable projects – from single-site branches to nationwide rollouts</p>
                                      </li>
                                        <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Dedicated client support for every stage – pre-sale to post-installation</p>
                                      </li>
                                  </ul>
                                 
                              </div>
                              📦 We Supply & Support
                               <div class="services-details__points-box"> 
                                  <ul class="services-details__points-list list-unstyled">
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Banks and financial institutions</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Government agencies and utilities</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>FMCG and logistics operations</p>
                                      </li>
                                        <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Microfinance & cooperatives</p>
                                      </li>
                                      <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>Hospitals and universities</p>
                                      </li>
                                         <li>
                                          <div class="icon">
                                              <span class="icon-check"></span>
                                          </div>
                                          <p>NGOs and donor-funded projects</p>
                                      </li>
                                  </ul>
                                 
                              </div>
                                      Let Tyneside Innovation power your infrastructure with expertly sourced equipment, smart deployment, and responsive technical support.
                            
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                      <div class="services-details__right">
                          <div class="services-details__more-services">
                              <h3>More Services</h3>
                              <span></span>
                                  <ul class="services-details__more-services-list list-unstyled">
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','digital-marketing')}}">Digital Marketing </a></p>
                                  </li>
                                  <li class="active">
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','web-development')}}">Web Design & Development</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','search-engine')}}">Search Engine Optimization</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','branding-design')}}">Design & Branding</a></p>
                                  </li>
                                  <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','app-development')}}">App Development</a></p>
                                  </li>
                                     <li>
                                      <div class="icon">
                                          <img src="assets/images/icon/services-details-more-services-icon.png"
                                              alt="">
                                      </div>
                                      <p><a href="{{route('home.pages','financial-technology-distribution')}}">Financial Technology Distribution</a></p>
                                  </li>
                              </ul>
                          </div>
                          <div class="services-details__contact-box">
                              <h3>Contact Us</h3>
                              <span></span>
                              <p class="services-details__contact-text">Email info@tynesideinnovation.com or fill out our Deployment Request Form to get started.</p>
                              <div class="services-details__contact-btn-box">
                                  <a href="#" class="services-details__contact-btn thm-btn"><i
                                          class="icon-right"></i>Contact Us</a>
                              </div>
                      
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--Services Details End-->



 

@endsection
