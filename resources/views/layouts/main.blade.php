<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->
    <title>Metal | Cart</title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon-32x32.png') }}" type="image/x-icon">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.5.1.1.min.css') }}">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/slick.css') }}">
    <!--  Ui Tabs Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/jquery-ui.min.css') }}">
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/magnific-popup.css') }}">
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.v1.0.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="fashon7">
<!-- ==========Preloader========== -->
<div class="loader"><span>SHOP-CART...</span></div>
<!-- ==========Preloader========== -->
<!--===scroll bottom to top===-->
<a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
<!--===scroll bottom to top===-->
<!-- header-default start -->
<header class="header-style-1">
    <!-- Start Desktop Menu -->
    <div class="menubox">
        <div class="top-info f3 d-flex fasontop">
            <div class="container">
                <div
                    class="row g-0 top-info__top-content d-flex align-items-center justify-content-betweentop-info__top-content d-flex align-items-center justify-content-between">
                    <div class="col-sm-4 col-6">
                        <div class="d-flex toptext align-items-center">
                            <p><span>{{ __('Saytimizga xush kelibsiz') }} !</span></p>
                        </div>
                    </div>
                    <div class="col-4 d-sm-block d-none">
                        <div class="thm-medio-boxx1">
                            <ul class="social-box socialfason">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="flaticon-facebook-app-symbol"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" target="_blank">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" target="_blank">
                                        <i class="flaticon-pinterest-social-logo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="language tofilter me-3">
                                <select>
                                    <option>ENGLISH</option>
                                    <option value="1">GERMAN</option>
                                    <option value="4">FRENCH</option>
                                </select>
                            </div>
                            <div class="language tofilter">
                                <select>
                                    <option>USD</option>
                                    <option value="1">So'm</option>
                                    <option value="4">Рубел</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu d-lg-none d-block">
            <div class="mobile-menu__menu-top border-bottom-0">
                <div class="container ">
                    <div class="row">
                        <div class="menu-info d-flex justify-content-between align-items-center">
                            <div class="menubar"><span></span> <span></span> <span></span></div>
                            <a href="index.html" class="logo">
                                <h2>METAL-CART</h2>
{{--                                <img src="{{ asset('assets/images/logo/logo-6.png') }}" alt=""> --}}
                            </a>
                            <div class="cart-holder">
                                <a href="#0" class="cart cart-icon position-relative">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-closer"></div>
            <div class="mobile-menu__sidebar-menu">
                <div class="menu-closer two"><span> Close Menu</span> <span class="cross"><i
                            class="flaticon-cross"></i></span></div>
                <div class="search-box-holder fashonsearch">
                    <form action="#0">
                        <div class="form-group search-box menu"><input type="text" class="form-control"
                                                                       placeholder="Search for products"> <span
                                class="search-icon"> <i
                                    class="flaticon-loupe"></i> </span></div>
                    </form>
                </div>
                <ul class="page-dropdown-menu">
                    <li class="dropdown-list">
                        <a href="{{ route('index') }}"> <span>Home </span></a>
                        <a href="{{ route('product.index') }}"> <span>Product</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-menu border-bottom-0 d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex align-items-center">
                        <a href="{{ route('admin') }}" class="ftel">
                                <span class="pe-2">
                                    <i class="flaticon-phone"></i>
                                </span>
                            <span>
                                    (+99) 890 5967757
                                </span>
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="index.html" class="logo">
                            <h2>METAL-CART</h2>
{{--                            <img src="{{ asset('assets/images/logo/logo-6.png') }}" alt="">--}}
                        </a>
                    </div>
                    <div class="col-4 text-end">
                        <a href="#0" class="fason-cart">
                            Cart Item <span>(0)</span>
                            <i class="flaticon-shopping-bag"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mega-menu-default mega-menu fason-megamenu d-lg-block d-none">
            <div class="container">
                <div class="row g-o position-relative align-items-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <nav>
                            <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                <li class="dropdown-list">
                                    <a href="{{ route('index') }}" class="ps-0"><span>Home</span></a>
                                    <a href="{{ route('product.index') }}"> <span>Product</span></a>
                                </li>
                            </ul>
                        </nav>
                        <ul class="main-menu__widge-box fason7-widge d-flex align-items-center">
                            <li class="search-box-holder">
                                <form action="#0">
                                    <div class="form-group search-box menu">
                                            <span class="search-icon">
                                                <i class="flaticon-loupe"></i>
                                            </span>
                                    </div>
                                </form>
                            </li>
                            <li class="cartm">
                                <a href="#0" class="number cart-icon">
                                    <i class="flaticon-shop-bag"></i>
                                </a>
                            </li>
                            <li class="d-lg-block d-none">
                                <a href="my-account.html"><i class="flaticon-account"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticy-header">
        <div class="menubox">

            <div class="mobile-menu d-lg-none d-block">
                <div class="mobile-menu__menu-top border-bottom-0">
                    <div class="container ">
                        <div class="row">
                            <div class="menu-info d-flex justify-content-between align-items-center">
                                <div class="menubar"><span></span> <span></span> <span></span></div>
                                <a href="index.html" class="logo">
                                    <h2>METAL-CART</h2>
{{--                                    <img  src="{{ asset('assets/images/logo/logo-6.png') }}" alt="">--}}
                                </a>
                                <div class="cart-holder">
                                    <a href="#0" class="cart cart-icon position-relative">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-closer"></div>
                <div class="mobile-menu__sidebar-menu">
                    <div class="menu-closer two"><span> Close Menu</span> <span class="cross"><i
                                class="flaticon-cross"></i></span></div>
                    <div class="search-box-holder fashonsearch">
                        <form action="#0">
                            <div class="form-group search-box menu"><input type="text" class="form-control"
                                                                           placeholder="Search for products"> <span
                                    class="search-icon"> <i
                                        class="flaticon-loupe"></i> </span></div>
                        </form>
                    </div>
                    <ul class="page-dropdown-menu">
                        <li class="dropdown-list"><a href="#0"> <span>Home </span></a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="mega-menu-default mega-menu fason-megamenu d-lg-block d-none">
                <div class="container">
                    <div class="row g-0 position-relative align-items-center">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="index.html" class="logo">
                                <h2>METAL-CART</h2>
{{--                                <img src="{{ asset('assets/images/logo/logo-6.png') }}" alt=""> --}}
                            </a>
                            <nav>
                                <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                    <li class="dropdown-list"><a href="#0" class="ps-0"> <span>Home</span> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box-holder d-lg-block d-none">
        <form action="#0">
            <div class="search-box-popup">
                <div class="search-box-popup-content position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="width d-flex align-items-center">
                                    <div class="search-box-close two"></div>
                                    <div class="form-group search-box common position-relative"><input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="Search for products">
                                        <span
                                            class="search-icon"> <i class="flaticon-magnifying-glass"></i> </span>
                                    </div>
                                    <div class="search-box-close one"><span> X </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="sidebar-content-closer"></div>
    <div class="sidebar-content fashonmenu3">
        <div class="sidebar-widget-container">
            <div class="widget-heading d-flex justify-content-end align-content-center"> <span
                    class="close-side-widget">X</span></div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo"><a href="index.html"><img
                                    src="{{ asset('assets/images/logo/logo-white.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="content-box">
                            <h4>About Us</h4>
                            <div class="inner-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                            </div>
                        </div>
                        <div class="form_inner">
                            <h4>Support</h4>
                            <form action="index.html" method="post">
                                <div class="form-group mt-4"><input type="text" name="name" placeholder="Name"
                                                                    required=""></div>
                                <div class="form-group mt-4"><input type="email" name="email" placeholder="Email"
                                                                    required=""></div>
                                <div class="form-group mt-4"> <textarea name="message"
                                                                        placeholder="Message..."></textarea></div>
                                <div class="form-group message-btn mt-4">
                                    <button type="submit"
                                            class="btn--secondary"><span class="txt">Submit Now</span></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-contact-info">
                            <h4>Contact Info</h4>
                            <ul>
                                <li><span class="flaticon-pin-1"></span> New York, United States</li>
                                <li><span class="flaticon-telephone"></span> <a href="tel:+44203700001">+44 123 456
                                        789</a></li>
                                <li><span class="flaticon-mail"></span> <a
                                        href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                        <div class="thm-medio-boxx1">
                            <ul class="social-box green">
                                <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i
                                            class="flaticon-facebook-app-symbol"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/" target="_blank"><i
                                            class="flaticon-twitter"></i></a></li>
                                <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><i
                                            class="flaticon-instagram"></i></a></li>
                                <li class="youtube"><a href="https://www.youtube.com/" target="_blank"><i
                                            class="flaticon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

