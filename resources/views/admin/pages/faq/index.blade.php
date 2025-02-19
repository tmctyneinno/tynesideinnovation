@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') FAQs @endslot
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
                                            <th class="sort" data-sort="menu_name">#</th>
                                            <th class="sort" data-sort="menu_name">Question</th>
                                            <th class="sort" data-sort="dropdown_items">Answer</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @forelse ($faqs as $index => $faq)
                                        <tr>
                                            <td><strong>{{  $index + 1 }}</strong></td>
                                            <td class="menu_name">{!! Str::limit($faq->question, 30) !!}</td>
                                            <td class="menu_name">{!! Str::limit($faq->answer, 30) !!}</td> 
                                            
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a href="{{ route('admin.faq.edit',  encrypt($faq->id) ) }}" class="btn btn-sm btn-success edit-item-btn" >Edit</a>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $faq->id }}" data-id="{{ $faq->id }}">Remove</button>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                        {{-- Delete --}}
                                        <div class="modal fade zoomIn" id="deleteRecordModal{{ $faq->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Menu?</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                            <form method="POST" action="{{ route('admin.faq.destroy', encrypt($faq->id) ) }}">
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
                                            <td colspan="4" class="text-center">No Menu Items Found</td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Add FAQs</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form"  method="POST" action="{{ route('admin.faq.store') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Question</label>
                                <input type="text" id="name" name="question" class="form-control" placeholder="Question" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Answer</label>
                                <textarea name="answer" id="ckeditor" class="ckeditor-classic" placeholder="Answer" ></textarea>
                            </div>
                        </div> 
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Add FAQ</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                       
                    </form>
                
                </div>
            </div>
        </div>

       

          @endsection
@section('script')
<script src="{{ URL::asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('backend/js/pages/form-editor.init.js') }}"></script>
@endsection
