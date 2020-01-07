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
		<link rel="stylesheet" href="assets/css/vendor.min.css">
		<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
		-->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!--====================  header area ====================-->
    <div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" data-bg="assets/img/icons/ruler.png">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-top-info">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/phone.png" alt=""></span>
                            <span class="header-top-info__text">01225 265 847</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-center">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/clock.png" alt=""></span>
                            <span class="header-top-info__text">9.00 am - 11.00 pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-right">
                            <a class="header-top-info__link" href="login-register.html"><span>Login</span></a> / <a class="header-top-info__link" href="login-register.html">Register</a>
                        </div>
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
                                                <img src="assets/img/logo.png" class="img-fluid" alt="">
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
    <div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="assets/img/icons/ruler.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="assets/img/logo-white.png" class="img-fluid" alt="">
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
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>About Us</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  about area ====================-->
    <div class="about-area space__bottom--r120 ">
        <div class="container">
            <div class="row align-items-center row-25">
                <div class="col-md-6 order-2 order-md-1">
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
                <div class="col-md-6 order-1 order-md-2">
                    <div class="about-image space__bottom__lm--30">
                        <img src="assets/img/about/about-section-2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about area  ====================-->
    <!--====================  cta area ====================-->
    <div class="cta-area cta-area-bg bg-img" data-bg="assets/img/backgrounds/cta-bg2.jpg">
        <div class="cta-wrapper background-color--dark-overlay space__inner__top--50 space__inner__bottom--150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="cta-block cta-block--default-color">
                            <p class="cta-block__light-text text-center">More than <span>25</span> years</p>
                            <p class="cta-block__semi-bold-text cta-block__semi-bold-text--medium text-center">Do you have project Just dial (toll free)</p>
                            <p class="cta-block__bold-text text-center">+98565 569 874</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of cta area  ====================-->
    <!-- funfact include -->
    <div class="funfact-wrapper space__top--m100">
        <!--====================  fun fact area ====================-->
        <div class="fun-fact-area space__bottom--r120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- fun fact wrapper -->
                        <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img" data-bg="assets/img/backgrounds/funfact-bg.jpg">
                            <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img" data-bg="assets/img/icons/ruler-black.png">
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
    </div>
    <!--====================  feature area ====================-->
    <div class="feature-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- feature content wrapper -->
                    <div class="feature-content-wrapper space__bottom--m35">
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="assets/img/icons/feature-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Top Rated</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="assets/img/icons/feature-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Best Quality</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="assets/img/icons/feature-3.png" class="img-fluid" alt="">
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
                        <img src="assets/img/feature/feature-banner-1.jpg" class="img-fluid" alt="">
                        <img src="assets/img/feature/feature-banner-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature area  ====================-->
    <!--====================  team area ====================-->
    <div class="team-area space__bottom--r120 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 space__bottom__md--40 space__bottom__lm--40">
                    <div class="team-member-title-wrapper">
                        <!-- section title -->
                        <div class="section-title space__bottom--30 space__bottom__md--30  space__bottom__lm--20">
                            <h3 class="section-title__sub">Our Team</h3>
                            <h2 class="section-title__title">Best & quality team member</h2>
                        </div>
                        <p class="team-text">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="nav nav-tabs team-member-link-wrapper" id="nav-tab2" role="tablist">
                                <a class="nav-item nav-link active" id="team-member1-tab" data-toggle="tab" href="#team-member1" role="tab" aria-selected="true">
                                    <img src="assets/img/team/team-member1-sq.jpg" class="img-fluid" alt="">
                                </a>
                                <a class="nav-item nav-link" id="team-member2-tab" data-toggle="tab" href="#team-member2" role="tab" aria-selected="false">
                                    <img src="assets/img/team/team-member2-sq.jpg" class="img-fluid" alt="">
                                </a>
                                <a class="nav-item nav-link" id="team-member3-tab" data-toggle="tab" href="#team-member3" role="tab" aria-selected="false">
                                    <img src="assets/img/team/team-member3-sq.jpg" class="img-fluid" alt="">
                                </a>
                                <a class="nav-item nav-link" id="team-member4-tab" data-toggle="tab" href="#team-member4" role="tab" aria-selected="false">
                                    <img src="assets/img/team/team-member4-sq.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="tab-content team-member__content-wrapper">
                                <div class="tab-pane fade show active" id="team-member1" role="tabpanel" aria-labelledby="team-member1-tab">
                                    <div class="single-team-member--shadow text-center">
                                        <div class="single-team-member__image">
                                            <img src="assets/img/team/team-member1.jpg" alt="">
                                        </div>
                                        <div class="single-team-member__content">
                                            <h5 class="single-team-member__name">Smarto Jowly</h5>
                                            <p class="single-team-member__des">Chief Plamber</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team-member2" role="tabpanel" aria-labelledby="team-member2-tab">
                                    <div class="single-team-member--shadow text-center">
                                        <div class="single-team-member__image">
                                            <img src="assets/img/team/team-member2.jpg" alt="">
                                        </div>
                                        <div class="single-team-member__content">
                                            <h5 class="single-team-member__name">Franky Moina</h5>
                                            <p class="single-team-member__des">Chief Electrician</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team-member3" role="tabpanel" aria-labelledby="team-member3-tab">
                                    <div class="single-team-member--shadow text-center">
                                        <div class="single-team-member__image">
                                            <img src="assets/img/team/team-member3.jpg" alt="">
                                        </div>
                                        <div class="single-team-member__content">
                                            <h5 class="single-team-member__name">Navira Parey</h5>
                                            <p class="single-team-member__des">Chief Architect</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team-member4" role="tabpanel" aria-labelledby="team-member4-tab">
                                    <div class="single-team-member--shadow text-center">
                                        <div class="single-team-member__image">
                                            <img src="assets/img/team/team-member4.jpg" alt="">
                                        </div>
                                        <div class="single-team-member__content">
                                            <h5 class="single-team-member__name">Tandur Belali</h5>
                                            <p class="single-team-member__des">Engineer</p>
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
    <!--====================  End of team area  ====================-->
    <!--====================  testimonial area ====================-->
    <div class="testimonial-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Testimonials</h3>
                        <h2 class="section-title__title">What client’s say</h2>
                    </div>
                    <!-- testimonial slider -->
                    <div class="testimonial-multi-slider-wrapper space__inner__bottom--50 space__inner__bottom__md--50 space__inner__bottom__lm--50">
                        <div class="single-testimonial single-testimonial--style2">
                            <p class="single-testimonial__text space__bottom--20"> <span class="quote-left">"</span> Publishing packages and web page now use Lorem Ipsum as their mel text, and a search for lorem <span class="quote-right">"</span></p>
                            <h5 class="single-testimonial__author">Nicolus Vengelious</h5>
                            <p class="single-testimonial__author-des">CEO, Octafact Group</p>
                        </div>
                        <div class="single-testimonial single-testimonial--style2">
                            <p class="single-testimonial__text space__bottom--20"> <span class="quote-left">"</span> Publishing packages and web page now use Lorem Ipsum as their mel text, and a search for lorem <span class="quote-right">"</span></p>
                            <h5 class="single-testimonial__author">John Doe</h5>
                            <p class="single-testimonial__author-des">CTO, HB Group</p>
                        </div>
                        <div class="single-testimonial single-testimonial--style2">
                            <p class="single-testimonial__text space__bottom--20"> <span class="quote-left">"</span> Publishing packages and web page now use Lorem Ipsum as their mel text, and a search for lorem <span class="quote-right">"</span></p>
                            <h5 class="single-testimonial__author">Jonathon Doe</h5>
                            <p class="single-testimonial__author-des">CIO, Oct Group</p>
                        </div>
                        <div class="single-testimonial single-testimonial--style2">
                            <p class="single-testimonial__text space__bottom--20"> <span class="quote-left">"</span> Publishing packages and web page now use Lorem Ipsum as their mel text, and a search for lorem <span class="quote-right">"</span></p>
                            <h5 class="single-testimonial__author">Jonathon Doe</h5>
                            <p class="single-testimonial__author-des">CIO, Oct Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial area  ====================-->
    <!--====================  brand logo area ====================-->
    <div class="brand-logo-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-wrapper">
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo1.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo2.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo3.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo5.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img" data-bg="assets/img/backgrounds/newsletter-bg.jpg">
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
    <div class="footer-area bg-img space__inner--ry120" data-bg="assets/img/backgrounds/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-widget__logo space__bottom--40">
                            <a href="index.html">
                                <img src="assets/img/logo-white.png" class="img-fluid" alt="">
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
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Slick slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!-- Waypoint JS -->
    <script src="assets/js/plugins/waypoint.min.js"></script>
    <!-- Justified Gallery JS -->
    <script src="assets/js/plugins/justifiedGallery.min.js"></script>
    <!-- Image Loaded JS -->
    <script src="assets/js/plugins/imageloaded.min.js"></script>
    <!-- Maosnry JS -->
    <script src="assets/js/plugins/masonry.min.js"></script>
    <!-- Light Gallery JS -->
    <script src="assets/js/plugins/light-gallery.min.js"></script>
    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>