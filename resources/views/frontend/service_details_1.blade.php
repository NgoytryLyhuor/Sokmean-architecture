@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_3.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>Interior Design</span></h1>
                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>Transforming spaces into personalized sanctuaries.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="mb-4 fw-bold">Stylish and Functional Interior Spaces</h2>
                <p class="mb-3">At <b>Norkor Architecture<span class="text-primary">.</span></b>, we specialize in creating interior spaces that are not only beautiful but also functional and reflective of your personal style. Our interior design services transform your vision into reality, ensuring every detail is perfect.</p>

                <p>From concept to completion, we design interiors that are tailored to your lifestyle, preferences, and budget.</p>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5 fw-bold mb-3 text-primary">Our Interior Design Services Include:</h3>
                        <ol class="list-group list-group-flush custom-list">
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">1.</span> Custom interior design tailored to your style and needs.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">2.</span> Space planning and layout optimization for functionality.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">3.</span> Selection of furniture, fixtures, and finishes.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">4.</span> Color scheme and material selection for cohesive design.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">5.</span> Lighting design to enhance ambiance and functionality.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">6.</span> Kitchen and bathroom design for modern, efficient spaces.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">7.</span> Custom cabinetry and built-in storage solutions.
                            </li>
                            <li class="list-group-item bg-transparent ps-0">
                                <span class="fw-bold">8.</span> Project management and coordination with contractors.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Our Interior Design Process</h2>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition-all py-4">
                    <div class="card-body text-center p-4">
                        <div class="badge bg-primary rounded-circle p-3 mb-4 fs-4 fw-bold text-white">01</div>
                        <h3 class="card-title h5 fw-bold mb-3">Initial Consultation</h3>
                        <p class="card-text text-muted">We understand your goals, preferences, and budget to establish the foundation of your interior design.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition-all py-4">
                    <div class="card-body text-center p-4">
                        <div class="badge bg-primary rounded-circle p-3 mb-4 fs-4 fw-bold text-white">02</div>
                        <h3 class="card-title h5 fw-bold mb-3">Space Planning</h3>
                        <p class="card-text text-muted">We design the layout to optimize the functionality, flow, and aesthetic appeal of the space.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition-all py-4">
                    <div class="card-body text-center p-4">
                        <div class="badge bg-primary rounded-circle p-3 mb-4 fs-4 fw-bold text-white">03</div>
                        <h3 class="card-title h5 fw-bold mb-3">Design Concept</h3>
                        <p class="card-text text-muted">We develop the design concept, selecting color schemes, materials, furniture, and decor to create the desired style.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition-all py-4">
                    <div class="card-body text-center p-4">
                        <div class="badge bg-primary rounded-circle p-3 mb-4 fs-4 fw-bold text-white">04</div>
                        <h3 class="card-title h5 fw-bold mb-3">Execution</h3>
                        <p class="card-text text-muted">We implement the design, selecting and installing furniture, finishes, and materials to bring the concept to life.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition-all py-4">
                    <div class="card-body text-center p-4">
                        <div class="badge bg-primary rounded-circle p-3 mb-4 fs-4 fw-bold text-white">05</div>
                        <h3 class="card-title h5 fw-bold mb-3">Styling & Final Touches</h3>
                        <p class="card-text text-muted">We add accessories, decor, and artwork to create the final ambiance and complete the space.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="my-5">
            <h2 class="text-center mb-4 fw-bold">Featured Interior Projects</h2>
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/da/5b/93/da5b93ef5b3d9cd481624c552fabb75c.jpg" class="card-img-top" alt="Modern Living Room">
                        <div class="card-body">
                            <h5 class="card-title">Modern Living Room</h5>
                            <p class="card-text">A contemporary space designed for both comfort and style.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/77/e1/a5/77e1a538de0efaf4261dfeeec89414ba.jpg" class="card-img-top" alt="Luxury Bedroom">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Bedroom</h5>
                            <p class="card-text">Creating a peaceful retreat with elegant details.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/bd/b1/46/bdb14611089c523a745172f28ff32730.jpg" class="card-img-top" alt="Open Kitchen Design">
                        <div class="card-body">
                            <h5 class="card-title">Open Kitchen Design</h5>
                            <p class="card-text">Functional cooking space that encourages gathering.</p>
                        </div>
                    </div>
                </div>
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
