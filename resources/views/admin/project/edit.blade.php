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
                        <h4 class="mb-sm-0">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Edit Project</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

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

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h4>Cover Path</h4>
                            </center>

                            <div class="d-flex justify-content-end mb-3 mt-3">
                                <a href="{{ route('project-pages.index') }}" class="api-width">
                                    <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width">
                                        Back To Project List <i class="ri-rewind-mini-line align-middle ms-2"></i>
                                    </button>
                                </a>
                            </div>

                            <form action="{{ route('project-pages.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title_1" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="title" id="title_1" value="{{ $project->title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description_1" class="col-sm-12 col-form-label">Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="description" id="description_1" cols="30" rows="2">{{ $project->description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image_1" class="col-sm-12 col-form-label">Cover Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="cover" id="image_1">
                                        <input class="form-control" type="hidden" name="old_cover" value="{{ $project->cover }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label"></label>
                                    <img id="show_image_1" class="card-img-top img-fluid my-no-shadow"
                                        style="object-fit:cover; width: 370px !important;height:160px !important;"
                                        src="{{ asset('backend/assets/images/project/' . $project->cover) }}">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light api-width">
                                            Update <i class="ri-arrow-right-line align-middle ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <center class="mb-3">
                                <h4>Description Path</h4>
                            </center>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    @php($i = 1)
                                    <tr>
                                        <th>N<sup>0</sup></th>
                                        <th>Title</th>
                                        <th class="api-none">Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projectPath as $data)
                                        <tr class="odd">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td class="api-td api-none">{{ $data->description }}</td>
                                            <td>
                                                <img width="85px" class="my-no-shadow"
                                                    src="{{ asset('backend/assets/images/project/' . $data->cover) }}"
                                                    alt="">
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

                            <div class="d-flex justify-content-start mb-3 mt-3">
                                <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" id="toggle_project_path">
                                    Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-12" id="project_path">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h4>Insert Project Path</h4>
                            </center>
                            <form action="{{ route('project-pages.insertProjectPath') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="project_id" value="{{ $project->id }}">

                                <div class="row mb-3">
                                    <label for="title_2" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="title" id="title_2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description_2" class="col-sm-12 col-form-label">Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="description" id="description_2" cols="30" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image_2" class="col-sm-12 col-form-label">Cover Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="cover" id="image_2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label"></label>
                                    <img id="show_image_2" class="card-img-top img-fluid my-no-shadow"
                                        style="object-fit:cover; width: 370px !important;height:160px !important;"
                                        src="{{ asset('no_image.jpg') }}">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light api-width">
                                            Insert <i class="ri-arrow-right-line align-middle ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Project Path</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="update_project_path" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="edit_id">

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="edit_title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="edit_title">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="edit_description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" id="edit_description" cols="30" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="edit_cover" class="col-sm-2 col-form-label">Cover</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="cover" id="edit_cover">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label"></label>
                                    <img id="edit_cover_show" class="card-img-top img-fluid my-no-shadow"
                                        style="object-fit:cover; width: 370px !important; height:160px !important;"
                                        src="{{ asset('no_image.jpg') }}">
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

    <script>
        $(document).ready(function(){
            $("#image_1").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#show_image_1").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#image_2").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#show_image_2").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#edit_cover").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#edit_cover_show").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#project_path").hide()
            $("#toggle_project_path").click(function() {
                var isVisible = $("#project_path").is(":visible");
                $("#project_path").slideToggle(150);

                var buttonText = $(this).text().trim();
                if (isVisible) {
                    $(this).html('Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>');
                } else {
                    $(this).html('Hide Insert Area <i class="ri-eye-off-line align-middle ms-2"></i>');

                    $('html, body').animate({
                        scrollTop: $("#project_path").offset().top - 180
                    }, 150);
                }
            });


            $('#update_project_path').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('project-pages.updateProjectPath') }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            alert('Update failed: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        alert('Error occurred: ' + errorMessage);
                    }
                });
            });

            $('#deleteBtn').on('click', function () {
                var id = $(this).data('id'); // Get the ID of the item to delete

                // AJAX request to delete the item
                $.ajax({
                    url: "{{ route('project-pages.deleteProjectPath') }}", // Your route for deletion
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}", // CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
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



        });


        function loadDeleteData(id) {
            // Set the ID of the item to be deleted
            $('#deleteBtn').data('id', id); // Store the ID in the button for easy access
        }


        function loadEditData(id) {
            $.ajax({
                url: "{{ route('project-pages.editProjectPath',".id.") }}",
                type: "GET",
                data: { id: id },
                success: function (data) {

                    $('#edit_id').val(data.id);
                    $('#edit_title').val(data.title);
                    $('#edit_description').val(data.description);
                    if (data.cover) {
                        $('#edit_cover_show').attr('src', '/backend/assets/images/project/' + data.cover);
                    } else {
                        $('#edit_cover_show').attr('src', ' ');
                    }
                    $('#editModal').modal('show');
                }
            });
        }

    </script>

@endsection
