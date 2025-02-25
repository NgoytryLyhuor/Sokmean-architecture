@extends('frontend.admin_master')
@section('frontend')
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
                <div class="col-lg-6 ms-auto">
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias
                        beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus
                        itaque.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="">
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
                        <a href="">
                            <img src="{{ asset('frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project Two</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="">
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
                        <a href="">
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
                        <a href="">
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
                        <a href="">
                            <img src="{{ asset('frontend/images/img_6.jpg') }}" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project One</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- include members here  --}}
    @include('frontend.components.members')
@endsection
