@extends('layouts.appInner')
<style>
  .custom-nav-link{
    color: #022d62 !important;
  }
</style>
@section('content')


   <!--=================================
    Header Inner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('assets/images/header-inner/05.jpg')}}');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <div class="header-inner-title text-center position-relative">
                <h1 class="text-white fw-normal">Frequently Asked Questions</h1>
                <p class="text-white mb-0">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Header Inner -->
  
      <!--=================================
      Career Opportunities -->
      <section class="space-ptb">
        <div class="container">

          <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    @foreach($faqs as $index => $faq)
                    <div class="card">
                        <div class="accordion-icon card-header" id="heading{{ $index }}">
                            <h4 class="mb-0">
                                <button class="btn {{ $index == 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                    {{ $faq->question }}
                                </button>
                            </h4>
                        </div>
                        <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}"
                             aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                            <div class="card-body">
                                <div class="mb-4">{!! $faq->answer !!}</div>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

          <div class="row mt-4 mt-md-5">
            <div class="col text-center">
              {{-- <p>Don’t see a role that fits? Send us your resume.</p> --}}
              <a href="{{ route('home.pages', 'contact') }}" class="btn btn-primary btn-round text-white w-space">Contact Us<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Career Opportunities -->
  
@endsection
