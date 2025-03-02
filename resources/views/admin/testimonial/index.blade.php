@extends('admin.admin_master')
@section('admin')
    @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);
        if ($id == null) {
            return redirect()->route('login');
        }
    @endphp
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Testimonial Page</h4>
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Position</th>
                                        <th class="api-none">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimonial as $data)
                                        <tr class="odd" id="team-{{ $data->id }}">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>
                                                <img width="85px" src="{{ asset('backend/assets/images/testimonial/' . $data->image) }}" alt="">
                                            </td>
                                            <td>{{ $data->position }}</td>
                                            <td class="api-td api-none">{{ $data->description }}</td>
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

                            <!-- Insert Modal -->
                            <div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="insertModalLabel">Insert New Record</h5>
                                            <button type="button" id="close_modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="teamForm" action="{{ route('testimonial-pages.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Position</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="position" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="image" id="banner" required>
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
                                            <button type="button" id="close_modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" id="edit_id"> <!-- Hidden ID field -->

                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="name" id="edit_name" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Position</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="position" id="edit_position" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" id="edit_description" rows="4"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="image" id="edit_image">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"></label>
                                                    <img id="show_banner_edit" class="card-img-top img-fluid my-no-shadow" style="object-fit:cover; width: 370px !important; height:160px !important;" src="{{ asset('no_image.jpg') }}">
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

            $("#edit_image").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#show_banner_edit").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $('#deleteBtn').on('click', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('testimonial-pages.delete', ['id' => ':id']) }}".replace(':id', id),
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.message) {
                            // Hide the modal if needed
                            $('.bs-example-modal-center').modal('hide');

                            // Reload the page to display the session success message
                            location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while deleting the record.');
                    }
                });
            });


        });

        function loadEditData(id) {
            $.ajax({
                url: "{{ route('testimonial-pages.edit') }}", // Route to fetch data
                type: "GET",
                data: { id: id }, // Pass the ID to the backend
                success: function(response) {
                    console.log(response);

                    if (response.status === 'success') {
                        // Populate the form fields
                        $('#edit_id').val(response.data.id);
                        $('#edit_name').val(response.data.name);
                        $('#edit_position').val(response.data.position);
                        $('#edit_description').val(response.data.description);

                        // Set the image preview
                        if (response.data.image) {
                            $('#show_banner_edit').attr('src', '/backend/assets/images/testimonial/' + response.data.image);
                        } else {
                            $('#show_banner_edit').attr('src', '{{ asset('no_image.jpg') }}');
                        }

                        // Update the form action URL with the correct ID
                        $('#editForm').attr('action', "{{ route('testimonial-pages.update', ['id' => ':id']) }}".replace(':id', id));
                    } else {
                        alert('Failed to load data.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while loading data.');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 5000); // Hide after 5 seconds
            }
        });

        function loadDeleteData(id) {
            // Set the ID of the item to be deleted
            $('#deleteBtn').data('id', id); // Store the ID in the button for easy access
        }



    </script>

@endsection
