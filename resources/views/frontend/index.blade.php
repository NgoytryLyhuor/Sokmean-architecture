@extends('frontend.admin_master')
@section('frontend')

@php
    $section_one    = App\Models\HomePage::where('id',1)->first();
    $section_two    = App\Models\HomePage::where('id',2)->first();
    $section_three  = App\Models\HomePage::where('id',3)->first();
    $section_four   = App\Models\HomePage::where('id',4)->first();
    $section_four_items   = App\Models\HomePage::whereNotIn('id', [1, 2, 3, 4])->get();
    $number = 1;
@endphp

<div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/homePage/'.$section_one->banner) }}');">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto">
                <h1 class="mb-5">{{ $section_one->title }}</h1>

                <div class="play-vid">
                    <a href="http://127.0.0.1:8000/backend/assets/images/homePage/{{ $section_one->video_url }}" class="play glightbox">
                        <span class="icon-play"></span>
                    </a>
                </div>

                <div class="intro-desc">
                    <div class="line"></div>
                    <p>{{ $section_one->banner_title }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section sec-1">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <h2 class="heading">{{ $section_two->title }}</h2>
                <p>{{ $section_two->banner_title }}</p>
                <p><a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
            </div>
            <div class="col-lg-7 ms-auto">
                <img src="{{ asset('backend/assets/images/homePage/'.$section_two->banner) }}" alt="Image" class="img-fluid img-r">
            </div>
        </div>
    </div>
</div>

<div class="section sec-2">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('backend/assets/images/homePage/'.$section_three->banner) }}" alt="IMage" class="img-fluid">
            </div>
            <div class="col-lg-3 ms-auto">
                <h2 class="heading">{{ $section_three->title }}</h2>
                <p>{{ $section_three->banner_title }}</p>
                <p><a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<div class="sec-3 section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="heading">{{ $section_four->title }}</h2>
                <p>{{ $section_four->banner_title }}</p>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="accordion accordion-flush accordion-1" id="accordionFlushExample">

                    @foreach($section_four_items as $data)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-{{ $number }}">
                                <button class="accordion-button {{ $number > 1 ? 'collapsed' : '' }}"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne-{{ $number }}"
                                    aria-expanded="{{ $number == 1 ? 'true' : 'false' }}"
                                    aria-controls="flush-collapseOne-{{ $number }}">
                                    {{ $data->title }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne-{{ $number }}"
                                class="accordion-collapse collapse {{ $number == 1 ? 'show' : '' }}"
                                aria-labelledby="flush-headingOne-{{ $number }}"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <img src="{{ asset('backend/assets/images/homePage/' . $data->banner) }}" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $data->banner_title }}</p>
                                            <a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $number++; // Increment the counter
                        @endphp
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>


<div class="section sec-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="heading">Projects</h2>
            </div>
            <div class="col-lg-4">
                <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_8.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project One</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project Two</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_3.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project One</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project One</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_5.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project Two</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_6.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project One</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-12 text-center mt-5">
                <p><a href="#" class="btn btn-primary me-4">See all projects</a></p>
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
                        <img src="{{ asset("frontend/images/img_3.jpg") }}" alt="Image"
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
                        <img src="{{ asset("frontend/images/img_4.jpg") }}" alt="Image"
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
                        <img src="{{ asset("frontend/images/img_5.jpg") }}" alt="Image"
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
