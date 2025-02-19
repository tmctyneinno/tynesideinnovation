@extends('admin.adminLayout.master')
@section('title') @lang('translation.list-js') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Admin @endslot
@slot('title') Menu @endslot
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
                                        <button class="btn btn-subtle-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
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
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="menu_name">Menu Item</th>
                                            <th class="sort" data-sort="dropdown_items">Dropdown Items</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @forelse ($menuItems as $menuItem)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="{{ $menuItem->id }}">
                                                </div>
                                            </th>
                                            <td class="menu_name">{{ $menuItem->name }}</td>
                                            <td class="dropdown_items">
                                                <ul>
                                                    @foreach($menuItem->dropdownItems as $dropdownItem)
                                                    <li>{{ $dropdownItem->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a href="{{ route('admin.menu.edit',  encrypt($menuItem->id) ) }}" class="btn btn-sm btn-success edit-item-btn" >Edit</a>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $menuItem->id }}" data-id="{{ $menuItem->id }}">Remove</button>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                        {{-- Delete --}}
                                        <div class="modal fade zoomIn" id="deleteRecordModal{{ $menuItem->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <form method="POST" action="{{ route('admin.menu.destroy', encrypt($menuItem->id) ) }}">
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form"  method="POST" action="{{ route('admin.menu.store') }}">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Menu Item Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Menu Item Name" required >
                            </div>
                            <div class="mb-3 row align-items-center" >
                                <label class="col-sm-6 col-form-label form-label">Dropdown Items</label>
                              
                                <div class="col-sm-6" id="dropdown-items">
                                    <button type="button" class="btn btn-danger" onclick="addDropdownItem()">Add Dropdown Item</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Add Menu</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                    <script>
                        window.setTimeout(function() {
                            var alert = document.getElementById('success-alert');
                            if (alert) {
                                alert.remove();
                            }
                        }, 3000);
                        function addDropdownItem() {
                            const dropdownItemsDiv = document.getElementById('dropdown-items');

                            // Create a container div for the input and remove button
                            const itemDiv = document.createElement('div');
                            itemDiv.className = 'input-group mb-2 mt-2';

                            // Create the input element
                            const input = document.createElement('input');
                            input.type = 'text';
                            input.name = 'dropdown_items[]';
                            input.className = 'form-control';
                            input.required = true;

                            // Create the remove button
                            const buttonDiv = document.createElement('div');
                            buttonDiv.className = 'input-group-append';
                            const removeButton = document.createElement('button');
                            removeButton.type = 'button';
                            removeButton.className = 'btn btn-danger';
                            removeButton.innerHTML = 'Remove';
                            removeButton.onclick = function() {
                                dropdownItemsDiv.removeChild(itemDiv);
                            };

                            // Append the input and button to the container div
                            buttonDiv.appendChild(removeButton);
                            itemDiv.appendChild(input);
                            itemDiv.appendChild(buttonDiv);
                            dropdownItemsDiv.appendChild(itemDiv);
                        }
                   </script>
                </div>
            </div>
        </div>

       

          @endsection
@section('script')

@endsection
