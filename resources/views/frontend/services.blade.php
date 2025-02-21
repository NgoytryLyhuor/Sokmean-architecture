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
            <div class="col-lg-4">

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
            <div class="col-lg-4">
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
            <div class="col-lg-4">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-architect"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Engineering Plan</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">

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
            <div class="col-lg-4">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-ruler"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">Interior Planning</h3>
                        <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium.</p>
                        <p>
                            <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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


<div class="section sec-news">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="heading">News</h2>
            </div>
            <div class="col-lg-6">
                <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset('frontend/images/img_3.jpg') }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">
                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">How Awesome Stay connected</a></h2>

                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">

                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">We Need Unlimitted People</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset('frontend/images/img_5.jpg') }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">

                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">Important of getting a notifications</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
