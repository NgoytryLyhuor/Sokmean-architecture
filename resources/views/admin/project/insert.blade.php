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
                                <li class="breadcrumb-item active">Insert New Project</li>
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

                            <form action="{{ route('project-pages.insertCover') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title_1" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="title" id="title_1">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description_1" class="col-sm-12 col-form-label">Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="description" id="description_1" cols="30" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image_1" class="col-sm-12 col-form-label">Cover Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="cover" id="image_1">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label"></label>
                                    <img id="show_image_1" class="card-img-top img-fluid"
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
        });
    </script>

@endsection
