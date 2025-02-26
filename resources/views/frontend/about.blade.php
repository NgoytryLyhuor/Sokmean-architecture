@extends('frontend.admin_master')
@section('frontend')

@php
    $section_one = App\Models\HomePage::where('id',1)->first();
    $team = App\Models\Team::orderBy('id','desc')->get();
@endphp

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_3.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>About Us</span></h1>


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
        <div class="row border-bottom mb-5 pb-5 justify-content-between">
            <div class="col-lg-4 align-self-center mb-5">
                <span class="d-block subheading mb-3">We are committed</span>
                <h2 class="heading mb-4">The road of success is always under construction</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
            <div class="col-lg-7">
                <a href="{{ asset('backend/assets/images/homePage/'.$section_one->video_url) }}" class="video-wrap glightbox">
                    <span class="icon-play"></span>
                    <img src="{{ asset('backend/assets/images/homePage/'.$section_one->banner) }}" alt="Image" class="img-fluid">
                </a>
            </div>
        </div>
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

<div class="section sec-team sec-4 pb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="heading">We Are The Team</h2>
            </div>

        </div>
        <div class="row g-5 d-flex justify-content-evenly">

            @foreach($team as $data)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 d-flex justify-content-center">
                    <div class="person text-center">
                        <img src="{{ asset('backend/assets/images/team/'.$data->image) }}" alt="Image" class="img-fluid rounded-circle mx-auto w-50 mb-3">
                        <h3 class="mb-1">{{ $data->name }}</h3>
                        <span class="d-block text-black-50 mb-3">{{ $data->position }}</span>
                        <p class="text-black-50">{{ $data->description }}</p>
                        <ul class="social-2 list-unstyled d-flex justify-content-center gap-2 mb-5">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-telegram"></span></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>

@endsection
