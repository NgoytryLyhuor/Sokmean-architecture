@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row w-100 d-flex justify-content-center p-0">
            <div class="col-lg-6">
                <div class="card overflow-hidden">
                    <img class="card-img-top img-fluid" style="object-fit:cover; width: 100% !important;height:340px !important;" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): url('no_image.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Profile Details</h4>
                        <p class="card-text mt-3">Name : {{ $adminData->name }}</p><hr>
                        <p class="card-text">Email : {{ $adminData->email }}</p>
                        <a href="{{ route('edit.profile') }}" class="btn btn-primary waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection