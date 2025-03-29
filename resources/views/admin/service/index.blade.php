@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                                <li class="breadcrumb-item active">All Services</li>
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


                            <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('service-pages.insert') }}" class="api-width text-white">
                                    <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3 api-width" data-bs-toggle="modal" data-bs-target="#insertModal">
                                        Insert<i class=" ri-add-fill align-middle ms-2"></i>
                                    </button>
                                </a>
                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    @php($i = 1)
                                    <tr>
                                        <th>N<sup>0</sup></th>
                                        <th>Title</th>
                                        <th>Cover</th>
                                        <th class="api-none">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($service_data as $data)
                                        <tr class="odd" id="team-{{ $data->id }}">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->main_title }}</td>
                                            <td>
                                                <img class="my-no-shadow" style="object-fit: cover" width="85px" height="85px" src="{{ asset('backend/assets/images/service/' . $data->banner) }}" alt="">
                                            </td>
                                            <td class="api-td api-none">{!! $data->banner_description !!}</td>
                                            <td>
                                                <a href="{{ route('service-pages.edit',$data->id) }}">
                                                    <button type="button" class="btn btn-info waves-effect waves-light p-1 px-2">
                                                        Edit
                                                    </button>
                                                </a>
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

            $('#deleteBtn').on('click', function () {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('service-pages.delete') }}",
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
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

        function loadDeleteData(id) {
            $('#deleteBtn').data('id', id);
        }

    </script>

@endsection
