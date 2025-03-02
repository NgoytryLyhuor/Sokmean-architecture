@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_3.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto ">
                <h1 class="mb-5 text-center"><span>Landscape Design</span></h1>
                <div class="intro-desc text-left">
                    <div class="line"></div>
                    <p>Crafting outdoor spaces that inspire and rejuvenate.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="mb-4 fw-bold">Transform Your Outdoor Space</h2>
                <p class="mb-3">At <b>Norkor Architecture<span class="text-primary">.</span></b>, we believe that a well-designed landscape is an extension of your home. Our landscape design services blend nature, beauty, and functionality to create outdoor spaces that inspire relaxation, entertainment, and connection with the environment.</p>

                <p>From lush gardens to functional patios, we design outdoor spaces that reflect your lifestyle and enhance your property's value.</p>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5 fw-bold mb-3">Our Landscape Design Services Include:</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent">Custom garden layouts and plant selection</li>
                            <li class="list-group-item bg-transparent">Outdoor lighting and water features</li>
                            <li class="list-group-item bg-transparent">Patio and deck design</li>
                            <li class="list-group-item bg-transparent">Sustainable and eco-friendly designs</li>
                            <li class="list-group-item bg-transparent">Hardscaping and pathway design</li>
                            <li class="list-group-item bg-transparent">Irrigation and drainage solutions</li>
                            <li class="list-group-item bg-transparent">Outdoor furniture and decor</li>
                            <li class="list-group-item bg-transparent">Seasonal maintenance planning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center mb-4 fw-bold">Our Design Process</h2>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">01</div>
                        <h3 class="card-title h5 fw-bold">Site Analysis</h3>
                        <p class="card-text">We assess your property's topography, soil, climate, and existing features to create a tailored design plan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">02</div>
                        <h3 class="card-title h5 fw-bold">Concept Development</h3>
                        <p class="card-text">We create mood boards, sketches, and 3D renderings to bring your outdoor vision to life.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">03</div>
                        <h3 class="card-title h5 fw-bold">Design Refinement</h3>
                        <p class="card-text">We refine the design based on your feedback, finalizing plant selections, materials, and layouts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">04</div>
                        <h3 class="card-title h5 fw-bold">Implementation</h3>
                        <p class="card-text">Our team oversees the installation, ensuring every detail aligns with the design plan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="my-5">
            <h2 class="text-center mb-4 fw-bold">Featured Landscape Projects</h2>
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://st.hzcdn.com/simgs/pictures/landscapes/idyllic-modern-david-thorne-landscape-architect-img~1a51861a0c5e2432_14-9463-1-ad779bb.jpg" class="card-img-top" alt="Tranquil Garden">
                        <div class="card-body">
                            <h5 class="card-title">Tranquil Garden</h5>
                            <p class="card-text">A serene retreat with lush greenery and calming water features.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/86/17/98/861798e86d3c4553e8576a538b5ecd42.jpg" class="card-img-top" alt="Modern Patio">
                        <div class="card-body">
                            <h5 class="card-title">Modern Patio</h5>
                            <p class="card-text">A sleek outdoor space designed for entertaining and relaxation.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img style="height: 416px" src="https://i.pinimg.com/736x/24/eb/43/24eb431c5650ba92d27bec42e49114a5.jpg" class="card-img-top" alt="Rustic Pathway">
                        <div class="card-body">
                            <h5 class="card-title">Rustic Pathway</h5>
                            <p class="card-text">A charming walkway surrounded by native plants and natural stone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Design Philosophy</h2>
                <p>We believe that a well-designed landscape should harmonize with its surroundings while meeting your practical needs. Our designs are rooted in:</p>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Sustainability and eco-friendliness</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Seamless integration with nature</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Functionality for outdoor living</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Timeless beauty and elegance</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://landscapesbyterra.com/img/asset/YXNzZXRzL2Jsb2cvY29udGVtcG9yYXJ5LWNhbG0xMS5qcGc=?h=1000&s=f2ade74b255a8d687762cfb815789c1b" alt="Our Design Philosophy" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</div>

{{-- include services here  --}}
@include('frontend.components.services')


{{-- include members here  --}}
@include('frontend.components.members')


{{-- include members here  --}}
@include('frontend.components.news')


@endsection
