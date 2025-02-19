
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
                    <div>
                        
                    </div>
                  

                    
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
                                <a class="nav-link fs-md active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Privacy Policy</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-md "   href="{{ route('admin.termsCondition.index') }}">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Terms and Condition</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-md " href="{{ route('admin.visionMission.index')}}" >
                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Vision / Mission</span>
                                </a>
                            </li>
                         
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                    <div class="row">
                        @include('admin.pages.contents.privacy_policy')
                    </div>
                </div>

                <div class="tab-pane fade" id="activities" role="tabpanel">
                    <div class="row">
                        @include('admin.pages.contents.terms_condition')
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="projects" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-1.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Chat App Update</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 year Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" ><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" ><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        J
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-warning bg-warning-subtle fs-xs">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">80%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->

                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                        
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-2.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">ABC Project Customization</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#" ><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-primary  bg-primary-subtle fs-xs">Progress</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">65%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-3.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Client - Frank Hook</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">1 year Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        M
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-info bg-info-subtle fs-xs">New</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">50%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-5.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Vixon Project</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">11 year Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-success  bg-success-subtle fs-xs">Completed</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">95%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-6.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Brand Logo Design</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">10 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        E
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-info bg-info-subtle fs-xs">New</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">38%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-4.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Chat App</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">8 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        R
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-warning bg-warning-subtle fs-xs">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">76%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->

                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-6.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Business Template - UI/UX design</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">7 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        R
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-success  bg-success-subtle fs-xs">Completed</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">87%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mt-3">
                                        <div class="card-body p-4">
                                            
                                            <div class="d-flex">
                                                <div class="text-center mb-4 me-3">
                                                    <img src="build/images/companies/img-7.png" alt="" width="30px" height="30px" class="">
                                                </div>
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h6 class="text-truncate"><a href="#" class="text-body">Project Update</a></h6>
                                                    <p class="text-muted fs-sm text-truncate mb-0">Last Update : <span class="fw-semibold text-body">48 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                            <li><a class="dropdown-item remove-list" href="#"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap mt-3 align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-sm text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xxs">
                                                                    <img src="build/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge text-primary  bg-primary-subtle fs-xs">progress</div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fs-sm">Progress <span class="text-danger float-end">69%</span></h5>
                                                <div class="progress progress-bar-alt-danger progress-sm">
                                                    <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%; visibility: visible; animation-name: animationProgress;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->


                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <ul class="pagination pagination-separated justify-content-center mb-0">
                                            <li class="page-item disabled">
                                                <a href="javascript:void(0);" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="javascript:void(0);" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <!--end tab-pane-->
                <div class="tab-pane fade" id="documents" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                <div class="flex-shrink-0">
                                    <input class="form-control d-none" type="file" id="formFile">
                                    <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light">
                                                <tr class="fs-md">
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Upload Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                    <i class="ri-file-zip-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0"><a href="javascript:void(0)" class="text-body">Art board-documents.zip</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">Zip File</td>
                                                    <td class="fs-md">4.57 MB</td>
                                                    <td class="fs-md">12 Dec 2023</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                    <i class="ri-file-pdf-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0"><a href="javascript:void(0);"class="text-body">Bank Management System</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">PDF File</td>
                                                    <td class="fs-md">8.89 MB</td>
                                                    <td class="fs-md">24 Nov 2023</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                    <i class="ri-video-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0"><a href="javascript:void(0);" class="text-body">Tour-video.mp4</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">MP4 File</td>
                                                    <td class="fs-md">14.62 MB</td>
                                                    <td class="fs-md">19 Nov 2023</td>
                                                    <td class="">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                    <i class="ri-file-excel-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0"><a href="javascript:void(0);" class="text-body">Account-statement.xsl</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">XSL File</td>
                                                    <td class="fs-md">2.38 KB</td>
                                                    <td class="fs-md">14 Nov 2023</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                    <i class="ri-folder-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0"><a href="javascript:void(0);" class="text-body">Project Screenshots Collection</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">Folder File</td>
                                                    <td class="fs-md">87.24 MB</td>
                                                    <td class="fs-md">08 Nov 2023</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                    <i class="ri-image-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-md mb-0">
                                                                    <a href="javascript:void(0);" class="text-body">vixon-logo.png</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-md">PNG File</td>
                                                    <td class="fs-md">879 KB</td>
                                                    <td class="fs-md">02 Nov 2023</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0);" class="text-info"><span class="spinner-border spinner-border-sm align-middle me-2" role="status" aria-hidden="true"></span> Load more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
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
