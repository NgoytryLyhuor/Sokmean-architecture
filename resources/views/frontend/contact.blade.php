@extends('frontend.admin_master')
@section('frontend')
    <div class="hero-2 overlay" style="background-image: url('{{ asset('frontend/images/img_6.jpg') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>Contact Us</span></h1>
                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                            molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                            natus accusamus itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-contact py-5">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <h2 class="heading fw-bold mb-3">Get in Touch</h2>
                    <p class="text-muted mb-4">We're here to help with any questions you might have. Reach out to us using
                        any of the methods below.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Contact Cards -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;border: 2px solid #010100;color:#010100">
                                <span class="icon-mail_outline" style="font-size: 25px"></span>
                            </div>
                            <h4 class="card-title">Email Us</h4>
                            <p class="card-text mb-3">Our support team typically responds within 24 hours.</p>
                            <a href="mailto:contact@example.com" class="btn btn-outline-primary">contact@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;border: 2px solid #010100;color:#010100">
                                <span class="icon-phone" style="font-size: 25px"></span>
                            </div>
                            <h4 class="card-title">Call Us</h4>
                            <p class="card-text mb-3">Available Monday to Friday, 9am to 5pm EST.</p>
                            <a href="tel:+1234567890" class="btn btn-outline-primary">+1 (234) 567-890</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="row mt-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <h4 class="mb-4">Connect With Us</h4>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary rounded-circle social-btn">
                            <span class="icon-facebook"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary rounded-circle social-btn">
                            <span class="icon-twitter"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary rounded-circle social-btn">
                            <span class="icon-instagram"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary rounded-circle social-btn">
                            <span class="icon-linkedin"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary rounded-circle social-btn">
                            <span class="icon-telegram"></span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- FAQ Section -->
            <div class="row mt-5">
                <div class="col-12 text-center mb-4">
                    <h4>Frequently Asked Questions</h4>
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What are your business hours?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Our business hours are Monday to Friday, 9am to 5pm Eastern Standard Time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    How quickly can I expect a response?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    We typically respond to all inquiries within 24 business hours.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Do you offer support on weekends?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Weekend support is available for urgent matters via our emergency contact line.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
