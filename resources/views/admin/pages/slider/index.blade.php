@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') Slider @endslot
@endcomponent

        <div class="row">
            @if(session('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="menuTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="width80">#</th>
                                            <th>Title</th>
                                            <th>Caption</th>
                                            <th>Image</th>
                                            <th>DATE   </th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @forelse ($sliders as $index => $slider)
                                            <tr>
                                                <td><strong>{{  $index + 1 }}</strong></td>
                                                <td>{{ Str::limit($slider->title, 10) }}</td>
                                                <td>{{ Str::limit($slider->caption,10) }}</td>
                                                <td>
                                                    <img src="{{ asset($slider->image) }}" class="img-thumbnail" height="30" alt="{{ $slider->title }}"  style="max-width: 100px;"/>
                                                </td>
                                                <td>{{ $slider->created_at->format('d F Y') }}</td>
                                                <td> 
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary " style="margin-right: 5px;" href="{{ route('admin.slider.edit',  encrypt($slider->id) ) }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ route('admin.slider.destroy', encrypt($slider->id) )  }}" onclick="return confirm('Are you sure you want to delete this slider?');">Delete</a>
                                                    </div>
                                                   
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No slider items found.</td>
                                            </tr>
                                        @endforelse
                                        
                                    </tbody>
                                    
                                    
                                </table>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    {{-- {{ $menuItems->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        {{-- Add --}}
        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form"  method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" name="title" id="title" required>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Caption</label>
                                <div class="col-sm-9">
                                    <textarea id="caption" class="form-control" placeholder="Caption"  name="caption" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Image</label>
                                <div class="col-sm-9">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required onchange="previewImage(event)">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small class="text-danger">Maximum file size: 2MB. Allowed file types: JPEG, PNG, JPG, GIF.</small>
                                    <img id="image-preview" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Create Slider</button>
                            </div>
                        </div>
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
        </div>

       

          @endsection
@section('script')

@endsection
