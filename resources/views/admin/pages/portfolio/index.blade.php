@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') Portfolio @endslot
@endcomponent

        <div class="row">
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
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalPorfolioCategory"><i class="ri-add-line align-bottom me-1"></i> Add Porfolio Category</button>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <div class="row">
                                    <div class="col-9">
                                        <table class="table align-middle table-nowrap" id="menuTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sort" data-sort="menu_name">#</th>
                                                    <th  class="sort" data-sort="menu_name">Title</th>
                                                    <th  class="sort" data-sort="menu_name">Category</th>
                                                    <th  class="sort" data-sort="menu_name">Caption</th>
                                                    <th  class="sort" data-sort="menu_name">Image</th>
                                                    {{-- <th  class="sort" data-sort="menu_name">DATE   </th> --}}
                                                    <th  class="sort" data-sort="menu_name">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @forelse ($portfolio as $index => $portfolio)
                                                <tr>
                                                    <td><strong>{{  $index + 1 }}</strong></td>
                                                    <td class="menu_name">{{ $portfolio->title }}</td>
                                                    <td class="menu_name">{{ $portfolio->portfolioCategory->name ?? 'No Category' }}</td> 
                                                    <td class="menu_name">{!! Str::limit($portfolio->content, 30) !!}</td> 
                                                    <td>
                                                        <img src="{{ asset($portfolio->image) }}" class="img-thumbnail" height="30" alt="{{ $portfolio->title }}"  style="max-width: 100px;"/>
                                                    </td>
                                                    {{-- <td class="menu_name">{{ \Carbon\Carbon::parse($portfolio->created_at)->format('d M Y') }}</td>  --}}

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="{{ route('admin.portfolio.edit',  encrypt($portfolio->id) ) }}" class="btn btn-sm btn-success edit-item-btn" >Edit</a>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $portfolio->id }}" data-id="{{ $portfolio->id }}">Remove</button>
                                                            
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
                                                {{-- Delete --}}
                                                <div class="modal fade zoomIn" id="deleteRecordModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mt-2 text-center">
                                                                    <i class="bi bi-trash3 display-5 text-danger"></i>
                                                                    <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                                                        <h4>Are you Sure ?</h4>
                                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Portfolio?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <form method="POST" action="{{ route('admin.portfolio.destroy', encrypt($portfolio->id) ) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn w-sm btn-danger">Yes, Delete It!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No Portfolio Items Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-3">
                                        <table class="table align-middle table-nowrap" id="menuTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sort" data-sort="menu_name">#</th>
                                                    <th  class="sort" data-sort="menu_name">Name</th>
                                                    {{-- <th  class="sort" data-sort="menu_name">DATE   </th> --}}
                                                    <th  class="sort" data-sort="menu_name">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @forelse ($portfolioCategory as $index => $portfolio)
                                                <tr>
                                                    <td><strong>{{  $index + 1 }}</strong></td>
                                                    <td class="menu_name">{{ $portfolio->name }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            {{-- <div class="edit">
                                                                <a href="{{ route('admin.portfolio.edit',  encrypt($portfolio->id) ) }}" class="btn btn-sm btn-success edit-item-btn" >Edit</a>
                                                            </div> --}}
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModalCategory{{ $portfolio->id }}" data-id="{{ $portfolio->id }}">Remove</button>
                                                            
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <td class="menu_name">{{ \Carbon\Carbon::parse($portfolio->created_at)->format('d M Y') }}</td>  --}}

                                                </tr>
                                            
                                                {{-- Delete --}}
                                                <div class="modal fade zoomIn" id="deleteRecordModalCategory{{ $portfolio->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mt-2 text-center">
                                                                    <i class="bi bi-trash3 display-5 text-danger"></i>
                                                                    <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                                                        <h4>Are you Sure ?</h4>
                                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Portfolio?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <form method="POST" action="{{ route('admin.portfolio.category.destroy', encrypt($portfolio->id) ) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn w-sm btn-danger">Yes, Delete It!</button>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                                @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No Portfolio Items Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
        
        <div class="modal fade" id="showModalPorfolioCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add Portfolio Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form"  method="POST" action="{{ route('admin.portfolio.category.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required >
                            </div>
                           
                        </div> 
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Add</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                    <script>
                        // Initialize CKEditor
                        CKEDITOR.replace('ckeditor'); 

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

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form"  method="POST" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Porfolio Category</label>
                                <select class="form-select" id="category-dropdown" name="category_id">
                                    <option value="" disabled selected>Select category</option>
                                    @foreach ($portfolioCategory as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Content</label>
                                <textarea name="Content" id="ckeditor" class="ckeditor-classic" placeholder="" ></textarea>
                            </div>
                            <div class="mb-3 row align-items-center"> 
                                <label class="col-sm-3 col-form-label form-label">Image</label>
                                <div class="col-sm-9">
                                    <input id="image" type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" required onchange="previewImage(event)">

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
                                <button type="submit" class="btn btn-success" id="add-btn">Add Portfolio</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                    <script>
                        // Initialize CKEditor
                        CKEDITOR.replace('ckeditor'); 

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
<script src="{{ URL::asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('backend/js/pages/form-editor.init.js') }}"></script>
@endsection
