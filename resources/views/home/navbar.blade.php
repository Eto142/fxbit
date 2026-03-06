<!DOCTYPE html>
<html class="no-js" lang="">



<head>
    <meta charset="utf-8">
    <title>Fxbitoz Globals </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Start Here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/fav.png') }}">
    <!-- Bootstrap Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css') }}">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/animate.css') }}">
    <!-- Owl Carousel Start Here -->
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.theme.default.min.css') }}">
    <!-- Nivo Slider Start Here -->
    <link rel="stylesheet" href="{{ asset('vendor/nivo-slider/nivo-slider.css') }}">
    <!-- Sal Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/sal.css') }}" type="text/css">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/animate.min.css') }}">
    <!-- Slick Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/slick-theme.css') }}">
   <!-- Meanmenu Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/meanmenu.min.css') }}">
    <!-- All min Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/all.min.css') }}">
    <!-- Font Awesome CDN fallback -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Style Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
    <!-- Google Font Start Here -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
</head>
<body class="sticky-header">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!--=====================================-->
    <!--=   Scroll-up     Start             =-->
    <!--=====================================-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!--=====================================-->
    <!--=   Preloader     Start             =-->
    <!--=====================================-->
   
    <div class="wrapper" id="wrapper">
        <!--=====================================-->
        <!--=            Header Start           =-->
        <!--=====================================-->
        <header class="header">
            <div id="header-topbar" class="header-topbar-layout1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="topbar-left">
                                <p class="item-paragraph">Are you ready to grow up your business?</p>
                                <div class="header-button">
                                    <a href="#">Join our team <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout1">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="logo-area">
                                <a href="/" class="temp-logo">
                                    <img src="{{ asset('logo.png') }}" width="180" height="45" alt="logo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end d-lg-none">
                            <button class="meanmenu-reveal" style="display:block;" onclick="document.getElementById('dropdown').classList.toggle('mobile-menu-open')">
                                <span></span><span></span><span></span>
                            </button>
                        </div>
                        <div class="col-xl-8 col-lg-9 d-flex justify-content-end position-static">
                            <nav id="dropdown" class="template-main-menu">
                                <ul>
                                  
                                  
<li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About Us</a></li>
<li class="nav-item"><a href="{{ url('news') }}" class="nav-link">News </a>

</li>
<li class="nav-item"><a href="{{ url('investment') }}" class="nav-link">Investment </a>

</li>
<li class="nav-item"><a href="{{ url('banking') }}" class="nav-link">Our Banking</a></li>
<li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact </a>

									
									<li>
                                        <a href="{{ route('login') }}" class="text-danger">Login<i class="fa fa-lock" aria-hidden="true"></i>
</a>
                                    </li> 
                                    
                                </ul>
                            </nav>
                        </div>
                       
                    </div>
                </div>
            </div>
        </header>


        
 <div class="gtranslate_wrapper"></div>
<style>
    .gt_switcher_wrapper { transform: scale(0.55); transform-origin: top right; }
</style>
<script>
    window.gtranslateSettings = {
        "default_language": "en",
        "detect_browser_language": true,
        "wrapper_selector": ".gtranslate_wrapper",
        "switcher_horizontal_position": "right",
        "switcher_vertical_position": "bottom",
        "flags_size": 12,
        "switcher_text_size": 9,
        "alt_flags": {
            "en": "usa",
            "pt": "brazil",
            "es": "colombia",
            "fr": "quebec"
        }
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

          <!-- WhatsApp Float Button -->
    <style>
        .whatsapp-float {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 9999;
        }
        .whatsapp-float a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            text-decoration: none;
            transition: transform 0.2s ease;
        }
        .whatsapp-float a:hover {
            transform: scale(1.1);
        }
        .whatsapp-float svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
    </style>
    <div class="whatsapp-float">
        <a href="https://wa.me/16125249263" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M16 0C7.163 0 0 7.163 0 16c0 2.822.737 5.469 2.027 7.77L0 32l8.455-2.006A15.93 15.93 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.333a13.27 13.27 0 0 1-6.758-1.845l-.484-.287-5.017 1.19 1.22-4.878-.316-.502A13.267 13.267 0 0 1 2.667 16C2.667 8.636 8.636 2.667 16 2.667S29.333 8.636 29.333 16 23.364 29.333 16 29.333zm7.307-9.987c-.4-.2-2.366-1.168-2.732-1.3-.367-.133-.634-.2-.9.2s-1.033 1.3-1.267 1.567c-.233.267-.467.3-.867.1-.4-.2-1.688-.622-3.215-1.983-1.188-1.06-1.99-2.37-2.223-2.77-.233-.4-.025-.616.175-.815.18-.178.4-.467.6-.7.2-.233.267-.4.4-.667.133-.267.067-.5-.033-.7-.1-.2-.9-2.167-1.233-2.967-.325-.78-.655-.674-.9-.686l-.767-.013c-.267 0-.7.1-1.067.5s-1.4 1.367-1.4 3.333 1.433 3.867 1.633 4.133c.2.267 2.82 4.307 6.833 6.033.955.412 1.7.658 2.281.843.958.305 1.831.262 2.52.159.769-.115 2.366-.967 2.7-1.9.333-.933.333-1.733.233-1.9-.1-.167-.367-.267-.767-.467z"/>
            </svg>
        </a>
    </div>
    <!-- /WhatsApp Float Button -->
      