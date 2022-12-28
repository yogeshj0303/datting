<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Options</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" />  --}}
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" />  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/icofont.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/odometer.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/lightcase.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style2.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>
<body>

    {{-- =============================================
                        PRELOADER
    ============================================  --}}
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    {{-- =============================================
                         HEADER TOP
    ============================================  --}}

    <div class="header-top bg-theme d-none">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">
                    <li>
                        <i class="icofont-email"></i> Beverley, New York 224 USA
                    </li>
                    <li>
                        <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                    </li>
                </ul>
                <ul class="social-icons d-flex align-items-center">
                    <li>
                        <p>
                            Find us on :
                        </p>
                    </li>
                    <li>
                        <a href="#" class="fb"><i class="icofont-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icofont-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" class="vimeo"><i class="icofont-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- =============================================
                         HEADER MAIN
    ============================================  --}}
    <div class="container-fluid header-main">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset("assets/images/logo/logo.png") }}" alt="" class="w-100 h-100">
                </a>
            </div>
            <div class="head-links my-auto d-lg-block d-none">
                <ul>
                    <li>
                        <a href="{{url('about')}}"> <i class="fa-regular fa-building"></i> About Us</a>
                    </li>
                    <li>
                        <a href="{{url('how-it-works')}}"> <i class="fa-solid fa-gamepad"></i> How It Works</a>
                    </li>
                    <li>
                        <a href="{{url('options')}}"> <i class="fa-solid fa-wand-magic-sparkles"></i> Options</a>
                    </li>
                    <li>
                        <a href="{{url('loginfront')}}"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                    <li class="join">
                        <a href="{{url('sign-up')}}"> <i class="fa-solid fa-file-signature"></i> Join</a>
                    </li>
                </ul>
            </div>
            <button class="hamburger d-lg-none d-md-block d-block">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </div>

    {{-- =============================================
                        MOBILE MENU
    ============================================  --}}

    <div class="container-fluid mobile-menu">
        <div>
            <div class="close-head-btn">
                <button class="close-menu">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
            <div class="mobile-menu-links">
                <div class="p-2">
                    <a href="#"> <h5> <i class="fa-regular fa-building"></i> About Us </h5> </a>
                </div>
                <div class="p-2">
                    <a href="#"> <h5> <i class="fa-solid fa-gamepad"></i> How It Works </h5> </a>
                </div>
                <div class="p-2">
                    <a href="options"> <h5> <i class="fa-solid fa-wand-magic-sparkles"></i> Options</h5> </a>
                </div>
                <div class="p-2">
                    <a href="login"> <h5> <i class="fa-solid fa-arrow-right-to-bracket"></i> Log In </h5> </a>
                </div>
                <div class="p-2">
                    <a href="sign-up"> <h5> <i class="fa-solid fa-file-signature"></i> Join Us </h5> </a>
                </div>
            </div>
        </div>
    </div>





