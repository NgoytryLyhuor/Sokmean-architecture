@extends('frontend.admin_master')
@section('frontend')

@php
    $section_one    = App\Models\HomePage::where('id',1)->first();
    $section_two    = App\Models\HomePage::where('id',2)->first();
    $section_three  = App\Models\HomePage::where('id',3)->first();
    $section_four   = App\Models\HomePage::where('id',4)->first();
    $section_four_items   = App\Models\HomePage::whereNotIn('id', [1, 2, 3, 4])->get();
    $number = 1;

    $project        = App\Models\Project::orderBy('id','asc')->Limit(6)->whereNot('id',1)->get();

@endphp

<div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/homePage/'.$section_one->banner) }}');">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto">
                <h1 class="mb-5">{{ $section_one->title }}</h1>

                <div class="play-vid">
                    <a href="{{ asset('backend/assets/images/homePage/'.$section_one->video_url) }}" class="play glightbox">
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
        </div>

        <div class="row g-4">

            @foreach($project as $data)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="{{ route('project_details', $data->id) }}">
                            <img src="{{ asset('backend/assets/images/project/' . $data->cover) }}" alt="Image" style="width: 700px;height: 370px;object-fit: cover" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $data->title }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="col-md-12 text-center mt-5">
                <p><a href="{{ route('project') }}" class="btn btn-primary me-4">See all projects</a></p>
            </div>

        </div>
    </div>
</div>



{{-- include members here  --}}
@include('frontend.components.members')

{{-- include members here  --}}
{{-- @include('frontend.components.news') --}}

<script>
    // Pass PHP data to JavaScript
    const sectionFourItems = @json($section_four_items);
    const baseImageUrl = "{{ asset('backend/assets/images/homePage/') }}"; // Base URL for images
    const servicesUrl = "{{ asset('services') }}"; // URL for the "Learn more" link
    let number = 1; // Initialize the counter

    document.addEventListener('DOMContentLoaded', function() {
        const accordionContainer = document.getElementById('accordionFlushExample');

        // Generate HTML for each accordion item
        const accordionHTML = sectionFourItems.map(data => {
            const itemHTML = `
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne-${number}">
                        <button class="accordion-button ${number > 1 ? 'collapsed' : ''}"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne-${number}"
                            aria-expanded="${number == 1 ? 'true' : 'false'}"
                            aria-controls="flush-collapseOne-${number}">
                            ${data.title}
                        </button>
                    </h2>
                    <div id="flush-collapseOne-${number}"
                        class="accordion-collapse collapse ${number == 1 ? 'show' : ''}"
                        aria-labelledby="flush-headingOne-${number}"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row justify-content-between">
                                <div class="col-md-4">
                                    <img src="${baseImageUrl}/${data.banner}" alt="Image" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <p>${data.banner_title}</p>
                                    <a href="${servicesUrl}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            number++; // Increment the counter
            return itemHTML;
        }).join('');

        // Inject the generated HTML into the container
        accordionContainer.innerHTML = accordionHTML;

        // Preload images
        sectionFourItems.forEach(data => {
            const img = new Image();
            img.src = `${baseImageUrl}/${data.banner}`;
        });
    });
</script>

@endsection
