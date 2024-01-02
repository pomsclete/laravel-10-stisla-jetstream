<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>EPF Ecole d'ingénieure</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-select.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/custom-animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/fancybox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/imp.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/jquery-ui.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/rtl.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/scrollbar.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/jquery.bootstrap-touchspin.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">

    <!-- Module css -->
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/header-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/banner-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/about-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/blog-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/fact-counter-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/faq-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/contact-page.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/breadcrumb-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/team-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/partner-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/testimonial-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/services-section.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/module-css/footer-section.css") }}">

    <link href="{{ asset("assets/css/color/theme-color.css") }}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/color-1.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/images/favicon/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("assets/images/favicon/favicon-32x32.png") }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset("assets/images/favicon/favicon-16x16.png") }}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset("assets/js/html5shiv.js") }}"></script>
    <![endif]-->

</head>

<body>

<div class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->


    <!-- switcher menu -->
    <div class="switcher" style="display: none;">
        <div class="switch_btn">
            <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end switcher menu -->


    <!-- Main header-->
    <header class="main-header header-style-two">

        <!--Start Header Top-->
        <div class="header-top-style2">
            <div class="pattern-bg" style="background-image: url(assets/images/pattern/thm-pattern-8.png);"></div>
            <div class="auto-container">
                <div class="outer-box">

                    <div class="header-top-style2__left">
                        <div class="top-menu">
                            <ul>
                                <li><a href="faq.html">Faq’s</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="blog.html">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-style2__middle">
                        <div class="welcome-text welcome-text--style">
                            <p>Welcome!... Proof Of Quality Is On The Roof.</p>
                        </div>
                    </div>

                    <div class="header-top-style2__right">
                        <div class="header-social-link header-social-link--style2">
                            <div class="inner-title">
                                <h4>Follow On:</h4>
                            </div>
                            <div class="social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Top-->

        <!--Start Header-->
        <div class="header-style2">
            <div class="auto-container">
                <div class="outer-box">

                    <div class="header-style2__left">
                        <div class="bg-color"></div>
                        <div class="main-logo-box-2">
                            <a href="index.html"><img src="assets/images/resources/3.png" style="width: 190px;height:85px" alt="Awesome Logo"
                                                      title=""></a>
                        </div>
                    </div>

                    <div class="header-style2__right">

                        <div class="header-contact-info-style2 text-right-rtl">
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-placeholder-1"></span>
                                        </div>
                                        <div class="text">
                                            <p>Company Location</p>
                                            <h4>191 Integer Rd, LA 08219</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-call"></span>
                                        </div>
                                        <div class="text">
                                            <p>Make a Call</p>
                                            <h4><a href="tel:123456789">(+233) 456 789 01</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="quote-button-box">
                            <a href="#"><img src="assets/images/icon/quote.png" alt=""></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End header-->

        <!--Start Header Bottom-->
        <div class="header-bottom">
            <div class="auto-container">
                <div class="outer-box">

                    <div class="header-bottom__left">
                        <div class="nav-outer style2 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style2 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown current"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-onepage.html">Home OnePage</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Company</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Meet Our Team</a></li>
                                                <li class="dropdown"><a href="#">Projects</a>
                                                    <ul>
                                                        <li><a href="projects.html">2 Columns Grid</a></li>
                                                        <li><a href="projects-2.html">3 Columns Grid</a>
                                                        <li><a href="projects-3.html">3 Columns With
                                                                Title</a>
                                                        <li><a href="projects-4.html">4 Columns Wide</a>
                                                        <li><a href="projects-5.html">Masonry View</a>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">FAQ’s</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="error.html">404 Error page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">Our Services</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Grid View</a></li>
                                                <li><a href="blog-2.html">List View</a></li>
                                                <li><a href="blog-3.html">Large Image</a></li>
                                                <li><a href="blog-single.html">Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Products</a></li>
                                                <li><a href="shop-details.html">Product Details</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="account.html">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>

                    <div class="header-bottom__right">
                        <div class="shopping-cart-box">
                            <a href="shop.html"><i class="flaticon-shopping-bag"></i><span
                                    class="count">3</span></a>
                        </div>
                        <div class="space-box1"></div>
                        <div class="serach-button-style2 serach-button-style2--instyle2">
                            <input type="search" class="form-control" name="search-input" value=""
                                   placeholder="Search..." required>
                            <button type="button"><i class="icon-search"></i></button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--End Header Bottom-->



        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index.html" class="img-responsive"><img
                                src="assets/images/resources/sticky-logo.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png"
                                                                alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>


    <!-- Start Main Slider -->
    <section class="main-slider style2">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v2-1.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h6>Thinking On Top</h6>
                            </div>
                            <div class="big-title">
                                <h2>Reputable.<br> Reliable. Results.</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v2-2.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h6>For the roof lovers</h6>
                            </div>
                            <div class="big-title">
                                <h2>Different<br> & Unique Work</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v2-3.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h6>Protect your investment</h6>
                            </div>
                            <div class="big-title">
                                <h2>Plan Your<br> Roofing Project</h2>
                            </div>
                            <div class="text">
                                <p>With More than four decades of proven success in roofing.</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6><span class="border-left"></span>About Company</h6>
                            </div>
                            <h2>Professional<br> Roofing Contractor</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>Simple and easy too distinguish in a freek hours when our power choice is
                                    untrammelled and when nothing prevent our being.</p>
                            </div>
                            <h5>Put The Best Roof Over Your Head.</h5>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-quality"></span>
                                    </div>
                                    <div class="inner-text">
                                        <h3>Certified</h3>
                                        <p>Protecting Your Home From Damaging Leaks.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-settings"></span>
                                    </div>
                                    <div class="inner-text">
                                        <h3>Innovative Work</h3>
                                        <p>The Roofing Company By Which All Others Are Measured.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-home-repair"></span>
                                    </div>
                                    <div class="inner-text">
                                        <h3>Experienced</h3>
                                        <p>Roofing Is Our Heritage, Quality Is Our Tradition.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="authorised-person-info">
                                <div class="signature">
                                    <img src="assets/images/resources/signature.png" alt="">
                                </div>
                                <div class="name">
                                    <h3>Benjamin Everett.</h3>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style2__image-box">
                        <div class="big-title paroller">rufers</div>
                        <div class="img-box1 js-tilt">
                            <img src="assets/images/about/about-style2-img-1.jpg" alt="">
                        </div>
                        <div class="img-box2">
                            <div class="inner">
                                <img src="assets/images/about/about-style2-img-2.jpg" alt="">
                            </div>
                        </div>

                        <div class="overlay-box">
                            <h2>12<span class="flaticon-plus-1"></span></h2>
                            <h3>Years of<br> Experienced</h3>
                        </div>

                        <div class="icon-box">
                            <span class="flaticon-house-with-wooden-roof"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style2 Area-->

    <!--Start Fact Counter Area-->
    <section class="fact-counter-area">
        <div class="fact-counter-area_bg"
             style="background-image: url(assets/images/parallax-background/fact-counter-area-bg.jpg);"></div>
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Interesting Numbers <span class="border-right"></span>
                    </h6>
                </div>
                <h2>Fun Facts By The Numbers</h2>
            </div>
            <div class="row">
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner">
                            <div class="pattern-bg"
                                 style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                            <div class="icon">
                                <span class="flaticon-roof-3"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2.5">0</span>
                                <span class="k">k</span>
                            </div>
                        </div>
                        <div class="title">
                            <h3>Projects Completed</h3>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="100ms"
                         data-wow-duration="1500ms">
                        <div class="inner">
                            <div class="pattern-bg"
                                 style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                            <div class="icon">
                                <span class="flaticon-worker"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="84">0</span>
                            </div>
                        </div>
                        <div class="title">
                            <h3>Expert Workers</h3>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="inner">
                            <div class="pattern-bg"
                                 style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                            <div class="icon">
                                <span class="flaticon-award"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="06">0</span>
                            </div>
                        </div>
                        <div class="title">
                            <h3>Awards Recieved</h3>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="inner">
                            <div class="pattern-bg"
                                 style="background-image: url(assets/images/pattern/thm-pattern-3.png);"></div>
                            <div class="icon">
                                <span class="flaticon-happy"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="99">0</span>
                                <span class="k">%</span>
                            </div>
                        </div>
                        <div class="title">
                            <h3>Happy Customers</h3>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->

    <!--Start Service Style2 Area-->
    <section class="service-style2-area">
        <div class="container">
            <div class="service-style2__top-title">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-left"></span>Our Services</h6>
                    </div>
                    <h2>Superior Roofing Services</h2>
                </div>
                <div class="btn-box">
                    <a class="btn-one" href="services.html">
                        <span class="txt">All Services</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="theme_carousel service-style2-carousel owl-dot-style1 owl-theme owl-carousel"
                         data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-1.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Single Ply Roofing</a></h3>
                                        <p>Except too obtains some our advantages us ever...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-2.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Modified Roofing</a></h3>
                                        <p>Know how to pursue pleasure rationally encounter...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-1"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-3.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Built-Up Roofing</a></h3>
                                        <p>Right to find fault with a man who chooses to enjoy...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-2"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->

                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-1.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Single Ply Roofing</a></h3>
                                        <p>Except too obtains some our advantages us ever...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-2.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Modified Roofing</a></h3>
                                        <p>Know how to pursue pleasure rationally encounter...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-1"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-3.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Built-Up Roofing</a></h3>
                                        <p>Right to find fault with a man who chooses to enjoy...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-2"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->

                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-1.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Single Ply Roofing</a></h3>
                                        <p>Except too obtains some our advantages us ever...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-2.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Modified Roofing</a></h3>
                                        <p>Know how to pursue pleasure rationally encounter...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-1"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->
                        <!--Start Single Service Style2-->
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-v1-3.jpg" alt="">
                                </div>
                                <div class="title-holder clearfix">
                                    <div class="inner-text">
                                        <h3><a href="services-details.html">Built-Up Roofing</a></h3>
                                        <p>Right to find fault with a man who chooses to enjoy...</p>
                                    </div>
                                    <div class="icon">
                                        <div class="pattern-bg"
                                             style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
                                        </div>
                                        <span class="flaticon-roof-2"></span>
                                        <div class="overlay">
                                            <a href="services-details.html"><i class="fa fa-angle-right"
                                                                               aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style2-->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Service Style2 Area-->

    <!--Start Choose Style1 Area-->
    <section class="choose-style1-area">
        <div class="choose-style1-area-bg"
             style="background-image: url(assets/images/parallax-background/choose-style1-area-bg.jpg);">
        </div>
        <div class="pattern-bg wow slideInRight" data-wow-delay="300ms" data-wow-duration="3500ms"
             style="background-image: url(assets/images/pattern/thm-pattern-9.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="choose-style1__content">
                        <div class="choose-style1__content-bg wow slideInUp" data-wow-delay="300ms"
                             data-wow-duration="5000ms"
                             style="background-image: url(assets/images/resources/choose-style1__content-bg.jpg);">
                        </div>
                        <div class="border-left-box"></div>
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6><span class="border-left"></span>Why Choose Us</h6>
                            </div>
                            <h2>We’re Dedicated to<br> Providing Quality Service</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour when our
                                    power<br> of choice is untrammelled and when nothing prevents.</p>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-protection"></span>
                                    </div>
                                    <div class="inner-title">
                                        <h3>Reliability</h3>
                                        <p>Transparency Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-quality"></span>
                                    </div>
                                    <div class="inner-title">
                                        <h3>Materials</h3>
                                        <p>100% Quality Product</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-construction-and-tools"></span>
                                    </div>
                                    <div class="inner-title">
                                        <h3>Expert Staff</h3>
                                        <p>Trained & Expereinced</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-certificate"></span>
                                    </div>
                                    <div class="inner-title">
                                        <h3>Accredited</h3>
                                        <p>Certified Company</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Choose Style1 Area-->

    <!--Start Project Style2 Area-->
    <section class="project-style1-area pdb120">
        <div class="container">
            <div class="project-top-title style2">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-left"></span>Work Gallery</h6>
                    </div>
                    <h2>Our Latest Projects</h2>
                </div>
                <div class="project-menu-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <ul class="project-filter clearfix post-filter has-dynamic-filters-counter">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">View All</span></li>
                        <li data-filter=".commercial"><span class="filter-text">Commercial</span></li>
                        <li data-filter=".residential"><span class="filter-text">Residential</span></li>
                        <li data-filter=".industrial"><span class="filter-text">Industrial</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row filter-layout masonary-layout text-right-rtl">

                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item commercial industrial">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-1.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-1.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item commercial residential">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-2.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-2.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item commercial industrial">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-3.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-3.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item commercial industrial residential">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-4.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-4.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item industrial">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-5.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-5.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
                <!--Start Single project Item-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item commercial industrial residential">
                    <div class="single-project-item style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/portfolio/project-v2-6.jpg" alt="Awesome Image">
                            </div>
                            <div class="overlay-content text-center">
                                <p>Commercial</p>
                                <h3><a href="#">Roof Installation</a></h3>
                                <div class="border-box"></div>
                                <ul>
                                    <li>
                                        <a class="lightbox-image" data-fancybox="gallery"
                                           href="assets/images/portfolio/project-v2-6.jpg">
                                            <i class="flaticon-zoom"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="flaticon-plus-1"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single project Item-->
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="project-style2-btn-box">
                        <a class="btn-one" href="projects.html">
                            <span class="txt">Load More</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Project Style2 Area-->

    <!--Start Testimonials Style2 area-->
    <section class="testimonials-style2-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Testimonials <span class="border-right"></span></h6>
                </div>
                <h2>Words From Our Customer</h2>
            </div>

            <div class="row">
                <!--Start Single Testimonials Style2-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-testimonials-style2 text-center">
                        <div class="icon-box">
                            <span class="flaticon-quote-3"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Better Than Expected</h3>
                            <p>Rufers service team is very prompt, courteous and professional. They are
                                committed to doing a quality job & the service.</p>
                        </div>
                        <div class="img-holder">
                            <div class="img-box">
                                <img src="assets/images/testimonial/testimonial-v2-1.jpg" alt="" />
                            </div>
                            <div class="inner">
                                <h3>Nathan Felix</h3>
                                <span>CEO, High Rise Construction</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonials Style2-->
                <!--Start Single Testimonials Style2-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="single-testimonials-style2 text-center">
                        <div class="icon-box">
                            <span class="flaticon-quote-3"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Excellent Company</h3>
                            <p>Thank you for all of your support. All of you love & forse being you. I cried tears
                                been a blessing in my life for all of your you love & forse.</p>
                        </div>
                        <div class="img-holder">
                            <div class="img-box">
                                <img src="assets/images/testimonial/testimonial-v2-2.jpg" alt="" />
                            </div>
                            <div class="inner">
                                <h3>Lamont Shaun</h3>
                                <span>Regional Manager, XL Park</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonials Style2-->
                <!--Start Single Testimonials Style2-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-testimonials-style2 text-center">
                        <div class="icon-box">
                            <span class="flaticon-quote-3"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Professional Team</h3>
                            <p>I have the pleasure of dealing with envolve team for the past one plus years. The
                                team has been efficient, very knowledgeable.</p>
                        </div>
                        <div class="img-holder">
                            <div class="img-box">
                                <img src="assets/images/testimonial/testimonial-v2-3.jpg" alt="" />
                            </div>
                            <div class="inner">
                                <h3>Xavior Vincent</h3>
                                <span>Green Valley International</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonials Style2-->
            </div>
        </div>
    </section>
    <!--End Testimonials Style2 area -->

    <!--Start Partner Area-->
    <section class="partner-area">
        <div class="container">
            <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1">
                <!--Start Single Partner Logo Box-->
                <li class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-logo-1.png" alt="Awesome Image"></a>
                </li>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <li class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-logo-2.png" alt="Awesome Image"></a>
                </li>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <li class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-logo-3.png" alt="Awesome Image"></a>
                </li>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <li class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-logo-4.png" alt="Awesome Image"></a>
                </li>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <li class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-logo-5.png" alt="Awesome Image"></a>
                </li>
                <!--End Single Partner Logo Box-->

            </ul>
        </div>
    </section>
    <!--End Partner Area-->


    <!--Start pricing plan area-->
    <section class="pricing-plan-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> Pricing & Plans <span class="border-right"></span></h6>
                </div>
                <h2>Our Ideal Roofing Plans</h2>
            </div>
            <div class="row">

                <!--Start single price box-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-price-box">
                        <div class="table-header text-center">
                            <div class="dot-left zoominout"></div>
                            <div class="dot-right zoominout-2"></div>
                            <h3>Basic</h3>
                        </div>
                        <div class="table-content">
                            <div class="package text-center">
                                <div class="package-bg"
                                     style="background-image: url(assets/images/shape/pricing-table-bg.png);"></div>
                                <h2>49</h2>
                                <span>Dollar Per Sq.ft</span>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Free Installation</li>
                                    <li>Inspection: <span>2 Yrs Once</span></li>
                                    <li><span>5 Years</span> Warranty</li>
                                    <li class="gray">Emergency Roof Repair</li>
                                    <li class="gray">Roof Replacement</li>
                                </ul>
                            </div>
                            <div class="table-footer text-center">
                                <a class="btn-one" href="#">
                                    <span class="txt">Choose</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single price box-->
                <!--Start single price box-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-price-box style2">
                        <div class="table-header text-center">
                            <div class="dot-left zoominout"></div>
                            <div class="dot-right zoominout-2"></div>
                            <h3>Standard</h3>
                        </div>
                        <div class="table-content">
                            <div class="package text-center">
                                <h2>79</h2>
                                <span>Dollar Per Sq.ft</span>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Free Installation</li>
                                    <li>Inspection: <span>Once Per Yr</span></li>
                                    <li><span>8 Years</span> Warranty</li>
                                    <li>Emergency Roof Repair</li>
                                    <li class="gray">Roof Replacement</li>
                                </ul>
                            </div>
                            <div class="table-footer text-center">
                                <a class="btn-one" href="#">
                                    <span class="txt">Choose</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single price box-->
                <!--Start single price box-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-price-box style3">
                        <div class="table-header text-center">
                            <div class="dot-left zoominout"></div>
                            <div class="dot-right zoominout-2"></div>
                            <h3>Premium</h3>
                        </div>
                        <div class="table-content">
                            <div class="package text-center">
                                <h2>99</h2>
                                <span>Dollar Per Sq.ft</span>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Free Installation</li>
                                    <li>Inspection: <span>6 Mths Once</span></li>
                                    <li><span>10 Years</span> Warranty</li>
                                    <li>Emergency Roof Repair</li>
                                    <li>Roof Replacement</li>
                                </ul>
                            </div>
                            <div class="table-footer text-center">
                                <a class="btn-one" href="#">
                                    <span class="txt">Choose</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single price box-->
                <!--Start single price box-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-price-box">
                        <div class="table-header text-center">
                            <div class="dot-left zoominout"></div>
                            <div class="dot-right zoominout-2"></div>
                            <h3>Advanced</h3>
                        </div>
                        <div class="table-content">
                            <div class="package text-center">
                                <div class="package-bg"
                                     style="background-image: url(assets/images/shape/pricing-table-bg.png);"></div>
                                <h2>129</h2>
                                <span>Dollar Per Sq.ft</span>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Free Installation</li>
                                    <li>Inspection: <span>3 Mths Once</span></li>
                                    <li><span>15 Years</span> Warranty</li>
                                    <li>Emergency Roof Repair</li>
                                    <li>Roof Replacement</li>
                                </ul>
                            </div>
                            <div class="table-footer text-center">
                                <a class="btn-one" href="#">
                                    <span class="txt">Choose</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single price box-->

            </div>
        </div>
    </section>
    <!--End pricing plan area-->

    <!--Start Contact Style1 Area-->
    <section class="contact-style1-area">
        <div class="auto-container">
            <div class="contact-style1_inner">
                <div class="contact-style1_inner-bg"
                     style="background-image: url(assets/images/resources/contact-style1_inner-bg.jpg);"></div>
                <div class="base-bg"></div>

                <div class="people2 wow slideInRight" data-wow-delay="300ms" data-wow-duration="5500ms">
                    <img class="paroller-2" src="assets/images/resources/people-2.png" alt="">
                </div>
                <div class="people1 wow slideInRight" data-wow-delay="300ms" data-wow-duration="3500ms">
                    <img class="paroller-2" src="assets/images/resources/people-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-5">
                            <div class="contact-form-box1">
                                <div class="sec-title">
                                    <div class="sub-title">
                                        <h6><span class="border-left"></span>Get in Touch</h6>
                                    </div>
                                    <h2>Get a Call Back</h2>
                                </div>
                                <form id="contact-form" name="contact_form" class="default-form1" action="#"
                                      method="post">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="Your Name"
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" placeholder="Phone"
                                                       required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <div class="select-box">
                                                    <div class="round-shape"></div>
                                                    <select class="wide">
                                                        <option data-display="Service You Need">Service You Need
                                                        </option>
                                                        <option value="1">Single Ply Roofing</option>
                                                        <option value="2">Modified Roofing</option>
                                                        <option value="3">Built-Up Roofing</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="button-box">
                                                <button class="btn-one" type="submit"
                                                        data-loading-text="Please wait...">
                                                    <span class="txt">Send Request</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Style1 Area-->

    <!--Start Blog Style2 Area-->
    <section class="blog-style2-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span>News & Updates</h6>
                </div>
                <h2>Latest From Blog Post</h2>
            </div>

            <div class="row text-right-rtl">
                <div class="col-xl-12 col-lg-12">
                    <div class="theme_carousel blog-style2-carousel owl-dot-style1 owl-theme owl-carousel"
                         data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>

                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-1.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>20<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">Protecting Your Roof From Storm Damage</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-2.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>10<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Tips & Tricks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">How To Weather Proof Your Roof This Winter</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-3.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>30<br><span>Jun</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Roof Leaks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">The 5 Most Common Causes Of Roof Leaks</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->

                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-1.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>20<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">Protecting Your Roof From Storm Damage</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-2.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>10<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Tips & Tricks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">How To Weather Proof Your Roof This Winter</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-3.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>30<br><span>Jun</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Roof Leaks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">The 5 Most Common Causes Of Roof Leaks</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->

                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-1.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>20<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">Protecting Your Roof From Storm Damage</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-2.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>10<br><span>Jul</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Tips & Tricks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">How To Weather Proof Your Roof This Winter</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->
                        <!--Start Single blog Style2-->
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="gradient-bg"></div>
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v2-3.jpg" alt="">
                                </div>
                                <div class="date-box">
                                    <h3>30<br><span>Jun</span></h3>
                                </div>
                                <div class="overlay-content">
                                    <h6><span class="flaticon-open-archive"></span>Roof Leaks</h6>
                                    <h3 class="blog-title">
                                        <a href="blog-single.html">The 5 Most Common Causes Of Roof Leaks</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                         style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                                    <div class="left">
                                        <a class="btn-two" href="blog-single.html">More Details</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                            <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style2-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Style2 Area-->

    <!--Start footer area -->
    <footer class="footer-area footer-area--style2">

        <!--Start Footer-->
        <div class="footer footer--style2">
            <div class="container">
                <div class="row text-right-rtl">

                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="single-footer-widget single-footer-widget-style2 marbtm50">
                            <div class="our-company-info">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/footer/footer-logo.png" alt=""></a>
                                </div>
                                <div class="text-box">
                                    <p>Roofit Roofing & Retro-Fit is a family owned, operated business serving the
                                        greater Los Angeles area since 2000.</p>
                                </div>
                                <div class="emergency-contact">
                                    <h6>Emergency? Call Us now at</h6>
                                    <h3><span class="flaticon-headphone"></span><a
                                            href="tel:123456789">+1800-12-3456</a></h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->

                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="single-footer-widget marbtm50">
                            <div class="title">
                                <h3>Services</h3>
                            </div>
                            <div class="footer-widget-links-2">
                                <ul>
                                    <li><a href="#">Single Ply Roofing</a></li>
                                    <li><a href="#">Modified Roofing</a></li>
                                    <li><a href="#">Built-Up Roofing</a></li>
                                    <li><a href="#">Metal Roofing</a></li>
                                    <li><a href="#">Vegetative Roofing</a></li>
                                    <li><a href="#">Specialty Metal</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->

                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="single-footer-widget">
                            <div class="title">
                                <h3>Useful Links</h3>
                            </div>
                            <div class="footer-widget-links-2">
                                <ul>
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Work Gallery</a></li>
                                    <li><a href="#">Client Feedback</a></li>
                                    <li><a href="#">Local Offices</a></li>
                                    <li><a href="#">Make Appointment</a></li>
                                    <li><a href="#">News & Updates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->

                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                        <div class="single-footer-widget pdtop50">
                            <div class="title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-subscribe-box">
                                <div class="text">
                                    <p>Subscribe us & get news, articles to your inbox.</p>
                                </div>
                                <form class="subscribe-form" action="#">
                                    <div class="input-box">
                                        <input type="email" name="email" placeholder="Email address">
                                        <div class="icon">
                                            <span class="flaticon-envelope"></span>
                                        </div>
                                    </div>
                                    <button class="btn-one" type="submit">
                                        <span class="txt">Subscribe Us</span>
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                    <!--End single footer widget-->

                </div>
            </div>
        </div>
        <!--End Footer-->

        <div class="footer-bottom footer-bottom--style2">
            <div class="container">
                <div class="bottom-inner">
                    <div class="copyright">
                        <p>Copyright &copy; 2021<a href="index.html"> Rufers.</a> All Rights Reserved.</p>
                    </div>
                    <div class="footer-menu">
                        <ul class="footer-nav">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--End footer area-->


    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>



    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><i class="icon-close"></i></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://mehedi.asiandevelopers.com/demo/rufers/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                   placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Safety Tips</a></li>
                    <li><a href="index.html">Filteration</a></li>
                    <li><a href="index.html">Accessories</a></li>
                    <li><a href="index.html">Tools</a></li>
                    <li><a href="index.html">Design</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


