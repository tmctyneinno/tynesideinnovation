@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') Tyneprint @endslot
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
                        <h4 class="card-title mb-0"> Edit & Update Navigation Tyneprint</h4>
                        <a href="{{ route('admin.tyneprint.index')}}" class="btn btn-primary"> Tyneprint List</a>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row gy-4">
                            
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6"></div>
                            <div class="col-xxl-6 col-md-6">
                                <form method="POST"  action="{{ route('admin.tyneprint.update', $tyneprint->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                
                                        <div class="mb-3">
                                            <label for="labelInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Title" value="{{ $tyneprint->title }}" name="title" id="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="labelInput" class="form-label">Content</label>
                                            <textarea type="text" class="ckeditor-classic" placeholder="Answer" name="content" id="content" required>{{ $tyneprint->content }}</textarea>
                                        </div>
                                        <div class="mb-3 row ">
                                            <label class="col-sm-3 col-form-label form-label">Image</label>
                                            <div class="col-sm-9">
                                                <input id="image" type="file"  class="form-control @error('image') is-invalid @enderror" name="image"  onchange="previewImage(event)" >
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <img src="{{ asset($tyneprint->image) }}" alt="{{ $tyneprint->title }}" class="img-thumbnail mt-2" width="200">
                                               
                                                <img id="image-preview" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                                            </div>
                                            <small class="text-danger">Maximum file size: 2MB. Allowed file types: JPEG, PNG, JPG, GIF.</small>
                                              
                                        </div>
                                        <div class="mb-3 row align-items-center" >
                                            
                                            <div class="mb-3 row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update </button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <!--end col-->
                            
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6"></div>
                                </form>
                                <script>
                                    function previewImage(event) {
                                        const input = event.target;
                                        const preview = document.getElementById('image-preview');
                                        
                                        if (input.files && input.files[0]) {
                                            const reader = new FileReader();
                                            
                                            reader.onload = function(e) {
                                                preview.src = e.target.result;
                                                preview.style.display = 'block';
                                            };
                                            
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
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
