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


<div class="bg-light">
    {{-- include services here  --}}
    @include('frontend.components.services', [
        'interiorDesign' => $interiorDesign,
        'landscapeDesign' => $landscapeDesign,
        'architectureDesign' => $architectureDesign,
        'floorPlan' => $floorPlan
    ])
</div>


{{-- include members here  --}}
@include('frontend.components.members')


{{-- include members here  --}}
@include('frontend.components.news')


@endsection
