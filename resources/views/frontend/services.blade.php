@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_3.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>Our Services</span></h1>
                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section sec-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">

                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-compass"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Interior Design</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-plan"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Landscape Design</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-color-palette"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Architecture Design</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-wall"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Floor Plan</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- include members here  --}}
@include('frontend.components.members')


{{-- include members here  --}}
@include('frontend.components.news')


@endsection
