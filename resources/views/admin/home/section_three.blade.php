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
                                <li class="breadcrumb-item active">Section Three</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Success Alert -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert" style="display: none;">
                                <i class="mdi mdi-check-all me-2"></i>
                                <span id="flash-message"></span>
                            </div>

                            <!-- Form with ID for AJAX handling -->
                            <form id="sectionThreeForm" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" value="{{ $data->title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="banner_title" cols="30" rows="4">{{ $data->banner_title }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="banner" id="banner">
                                        <input class="form-control" type="hidden" name="old_banner" value="{{ $data->banner }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label"></label>
                                    <img id="show_banner" class="card-img-top img-fluid" style="object-fit:cover; width: 370px !important;height:160px !important;" src="{{ asset('backend/assets/images/homePage/' . $data->banner) }}" alt="{{ $data->banner }}">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light api-width">
                                            Update <i class="ri-arrow-right-line align-middle ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
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
        });


        $(document).ready(function () {
            $('#sectionThreeForm').on('submit', function(e) {
                e.preventDefault(); // Prevent normal form submission

                var formData = new FormData(this); // Collect form data

                $.ajax({
                    url: "{{ route('homepages.section_three_update') }}", // Your update route
                    type: 'POST',
                    data: formData,
                    contentType: false, // Ensure FormData is sent correctly
                    processData: false, // Prevent jQuery from processing the data
                    success: function(response) {
                        if (response.success) {
                            // Show success alert dynamically
                            $('#success-alert').removeClass('fade').show();
                            $('#flash-message').text(response.message);
                            $('#success-alert').addClass('fade');

                            // Update banner preview dynamically if a new image is uploaded
                            if (response.new_banner) {
                                $('#show_banner').attr('src', response.new_banner);
                            }

                            // Update input fields dynamically
                            $('input[name="title"]').val(response.title);
                            $('textarea[name="banner_title"]').val(response.banner_title);

                            // Hide success alert after 5 seconds
                            setTimeout(function() {
                                $('#success-alert').fadeOut();
                            }, 2000);

                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });


    </script>

@endsection
