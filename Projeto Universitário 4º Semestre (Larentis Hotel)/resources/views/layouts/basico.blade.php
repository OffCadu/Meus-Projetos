<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Larentis</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="../../site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



		<!-- CSS here -->
        
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="../../assets/css/stylereserva.css" />
            <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../../assets/css/gijgo.css">
            <link rel="stylesheet" href="../../assets/css/estilo_basico.css">
            <link rel="stylesheet" href="../../assets/css/slicknav.css">
            <link rel="stylesheet" href="../../assets/css/animate.min.css">
            <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../../assets/css/slick.css">
            <link rel="stylesheet" href="../../assets/css/nice-select.css">
            <link rel="stylesheet" href="../../assets/css/style.css">
            <link rel="stylesheet" href="../../assets/css/responsive.css">
            <link rel="stylesheet" href="../../assets/css/style_pim.css">
   </head>

   <body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Larentis</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @yield('conteudo')

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>

        <!-- Scripts -->
        <script src="{{ asset('assets/js/app.js') }}" defer></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../../assets/js/owl.carousel.min.js"></script>
        <script src="../../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../../assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../../assets/js/wow.min.js"></script>
		<script src="../../assets/js/animated.headline.js"></script>
        <script src="../../assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../../assets/js/jquery.nice-select.min.js"></script>
		<script src="../../assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="../../assets/js/contact.js"></script>
        <script src="../../assets/js/jquery.form.js"></script>
        <script src="../../assets/js/jquery.validate.min.js"></script>
        <script src="../../assets/js/mail-script.js"></script>
        <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="../../assets/js/plugins.js"></script>
        <script src="../../assets/js/main.js"></script>

    </body>
</html>
