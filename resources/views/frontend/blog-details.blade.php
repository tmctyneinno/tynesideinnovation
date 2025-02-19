@extends('layouts.appInner')

@section('content')

 <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50 space-ptb " style="background-image: url('{{ asset('assets/images/header-inner/04.jpg') }}');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="header-inner-title text-center position-relative">
                        <h1 class="text-white fw-normal mb-0">{!! Str::limit($postItem->title, 10, '...') !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!--=================================
      inner banner -->
  
      <!--=================================
      Blog -->
      <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="blog-detail">
                <div class="blog-post mb-4 mb-md-5">
                  <div class="blog-post-image">
                    <img class="img-fluid" src="{{ asset($postItem->image) }}" alt="">
                  </div>
                  <div class="blog-post-content">
                    <div class="blog-post-info">
                      {{-- <div class="blog-post-author">
                        <a href="#" class="btn btn-light-round btn-round text-primary">Marketing</a>
                      </div> --}}
                      <div class="blog-post-date">
                        <a href="#">{{ $postItem->created_at->format('M j, Y') }}</a>
                      </div>
                    </div>
                    <div class="blog-post-details">
                        <h5 class="blog-post-title">
                            {{$postItem->title}}
                        </h5>
                        <p class="mb-4">
                            {!! $postItem->content !!}
                        </p>
                    </div>
                  </div>
                </div>
               
                
                <hr>
                <div class="comments mt-4 mt-md-5">
                  <h5 class="mb-4">Comments</h5>
                  <div class="d-flex mb-4">
                    <div class="avatar avatar-md">
                      <img src="images/avatar/01.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="ms-3 border p-3 p-sm-4">
                      <div class="d-flex">
                        <h6 class="mt-0">Alice Williams</h6>
                        <a class="ms-auto" href="#"><i class="fas fa-reply pe-2"></i>Reply</a>
                      </div>
                      <p>Then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan.</p>
                    </div>
                  </div>
                  <div class="d-flex mb-4 ms-5">
                    <div class="avatar avatar-md">
                      <img src="images/avatar/06.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="ms-3 border p-3 p-sm-4">
                      <div class="d-flex">
                        <h6 class="mt-0">Mellissa Doe</h6>
                        <a class="ms-auto" href="#"><i class="fas fa-reply pe-2"></i>Reply</a>
                      </div>
                      <p>Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                    </div>
                  </div>
                  <div class="d-flex mb-4 ms-5">
                    <div class="avatar avatar-md">
                      <img src="images/avatar/06.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="ms-3 border p-3 p-sm-4">
                      <div class="d-flex">
                        <h6 class="mt-0">Mellissa Doe</h6>
                        <a class="ms-auto" href="#"><i class="fas fa-reply pe-2"></i>Reply</a>
                      </div>
                      <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
                    </div>
                  </div>
                  <div class="d-flex mb-4">
                    <div class="avatar avatar-md">
                      <img src="images/avatar/01.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="ms-3 border p-3 p-sm-4">
                      <div class="d-flex">
                        <h6 class="mt-0">Alice Williams</h6>
                        <a class="ms-auto" href="#"><i class="fas fa-reply pe-2"></i>Reply</a>
                      </div>
                      <p>Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
                    </div>
                  </div>
                </div>
                <div class="mt-4 mt-md-5">
                  <h5 class="mb-4">Leave a reply</h5>
                  <form>
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" id="Website" placeholder="Website URL">
                      </div>
                      <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                      </div>
                      <div class="mb-3 col-md-6">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address">
                      </div>
                      <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" id="number" placeholder="Phone Number">
                      </div>
                      <div class="mb-3 col-md-12">
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                      </div>
                      <div class="col-md-12">
                        <a class="btn btn-primary" href="#">Submit Now</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Blog -->
  
      <!--=================================
      Action Box -->
      <section class="space-pb dark-background">
        <div class="container">
          <div class="bg-dark text-center rounded py-5 px-3">
            <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
            <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
            <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
          </div>
        </div>
      </section>
      <!--=================================
      Action Box -->
    
   
     
@endsection
