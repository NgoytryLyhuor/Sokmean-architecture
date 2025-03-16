@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/service/'.$service->banner) }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto">
                <h1 class="mb-5 text-center"><span>{{ $service->main_title }}</span></h1>
                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>{{ $service->banner_description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="mb-4 fw-bold">{{ $service->title }}</h2>
                <p class="mb-3">{!! $service->description !!}</p>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5 fw-bold mb-3 text-primary">Our {{ $service->main_title }} Services Include:</h3>
                        <ol class="list-group list-group-flush custom-list">
                            <?php $i=1 ?>
                            @foreach($serviceServiceInclude as $data)
                                <li class="list-group-item bg-transparent ps-0">
                                    <span class="fw-bold">{{ $i++ }}.</span> {{ $data->title }}
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Our {{ $service->main_title }} Process</h2>
        <div class="row g-4">
            @foreach($serviceProcess as $data)
                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border-0 shadow-sm transition-all py-4">
                        <div class="card-body text-center p-4">
                            <center>
                                <div class="badge bg-primary rounded-circle d-flex align-items-center justify-content-center mb-4 text-white" style="width: 60px; height: 60px;">
                                    <span class="fs-4 fw-bold">{{ str_pad($data->number, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                            </center>
                            <h3 class="card-title h5 fw-bold mb-3">{{ $data->title }}</h3>
                            <p class="card-text text-muted">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="my-5">
            <h2 class="text-center mb-4 fw-bold">Featured {{ $service->main_title }} Projects</h2>
            <div class="row g-4">
                @foreach($serviceSampleProject as $data)
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm my-img-hover">
                            <div class="overflow-hidden" style="width: 416px">
                                <a href="{{ asset('backend/assets/images/service/'.$data->image) }}" target="_blank">
                                    <img style="height: 416px" src="{{ asset('backend/assets/images/service/'.$data->image) }}" class="card-img-top" alt="{{ $data->title }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <p class="card-text">{{ $data->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    {{-- include services here  --}}
    @include('frontend.components.services')
</div>

{{-- include members here  --}}
@include('frontend.components.members')


{{-- include members here  --}}
@include('frontend.components.news')


@endsection
