@extends('frontend.admin_master')
@section('frontend')

@php
    use Illuminate\Support\Str;
    $number = 1;
    $project_cover = App\Models\Project::where('id',1)->first();
    $project = App\Models\Project::orderBy('id','asc')->whereNot('id',1)->get();
    $section_one = App\Models\HomePage::where('id',1)->first();
@endphp

<div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/project/' . $project_cover->cover) }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>{{ $project_cover->title }}</span></h1>

                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>{{ $project_cover->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 ms-auto">
                <p>
                    Architecture is the art and science of designing and constructing buildings and other physical structures. It is a discipline that combines creativity, technical knowledge, and cultural understanding to create spaces that are functional, aesthetically pleasing, and meaningful. Architecture shapes the built environment.
                </p>
            </div>
        </div>

        <div class="row g-4">

            @foreach($project as $data)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="{{ route('project_details', Str::slug(Str::lower($data->title), '-')) }}">
                            <img src="{{ asset('backend/assets/images/project/' . $data->cover) }}" alt="Image"
                                    style="width: 700px;height: 370px;object-fit: cover" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $data->title }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-md-12 text-center mt-5">
                <p><a href="#" class="btn btn-primary me-4">See all projects</a></p>
            </div> --}}

        </div>
    </div>
</div>

{{-- include members here  --}}
@include('frontend.components.members')

<div class="section bg-light">
    <div class="container">
        <div class="row justify-content-between">
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
    </div>
</div>

    {{-- include services here  --}}
<div>
    @include('frontend.components.services')
</div>

@endsection
