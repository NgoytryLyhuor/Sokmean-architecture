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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Norkor Architecture</title>
</head>
<body class="position-relative">

    <!-- back_to_top -->
    <div class="circle position-fixed back-to-top">
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-chevron-up text-white"></i>
        </div>
    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if(scroll > 100){
                $(".circle").css("display","block");
            }
            else{
                $(".circle").css("display","none");
            }
        })
            $(".back-to-top").click(function(){
                $('html, body').animate({
                    scrollTop: 0
                }, '3000');
            })
        })


    </script>

</body>
</html>