@yield('content')

<!--Start Footer-->
<footer class="fashonfooter pt-60">
    <div class="container">
        <div class="row pb-60 align-items-center">
            <div class="col-12">
                <div class="partner-fholder pt-60 pb-60">
                    <div class="partnerslider-four">
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-1.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-2.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-3.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-4.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-1.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-3.png') }}" alt="">
                            </div>
                        </a>
                        <a href="#0" class="partner-one__brand ">
                            <div class="img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/home-seven/partner-4.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-lg-block d-none pt-60 text-center">
                <h5> Our Newsletter</h5>
            </div>
            <div class="col-lg-3 text-lg-start text-center mt-30 wow fadeInUp animated">
                <a href="index.html" class="logo d-inline-block">
                    <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-12  mt-30">
                <div class="footersearch text-center">
                    <div class="search-box-holder">
                        <form action="#0">
                            <div class="form-group search-box ">
                                <input type="email" class="form-control h-100" placeholder="Email Address">
                                <button class="fashon--primary"> Subscrive Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-30">
                <div class="copyright pt-0 wow fadeInUp text-lg-end text-center animated">
                    <p> &copy;2022 <a href="index.html">Karte.</a> All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-12 text-center">
                <ul class="social-box fasonmedia text-center">
                    <li class="facebook">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/" target="_blank">
                            <i class="flaticon-twitter"></i>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="flaticon-instagram"></i>
                        </a>
                    </li>
                    <li class="youtube">
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="flaticon-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer-bottom Footer-->
    <div class="footer-bottom-menu">
        <ul class="d-flex align-items-center justify-content-center">
            <li><a href="contact.html">Policy</a></li>
            <li><a href="contact.html"> Term & Conditions</a></li>
            <li><a href="contact.html">Affillate</a></li>
            <li><a href="contact.html">Help</a></li>
        </ul>
    </div>
