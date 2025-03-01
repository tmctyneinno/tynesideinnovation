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
                    <h2>Our <span> Blogs</span></h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><i class="icon-home"></i><a href="{{route('index')}}">Home</a></li>
                            <li><span></span></li>
                            <li>Our Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <!--Blog Two Single Start -->

                    @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="assets/images/blog/blog-2-1.jpg" alt="">
                                <div class="blog-two__plus">
                                    <a href="{{route('blog.details', $blog->slug)}}"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <div class="blog-two__content-inner">
                                    <h3 class="blog-two__title"><a href="{{route('blog.details', $blog->slug)}}">{{ $blog->title}}</a></h3>
                                    <p class="blog-two__text">{!! Str::limit($blog->content, 30) !!} </p>
                                </div>
                                <div class="blog-two__read-more">
                                    <div class="blog-two__read-more-line"></div>
                                    <a href="{{route('blog.details', $blog->slug)}}" class="blog-two__read-more-text">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
             @endforelse
                 
                </div>
            </div>
        </section>
        <!--Blog Page End-->


@endsection
