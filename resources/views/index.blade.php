@extends('layouts.main')

@section('content')
    <main class="overflow-hidden">
        <!-- Banner Start -->
        <section class="slick" data-slick='{"dots": false, "infinite": true, "speed": 300, "slidesToShow": 1, "slidesToScroll": 1,
         "arrows": false, "autoplay": true, "autoplaySpeed": 7000, "fade": false, "pauseOnHover": false}'>
            <div class="contant-box position-relative">
                <div class="bg-img fason-banner-bg hundread-vh">
                    <img src="{{ asset('assets/images/home-seven//banner-bg.png') }}" alt="image">
                </div>
                <div class="content-holder p-0 absolute-content">
                    <div class="container  w-100 h-100">
                        <div class="row g-0 align-items-center w-100 h-100">
                            <div class="col-xxl-4 col-lg-6 col-md-8">
                                <div
                                    class="content-common fashon7 wow animated fadeInUp  position-relative text-md-start">
                                    <h6>
                                        Get up to <span>50%</span> off
                                    </h6>
                                    <h1>
                                        High value fashion brands for women
                                    </h1>
                                    <a href="#0" class="fasun7btn">
                                        <span> Explore now</span>
                                        <span><i class="flaticon-right-arrow-2"> </i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contant-box position-relative">
                <div class="bg-img fason-banner-bg hundread-vh">
                    <img src="{{ asset('assets/images/home-seven//banner-bg.png') }}" alt="image">
                </div>
                <div class="content-holder p-0 absolute-content">
                    <div class="container w-100 h-100">
                        <div class="row g-0 align-items-center w-100 h-100">
                            <div class="col-xxl-4 col-lg-6 col-md-8">
                                <div
                                    class="content-common fashon7 wow animated fadeInUp  position-relative text-md-start">
                                    <h6>
                                        Get up to <span>50%</span> off
                                    </h6>
                                    <h1>
                                        High value fashion brands for women
                                    </h1>
                                    <a href="#0" class="fasun7btn">
                                        <span> Explore now</span>
                                        <span><i class="flaticon-right-arrow-2"> </i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner End -->

        <!-- catagory Start -->
        <section class="catagory pt-120 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-header wow fadeInUp animated">
                            <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s"> Shop by Category </h2>
                            <p class=" wow animated fadeInUp "> Conubia neque Nisi suspendisse aenean ullamcorper augue
                                adipiscing </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-custom-padding col-sm-6 col-6 mt-30 wow animated fadeInUp ">
                        <div class="fashon-catagory text-center ">
                            <a href="#0" class="thumb d-block">
                                <img src="{{ asset('assets/images/home-seven/catagory-1.jpg') }}" alt="">
                            </a>
                            <a href="#0" class="d-block mt-3">
                                <h6> Women Fashion </h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-custom-padding col-sm-6 col-6 mt-30 wow animated fadeInUp ">
                        <div class="fashon-catagory text-center ">
                            <a href="#0" class="thumb d-block">
                                <img src="{{ asset('assets/images/home-seven/catagory-2.jpg') }}" alt="">
                            </a>
                            <a href="#0" class="d-block mt-3">
                                <h6> Women Accessories</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-custom-padding col-sm-6 col-6 mt-30 wow animated fadeInUp ">
                        <div class="fashon-catagory text-center ">
                            <a href="#0" class="thumb d-block">
                                <img src="{{ asset('assets/images/home-seven/catagory-3.jpg') }}" alt="">
                            </a>
                            <a href="#0" class="d-block mt-3">
                                <h6> Man Fashion</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-custom-padding col-sm-6 col-6 mt-30 wow animated fadeInUp ">
                        <div class="fashon-catagory text-center ">
                            <a href="#0" class="thumb d-block">
                                <img src="{{ asset('assets/images/home-seven/catagory-4.jpg') }}" alt="">
                            </a>
                            <a href="#0" class="d-block mt-3">
                                <h6> Man Accessories </h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pt-120">
                    <div class="row justify-content-center mt--30">
                        <div class="col-md-6 mt-30 wow animated fadeInUp  ">
                            <div class="fashon-catagory">
                                <a href="#0" class="thumb d-block">
                                    <img src="{{ asset('assets/images/home-seven/catagory-5.jpg') }}" alt="">
                                </a>
                                <a href="#0" class="d-block mt-3">
                                    <h6> New neutrals for all </h6>
                                </a>
                                <a href="#0" class="fasun7btn mt-1">
                                    <span>Shop now</span>
                                    <span><i class="flaticon-right-arrow-2"> </i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-30 wow animated fadeInUp ">
                            <div class="fashon-catagory">
                                <a href="#0" class="thumb d-block">
                                    <img src="{{ asset('assets/images/home-seven/catagory-6.jpg') }}" alt="">
                                </a>
                                <a href="#0" class="d-block mt-3">
                                    <h6> Women Accessories</h6>
                                </a>
                                <a href="#0" class="fasun7btn mt-1">
                                    <span>Shop now</span>
                                    <span><i class="flaticon-right-arrow-2"> </i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- catagory End -->


        <!-- products-grid Start -->
        <section class="products-grid pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-header wow fadeInUp animated">
                            <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s">New Arrivals </h2>
                            <p class=" wow animated fadeInUp "> Conubia neque Nisi suspendisse aenean ullamcorper augue
                                adipiscing </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-1.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Men Denim Shirt 2022 </a>
                                </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$45</p>
                                    <span class="pe-1"><del> $90.00</del></span>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-2.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Men Leather Jacket </a>
                                </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$145</p>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img class="products-grid-one__mainimage products-grid-one__first-img"
                                         src="{{ asset('assets/images/home-seven/product-3.png') }}" alt="Alt">
                                    <img class="products-grid-one__hover-img"
                                         src="{{ asset('assets/images/home-seven/product-1.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html">Men Cotton Wear </a> </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$35</p>
                                    <span class="pe-1"><del> $60.00</del></span>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <div class="products-grid-one__badge-box">
                                    <span class="bg_base badge round ">New</span>
                                </div>
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-4.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html">Men Cotton Shirt </a> </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$55</p>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <div class="products-grid-one__badge-box">
                                    <span class="bg_base badge round new">-30%</span>
                                </div>
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img class="products-grid-one__mainimage products-grid-one__first-img"
                                         src="{{ asset('assets/images/home-seven/product-5.png') }}" alt="Alt">
                                    <img class="products-grid-one__hover-img"
                                         src="{{ asset('assets/images/home-seven/product-8.png') }}" alt="Alt">
                                </a>

                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Winter White Sweater</a>
                                </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$58</p>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-6.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Casual Summer Dress </a>
                                </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$46</p>
                                    <span class="pe-1"><del> $76.00</del></span>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-7.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Wear Silk Blouse Trouser
                                    </a> </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$52</p>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-custom-padding col-sm-6 col-6 wow fadeInUp animated ">
                        <div class="products-grid-one product4 fason7">
                            <div class="products-grid-one__product-image">
                                <a href="shop-details-1.html" class="d-block products-grid__image_holder">
                                    <img src="{{ asset('assets/images/home-seven/product-8.png') }}" alt="Alt">
                                </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li>
                                            <a href="shop-details-1.html">
                                                <i class="flaticon-view"></i>
                                                <span> quick view</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class="flaticon-like"> </i>
                                                <span>wishlist</span> </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-shopping-bag"></i>
                                                <span>Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                                <span> Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-grid__content fason7">
                                <h5 class="product_name p-0"><a href="shop-details-1.html"> Women Summer Dress</a> </h5>
                                <div class="price price5 d-flex align-content-center justify-content-center">
                                    <p>$66</p>
                                </div>
                                <div class="ratting pt-0">
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="rated flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- products-grid End -->

        <!-- Discount Start -->
        <section class="discount-box mt-60 mb-60">
            <div class="content-box  position-relative">
                <img src="{{ asset('assets/images/home-seven/discount.png') }}" alt="" class="background-img">
                <div class="content absolute-content">
                    <div class="container w-100 h-100">
                        <div class="row w-100 h-100 justify-content-end align-items-center">
                            <div class="col-xxl-5 col-lg-9 text-lg-center text-end">
                                <h6 class=" wow animated fadeInUp "> All women’s collection </h6>
                                <h1 class=" wow animated fadeInUp" data-wow-delay="0.3s"> 50% off </h1>
                                <a href="#0" class="button style2 wow animated fadeInUp  fashon--primary"
                                   data-wow-delay="0.4s">
                                    <span> Explore now</span>
                                    <span><i class="flaticon-right-arrow-2  wow animated fadeInUp  ps-2"> </i></span>
                                </a>
                                <p class=" wow animated fadeInUp ">Limited Time Offer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Start Blog Two-->
        <section class="blog pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-header wow fadeInUp animated">
                            <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s">Eng so'nggi hikoya</h2>
                            <p class=" wow animated fadeInUp ">Conubia neque Nisi suspendisse aenean ullamcorper augue
                                adipiscing </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                        <div class="blog4-single fasonb7 mt-30">
                            <a href="blog-single.html" class="thumb">
                                <img src="{{ asset('assets/images/home-seven/blog-1.png') }}" alt="" />
                            </a>
                            <div class="blog-content">
                                <p>by martin / 28 august, 2021</p>
                                <a href="blog-single.html" class="d-block">
                                    <h4>Moveth apear he man creature</h4>
                                </a>
                                <a href="#0" class="fasun7btn">
                                    <span> Explore now</span>
                                    <span><i class="flaticon-right-arrow-2"> </i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                        <div class="blog4-single fasonb7 mt-30">
                            <a href="blog-single.html" class="thumb">
                                <img src="{{ asset('assets/images/home-seven/blog-2.png') }}" alt="" />
                            </a>
                            <div class="blog-content">
                                <p>by martin / 21 august, 2022</p> <a href="blog-single.html" class="d-block">
                                    <h4> Herb firmament to above grass </h4>
                                </a>
                                <a href="#0" class="fasun7btn">
                                    <span> Explore now</span>
                                    <span><i class="flaticon-right-arrow-2"> </i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                        <div class="blog4-single fasonb7 mt-30"> <a href="blog-single.html" class="thumb">
                                <img src="{{ asset('assets/images/home-seven/blog-3.png') }}" alt="" />
                            </a>
                            <div class="blog-content">
                                <p>by martin / 18 august, 2022</p> <a href="blog-single.html" class="d-block">
                                    <h4> Give a yielding give image was </h4>
                                </a>
                                <a href="#0" class="fasun7btn">
                                    <span> Explore now</span>
                                    <span><i class="flaticon-right-arrow-2"> </i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog Two-->


        <!-- review-one Start -->
        <section class="review-one pt-60 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-header wow fadeInUp animated">
                            <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s"> What Client’s Say </h2>
                            <p class=" wow animated fadeInUp "> Over 10000 Reviews</p>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp animated">
                        <div class="reviewOneSlider ">
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('assets/images/testimonial/testimonial-v1-1.png') }}"
                                                                 alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                            thinking. Quickly network synergistic enterprise customer service” </p>
                                        <h4> <a href="#0">Ana Fleming </a> </h4> <span> Web Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('assets/images/testimonial/testimonial-v1-2.png') }}"
                                                                 alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                            thinking. Quickly network synergistic enterprise customer service” </p>
                                        <h4> <a href="#0">Elaine Hayes</a> </h4> <span>UI/UX Designer </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('assets/images/testimonial/testimonial-v1-3.png') }}"
                                                                 alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                            thinking. Quickly network synergistic enterprise customer service” </p>
                                        <h4> <a href="#0">Jane Young </a> </h4> <span>Web Engineer </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('assets/images/testimonial/testimonial-v1-2.png') }}"
                                                                 alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                            thinking. Quickly network synergistic enterprise customer service” </p>
                                        <h4> <a href="#0">Kim Douglas </a> </h4> <span>React Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsLetter-one Start -->

    </main>
@endsection
