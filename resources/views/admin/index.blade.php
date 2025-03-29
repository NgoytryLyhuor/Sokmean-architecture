@extends('admin.admin_master')
@section('admin')
@php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
@endphp


<div class="page-content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Norkor Architecture</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="text-center text-capitalize">
                    Welcome to Admin dashboard
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Dashboard -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('dashboard') }}">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Dashboard</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-dashboard-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Home Page -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#homePageModal">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Home Page</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-home-4-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Team Members -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('team-pages.index') }}">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Team Members</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-team-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('testimonial-pages.index') }}">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Testimonial</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-file-user-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Projects -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#projectsModal">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Projects</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-book-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#servicesModal">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Services</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-file-list-3-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- About Page -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('about-pages.index') }}">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">About Page</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-search-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Contact Us Page -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('contact-us-pages.index') }}">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Contact Us Page</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-phone-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Go to website -->
            <div class="col-xl-2 col-md-4">
                <div class="card hover-animate">
                    <a href="{{ route('index') }}" target="_blank">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <p class="text-truncate font-size-14 mb-0 text-dark">Go to website</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="text-dark ri-earth-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home Page Modal -->
<div class="modal fade" id="homePageModal" tabindex="-1" aria-labelledby="homePageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="homePageModalLabel">Home Page Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="{{ route('homepages.section_one') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Section One</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                    <a href="{{ route('homepages.section_two') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Section Two</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                    <a href="{{ route('homepages.section_three') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Section Three</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                    <a href="{{ route('homepages.section_four') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Section Four</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projects Modal -->
<div class="modal fade" id="projectsModal" tabindex="-1" aria-labelledby="projectsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectsModalLabel">Projects Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="{{ route('project-pages.index') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">All Projects</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                    <a href="{{ route('project-pages.insert') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Insert New Project</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Modal -->
<div class="modal fade" id="servicesModal" tabindex="-1" aria-labelledby="servicesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicesModalLabel">Services Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="{{ route('service-pages.index') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">All Services</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                    <a href="{{ route('service-pages.insert') }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Insert New Service</h5>
                            <i class="text-dark ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Make sure to include Bootstrap JS for modals to work properly -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modals = [].slice.call(document.querySelectorAll('.modal'));
        modals.forEach(function(modal) {
            modal.addEventListener('shown.bs.modal', function() {
                // Ensure modal is centered when shown
                this.querySelector('.modal-dialog').classList.add('modal-dialog-centered');
            });
        });
    });
</script>
@endsection
