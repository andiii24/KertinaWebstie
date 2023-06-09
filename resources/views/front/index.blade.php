<!DOCTYPE html>
<html lang="en">

@include('front.layout.head')

<body class="home-one">

    <!-- header style two -->

    <!-- header area start -->
    @include('front.layout.nav')
    <!-- header area end -->

    <!-- side bar for desktop -->
    <div
        id="side-bar"
        class="side-bar header-one"
    >
        <div class="inner">
            <button class="close-icon-menu"><i class="far fa-times"></i></button>
            <!-- inner menu area desktop start -->
            <div class="inner-main-wrapper-desk d-none d-lg-block">
                <div class="thumbnail">
                    <img
                        src="{{ asset('assets/images/logo/01.svg') }}"
                        alt="dinenos"
                    >
                </div>
                <div class="banner-shape-area">
                    <span class="shape"></span>
                    <span class="shape"></span>
                    <span class="shape"></span>
                </div>
                <div class="inner-content">
                    <ul class="feature-list">
                        <li class="query-list">
                            <span class="sub-text">18/B, New Ave 1000 New York</span>
                            <a
                                class="phone"
                                href="tel:99988899900"
                            >999 888 999 00</a>
                            <a
                                class="email"
                                href="mail-to_office%40webmailfree.html"
                            >office@webmailfree.com</a>
                        </li>
                        <li class="query-list two">
                            <p class="time">Mon - Thu: 10 AM - 02 AM</p>
                            <p class="time">Fri - Sun: 10 AM - 02 AM</p>
                        </li>
                    </ul>
                    <div class="footer">
                        <ul class="social-area">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- mobile menu area start -->
            <div class="mobile-menu d-block d-lg-none">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul
                        class="mainmenu"
                        id="mobile-menu-active"
                    >
                        <li class="has-droupdown">
                            <a
                                href="#"
                                class="main"
                            >Home</a>
                        </li>

                    </ul>
                </nav>

                <div class="social-wrapper-one">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <!-- banner start -->
    <div class="rts-banner-main-area-swiper banner-one">
        <div class="banner-area-sidebar">
            <div class="mail"><a href="mail-to_info%40webmail.html">info@webmail.com</a></div>
            <div class="content">
                <p class="open">Opening Hour:</p>
                <div class="time">10:00AM-8:00PM</div>
            </div>
        </div>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->

            <div class="swiper-pagination"></div>

            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <!-- rts-banner area end-->
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 1998
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Discover the Taste of Ethiopia at
                                            <br>
                                            Kertina Bar & Restaurant
                                        </h1>
                                        <div class="button-area-banner">
                                            <a
                                                href="about.html"
                                                class="rts-btn btn-primary"
                                            >View More</a>
                                            <a
                                                href="menu-list.html"
                                                class="rts-btn btn-seconday"
                                            >Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts-banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts-banner area end-->
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 1998
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Discover the Taste of Ethiopia at
                                            <br>
                                            Kertina Bar & Restaurant
                                        </h1>
                                        <div class="button-area-banner">
                                            <a
                                                href="about.html"
                                                class="rts-btn btn-primary"
                                            >View More</a>
                                            <a
                                                href="menu-list.html"
                                                class="rts-btn btn-seconday"
                                            >Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts-banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts-banner area end-->
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 1998
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Discover the Taste of Ethiopia at
                                            <br>
                                            Kertina Bar & Restaurant
                                        </h1>
                                        <div class="button-area-banner">
                                            <a
                                                href="about.html"
                                                class="rts-btn btn-primary"
                                            >View More</a>
                                            <a
                                                href="menu-list.html"
                                                class="rts-btn btn-seconday"
                                            >Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts-banner area end -->
                </div>
                <!-- If we need pagination -->
            </div>
            <!-- If we need navigation buttons -->
        </div>
    </div>
    <!-- banner end -->

    <!-- reservation start -->

    <!-- reservation end -->

    <!-- about area start -->
    <div class="rts-about-area rts-section-gapTop bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 pr--60 pr_sm--0 mt_md--50 mt_sm--50 pl_md--0 pl_sm--0 pb_md--150 pb_sm--70">
                    <div class="about-one-img">
                        <div class="thumbnail-1">
                            <img
                                src="{{ asset('assets/images/about/about1.png') }}"
                                alt="about"
                            >
                            <div class="line">
                                <img
                                    src="{{ asset('assets/images/about/line-shape-1.webp') }}"
                                    alt="about"
                                >
                            </div>
                        </div>
                        <div class="thumbnail-2">
                            <div class="reveal-item overflow-hidden aos-init">
                                <div
                                    class="reveal-animation reveal-end reveal-primary aos aos-init"
                                    data-aos="reveal-end"
                                ></div>
                                <img
                                    src="{{ asset('assets/images/about/about2.jpg') }}"
                                    alt="about"
                                >
                            </div>
                            <span><img
                                    src="{{ asset('assets/images/about/round.png') }}"
                                    alt="about"
                                ></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 pr--10">
                    <div class="banner-one-wrapper ptb--110">
                        <div
                            class="title-img"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <img
                                src="{{ asset('assets/images/about/title-shape.png') }}"
                                alt="about"
                            >
                        </div>
                        <h1
                            class="title-banner"
                            data-sal="slide-up"
                            data-sal-delay="170"
                            data-sal-duration="800"
                        >
                            Kertina Addis Bar & Restaurant
                        </h1>
                        <div
                            class="banner-shape-area"
                            data-sal="slide-up"
                            data-sal-delay="200"
                            data-sal-duration="800"
                        >
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <p
                            class="desc"
                            data-sal="slide-up"
                            data-sal-duration="800"
                        >It’s the story of an everlasting love affair, Dieter Delicioz and <br> the Atlantic Ocean. Our proximity to the abundant riches of <br> the sea and Portugal’s excellent produce.</p>
                        <div
                            class="button-area-banner"
                            data-sal="slide-up"
                            data-sal-delay="350"
                            data-sal-duration="800"
                        >
                            <a
                                href="menu-list.html"
                                class="rts-btn btn-secondary"
                            >More Foods</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- marquee area start -->
    <div class="rts-marquee-area rts-section-gap bg-white">
        <div class="left"></div>
        <div class="marquee">
            <div class="marquee-content">
                <div class="marquee-tag">
                    <h3>Welcome To Kertina Bar Addis & Restaurant <span></span></h3>
                </div>
                <div class="marquee-tag">
                    <h3>Welcome To Kertina Bar Addis & Restaurant <span></span></h3>
                </div>
                <div class="marquee-tag">
                    <h3>Welcome To Kertina Addis Bar & Restaurant <span></span></h3>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>
    <!-- marquee area end -->

    <!-- MENU area start -->
    <div class="rts-menu-area rts-section-gapTop">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="shape-1"><img
                                src="{{ asset('assets/images/project/vector1.webp') }}"
                                alt="shape"
                            ></div>
                        <div class="shape-2"><img
                                src="{{ asset('assets/images/project/vector2.webp') }}"
                                alt="shape"
                            ></div>
                        <div
                            class="title-img"
                            data-sal="zoom-in"
                            data-sal-delay="100"
                            data-sal-duration="800"
                        >
                            <img
                                src="{{ asset('assets/images/about/title-shape.png') }}"
                                alt="about"
                            >
                        </div>
                        <h1
                            class="title-banner"
                            data-sal="slide-up"
                            data-sal-delay="120"
                            data-sal-duration="800"
                        >
                            Our Food Menu
                        </h1>
                        <p
                            class="desc"
                            data-sal="slide-up"
                            data-sal-duration="800"
                        >It’s the story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12 text-center">
                    <div
                        class="portfolio-menu mb-35"
                        data-sal="slide-up"
                        data-sal-delay="450"
                        data-sal-duration="800"
                    >
                        <button
                            class="gf_btn active"
                            data-filter="*"
                        >All</button>
                        <button
                            class="gf_btn"
                            data-filter=".cat1"
                        >Beakfast</button>
                        <button
                            class="gf_btn"
                            data-filter=".cat2"
                        >Dinner</button>
                        <button
                            class="gf_btn"
                            data-filter=".cat3"
                        >Lunch</button>
                    </div>
                </div>
            </div>
            <div
                class="grid row align-items-center"
                data-sal="slide-up"
                data-sal-delay="270"
                data-sal-duration="800"
            >
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat3">
                    <div class="portfolio-wrapper2 mb--30">
                        <a
                            href="shop-details.html"
                            class="image"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/images/project/01.jpg') }}"
                                alt="Portfolio Img"
                            >
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="shop-details.html">Chicha Morada</a></p>
                                <span class="price">$33.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb--30">
                        <a
                            href="shop-details.html"
                            class="image"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/images/project/02.jpg') }}"
                                alt="Portfolio Img"
                            >
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="shop-details.html">Tommy’s Margarita</a></p>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="portfolio-wrapper2 mb--30">
                        <a
                            href="shop-details.html"
                            class="image"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/images/project/03.jpg') }}"
                                alt="Portfolio Img"
                            >
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="shop-details.html">Prickly Pear Tonic</a></p>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb--30">
                        <a
                            href="shop-details.html"
                            class="image"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/images/project/04.jpg') }}"
                                alt="Portfolio Img"
                            >
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="shop-details.html">Crispy Skin Chicken</a></p>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="button-area-banner"
                data-sal="slide-up"
                data-sal-delay="300"
                data-sal-duration="800"
            >
                <a
                    href="menu-list.html"
                    class="rts-btn btn-secondary"
                >Get Free Tour</a>
            </div>
        </div>
    </div>
    <!-- MENU area end -->

    <!-- contact area start -->
    <div class="rts-contact-area rts-section-gapTop bg-white ">
        <div class="contact-area-inner">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="banner-one-wrapper text-center">
                            <div class="shape-1"><img
                                    src="{{ asset('assets/images/contact/overly-line.webp') }}"
                                    alt=""
                                ></div>
                            <div
                                class="title-img"
                                data-sal="zoom-in"
                                data-sal-delay="100"
                                data-sal-duration="800"
                            >
                                <img
                                    src="{{ asset('assets/images/about/title-shape.png') }}"
                                    alt="about"
                                >
                            </div>
                            <h1
                                class="title-banner"
                                data-sal="slide-up"
                                data-sal-delay="120"
                                data-sal-duration="800"
                            >
                                Find Food Lounge
                            </h1>
                            <div
                                class="banner-shape-area"
                                data-sal="slide-up"
                                data-sal-delay="400"
                                data-sal-duration="800"
                            >
                                <span class="shape"></span>
                                <span class="shape"></span>
                                <span class="shape"></span>
                            </div>
                            <ul
                                class="address"
                                data-sal="slide-up"
                                data-sal-delay="450"
                                data-sal-duration="800"
                            >
                                <li>18/B, New Ave 1000 New York</li>
                                <li><a href="tel:99988899900">999 888 999 00</a></li>
                                <li><a href="mailto:office@webmailfree.com">office@webmailfree.com</a></li>
                                <li class="break"></li>
                                <li>Mon - Thu: 10 AM - 02 AM</li>
                                <li>Fri - Sun: 10 AM - 02 AM</li>
                            </ul>
                            <ul class="social-area">
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side-image">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div
                                class="reveal-animation reveal-end reveal-primary aos aos-init"
                                data-aos="reveal-end"
                            ></div>
                            <img
                                src="{{ asset('assets/images/contact/bg-01.jpg') }}"
                                alt="contact"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="counter-up-area">
                <!-- single fun facts  -->
                <div
                    class="rts-single-service-two"
                    data-sal="slide-up"
                    data-sal-delay="150"
                    data-sal-duration="800"
                >
                    <h2 class="title-main"><span class="counter">10</span></h2>
                    <p class="disc">
                        Awards Won
                    </p>
                </div>
                <!-- single fun facts end -->
                <!-- single fun facts  -->
                <div
                    class="rts-single-service-two"
                    data-sal="slide-up"
                    data-sal-delay="350"
                    data-sal-duration="800"
                >
                    <h2 class="title-main"><span class="counter">5</span> <span class="prefix">K</span></h2>
                    <p class="disc">
                        Dally Orders
                    </p>
                </div>
                <!-- single fun facts end -->
                <!-- single fun facts  -->
                <div
                    class="rts-single-service-two"
                    data-sal="slide-up"
                    data-sal-delay="550"
                    data-sal-duration="800"
                >
                    <h2 class="title-main"><span class="counter">99</span></h2>
                    <p class="disc">
                        Members
                    </p>
                </div>
                <!-- single fun facts end -->
                <!-- single fun facts  -->
                <div
                    class="rts-single-service-two"
                    data-sal="slide-up"
                    data-sal-delay="550"
                    data-sal-duration="800"
                >
                    <h2 class="title-main"><span class="counter">100</span></h2>
                    <p class="disc">
                        Menu & Dish
                    </p>
                </div>
                <!-- single fun facts end -->
                <!-- single fun facts  -->
                <div
                    class="rts-single-service-two"
                    data-sal="slide-up"
                    data-sal-delay="550"
                    data-sal-duration="800"
                >
                    <h2 class="title-main"><span class="counter">25</span></h2>
                    <p class="disc">
                        Specialities
                    </p>
                </div>
                <!-- single fun facts end -->
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- MENU area start -->
    <div class="rts-menu-area menu-area-2 rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="shape-2"><img
                                src="{{ asset('assets/images/project/vector4.webp') }}"
                                alt="shape"
                            ></div>
                        <div
                            class="title-img"
                            data-sal="zoom-in"
                            data-sal-delay="100"
                            data-sal-duration="800"
                        >
                            <img
                                src="{{ asset('assets/images/about/title-shape.png') }}"
                                alt="about"
                            >
                        </div>
                        <h1
                            class="title-banner"
                            data-sal="slide-up"
                            data-sal-delay="120"
                            data-sal-duration="800"
                        >
                            Starters & Main Dishes
                        </h1>
                        <p
                            class="desc"
                            data-sal="slide-up"
                            data-sal-duration="800"
                        >It’s the story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="menu-area-2-inner">
                <div class="shape-1"><img
                        src="{{ asset('assets/images/project/vector3.webp') }}"
                        alt="shape"
                    ></div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-01.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Chicha Morada</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$33.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-02.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Tommy’s Margarita</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$30.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-03.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Prickly Pear Tonic</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$15.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-04.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Crispy Skin Chicken</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$16.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-05.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Wild Mushroom Arancini</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$12.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-06.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Fresh Oysters Dozen</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$10.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-07.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Bruno’s Scribble</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$33.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-wrapper"
                            data-sal="zoom-in"
                            data-sal-delay="150"
                            data-sal-duration="800"
                        >
                            <div class="menu-image"><a href="shop-details.html"><img
                                        src="{{ asset('assets/images/project/sm-08.jpg') }}"
                                        alt="item"
                                    ></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="shop-details.html">Purple Corn Tostada</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$20.00</a></div>
                        </div>
                    </div>
                </div>
                <div
                    class="button-area-banner"
                    data-sal="slide-up"
                    data-sal-delay="150"
                    data-sal-duration="800"
                >
                    <a
                        href="about.html"
                        class="rts-btn btn-primary"
                    >View More</a>
                    <a
                        href="shop-details.html"
                        class="rts-btn btn-secondary"
                    >Food Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU area end -->

    <!-- gallery area start -->
    <div class="rts-gallery-area bg-white">
        <div class="gallery-area-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div
                        class="gallery-image"
                        data-sal="slide-up"
                        data-sal-delay="50"
                        data-sal-duration="800"
                    >
                        <a
                            id="open-popup"
                            href="#"
                        ><img
                                src="{{ asset('assets/images/gallery/gallery-img-01.jpg') }}"
                                alt="gallery"
                            ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div
                        class="gallery-image"
                        data-sal="slide-up"
                        data-sal-delay="100"
                        data-sal-duration="800"
                    >
                        <a
                            id="open-popupa"
                            href="#"
                        ><img
                                src="{{ asset('assets/images/gallery/gallery-img-02.jpg') }}"
                                alt="gallery"
                            ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div
                        class="gallery-image"
                        data-sal="slide-up"
                        data-sal-delay="150"
                        data-sal-duration="800"
                    >
                        <a
                            id="open-popupb"
                            href="#"
                        ><img
                                src="{{ asset('assets/images/gallery/gallery-img-03.jpg') }}"
                                alt="gallery"
                            ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div
                        class="gallery-image"
                        data-sal="slide-up"
                        data-sal-delay="200"
                        data-sal-duration="800"
                    >
                        <a
                            id="open-popupc"
                            href="#"
                        ><img
                                src="{{ asset('assets/images/gallery/gallery-img-04.jpg') }}"
                                alt="gallery"
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area end -->

    <!-- rts footer area start -->
    @include('front.layout.footer')
    <!-- rts footer area end -->

    <!-- header style two -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path
                d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"
            ></path>
        </svg>
    </div>
    <!-- progress area end -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input
                        id="searchInput1"
                        class="search-input"
                        type="text"
                        placeholder="Search by keyword or #"
                    >
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div
            id="close"
            class="search-close-icon"
        ><i class="far fa-times"></i></div>
    </div>


    <div
        id="anywhere-home"
        class=""
    >
    </div>

    <!-- pre loader start -->
    <div id="dinenos-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/twinmax.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('assets/js/plugins/text-plugins.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/plugins/waypoint.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/vendor/metisMenu.min.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/vendor/hover-revel.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/swip-img.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- header style two End -->


</body>



</html>
