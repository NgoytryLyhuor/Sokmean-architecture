<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{ asset('backend/assets/images/logo.jpg') }}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/glightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('global.css') }}" id="app-style" type="text/css" />

	<title>Norkor Architecture</title>
</head>
<body>

    {{-- header --}}
    @include('frontend.components.header')


    @yield('frontend')


    {{-- footer --}}
    @include('frontend.components.footer')


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>
	<script src="{{ asset('frontend/js/aos.js') }}"></script>
	<script src="{{ asset('frontend/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('frontend/js/navbar.js') }}"></script>
	<script src="{{ asset('frontend/js/counter.js') }}"></script>
	<script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>
</html>
