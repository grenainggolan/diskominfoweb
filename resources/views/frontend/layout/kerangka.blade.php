<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Dinas Kominfo-SP Kabupaten Pangkep</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{url('public/frontend/img/logo-kominfo.png')}}">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/fontawesome.min.css') }}">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/themify-icons.css')}} ">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/elegant-line-icons.css') }} ">
        <!-- Elegant Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/elegant-font-icons.css') }}">
        <!-- Saasbiz Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/saasbiz-icons.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/animate.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/nice-select.css')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.min.css')}}">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/slicknav.min.css')}}">
        <!-- Pricing CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/pricing-table.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/odometer.min.css')}}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/venobox/venobox.css')}}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/owl.carousel.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/main.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/responsive.css')}}">

        <script src="{{url('public/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
    
      @include('frontend\layout\menu')
      @yield('content')
      @include('frontend\layout\footer')

      <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	
      <!-- jQuery Lib -->
      <script src="{{url('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
      <!-- Bootstrap JS -->
      <script src="{{url('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
      <!-- Tether JS -->
      <script src="{{url('public/frontend/js/vendor/tether.min.js')}}"></script>
      <!-- Slicknav JS -->
      <script src="{{url('public/frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
      <!-- OWL-Carousel JS -->
      <script src="{{url('public/frontend/js/vendor/owl.carousel.min.js')}}"></script>
      <!-- Smooth Scroll JS -->
      <script src="{{url('public/frontend/js/vendor/smooth-scroll.min.js')}}"></script>
          <!-- Venobox JS -->
          <script src="{{url('public/frontend/js/vendor/venobox.min.js')}}"></script>
      <!-- Ajaxchimp JS -->
      <script src="{{url('public/frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
      <!--YTPlayer Js-->
      <script src="{{url('public/frontend/js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>
      <!-- Nice Select JS -->
          <script src="{{url('public/frontend/js/vendor/jquery.nice-select.min.js')}}"></script>
          <!-- Pricing Switcher JS -->
          <script src="{{url('public/frontend/js/vendor/pricing-switcher.js')}}"></script>
          <!-- Waypoints JS -->
          <script src="{{url('public/frontend/js/vendor/waypoints.min.js')}}"></script>
          <!-- Odometer JS -->
          <script src="{{url('public/frontend/js/vendor/odometer.min.js')}}"></script>
      <!-- Wow JS -->
      <script src="{{url('public/frontend/js/vendor/wow.min.js')}}"></script>
      <!-- Main JS -->
      <script src="{{url('public/frontend/js/main.js')}}"></script>
  
      </body>
  </html>