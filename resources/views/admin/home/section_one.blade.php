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
                                <li class="breadcrumb-item active">Section One</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Success Message -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert" style="display: none;">
                                <i class="mdi mdi-check-all me-2"></i>
                                <span id="success-message"></span>
                            </div>

                            <!-- Danger Message -->
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="danger-alert" style="display: none;">
                                <i class="mdi mdi-check-all me-2"></i>
                                <span id="danger-message"></span>
                            </div>

                            <form id="updateForm" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" value="{{ $data->title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Video</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="video_url" id="video_url">
                                        <input type="hidden" name="old_video_url" value="{{ $data->video_url }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <video id="show_video" class="card-img-top img-fluid" style="object-fit:cover; width: 370px !important; height:160px !important;" controls muted autoplay>
                                        <source src="{{ asset('backend/assets/images/homePage/' . $data->video_url) }}" type="video/mp4">
                                    </video>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Banner Title</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="banner_title" cols="30" rows="8">{{ $data->banner_title }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Banner Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="banner" id="banner">
                                        <input type="hidden" name="old_banner" value="{{ $data->banner }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <img id="show_banner" class="card-img-top img-fluid" style="object-fit:cover; width: 370px !important;height:160px !important;" src="{{ asset('backend/assets/images/homePage/' . $data->banner) }}" alt="ad_image">
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
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

        $(document).ready(function() {
            // Handle Form Submission
            $('#updateForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('homepages.section_one_update') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            // Set success message text
                            $('#success-message').text(response.message);

                            // Show the alert and fade out after 2 seconds
                            $('#success-alert').hide().fadeIn().delay(5000).fadeOut();

                            $('html, body').animate({ scrollTop: 0 }, 'slow');
                        } else {
                            // Handle error response
                            $('#danger-message').text(response.message);
                            $('#danger-alert').hide().fadeIn().delay(5000).fadeOut();
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = "An error occurred. Please try again.";

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }

                        $('#danger-message').text(errorMessage);
                        $('#danger-alert').hide().fadeIn().delay(5000).fadeOut();
                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                });
            });

            // Preview Banner Image Before Upload
            $("#banner").change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $("#show_banner").attr("src", e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });

            // Preview Video Before Upload
            $("#video_url").change(function() {
                let file = this.files[0];
                let url = URL.createObjectURL(file);
                $("#show_video source").attr("src", url);
                $("#show_video")[0].load();
            });
        });

    </script>

@endsection
