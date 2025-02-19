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
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title mb-0"> Edit & Update Navigation Menu</h4>
                        <a href="{{ route('admin.menu.index')}}" class="btn btn-primary"> Menu List</a>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row gy-4">
                            
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6"></div>
                            <div class="col-xxl-6 col-md-6">
                                <form method="POST"  action="{{ route('admin.menu.update', $menuItem->id) }}">
                                    @csrf
                                    @method('PUT')
                                
                                        <div class="mb-3">
                                            <label for="labelInput" class="form-label">Menu Item Name</label>
                                            <input type="text" class="form-control" placeholder="Menu Item Name" value="{{ $menuItem->name }}" name="name" id="name" required>
                                        </div>
                                        <div class="mb-3 row align-items-center" >
                                            <label class="col-sm-3 col-form-label form-label">Dropdown Items</label>
                                            
                                            <div class="col-sm-9" id="dropdown-items">
                                                <button type="button" class="btn btn-danger" onclick="addDropdownItem()">Add Dropdown Item</button>
                                                @foreach ($menuItem->dropdownItems as $dropdownItem)
                                                    <div class="input-group mb-2 mt-3">
                                                        <input type="text" class="form-control" name="dropdown_items[]" value="{{ $dropdownItem->name }}">
                                                        <button type="button" class="btn btn-danger" onclick="removeDropdownItem(this)">Remove</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update Menu Item</button>
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
