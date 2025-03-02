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
            <div class="col-lg-8">
                <h2 class="mb-4 fw-bold">Reimagine Your Living Space</h2>
                <p class="mb-3">At <b>Norkor Architecture<span class="text-primary">.</span></b> we believe interior design goes beyond aesthetics—it's about creating environments that enhance your daily experience. Our comprehensive interior design services blend artistry with functionality to craft spaces that reflect your personality and lifestyle.</p>

                <p>Our team of experienced designers approaches each project with fresh eyes, developing custom solutions that maximize your space's potential while addressing your unique needs and preferences.</p>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5 fw-bold mb-3">Our Interior Design Services Include:</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent">Space planning and layout optimization</li>
                            <li class="list-group-item bg-transparent">Color scheme development</li>
                            <li class="list-group-item bg-transparent">Furniture selection and arrangement</li>
                            <li class="list-group-item bg-transparent">Custom cabinetry and built-in design</li>
                            <li class="list-group-item bg-transparent">Material and finish selection</li>
                            <li class="list-group-item bg-transparent">Lighting design and fixtures</li>
                            <li class="list-group-item bg-transparent">Art and accessory curation</li>
                            <li class="list-group-item bg-transparent">Window treatments</li>
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
                        <h3 class="card-title h5 fw-bold">Consultation</h3>
                        <p class="card-text">We begin with an in-depth discussion about your vision, needs, budget, and timeline to establish the foundation of your project.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">02</div>
                        <h3 class="card-title h5 fw-bold">Concept Development</h3>
                        <p class="card-text">Our designers create mood boards, spatial plans, and preliminary design concepts that align with your aesthetic and functional requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">03</div>
                        <h3 class="card-title h5 fw-bold">Design Refinement</h3>
                        <p class="card-text">We refine designs based on your feedback, finalizing selections for materials, furnishings, colors, and architectural elements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="badge bg-primary rounded-circle p-3 mb-3 fs-4 fw-bold">04</div>
                        <h3 class="card-title h5 fw-bold">Implementation</h3>
                        <p class="card-text">Our team oversees the execution of the design plan, coordinating with contractors and vendors to ensure flawless implementation.</p>
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

<div class="py-5 bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Design Philosophy</h2>
                <p>We believe that great interior design should be both beautiful and practical. Our spaces are designed to be lived in, not just admired. We create interiors that:</p>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Reflect your personal style and preferences</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Function efficiently for your specific needs</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Create harmony through thoughtful space planning</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill text-primary me-2 fs-4"></i>
                    <p class="mb-0">Incorporate elements that tell your unique story</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://i.pinimg.com/736x/1f/a1/37/1fa137c1c8ab7d55b28b05e15acb7106.jpg" alt="Our Design Philosophy" class="img-fluid rounded shadow-sm">
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
