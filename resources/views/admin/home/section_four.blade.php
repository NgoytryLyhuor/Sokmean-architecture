@extends('admin.admin_master')
@section('admin')
    @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);
    @endphp
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Home Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home Page</a></li>
                                <li class="breadcrumb-item active">Section Four</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="danger-alert">
                                        <i class="mdi mdi-block-helper me-2"></i>
                                        {{ $error }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif



                            <!-- Success & Error Messages -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert" style="display: none;">
                                <i class="mdi mdi-check-all me-2"></i>
                                <span id="success-message"></span>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="danger-alert" style="display: none;">
                                <i class="mdi mdi-alert-outline me-2"></i>
                                <span id="danger-message"></span>
                            </div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#description" role="tab" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="ri-book-open-fill"></i></span>
                                        <span class="d-none d-sm-block">Description <i class="ri-book-open-fill"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class=" ri-file-paper-2-line"></i></span>
                                        <span class="d-none d-sm-block">Drop down details <i class=" ri-file-paper-2-line"></i></span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane" id="description" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <form id="updateSectionFourForm" enctype="multipart/form-data">
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="title" value="{{ $data->title }}" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="banner_title" cols="30" rows="4" required>{{ $data->banner_title }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" id="updateSectionFourBtn" class="btn btn-primary waves-effect waves-light api-width">
                                                            Update <i class="ri-arrow-right-line align-middle ms-2"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="profile" role="tabpanel">

                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" data-bs-toggle="modal" data-bs-target="#insertModal">
                                            Insert<i class=" ri-add-fill align-middle ms-2"></i>
                                        </button>
                                    </div>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            @php($i = 1)
                                            <tr>
                                                <th>N<sup>0</sup></th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th class=" api-none">Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($drop_down_data as $data)
                                                <tr class="odd">
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>
                                                        <img class=" my-no-shadow" width="85px" src="{{ asset('backend/assets/images/homePage/' . $data->banner) }}" alt="">
                                                    </td>
                                                    <td class="api-td api-none">
                                                        {{ $data->banner_title }}
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info waves-effect waves-light p-1 px-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editModal"
                                                                onclick="loadEditData({{ $data->id }})">
                                                            Edit
                                                        </button>

                                                        <button type="button" class="btn btn-danger waves-effect waves-light p-1 px-2"
                                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"
                                                            onclick="loadDeleteData({{ $data->id }})">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <!-- Insert Modal -->
                            <div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="insertModalLabel">Insert New Record</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('homepages.section_four_drop_down_insert') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="title">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="banner_title" id="" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Banner</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="banner" id="banner">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="image" class="col-sm-2 col-form-label"></label>
                                                    <img id="show_banner" class="card-img-top img-fluid my-no-shadow" style="object-fit:cover; width: 370px !important;height:160px !important;" src="{{ asset('no_image.jpg') }}">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="editForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="edit_id">

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="title" id="edit_title">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="banner_title" id="edit_banner_title" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Banner</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="banner" id="edit_banner">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="image" class="col-sm-2 col-form-label"></label>
                                                    <img id="edit_banner_preview" class="card-img-top img-fluid my-no-shadow" style="object-fit:cover; width: 370px !important;height:160px !important;" src="{{ asset('no_image.jpg') }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are you sure?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" id="deleteBtn">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>

        $(document).ready(function(){
            $("#banner").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#show_banner").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#edit_banner").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#edit_banner_preview").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $('#editForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submit

                var formData = new FormData(this); // Create a FormData object for AJAX submission

                $.ajax({
                    url: "{{ route('homepages.section_four_drop_down_update') }}", // Your route for updating
                    type: 'POST',
                    data: formData,
                    contentType: false, // For file upload
                    processData: false, // For file upload
                    success: function(response) {
                        if (response.success) {
                            // Close the modal and show success message
                            $('#editModal').modal('hide');
                            location.reload();
                        }
                    },
                    error: function(xhr) {
                        // Handle any AJAX errors (e.g., 500 server error)
                        alert('An error occurred. Please try again.');
                    }
                });
            });

            $('#deleteBtn').on('click', function () {
                var id = $(this).data('id'); // Get the ID of the item to delete

                // AJAX request to delete the item
                $.ajax({
                    url: "{{ route('homepages.section_four_drop_down_delete') }}", // Your route for deletion
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}", // CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
                            // Close the modal
                            $('.bs-example-modal-center').modal('hide');

                            // Optionally, remove the item from the table or reload the page
                            location.reload(); // Refresh the page
                        } else {
                            alert('Failed to delete. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred while deleting. Please try again.');
                    }
                });
            });

            $('#updateSectionFourForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                let formData = new FormData(this);
                let submitBtn = $('#updateSectionFourBtn');

                submitBtn.prop('disabled', true).text('Updating...');

                $.ajax({
                    url: "{{ route('homepages.section_four_update') }}", // Make sure the route matches
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#success-message').text(response.message);
                            $('#success-alert').hide().fadeIn().delay(2000).fadeOut();
                        } else {
                            $('#danger-message').text(response.message);
                            $('#danger-alert').hide().fadeIn().delay(2000).fadeOut();
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = "An error occurred. Please try again.";
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        $('#danger-message').text(errorMessage);
                        $('#danger-alert').hide().fadeIn().delay(2000).fadeOut();
                    },
                    complete: function() {
                        submitBtn.prop('disabled', false).text('Update');
                    }
                });
            });
        });

        function loadEditData(id) {
            $.ajax({
                url: "{{ route('homepages.section_four_drop_down_edit') }}",
                type: "GET",
                data: { id: id },
                success: function (data) {
                    $('#edit_id').val(data.id);
                    $('#edit_title').val(data.title);
                    $('#edit_banner_title').val(data.banner_title);
                    if (data.banner) {
                        $('#edit_banner_preview').attr('src', '/backend/assets/images/homePage/' + data.banner);
                    } else {
                        $('#edit_banner_preview').attr('src', '');
                    }
                    $('#editModal').modal('show');
                }
            });
        }

        function loadDeleteData(id) {
            // Set the ID of the item to be deleted
            $('#deleteBtn').data('id', id); // Store the ID in the button for easy access
        }

    </script>

@endsection
