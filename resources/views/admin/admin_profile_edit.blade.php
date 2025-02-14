@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-body">

                    <h4 class="card-title">Profile Edit Page</h4><br><br>

                    <form action="{{ route('store.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{ $editData->name }}" type="text" id="name" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" value="{{ $editData->email }}" id="email" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="profile_image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label"></label>
                            <img id="showImage" class="card-img-top img-fluid" style="object-fit:cover; width: 160px !important;height:160px !important;" src="{{ asset("upload/admin_images/".$editData->profile_image) }}" alt="Card image cap">
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-linght">Update Profile</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        $("#image").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#showImage").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection