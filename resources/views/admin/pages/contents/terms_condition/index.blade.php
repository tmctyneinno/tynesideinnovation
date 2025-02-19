
@extends('admin.adminLayout.master')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Admin 
        @endslot
        @slot('title')
            Website Content
        @endslot
    @endcomponent

    <div class="card">
        
        <div class="card-body mt-n5">
            <div class="position-relative mt-n3">
                
            </div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3">
            <div class="card">
                <div class="card-body">
                   

                    
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>
        <!--end col-->

        <div class="col-xxl-9">
            @if(session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <script>
            window.setTimeout(function() {
               var alert = document.getElementById('success-alert');
               if (alert) {
                   alert.remove();
               }
           }, 3000);
       </script>
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-custom-outline nav-info profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-md "  href="{{ route('admin.privacyPolicy.index') }}" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Privacy Policy</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-md active"   href="{{ route('admin.termsCondition.index') }}">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Terms and Condition</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-md" href="{{ route('admin.visionMission.index')}}" >
                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block"> Vision / Mission</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content text-muted">
                

                <div class="tab-pane active" id="activities" role="tabpanel">
                    <div class="row">
                        @include('admin.pages.contents.terms_condition.add')
                    </div>
                    <!--end card-->
                </div>
               
                
            </div>
            <!--end tab-content-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('backend/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('backend/js/app.js') }}"></script>
    
    <script src="{{ URL::asset('backend/js/app.js') }}"></script>
@endsection
