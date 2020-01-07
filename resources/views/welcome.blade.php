<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brenda - Construction HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <!-- CSS
		============================================ -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="asset/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.min.css')}}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins/slick.min.css')}}">
    <!-- CSS Animation CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins/cssanimation.min.css')}}">
    <!-- Justified Gallery CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins/justifiedGallery.min.css')}}">
    <!-- Light Gallery CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins/light-gallery.min.css')}}">
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
		<link rel="stylesheet" href="asset/css/vendor.min.css">
		<link rel="stylesheet" href="asset/css/plugins/plugins.min.css">
		-->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!--====================  header area ====================-->
    <div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" data-bg="asset/img/icons/ruler.png">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-top-info">
                            <span class="header-top-info__image pr-1"><img src="asset/img/icons/phone.png" alt=""></span>
                            <span class="header-top-info__text">01225 265 847</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-center">
                            <span class="header-top-info__image pr-1"><img src="asset/img/icons/clock.png" alt=""></span>
                            <span class="header-top-info__text">9.00 am - 11.00 pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>
        <!-- menu bar -->
        <div class="menu-bar position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-bar-wrapper background-color--default space__inner--x35">
                            <div class="menu-bar-wrapper-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <div class="brand-logo">
                                            <a href="index.html">
                                                <img src="asset/img/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="navigation-area d-flex justify-content-end align-items-center">
                                            <!-- navigation menu -->
                                            <nav class="main-nav-menu">
                                                <ul class="d-flex justify-content-end">
                                                    <li class="has-sub-menu">
                                                        <a href="index.html">Home</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li class="has-sub-menu">
                                                        <a href="service.html">Service</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="service.html">Service Page</a></li>
                                                            <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                                            <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                                                            <li class="has-sub-menu">
                                                                <a href="#">Submenu Level One</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="#">Submenu Level Two</a></li>
                                                                    <li><a href="#">Submenu Level Two</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub-menu">
                                                        <a href="project.html">Project</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="project.html">Project Page</a></li>
                                                            <li><a href="project-details.html">Project Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub-menu">
                                                        <a href="blog-left-sidebar.html">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                                            <li class="has-sub-menu">
                                                                <a href="#">Submenu Level One</a>
                                                                <ul class="sub-menu">
                                                                    <li class="has-sub-menu">
                                                                        <a href="#">Submenu Level Two</a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="#">Submenu Level Three</a></li>
                                                                            <li><a href="#">Submenu Level Three</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Submenu Level Two</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <!-- search icon nav menu -->
                                            <div class="nav-search-icon">
                                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  mobile header ====================-->
    <div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="asset/img/icons/ruler.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="asset/img/logo-white.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
                        <span class="mobile-menu-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of mobile header  ====================-->
    <!--====================  offcanvas mobile menu ====================-->
    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <span class="menu-close"></span>
        </a>
        <div class="offcanvas-wrapper">
            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu-mobile">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="fa fa-phone"></i> 01225 265 847</li>
                                <li><i class="fa fa-clock-o"></i> 9.00 am - 11.00 pm</li>
                                <li><i class="fa fa-user"></i> <a href="login-register.html">Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of offcanvas mobile menu  ====================-->
    <!--====================  hero slider area ====================-->
    <div class="hero-slider-area space__bottom--r120">
        <div class="hero-slick-slider-wrapper">
            <div class="single-hero-slider single-hero-slider--background single-hero-slider--overlay position-relative bg-img" data-bg="asset/img/hero-slider/hero-slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero slider content -->
                            <div class="hero-slider-content hero-slider-content--extra-space">
                                <h3 class="hero-slider-content__subtitle">Brenda</h3>
                                <h2 class="hero-slider-content__title space__bottom--50">We Construct your Dream in Live</h2>
                                <a href="contact.html" class="default-btn default-btn--hero-slider">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-hero-slider--background single-hero-slider--overlay position-relative bg-img" data-bg="asset/img/hero-slider/hero-slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero slider content -->
                            <div class="hero-slider-content hero-slider-content--extra-space">
                                <h3 class="hero-slider-content__subtitle">Brenda</h3>
                                <h2 class="hero-slider-content__title space__bottom--50">We Construct your Dream in Live</h2>
                                <a href="contact.html" class="default-btn default-btn--hero-slider">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of hero slider area  ====================-->
    <!--====================  about area ====================-->
    <div class="about-area space__bottom--r120 ">
        <div class="container">
            <div class="row align-items-center row-25">
                <div class="col-md-6">
                    <div class="about-image space__bottom__lm--30">
                        <img src="asset/img/about/about-section-1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <!-- section title -->
                        <div class="section-title space__bottom--25">
                            <h3 class="section-title__sub">Science 1982</h3>
                            <h2 class="section-title__title">Provide the best quality service and construct</h2>
                        </div>
                        <p class="about-content__text space__bottom--40">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infance</p>
                        <a href="contact.html" class="default-btn">Start now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about area  ====================-->
    <!--====================  feature area ====================-->
    <div class="feature-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- feature content wrapper -->
                    <div class="feature-content-wrapper space__bottom--m35">
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="asset/img/icons/feature-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Top Rated</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="asset/img/icons/feature-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Best Quality</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="asset/img/icons/feature-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Low Price</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 space__bottom__md--40 space__bottom__lm--40 order-1 order-lg-2">
                    <!-- feature content image -->
                    <div class="feature-content-image">
                        <img src="asset/img/feature/feature-banner-1.jpg" class="img-fluid" alt="">
                        <img src="asset/img/feature/feature-banner-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature area  ====================-->
    <!--====================  service area ====================-->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-5">
                    <!-- service banner -->
                    <div class="service-banner space__bottom__md--40 space__bottom__lm--40">
                        <img src="asset/img/service/service-man.png" class="float-none float-lg-right" alt="">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-7 mt-0 mt-lg-4">
                    <!-- section title -->
                    <div class="section-title space__bottom--40">
                        <h3 class="section-title__sub">Our Services</h3>
                        <h2 class="section-title__title">Unique and Qulaity Service Makes Client Happy</h2>
                    </div>
                    <!-- service slider -->
                    <div class="row service-slider-wrapper space__bottom__md--40 space__bottom__lm--40">
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-1.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Construction</a>
                            </h4>
                        </div>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-2.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Renovation</a>
                            </h4>
                        </div>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-3.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Architecture</a>
                            </h4>
                        </div>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-4.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Concrete Supply</a>
                            </h4>
                        </div>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-5.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Laminate Flooring</a>
                            </h4>
                        </div>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.html"><img src="asset/img/service/service-6.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.html">Project Planning</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of service area  ====================-->
    <!--====================  fun fact area ====================-->
    <div class="fun-fact-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- fun fact wrapper -->
                    <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img" data-bg="asset/img/backgrounds/funfact-bg.jpg">
                        <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img" data-bg="asset/img/icons/ruler-black.png">
                            <div class="fun-fact-content-wrapper">
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">985</h3>
                                    <h4 class="single-fun-fact__text">Projects</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">529</h3>
                                    <h4 class="single-fun-fact__text">Clients</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">888</h3>
                                    <h4 class="single-fun-fact__text">Success</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">100</h3>
                                    <h4 class="single-fun-fact__text">Awards</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of fun fact area  ====================-->
    <!--====================  project area ====================-->
    <div class="project-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Our Projects</h3>
                        <h2 class="section-title__title">Here you find our latest projects that we did and doing</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-wrapper space__bottom--m5" id="project-justify-wrapper">
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project1.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Western Shopping Mall</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project2.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">City Flyover</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project3.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Highway Carpeting</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project4.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">House Infrustructure Making</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project5.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Wooden House</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project6.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Road Repairing</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project7.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Apartment Building</span>
                </a>
            </div>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.html">
                    <img src="asset/img/projects/project8.jpg" class="img-fluid" alt="">
                    <span class="single-project-title">Bridge Construction</span>
                </a>
            </div>
        </div>
    </div>
    <!--====================  End of project area  ====================-->
    <!--====================  team area ====================-->
    <div class="team-area space__bottom--r120 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 space__bottom__md--40 space__bottom__lm--40">
                    <div class="team-member-title-wrapper">
                        <!-- section title -->
                        <div class="section-title space__bottom--30 space__bottom__md--30  space__bottom__lm--20">
                            <h3 class="section-title__sub">Our Team</h3>
                            <h2 class="section-title__title">Best & quality team member</h2>
                        </div>
                        <p class="team-text space__bottom--40 space__bottom__md--30 space__bottom__lm--20">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <a href="about.html" class="default-btn">View more</a>
                    </div>
                </div>
                <div class="col-lg-8 team-slider-column-wrapper">
                    <!-- team member slider -->
                    <div class="team-slider-wrapper row">
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member1.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">Osthir Sholey</h5>
                            <p class="single-team-member__des">Chief Engineer</p>
                        </div>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member2.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">Smarto Jowly</h5>
                            <p class="single-team-member__des">Chief Plamber</p>
                        </div>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member3.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">Franky Moina</h5>
                            <p class="single-team-member__des">Chief Electrician</p>
                        </div>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member4.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">Navira Pareyo</h5>
                            <p class="single-team-member__des">Chief Architect</p>
                        </div>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member5.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">Tandur Belali</h5>
                            <p class="single-team-member__des">Engineer</p>
                        </div>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="asset/img/team/team-member4.jpg" alt="">
                            </div>
                            <h5 class="single-team-member__name">John Doe</h5>
                            <p class="single-team-member__des">Site Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of team area  ====================-->
    <!--====================  testimonial cta area ====================-->
    <div class="testimonial-cta-area space__bottom--r120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 space__bottom__md--40 space__bottom__lm--40">
                    <!-- cta block -->
                    <div class="cta-block cta-block--shadow cta-block--bg bg-img" data-bg="asset/img/backgrounds/cta-bg.jpg">
                        <div class="cta-block__inner background-color--default-light-overlay space__inner--ry100">
                            <p class="cta-block__light-text text-center">More than <span>25</span> years</p>
                            <p class="cta-block__semi-bold-text text-center">Do you have project <br> Just dial (toll free)</p>
                                <p class="cta-block__bold-text text-center">+98565 569 874</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Testimonials</h3>
                        <h2 class="section-title__title">What client’s say</h2>
                    </div>
                    <!-- testimonial slider -->
                    <div class="testimonial-slider-wrapper space__inner__bottom__md--30  space__inner__bottom__lm--30">
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span> Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance <span class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">Nicolus Vengelious</h5>
                            <p class="single-testimonial__author-des">CEO, Octafact Group</p>
                        </div>
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span> Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance <span class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">John Doe</h5>
                            <p class="single-testimonial__author-des">CTO, HB Group</p>
                        </div>
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span> Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance <span class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">Jonathon Doe</h5>
                            <p class="single-testimonial__author-des">CIO, Oct Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial cta area  ====================-->
    <!--====================  blog grid slider area ====================-->
    <div class="blog-grid-slider-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Latest Post</h3>
                        <h2 class="section-title__title">Blog post about our various construction projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-wrapper space__bottom--m40">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="asset/img/blog/grid1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> New design concept & idea</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="asset/img/blog/grid2.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> Bigest construction design</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="asset/img/blog/grid3.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> Steel structure design concept</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog grid slider area  ====================-->
    <!--====================  brand logo area ====================-->
    <div class="brand-logo-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-wrapper">
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo1.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo2.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo3.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo5.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="asset/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img" data-bg="asset/img/backgrounds/newsletter-bg.jpg">
        <div class="newsletter-wrapper background-color--default-overlay space__inner--y60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-10 mx-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <!-- newsletter title -->
                                <h3 class="newsletter-title"><span>Newsletter</span> Subscribe now</h3>
                            </div>
                            <div class="col-lg-8">
                                <div class="newsletter-form">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" placeholder="To get update, enter your email">
                                        <button class="theme-button" type="submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of newsletter area  ====================-->
    <!--====================  footer area ====================-->
    <div class="footer-area bg-img space__inner--ry120" data-bg="asset/img/backgrounds/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-widget__logo space__bottom--40">
                            <a href="index.html">
                                <img src="asset/img/logo-white.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <p class="footer-widget__text space__bottom--20">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <ul class="social-icons">
                            <li><a href="//www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="//www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="//www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="//plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                        <h5 class="footer-widget__title space__bottom--20">Information</h5>
                        <ul class="footer-widget__menu">
                            <li><a href="#">About Brenda</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Projects</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                        <h5 class="footer-widget__title space__bottom--20">Support</h5>
                        <ul class="footer-widget__menu">
                            <li><a href="#">About Brenda</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Projects</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-widget__title space__top--15 space__bottom--20 space__top__md--40 space__top__lm--40">Contact us</h5>
                    <div class="footer-contact-wrapper">
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-map-marker"></i></div>
                            <div class="single-footer-contact__text">245 Distrealy Road, Central Park, New York</div>
                        </div>
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-phone"></i></div>
                            <div class="single-footer-contact__text"> <a href="tel:98548658125">+98548 658 125</a> <br> <a href="tel:65487235457">+65487 235 457</a> </div>
                        </div>
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-globe"></i></div>
                            <div class="single-footer-contact__text"><a href="mailto:info@example.com">info@example.com</a> <br> <a href="#">www.example.com</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright text -->
    <div class="copyright-area background-color--deep-dark space__inner--y30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="copyright-text">Copyright &copy; <a href="#">Codecarnival</a>, All Rights Reserved - 2019</p>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->
    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Slick slider JS -->
    <script src="{{asset('js/plugins/slick.min.js')}}"></script>
    <!-- Counterup JS -->
    <script src="{{asset('js/plugins/counterup.min.js')}}"></script>
    <!-- Waypoint JS -->
    <script src="{{asset('js/plugins/waypoint.min.js')}}"></script>
    <!-- Justified Gallery JS -->
    <script src="{{asset('js/plugins/justifiedGallery.min.js')}}"></script>
    <!-- Image Loaded JS -->
    <script src="{{asset('js/plugins/imageloaded.min.js')}}"></script>
    <!-- Maosnry JS -->
    <script src="{{asset('js/plugins/masonry.min.js')}}"></script>
    <!-- Light Gallery JS -->
    <script src="{{asset('js/plugins/light-gallery.min.js')}}"></script>
    <!-- Mailchimp JS -->
    <script src="{{asset('js/plugins/mailchimp-ajax-submit.min.js')}}"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!--
    <script src="asset/js/plugins/plugins.min.js"></script>
    -->
    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>