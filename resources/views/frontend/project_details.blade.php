@extends('frontend.admin_master')
@section('frontend')

@php
    $number = 1;
    $relateProject = App\Models\Project::orderBy('id','asc')->Limit(6)->whereNot('id',$project->id)->whereNot('id',1)->get();
@endphp

    <div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/project/' . $project->cover) }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>{{ $project->title }}</span></h1>

                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-3">
        <div class="container">

            @foreach($projectPath as $data)
                <div class="row mb-5 justify-content-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <img src="{{ asset('backend/assets/images/project/' . $data->cover) }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5">
                        <div class="heading">{{ $data->title }}</div>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    <div class="section sec-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="heading">Related Projects</h2>
                </div>
            </div>

            <div class="row g-4">

                @foreach($relateProject as $data)
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
@endsection
