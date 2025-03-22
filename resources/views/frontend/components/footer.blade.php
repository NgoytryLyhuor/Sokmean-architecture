@php
    $about = App\Models\About::FindOrFail(1);
    $contact = App\Models\COntact::FindOrFail(1);
@endphp

<div class="site-footer bg-light">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="line-top">About</h3>
                    <p class="mb-5">{{ $about->description }}</p>

                </div>
                <div class="widget">
                    <h3 class="line-top">Connect with us</h3>
                    <ul class="social list-unstyled mb-5">
                        @if($contact->social && is_array($contact->social))
                            @foreach($contact->social as $social)
                                <li>
                                    <a href="{{ $social['url'] }}" target="_blank">
                                        <span class="icon-{{ strtolower($social['name']) }}"></span>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="widget">
                            <h3 class="line-top">Navigations</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{ route('index') }}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{ route('project') }}">Projects</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{ route('services') }}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{ route('about') }}">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center copyright">
            <div class="col-md-8">
                <p class="small text-black-50">Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
            </div>
        </div>
    </div>
</div>
