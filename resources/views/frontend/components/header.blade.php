<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            {{-- <a href="{{ route('index') }}" class="logo m-0 float-start">Norkor Architecture<span class="text-primary">.</span> </a> --}}

            <a href="{{ route('index') }}" class="logo m-0 float-start">
                <img class="shadow-none api-logo" src="{{ asset('backend/assets/images/logo.png') }}" style="width: 70px;" alt="">
            </a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
                <li class="{{ request()->routeIs('index') || request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('project') ? 'active' : '' }}">
                    <a href="{{ route('project') }}">Projects</a>
                </li>
                <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>

            <a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
            <ul class="site-menu float-end d-none d-md-block">
                <li><a href="tel:+8551234567" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>+8551234567</span></a></li>
            </ul>

        </div>
    </div>
</nav>