</footer>
<!--==== Js Scripts Start ====-->

<!-- Jquery v3.6.0 Js -->
<script src="{{ asset('assets/js/jqurey.v3.6.0.min.js') }}"></script>
<!-- Popper v2.9.3 Js -->
<script src="{{ asset('assets/js/popper.v2.9.3.min.js') }}"></script>
<!-- Bootstrap v5.1.1 js -->
<script src="{{ asset('assets/js/bootstrap.v5.1.1.min.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/js/plugin/jquery-ui.min.js') }}"></script>
<!-- Parallax js -->
<script src="{{ asset('assets/js/plugin/jarallax.min.js') }}"></script>
<!-- Slick Slider Js -->
<script src="{{ asset('assets/js/plugin/slick.min.js') }}"></script>
<!-- isotope Js -->
<script src="{{ asset('assets/js/plugin/isotope.js') }}"></script>
<!-- magnific-popup v2.3.4 Js -->
<script src="{{ asset('assets/js/plugin/jquery.magnific-popup.min.js') }}"></script>
<!-- Tweenmax v2.3.4 Js -->
<script src="{{ asset('assets/js/plugin/tweenMax.min.js') }}"></script>
<!-- Nice Select Js -->
<script src="{{ asset('assets/js/plugin/nice-select.v1.0.min.js') }}"></script>
<!-- Wow js -->
<script src="{{ asset('assets/js/plugin/wow.v1.3.0.min.js') }}"></script>
<!-- Wow js -->
<script src="{{ asset('assets/js/plugin/jquery.countdown.min.js') }}"></script>
<!-- Main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--==== Js Scripts End ====-->
</body>

</html>

