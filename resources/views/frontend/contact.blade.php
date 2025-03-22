@extends('frontend.admin_master')
@section('frontend')
    <div class="hero-2 overlay" style="background-image: url('{{ asset('backend/assets/images/'.$contact->image) }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>{{ $contact->title }}</span></h1>
                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>{{ $contact->description }}</p>
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
                            <a href="mailto:{{ $contact->email }}" class="btn btn-outline-primary">{{ $contact->email }}</a>
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
                            <a href="tel:{{ $contact->phone }}" class="btn btn-outline-primary">{{ $contact->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="row mt-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <h4 class="mb-4">Connect With Us</h4>
                    <div class="d-flex justify-content-center gap-3">
                        @if($contact->social && is_array($contact->social))
                            @foreach($contact->social as $social)
                                <a href="{{ $social['url'] }}" class="btn btn-outline-primary rounded-circle social-btn" target="_blank">
                                    <span class="icon-{{ strtolower($social['name']) }}"></span>
                                </a>
                            @endforeach
                        @endif
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
                        @foreach($qa as $index => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                                <div id="faq{{ $item->id }}" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                    <div class="accordion-body">
                                        {{ $item->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