</div>






<script src="{{ asset("assets/js/jquery.js") }}"></script>
<script src="{{ asset("assets/js/aos.js") }}"></script>
<script src="{{ asset("assets/js/appear.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap-select.min.js") }}"></script>
<script src="{{ asset("assets/js/isotope.js") }}"></script>
<script src="{{ asset("assets/js/jquery.countTo.js") }}"></script>
<script src="{{ asset("assets/js/jquery.easing.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.enllax.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.fancybox.js") }}"></script>
<script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.paroller.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery-ui.js") }}"></script>
<script src="{{ asset("assets/js/knob.js") }}"></script>
<script src="{{ asset("assets/js/map-script.js") }}"></script>
<script src="{{ asset("assets/js/owl.js") }}"></script>
<script src="{{ asset("assets/js/pagenav.js") }}"></script>
<script src="{{ asset("assets/js/parallax.min.js") }}"></script>
<script src="{{ asset("assets/js/scrollbar.js") }}"></script>
<script src="{{ asset("assets/js/TweenMax.min.js") }}"></script>
<script src="{{ asset("assets/js/validation.js") }}"></script>
<script src="{{ asset("assets/js/wow.js") }}"></script>
<script src="{{ asset("assets/js/color-switcher.min.js") }}"></script>

<script src="{{ asset("assets/js/jquery.bootstrap-touchspin.js") }}"></script>
<script src="{{ asset("assets/js/jquery.nice-select.min.js") }}"></script>
<script src="{{ asset("assets/js/tilt.jquery.js") }}"></script>



<!-- thm custom script -->
<script src="{{ asset("assets/js/custom.js") }}"></script>



</body>
</html>
