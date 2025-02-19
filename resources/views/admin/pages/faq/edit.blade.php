@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') faqss @endslot
@endcomponent

        <div class="row">
            @if(session('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title mb-0"> Edit & Update Navigation faqss</h4>
                        <a href="{{ route('admin.faq.index')}}" class="btn btn-primary"> faqss List</a>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row gy-4">
                            
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6"></div>
                            <div class="col-xxl-6 col-md-6">
                                <form method="POST"  action="{{ route('admin.faq.update', $faqs->id) }}">
                                    @csrf
                                    @method('PUT')
                                
                                        <div class="mb-3">
                                            <label for="labelInput" class="form-label">Question</label>
                                            <input type="text" class="form-control" placeholder="Question" value="{{ $faqs->question }}" name="question" id="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="labelInput" class="form-label">Answer</label>
                                            <textarea type="text" class="ckeditor-classic" placeholder="Answer" name="answer" id="name" required>{{ $faqs->answer }}</textarea>
                                        </div>
                                        <div class="mb-3 row align-items-center" >
                                            
                                            <div class="mb-3 row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update Faqs</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <!--end col-->
                            
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6"></div>
                                </form>
                            </div>
                           
                           
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

       

       

          @endsection
@section('script')
<script src="{{ URL::asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('backend/js/pages/form-editor.init.js') }}"></script>
@endsection
