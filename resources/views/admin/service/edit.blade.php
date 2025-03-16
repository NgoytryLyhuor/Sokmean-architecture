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
                        <h4 class="mb-sm-0">Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
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

                {{-- Cover Path --}}
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h4>Cover Path</h4>
                            </center>

                            <div class="d-flex justify-content-end mb-3 mt-3">
                                <a href="{{ route('service-pages.index') }}" class="api-width">
                                    <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width">
                                        Back To Project List <i class="ri-rewind-mini-line align-middle ms-2"></i>
                                    </button>
                                </a>
                            </div>

                            <form action="{{ route('service-pages.updateCover',$service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="main_title" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="main_title" id="main_title" value="{{ $service->main_title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="banner_description" class="col-sm-12 col-form-label">Short Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="banner_description" id="banner_description" cols="30" rows="2">{{ $service->banner_description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="banner" class="col-sm-12 col-form-label">Cover Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="banner" id="banner">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label"></label>
                                    <img id="preview_banner" class="card-img-top img-fluid my-no-shadow"
                                        style="object-fit:cover; width: 370px !important;height:160px !important;"
                                        src="{{ asset('backend/assets/images/service/' . $service->banner) }}">
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

                {{-- Services Details --}}
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <center class="mb-3">
                                <h4>Services Details</h4>
                            </center>

                            <form action="{{ route('service-pages.updateCover',$service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="title" id="title" value="{{ $service->title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-sm-12 col-form-label">Short Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ $service->description }}</textarea>
                                    </div>
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

                {{-- Services Include --}}
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <center class="mb-3">
                                <h4>Services Include</h4>
                            </center>

                            <table class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    @php($i = 1)
                                    <tr>
                                        <th>N<sup>0</sup></th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($serviceInclude->isNotEmpty())
                                        @foreach($serviceInclude as $data)
                                            <tr class="odd">
                                                <td>{{ $i++ }}</td>
                                                <td class="my-td-normal">{{ $data->title }}</td>
                                                <td style="width: 130px">
                                                    <button type="button" class="btn btn-info waves-effect waves-light p-1 px-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModalServiceInclude"
                                                            onclick="serviceIncludeEdit({{ $data->id }})">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light p-1 px-2"
                                                        data-bs-toggle="modal" data-bs-target="#serviceIncludeDelete"
                                                        onclick="serviceIncludeDelete({{ $data->id }})">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="text-center">No data available in table</td>
                                        </tr>
                                    @endif
                                </tbody>

                            </table>

                            <div class="d-flex justify-content-start mb-3 mt-3">
                                <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" id="toggle_service_details">
                                    Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>
                                </button>
                            </div>


                            <div class="container-fluid p-0" id="service_details">
                                <center>
                                    <h4>Insert Services Include</h4>
                                </center>
                                <form action="{{ route('service-pages.insertServiceDetails') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-12 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="title" id="title">
                                        </div>
                                    </div>

                                    <input type="hidden" name="type" value="service_include">

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

                {{-- Design Process --}}
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <center class="mb-3">
                                <h4>Design Process</h4>
                            </center>

                            <table class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>N<sup>0</sup></th>
                                        <th>Title</th>
                                        <th class="api-none">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($process->isNotEmpty())
                                        @foreach($process as $data)
                                            <tr class="odd">
                                                <td>{{ $data->number }}</td>
                                                <td class="my-td-normal">{{ $data->title }}</td>
                                                <td class="api-none">{{ $data->description }}</td>
                                                <td style="width: 130px">
                                                    <button type="button" class="btn btn-info waves-effect waves-light p-1 px-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModalProcess"
                                                            onclick="processEdit({{ $data->id }})">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light p-1 px-2"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModalProcess"
                                                        onclick="processDelete({{ $data->id }})">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center">No data available in table</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-start mb-3 mt-3">
                                <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" id="toggle_design_process">
                                    Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>
                                </button>
                            </div>


                            <div class="container-fluid p-0" id="design_process">
                                <center>
                                    <h4>Insert Design Process</h4>
                                </center>
                                <form action="{{ route('service-pages.insertProcess') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <input type="hidden" name="type" value="process">

                                    <div class="row mb-3">
                                        <label for="process_title" class="col-sm-12 col-form-label">Process Number</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="number" name="number" id="process_title">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="process_title" class="col-sm-12 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="title" id="process_title">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="process_description" class="col-sm-12 col-form-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="description" id="process_description" cols="30" rows="2"></textarea>
                                        </div>
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

                {{-- Sample Project --}}
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <center class="mb-3">
                                <h4>Sample Project</h4>
                            </center>

                            <table class="table table-bordered dt-responsive nowrap" style="width: 100%;">
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
                                    @if($sampleProject->isNotEmpty())
                                        @foreach($sampleProject as $data)
                                            <tr class="odd">
                                                <td>{{ $i++ }}</td>
                                                <td class="my-td-normal">{{ $data->title }}</td>
                                                <td class="api-none">{{ $data->description }}</td>
                                                <td>
                                                    <img width="85px" height="85px" class="my-no-shadow object-cover" src="{{ asset('backend/assets/images/service/' . $data->image) }}" alt="">
                                                </td>
                                                <td style="width: 130px">
                                                    <button type="button" class="btn btn-info waves-effect waves-light p-1 px-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModalSampleProject"
                                                        onclick="sampleProjectEdit({{ $data->id }})">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light p-1 px-2"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModalSampleProject"
                                                        onclick="sampleProjectDelete({{ $data->id }})">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">No data available in table</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-start mb-3 mt-3">
                                <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" id="toggle_sample_project">
                                    Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>
                                </button>
                            </div>


                            <div class="container-fluid p-0" id="sample_project">
                                <center>
                                    <h4>Insert Sample Project</h4>
                                </center>
                                <form action="{{ route('service-pages.insertSampleProject') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                                    <div class="row mb-3">
                                        <label for="sample_project_title" class="col-sm-12 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="title" id="sample_project_title">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="sample_project_description" class="col-sm-12 col-form-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="description" id="sample_project_description" cols="30" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="sample_project_image" class="col-sm-12 col-form-label">Image</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="file" name="image" id="sample_project_image">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-12 col-form-label"></label>
                                        <img id="preview_sample_project_image" class="card-img-top img-fluid my-no-shadow"
                                            style="object-fit:cover; width: 370px !important;height:160px !important;"
                                            src="{{ asset('no_image.jpg') }}">
                                    </div>

                                    <input type="hidden" name="type" value="sample_project">

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


            <!-- Service Include Edit Modal -->
            <div class="modal fade" id="editModalServiceInclude" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editModalServiceIncludeLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalServiceIncludeLabel">Edit Services Include</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="updateServiceInclude" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="service_details_edit_id">

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="service_details_edit_title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="service_details_edit_title">
                                    </div>
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
            <!--  Service Include Delete Modal -->
            <div id="serviceIncludeDelete" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="service_include_deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Process Edit Modal -->
            <div class="modal fade" id="editModalProcess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editModalProcessLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalProcessLabel">Edit Design Process</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="updateProcess" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="process_edit_id">

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="process_edit_number" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="number" id="process_edit_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="process_edit_title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="process_edit_title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="process_edit_description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="description" id="process_edit_description">
                                    </div>
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
            <!--  Process Delete Modal -->
            <div id="deleteModalProcess" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="process_deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sample Project Edit Modal -->
            <div class="modal fade" id="editModalSampleProject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editModalSampleProjectLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalSampleProjectLabel">Edit Sample Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="updateSampleProject" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="sample_project_edit_id">

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="sample_project_edit_title" class="col-sm-12 col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="title" id="sample_project_edit_title">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="sample_project_edit_description" class="col-sm-12 col-form-label">Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="description" id="sample_project_edit_description" cols="30" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="sample_project_edit_image" class="col-sm-12 col-form-label">Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="image" id="sample_project_edit_image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label"></label>
                                    <img id="preview_sample_project_edit_image" class="card-img-top img-fluid my-no-shadow"
                                        style="object-fit:cover; width: 370px !important;height:160px !important;"
                                        src="{{ asset('no_image.jpg') }}">
                                </div>

                                <input type="hidden" name="type" value="sample_project">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  Sample Project Delete Modal -->
            <div id="deleteModalSampleProject" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="sample_project_deleteBtn">Delete</button>
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
                    $("#preview_banner").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#sample_project_image").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#preview_sample_project_image").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#sample_project_edit_image").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#preview_sample_project_edit_image").attr('src',e.target.result);
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

            $("#service_details").hide()
            $("#toggle_service_details").click(function() {
                var isVisible = $("#service_details").is(":visible");
                $("#service_details").slideToggle(150);

                var buttonText = $(this).text().trim();
                if (isVisible) {
                    $(this).html('Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>');
                } else {
                    $(this).html('Hide Insert Area <i class="ri-eye-off-line align-middle ms-2"></i>');

                    $('html, body').animate({
                        scrollTop: $("#service_details").offset().top - 125
                    }, 150);
                }
            });

            $("#design_process").hide()
            $("#toggle_design_process").click(function() {
                var isVisible = $("#design_process").is(":visible");
                $("#design_process").slideToggle(150);

                var buttonText = $(this).text().trim();
                if (isVisible) {
                    $(this).html('Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>');
                } else {
                    $(this).html('Hide Insert Area <i class="ri-eye-off-line align-middle ms-2"></i>');

                    $('html, body').animate({
                        scrollTop: $("#design_process").offset().top - 125
                    }, 150);
                }
            });

            $("#sample_project").hide()
            $("#toggle_sample_project").click(function() {
                var isVisible = $("#sample_project").is(":visible");
                $("#sample_project").slideToggle(150);

                var buttonText = $(this).text().trim();
                if (isVisible) {
                    $(this).html('Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>');
                } else {
                    $(this).html('Hide Insert Area <i class="ri-eye-off-line align-middle ms-2"></i>');

                    $('html, body').animate({
                        scrollTop: $("#sample_project").offset().top - 125
                    }, 150);
                }
            });


            $('#updateServiceInclude').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('service-pages.updateServiceDetails') }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
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
            $('#service_include_deleteBtn').on('click', function () {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('service-pages.deleteServiceDetails') }}",
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
                            location.reload();
                        } else {
                            alert('Failed to delete. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred while deleting. Please try again.');
                    }
                });
            });


            $('#updateProcess').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('service-pages.updateProcess') }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
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
            $('#process_deleteBtn').on('click', function () {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('service-pages.deleteProcess') }}",
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
                            location.reload();
                        } else {
                            alert('Failed to delete. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred while deleting. Please try again.');
                    }
                });
            });


            $('#updateSampleProject').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('service-pages.updateSampleProject') }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
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
            $('#sample_project_deleteBtn').on('click', function () {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('service-pages.deleteSampleProject') }}",
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            sessionStorage.setItem('scrollToTop', 'true');
                            location.reload();
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

        $(document).ready(function() {
            if (sessionStorage.getItem('scrollToTop') === 'true') {
                window.scrollTo(0, 0);
                sessionStorage.removeItem('scrollToTop');
            }
        });

        function serviceIncludeDelete(id) {
            $('#service_include_deleteBtn').data('id', id);
        }
        function processDelete(id) {
            $('#process_deleteBtn').data('id', id);
        }
        function sampleProjectDelete(id) {
            $('#sample_project_deleteBtn').data('id', id);
        }


        function serviceIncludeEdit(id) {
            $.ajax({
                url: "{{ route('service-pages.editServiceDetails',".id.") }}",
                type: "GET",
                data: { id: id },
                success: function (data) {

                    $('#service_details_edit_id').val(data.id);
                    $('#service_details_edit_title').val(data.title);
                    $('#editModalServiceInclude').modal('show');
                }
            });
        }

        function processEdit(id) {
            $.ajax({
                url: "{{ route('service-pages.editProcess',".id.") }}",
                type: "GET",
                data: { id: id },
                success: function (data) {

                    $('#process_edit_id').val(data.id);
                    $('#process_edit_title').val(data.title);
                    $('#process_edit_description').val(data.description);
                    $('#process_edit_number').val(data.number);
                    $('#editModalProcess').modal('show');
                }
            });
        }

        function sampleProjectEdit(id) {
            $.ajax({
                url: "{{ route('service-pages.editSampleProject',".id.") }}",
                type: "GET",
                data: { id: id },
                success: function (data) {

                    $('#sample_project_edit_id').val(data.id);
                    $('#sample_project_edit_title').val(data.title);
                    $('#sample_project_edit_description').val(data.description);
                    if (data.image) {
                        $('#preview_sample_project_edit_image').attr('src', '/backend/assets/images/service/' + data.image);
                    } else {
                        $('#preview_sample_project_edit_image').attr('src', ' ');
                    }
                    $('#editModalSampleProject').modal('show');
                }
            });
        }

    </script>

@endsection
