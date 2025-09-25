<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecofemenino - News & Magazine Html Template</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ url('assets/user/images/24..png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/user/images/ecofem1.png') }}">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/bootstrap.min.css') }}">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/all.min.css') }}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/animate.min.css') }}">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/magnific-popup.css') }}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/magnific.css') }}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/animate.min.css') }}">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/swiper.min.css') }}">
    <!--================= Mobile Menu Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/metisMenu.css') }}">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/rtsmenu.css') }}">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/user/css/main.css') }}">
</head>

<body class="bg-1">

    @include('site._parcial.header')
    @yield('content')
    @include('site._parcial.footer')

    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn"><i class="fas fa-angle-up arrow-up"></i><i class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="{{ url('assets/user/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="{{ url('assets/user/js/vendors/bootstrap.min.js') }}"></script>
    <!--================= Wow.js =================-->
    <script src="{{ url('assets/user/js/vendors/wow.min.js') }}"></script>
    <!--================= Swiper Slider =================-->
    <script src="{{ url('assets/user/js/vendors/swiper-bundle.min.js') }}"></script>
    <!--================= Mobile Menu Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/metisMenu.min.js') }}"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/rtsmenu.js') }}"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="{{ url('assets/user/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <!--================= Main Script =================-->
    <script src="{{ url('assets/user/js/main.js') }}"></script>

    <!-- inicialização -->
    <script>
        // Magnific Popup dentro do Swiper
        $(document).ready(function() {
            $('.rts-cmmnSlider').on('click', '.image-popup-vertical-fit', function(e) {
                e.preventDefault();
                $.magnificPopup.open({
                    items: {
                        src: $(this).attr('href')
                    },
                    type: 'image',
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                });
            });
        });

        // Swiper com 4 slides
        new Swiper('.rts-cmmnSlider', {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            preventClicks: false,
            preventClicksPropagation: false,
            breakpoints: {
                1200: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 2
                },
                576: {
                    slidesPerView: 1
                }
            }
        });

        // Magnific Popup
        $(document).ready(function() {
            $('.rts-cmmnSlider').on('click', '.image-popup-vertical-fit', function(e) {
                e.preventDefault();
                $.magnificPopup.open({
                    items: {
                        src: $(this).attr('href')
                    },
                    type: 'image',
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                });
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($) {
            $('.rts-cmmnSlider').magnificPopup({
                delegate: 'a.image-popup-vertical-fit', // pega os links dentro do slider
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-img-mobile mfp-with-zoom',
                removalDelay: 300,
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        // item.el é o <a> clicado => usamos o atributo title (pode conter HTML)
                        return item.el ? item.el.attr('title') || '' : '';
                    }
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Swiper estático apenas neste carrossel ---
            var staticEl = document.getElementById('imagens-swiper');
            if (staticEl) {
                new Swiper(staticEl, {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    allowTouchMove: false, // desativa swipe
                    simulateTouch: false,
                    loop: false,
                    navigation: false,
                    autoplay: false,
                    breakpoints: {
                        1200: {
                            slidesPerView: 4
                        },
                        992: {
                            slidesPerView: 3
                        },
                        768: {
                            slidesPerView: 2
                        },
                        576: {
                            slidesPerView: 1
                        }
                    }
                });
            }

            // --- Inicializa Magnific Popup apenas neste carrossel ---
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.magnificPopup !== 'undefined') {
                jQuery('#imagens-swiper').magnificPopup({
                    delegate: 'a.image-popup-vertical-fit',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    mainClass: 'mfp-img-mobile mfp-with-zoom',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            return item.el ? item.el.attr('title') || '' : '';
                        }
                    }
                });
            }
        });
    </script>


</body>

</html>
