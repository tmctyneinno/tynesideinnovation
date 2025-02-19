@extends('layouts.appInner')
<style>
    .custom-nav-link {
        color: #022d62 !important;
    }

</style>
@section('content')
 

 <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('assets/images/header-inner/02.jpg')}}'">
        <div class="container"> 
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="header-inner-title text-center position-relative">
                    <h1 class="text-white fw-normal">Blog</h1>
                    <p class="text-white mb-0">Explore insightful articles, tips, and stories to inspire and inform. Stay updated with the latest trends and ideas.</p>
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
          {{-- <div class="row mt-4 mt-md-5">
            <div class="col-12 text-center">
              <a href="#" class="btn btn-primary-round btn-round">Load More<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div> --}}
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
