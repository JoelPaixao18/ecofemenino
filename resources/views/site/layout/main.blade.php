<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrons24 - News & Magazine Html Template</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ url('assets/user/images/24..png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/user/images/fav.png')}}">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/bootstrap.min.css')}}">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/all.min.css')}}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/animate.min.css')}}">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/magnific-popup.css')}}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/magnific.css')}}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/animate.min.css')}}">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/swiper.min.css')}}">
    <!--================= Mobile Menu Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/metisMenu.css')}}">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/rtsmenu.css')}}">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/main.css')}}">
</head>

<body class="bg-1">

    @include('site._parcial.header')
    @yield('content-home')
    @include('site._parcial.footer')

    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn"><i class="fas fa-angle-up arrow-up"></i><i class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="{{ url('assets/user/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="{{ url('assets/user/js/vendors/bootstrap.min.js')}}"></script>
    <!--================= Wow.js =================-->
    <script src="{{ url('assets/user/js/vendors/wow.min.js')}}"></script>
    <!--================= Swiper Slider =================-->
    <script src="{{ url('assets/user/js/vendors/swiper-bundle.min.js')}}"></script>
    <!--================= Mobile Menu Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/metisMenu.min.js')}}"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/rtsmenu.js')}}"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <!--================= Main Script =================-->
    <script src="{{ url('assets/user/js/main.js')}}"></script>
</body>
</html>