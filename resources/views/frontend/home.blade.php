@extends('layouts.appInner')

@section('content')

 
    {{-- <section class="banner-04 align-items-center d-flex space-ptb bg-holder h-900 h-sm-900 bg-overlay-black-80" data-jarallax='{"speed": 0.4}' style="background-image: url({{ asset($sliders->image) }});">
        <div class="container">
            <div class="row d-flex align-items-center position-relative">
            <div class="col-md-6">
                <h1 class="text-white fw-normal">{{ $sliders->title }}</h1>
                <p class="text-white">{{ $sliders->caption }}</p>
                <div class="row border-radius mt-4 mt-md-5">
                <div class="col-sm-3 col-md-3">
                    <div class="counter">
                    <div class="counter-content">
                        <span class="timer" data-to="250" data-speed="2000">250</span>
                        <label>Happy Clients</label>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="counter">
                    <div class="counter-content">
                        <span class="timer" data-to="300" data-speed="2000">300</span>
                        <label>Skilled Experts</label>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="counter">
                    <div class="counter-content">
                        <span class="timer" data-to="187" data-speed="2000">187</span>
                        <label>Finished Projects</label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="mt-4 mt-md-5 bg-white border-radius p-4">
                <h4>Complete the form below. We will respond as soon as possible.</h4>
                <form class="mt-4 row">
                    <div class="mb-3 col-lg-6">
                    <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                    <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="mb-3 col-12">
                    <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="mb-3 col-12">
                    <input type="text" class="form-control" id="exampleInputLnumber" placeholder="Phone Number">
                    </div>
                    <div class="mb-4 col-12">
                    <textarea class="form-control" placeholder="Enquiry Description" rows="5"></textarea>
                    </div>
                    <div class="mb-4 col-12">
                        <div class="form-check ms-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        I agree to talk about my project with Hi-soft
                    </label>
                    </div>
                    </div>
                    <div class="mb-0 col-12 d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Get in touch<i class="fas fa-arrow-right ps-3"></i></button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section> --}}
   

     <!--=================================
    banner -->
    <section class="banner align-items-center d-flex space-pt bg-holder  h-800 h-sm-600 bg-overlay-gradient-y-left" data-jarallax='{"speed": 0.4}' style="background-image: url({{ asset('assets/images/slider/088.jpg')}});">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 position-relative">
            <h1>
              <span class="font-large">
                We're Tyneside Innovation. 
              </span>
            </h1>
            <h2>
              <span class="font-large text-white" >
                We help drive change with technology.
              </span>
            </h2>
            <h6>It's easy when you're doing something you love</h6>
            <a href="#" class="btn btn-white btn-round">Discover More<i class="fas fa-arrow-right ps-3"></i></a>
            
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

     <!--=================================
    Tab -->
    <section class="space-pb pt-2 mt-3">
      <div class="container">
        
        <div class="row">
          <div class="col-md-3">
            <div class="d-flex h-100">
              <div class="nav flex-column nav-pills w-100 align-self-lg-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="mission-and-vision-tab" data-bs-toggle="pill" href="#mission-and-vision" role="tab" aria-controls="mission-and-vision" aria-selected="true"><span class="data-hover" data-title="Mission and vision">Mission and vision</span></a>
                <a class="nav-link " id="our-challenges-tab" data-bs-toggle="pill" href="#our-challenges" role="tab" aria-controls="our-challenges" aria-selected="false"><span class="data-hover" data-title="Our challenges">Our challenges</span></a>
                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#technology-partners" role="tab" aria-controls="technology-partners" aria-selected="false"><span class="data-hover" data-title="Technology partners">Technology partners</span></a>
                <a class="nav-link" id="careers-with-us-tab" data-bs-toggle="pill" href="#careers-with-us" role="tab" aria-controls="careers-with-us" aria-selected="false"><span class="data-hover" data-title="Careers with us">Careers with us</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-9 mt-3 mt-md-0">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="mission-and-vision" role="tabpanel" aria-labelledby="mission-and-vision-tab">
                <div class="row">
                  <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/about/01.jpg')}}" alt="">
                  </div>
                  <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                    <h4><i class="flaticon-target text-primary me-2"></i> Our Mission</h4>
                    <p class="mb-4">Our mission is to be the industry's premier service provider company concentrated on fulfilling the maximum to our clients. </p>
                    <h4><i class="flaticon-eye text-primary me-2"></i> Our Vision</h4>
                    <p class="mb-4">Our Vision is to be a top Web Design company in the IT sector and progress in our current position in the market. </p>
                    <h6 class="fw-normal text-muted mt-4">Our Vision and Mission are both encouraging our team to accomplish the goal. We recognize the clients' requirements, analyze them, and provide the best solutions. We satisfy our clients by our services and implements it with more capable software solution approaches.</h6>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="our-challenges" role="tabpanel" aria-labelledby="our-challenges-tab">
                <div class="row">
                  <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/about/04.jpg')}}" alt="">
                  </div>
                  <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                    <h4 class="mb-4 text-dark">“We take pride in helping our clients deliver marvelous results when it comes to their projects. From data to performance, we’ve got you covered.”</h4>
                    <p class="d-flex align-items-center mb-4">
                      <span class="fw-bold text-dark me-2">Alice Williams</span> -
                      <label class="ms-2 mb-0">Sales and Marketing</label>
                    </p>
                    <p class="mb-4">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
                    <a href="#" class="btn btn-primary-round btn-round">Learn More<i class="fas fa-arrow-right ps-3"></i></a>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="technology-partners" role="tabpanel">
                <div class="row">
                  <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/about/03.jpg')}}" alt="">
                  </div>
                  <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                    <h4 class="text-dark">Our Technology Partners</h4>
                    <p>We partnered with Technology Managers to increase its skills at every step of the software development process.</p>
                    <div class="row">
                      
                      <div class="col-lg-4 mb-4">
                        <img class="img-fluid grayscale p-2" src="{{ asset('assets/images/client-logo/06.svg')}}" alt="">
                      </div>
                      <div class="col-lg-4 mb-4">
                        <img class="img-fluid grayscale p-2" src="{{ asset('assets/images/client-logo/07.svg')}}" alt="">
                      </div>
                      <div class="col-lg-4 mb-4">
                        <img class="img-fluid grayscale p-2" src="{{ asset('assets/images/client-logo/05.svg')}}" alt="">
                      </div>
                      <div class="col-lg-4 mb-4">
                        <img class="img-fluid grayscale p-2" src="{{ asset('assets/images/client-logo/01.svg')}}" alt="">
                      </div>
                    </div>
                    <div class="mt-4">
                    <a class="btn btn-primary-round btn-round" href="#">Become a Partner</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="meet-the-our-team" role="tabpanel" aria-labelledby="meet-the-our-team-tab">
                <div class="row">
                  <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/about/02.jpg')}}" alt="">
                  </div>
                  
                </div>
              </div>
              <div class="tab-pane fade" id="careers-with-us" role="tabpanel" aria-labelledby="careers-with-us-tab">
                <div class="row">
                  <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/about/07.jpg')}}" alt="">
                  </div>
                  <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                    <h4 class="mb-2">Are you the best?</h4>
                    <p class="mb-4">There’s always room for intelligent people who are excited about the digital world and are continually looking forward to seeing what’s next.</p>
                    <h5>Why work with us?</h5>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <ul class="list list-unstyled">
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Flexible Time Off </span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>24/7 parking. </span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Full medical benefits </span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Pto / vacation</span></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="list list-unstyled">
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Flexible hours</span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Collaborative environment</span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Health, Dental, And Vision</span></li>
                          <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Collaborative environment</span></li>
                        </ul>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary-round btn-round mt-2">View Available Positions<i class="fas fa-arrow-right ps-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Tab -->

    <!--=================================
    Service -->
    <section class="space-ptb bg-light position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-10">
            <div class="section-title text-center">
              <h2>This is what we do and we do it perfectly.</h2>
              {{-- <p>Award-winning website design & creative digital agency services</p> --}}
            </div>
          </div>
        </div>

        <div class="row">
            @forelse ($services as $service)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-info feature-info-style-01" 
                        style="background-image: url('{{ asset($service->image) }}'); 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat; 
                              height: 300px;">
                        <!-- Overlay -->
                        <div class="overlay" style="position: absolute; top: 0; left: 0; 
                            right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 1;">
                        </div>
                        {{-- <div class="feature-info-icon">
                            <i class="flaticon-data"></i>
                        </div> --}}
                        <div class="feature-info-content" style="z-index: 2; position: relative;">
                            <h5 class="mb-3 feature-info-title text-white">{{ $service->title }}</h5>
                            <p class="mb-0 text-white">{!! Str::limit(strip_tags($service->content), 120, '..') !!}</p>
                            {{-- <a href="{{ $service->slug }}" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            @empty
                <p>No Data</p>
            @endforelse
        </div>
      </div>
    </section>

    <!--=================================
    portfolio -->

    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
                <h2>Showcasing Creative Works & Innovations</h2>
                <p>Explore our portfolio of exceptional projects, where creativity meets functionality to deliver impactful results.</p>
            </div>          
          </div>
        </div>
    
        <div class="row justify-content-center">
          <div class="col-12">
              <nav>
                  <div class="nav nav-tabs nav-tabs-02 justify-content-center" id="nav-tab" role="tablist">
                      @foreach ($portfolioCategory as $key => $category)
                          <a class="nav-item nav-link @if($key == 0) active @endif"
                             id="nav-{{ $key }}-tab"
                             data-bs-toggle="tab"
                             href="#nav-{{ $key }}"
                             role="tab"
                             aria-controls="nav-{{ $key }}"
                             aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                              {{ $category->name }}
                          </a>
                      @endforeach
                  </div>
              </nav>
      
              <div class="tab-content mt-5" id="nav-tabContent">
                  @foreach ($portfolioCategory as $key => $category)
                      <div class="tab-pane fade @if($key == 0) show active @endif"
                           id="nav-{{ $key }}"
                           role="tabpanel"
                           aria-labelledby="nav-{{ $key }}-tab">
                          <div class="row">
                              @php
                                  $filteredPortfolio = $portfolio->where('category_id', $category->id);
                              @endphp
                              
                              @if($filteredPortfolio->isEmpty())
                                  <p class="text-center">No portfolio items available for this category.</p>
                              @else
                                  @foreach ($filteredPortfolio as $item)
                                  <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="blog-post">
                                      <div class="blog-post-image">
                                        <img class="img-fluid " 
                                         style="object-fit: contain; max-width:100%; max-height:100%;  height:220px"
                                        src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                      </div>
                                      <div class="blog-post-content">
                                        <div class="blog-post-info">
                                          <div class="blog-post-date">
                                            <a href="#">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</a>
                                          </div>
                                        </div>
                                        <div class="">
                                          <a href="#" class=" text-primary">{!! $item->content !!}</a>
                                        </div>
                                        <div class="blog-post-details">
                                          <h5 class="blog-post-title">
                                            <a href="#">{{ $item->title }}</a>
                                          </h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    
                                  @endforeach
                              @endif
                               
                          </div>
                      </div>
                  @endforeach
              </div>
      
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    portfolio -->

    {{-- Printing  services --}}
    <section class="space-pb">
      <div class="container">
        <div class="row d-lg-flex align-items-center justify-content-center pb-4 pb-md-5">
          <div class="col-lg-6">
            <h2 class="mb-3 mb-lg-0">Our Printing Services</h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <a href="{{ route('home.pages','tyneprints')}}" class="btn btn-primary-round btn-round w-space">See All <i class="fas fa-arrow-right ps-3"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- owl carousel -->
            <div class="owl-carousel text-start" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1">
              @forelse ($tyneprint as $tyneprint)
                <div class="items">
                  <div class="case-study case-study-style-02">
                    <div class="case-study-img case-study-lg" style="background-image: url({{ asset($tyneprint->image) }});">
                    </div>
                    <div class="case-study-info">
                      <a class="case-study-title fw-bold" href="#">{{$tyneprint->title}}</a>
                      {{-- <a class="case-study-services" href="#">Sports</a> --}}
                      <p class="mt-2">
                        {!!$tyneprint->content!!}
                      </p>
                      {{-- <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a> --}}
                    </div>
                  </div>
                </div>
              @empty
               <p>No Data Available</p>
              @endforelse
              
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Printing  services --}}

  
    {{-- Blog --> --}}
    <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="section-title text-center">
                <h2>Blog</h2>
                <p class="text-white mb-0">Explore insightful articles, tips, and stories to inspire and inform. Stay updated with the latest trends and ideas.</p>
              </div>
             
            </div>
          </div>
          <div class="row">
            @forelse ($blogs as $blog)
              <div class="col-lg-4 col-sm-6 mb-4">
                <div class="blog-post">
                  <a  href="{{ route('blog.details', $blog->slug) }}">
                    <div class="blog-post-image">
                      <img class="img-fluid" src="{{ asset($blog->image) }}" alt="" 
                          style="object-fit: cover; max-width: 100%; max-height: 100%; height: 177px; width: 300px;">
                    
                    </div>
                  </a>
                  <div class="blog-post-content">
                    <div class="blog-post-info">
                      <div class="blog-post-date">
                        <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->created_at->format('M j, Y') }}</a>
                      </div>
                    </div>
                    <div class="blog-post-details">
                      <h5 class="blog-post-title">
                        <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title}}</a>
                      </h5>
                      <p class="disc">
                        {!! Str::limit($blog->content, 30) !!} 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            @empty
                <p>No blog available</p>
            @endforelse
           
           
          </div>
          <hr />
          {{-- <div class="row mt-5">
            <div class="col-12 d-md-flex justify-content-center align-items-center">
              <p class="mb-3 mb-md-0 mx-0 mx-md-3 text-light">We have articles on a range of topics</p>
              <a href="{{ route('home.page','blog')}}" class="btn btn-primary-round btn-round mx-0 mx-md-3">View all Blogs<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div> --}}
        </div>
      </section>
      <!--=================================
      BLog -->



@endsection
