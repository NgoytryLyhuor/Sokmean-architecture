@extends('frontend.admin_master')
@section('frontend')

<div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_2.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto">
                <h1 class="mb-5"><span>We love</span> <span class="d-block">architecture</span> <span class="d-block">& interior design</span></h1>

                <div class="play-vid">
                    <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="play glightbox">
                        <span class="icon-play"></span>
                    </a>
                </div>

                <div class="intro-desc">
                    <div class="line"></div>
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section sec-1">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <h2 class="heading">We create architectural designs</h2>
                <p>
                    At <b>Norkor Architecture.</b> we bring visions to life through innovative and functional architectural designs. Our team of skilled architects and designers blend creativity with precision to craft spaces that are not only aesthetically stunning but also practical and sustainable. Whether it's residential, commercial, or urban planning, we focus on delivering designs that reflect your unique vision while harmonizing with the environment.
                </p>
                <p><a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
            </div>
            <div class="col-lg-7 ms-auto">
                <img src="{{ asset('frontend/images/img_8.jpg') }}" alt="Image" class="img-fluid img-r">
            </div>
        </div>
    </div>
</div>

<div class="section sec-2">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="IMage" class="img-fluid">
            </div>
            <div class="col-lg-3 ms-auto">
                <h2 class="heading">Modern Architecture</h2>
                <p>Modern architecture is more than just a design style—it’s a philosophy that embraces simplicity, functionality, and innovation. At <b>Norkor Architecture.</b> we specialize in creating contemporary structures that seamlessly blend form and function. Our designs prioritize clean lines, open spaces, and the use of cutting-edge materials to craft buildings that are not only visually striking but also sustainable and efficient.</p>
                <p><a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<div class="sec-3 section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="heading">Services</h2>
                <p>At <b>Norkor Architecture.</b> we offer a comprehensive range of architectural services designed to transform ideas into reality. Our expertise spans from conceptual design to project completion, ensuring that every structure we create is both functional and visually captivating. Whether it’s a residential home, a commercial space, or an urban development, we take a client-centered approach to deliver designs that reflect unique visions while integrating modern innovation.</p>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="accordion accordion-flush accordion-1" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Interior Design
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{ asset('frontend/images/img_7.jpg') }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>At <b>Norkor Architecture.</b> our interior design services focus on crafting spaces that are both functional and visually stunning. We believe that great design goes beyond aesthetics—it’s about creating environments that enhance the way people live, work, and interact. Whether designing a cozy home, a dynamic office, or a luxurious commercial space, we tailor each project to meet the unique needs and desires of our clients.</p>
                                        <a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Landscape Design
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{ asset('frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
                                        <a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Engineering Plan
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{ asset('frontend/images/img_3.jpg') }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
                                        <a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Architecture Design
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
                                        <a href="{{ asset('services') }}" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
            <div class="col-lg-4">
                <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
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
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project Two</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{ route('project_details') }}">
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
                    <a href="{{ route('project_details') }}">
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
                    <a href="{{ route('project_details') }}">
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
                    <a href="{{ route('project_details') }}">
                        <img src="{{ asset('frontend/images/img_6.jpg') }}" alt="Image" class="img-fluid">
                        <div class="contents">
                            <h3>Project One</h3>
                            <div class="cat">Construction</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-12 text-center mt-5">
                <p><a href="#" class="btn btn-primary me-4">See all projects</a></p>
            </div>

        </div>
    </div>
</div>



<div class="sec-4 section bg-light">

    <div class="text-center mb-5">
        <h2 class="heading mb-5 text-center">Testimonial</h2>
    </div>
    <div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

        <div id="testimonial-nav">
            <span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>

            <span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
        </div>

        <div class="testimonial-slide-center testimonial-center" id="testimonial-center">

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_3.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_4.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>


            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_5.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_3.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div  class="testimonial-item-inner">
                        <div class="testimonial-author mb-5">
                            <img src="{{ asset('frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
                            <strong class="d-block">James Campbell</strong>
                            <span>CEO, Co-Founder</span>
                        </div>
                        <blockquote>
                            Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="section sec-news">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="heading">News</h2>
            </div>
            <div class="col-lg-6">
                <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset("frontend/images/img_3.jpg") }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">
                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">How Awesome Stay connected</a></h2>

                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset("frontend/images/img_4.jpg") }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">

                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">We Need Unlimitted People</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single.html">
                        <img src="{{ asset("frontend/images/img_5.jpg") }}" alt="Image"
                        class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">

                        <span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                        <h2 class="mb-3"><a href="single.html">Important of getting a notifications</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="single.html">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
