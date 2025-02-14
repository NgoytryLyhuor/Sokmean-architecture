@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid ">
        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp
        <div style="overflow: hidden;width:1248px;height:538px" class="slide position-relative">
            <img class="w-100 h-100 position-absolute" style="object-fit: cover;" src="{{ asset('bg1.jpg') }}" alt="">
            <div style="background-color: #0000007a;" class="container-fluid d-flex align-items-center justify-content-center position-absolute p-0 h-100">
                <div class="box text-center">
                    <h1>Welcome to Admin Dashboard</h1>
                    <h1 class="text-warning">___ Admin ___</h1>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
