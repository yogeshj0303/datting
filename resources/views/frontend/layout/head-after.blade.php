<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Options</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
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
<?php
$data =  session()->get('clientid');
  $clients = DB::table('clients')->where('id',"=",$data)->first();
?>
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
                        <a href="{{url('search')}}"> <i class="fa-solid fa-magnifying-glass"></i> Search </a>
                    </li>
                    <li>
                        <a href="{{url('interest')}}"> <i class="fa-sharp fa-solid fa-heart"></i> Interest </a>
                    </li>
                    <li>
                        <a href="{{url('options')}}"> <i class="fa-solid fa-wand-magic-sparkles"></i> Options </a>
                    </li>
                    <li>
                        <a href="{{url('message')}}"> <i class="fa-solid fa-message"></i> Messages </a>
                    </li>
                    <li>
                        <a href="{{url('subscription')}}"> <i class="fa-solid fa-lock-open"></i> Upgrade </a>
                    </li>
                    <li>
                        <a href="{{url('wallet')}}"> <i class="fa-solid fa-wallet"></i> Wallet </a>
                    </li>
                    <li>
                        <a href="{{url('userprofile')}}"> <i class="fa-regular fa-user"></i> <span class="d-md-inline d-none">{{ $clients->username }}</span> </a>
                    </li>
                </ul>
            </div>
            <div class="d-lg-none d-md-flex d-flex align-items-center">
                <button class="hamburger">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <a href="profile"> <i class="fa-regular fa-user"></i> </a>
            </div>
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
                    <a href="{{url('search')}}"> <h5> <i class="fa-solid fa-magnifying-glass"></i> Search </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('interest')}}"> <h5> <i class="fa-sharp fa-solid fa-heart"></i> Interest </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('options')}}"> <h5> <i class="fa-solid fa-wand-magic-sparkles"></i> Options </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('message')}}"> <h5> <i class="fa-solid fa-message"></i> Messages </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('subscription')}}"> <h5> <i class="fa-solid fa-lock-open"></i> Upgrade </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('wallet')}}"> <h5> <i class="fa-solid fa-wallet"></i> Wallet </h5> </a>
                </div>
                <div class="p-2">
                    <a href="{{url('profile')}}"> <h5> <i class="fa-regular fa-user"></i> william_smith </h5> </a>
                </div>
            </div>
        </div>
    </div>





