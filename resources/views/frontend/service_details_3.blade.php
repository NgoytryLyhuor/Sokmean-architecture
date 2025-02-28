@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_3.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>Architecture Design</span></h1>
                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>Shaping inspiring environments with precision and artistry.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="mb-4 fw-bold">Innovative Architectural Solutions</h2>
                <p class="mb-3">At <b>Norkor Architecture<span class="text-primary">.</span></b>, we believe that architecture is more than just buildings—it's about creating spaces that inspire, uplift, and endure. Our architectural design services combine creativity, functionality, and sustainability to deliver structures that stand the test of time.</p>

                <p>From residential homes to commercial spaces, we approach each project with a fresh perspective, ensuring every detail aligns with your vision and needs.</p>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5 fw-bold mb-3">Our Architecture Design Services Include:</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent">Custom home design</li>
                            <li class="list-group-item bg-transparent">Commercial building design</li>
                            <li class="list-group-item bg-transparent">Sustainable and green architecture</li>
                            <li class="list-group-item bg-transparent">Structural engineering and planning</li>
                            <li class="list-group-item bg-transparent">3D modeling and virtual walkthroughs</li>
                            <li class="list-group-item bg-transparent">Renovation and restoration projects</li>
                            <li class="list-group-item bg-transparent">Interior and exterior integration</li>
                            <li class="list-group-item bg-transparent">Project management and oversight</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center mb-4 fw-bold">Our Design Process</h2>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">01</div>
                        <h3 class="card-title h5 fw-bold">Initial Consultation</h3>
                        <p class="card-text">We discuss your vision, requirements, and budget to establish the project scope.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">02</div>
                        <h3 class="card-title h5 fw-bold">Concept Development</h3>
                        <p class="card-text">We create initial sketches, mood boards, and 3D models to visualize your project.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">03</div>
                        <h3 class="card-title h5 fw-bold">Design Refinement</h3>
                        <p class="card-text">We refine the design based on your feedback, finalizing materials, layouts, and details.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">04</div>
                        <h3 class="card-title h5 fw-bold">Construction Oversight</h3>
                        <p class="card-text">We oversee the construction process to ensure the design is executed flawlessly.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5">
            <h2 class="text-center mb-4 fw-bold">Featured Architecture Projects</h2>
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/8d/bf/a4/8dbfa48e6eec926ca0f3d55253699031.jpg" class="card-img-top" alt="Modern Residence">
                        <div class="card-body">
                            <h5 class="card-title">Modern Residence</h5>
                            <p class="card-text">A sleek, contemporary home designed for modern living.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/10/90/63/1090637e2901f16c307bfa8c1fad2bac.jpg" class="card-img-top" alt="Commercial Complex">
                        <div class="card-body">
                            <h5 class="card-title">Commercial Complex</h5>
                            <p class="card-text">A functional and aesthetically pleasing workspace.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/08/8d/cc/088dcce619dc0b04573aacfe40ffe288.jpg" class="card-img-top" alt="Heritage Restoration">
                        <div class="card-body">
                            <h5 class="card-title">Heritage Restoration</h5>
                            <p class="card-text">Preserving history while adding modern functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Design Philosophy</h2>
                <p>We believe that great architecture balances form and function. Our designs are rooted in:</p>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Innovation and creativity</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Sustainability and energy efficiency</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Timeless aesthetics</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Client-centric solutions</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://i.pinimg.com/736x/09/27/51/0927518bcf3be7562036ddcfe0f8674e.jpg" alt="Our Design Philosophy" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</div>


{{-- include members here  --}}
@include('frontend.components.members')


{{-- include members here  --}}
@include('frontend.components.news')


@endsection
