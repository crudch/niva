<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="/img/core-img/favicon.ico">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div>
</div>
<!-- Header Area-->
<header class="header-area header2">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar navbar2 justify-content-between" id="saasboxNav">
                <!-- Logo--><a class="nav-brand mr-5" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler-->
                <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span><span></span></span></div>
                <!-- Menu-->
                <div class="classy-menu">
                    <!-- close btn-->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start-->
                    <div class="classynav">
                        <ul id="corenav">
                            <li><a href="#home">Home</a>
                                <ul class="dropdown">
                                    <li><a href="creative-agency.html"><i class="lni-diamond"></i><span>Creative Agency <span>for creative agency.</span></span></a></li>
                                    <li><a href="corporate-business.html"><i class="lni-bolt"></i><span>Corporate &amp; Business <span>for corporate business.</span></span></a></li>
                                    <li><a href="seo-business.html"><i class="lni-bulb"></i><span>SEO &amp; Business <span>for seo &amp; business.</span></span></a></li>
                                    <li><a href="sass-landing.html"><i class="lni-cog"></i><span>Saas Landing <span>for software as a service.</span></span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="about-standard.html">About Standard</a></li>
                                        <li><a href="about-creative.html">About Creative</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="service-standard.html">Service Standard</a></li>
                                        <li><a href="service-creative.html">Service Creative</a></li>
                                        <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="team.html">Team</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="reviews.html">Reviews</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                        <li><a href="newsletter.html">Newsletter</a></li>
                                        <li><a href="404.html">404 - Error</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="portfolio-standard.html">Portfolio Standard</a></li>
                                        <li><a href="portfolio-creative.html">Portfolio Creative</a></li>
                                        <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                        <li><a href="portfolio-details-one.html">Portfolio Details 1</a></li>
                                        <li><a href="portfolio-details-two.html">Portfolio Details 2</a></li>
                                        <li><a href="portfolio-details-three.html">Portfolio Details 3</a></li>
                                        <li><a href="portfolio-details-four.html">Portfolio Details 4</a></li>
                                        <li><a href="#">Coming Soon</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="blog-card.html">Blog Card</a></li>
                                        <li><a href="blog-card-sidebar.html">Blog Card Sidebar</a></li>
                                        <li><a href="blog-full.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details-full.html">Blog Details One</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Two</a></li>
                                        <li><a href="blog-details-right-sidebar.html">Blog Details Three</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#blog">Works</a>
                                <ul class="dropdown">
                                    <li><a href="portfolio-standard.html">Portfolio Standard</a></li>
                                    <li><a href="portfolio-creative.html">Portfolio Creative</a></li>
                                    <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                    <li><a href="portfolio-details-one.html">Portfolio Details One</a></li>
                                    <li><a href="portfolio-details-two.html">Portfolio Details Two</a></li>
                                    <li><a href="portfolio-details-three.html">Portfolio Details Three</a></li>
                                    <li><a href="portfolio-details-four.html">Portfolio Details Four</a></li>
                                </ul>
                            </li>
                            <li><a href="#blog">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="single-product.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="#blog">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-card.html">Blog Card</a></li>
                                    <li><a href="blog-card-sidebar.html">Blog Card Sidebar</a></li>
                                    <li><a href="blog-full.html">Blog Full</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details-full.html">Blog Details One</a></li>
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Two</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Three</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <!-- Login Button-->
                        <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Buy Now</a></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Welcome Area-->
<section class="welcome-area hero2" id="home">
    <!-- Background Shape-->
    <div class="hero-background-shape"><img src="img/core-img/hero-2.png" alt=""></div>
    <!-- Background Animation-->
    <div class="background-animation">
        <div class="star-ani"></div>
        <div class="circle-ani"></div>
        <div class="box-ani"></div>
    </div>
    <!-- Hero Circle-->
    <div class="hero2-big-circle"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-between">
            <div class="col-12 col-md-6">
                <!-- Content-->
                <div class="welcome-content pr-3">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">Build powerful responsive fastest website using it.</h2>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                    <!-- Button Group-->
                    <div class="btn-group-one wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms"><a class="btn saasbox-btn white-btn mt-3" href="#">More About Us</a><a class="btn saasbox-btn-2 mt-3 ml-3 ml-sm-4 video-play-btn" href="https://www.youtube.com/watch?v=lFGvqvPh5jI" data-effect="mfp-zoom-in"><i class="mr-1 lni-play"></i>Play Video</a></div>
                </div>
            </div>
            <div class="col-10 col-md-6">
                <div class="welcome-thumb wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"><img src="img/bg-img/hero-6.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="border-dashed"></div>
</div>
<!-- About Area-->
<section class="about-area about2 section-padding-120">
    <div class="container">
        <!-- About Content Area-->
        <div class="about-content">
            <div class="row justify-content-between">
                <!-- Single About Area-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-about-area text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="icon mx-auto"><i class="lni-sun"></i></div>
                        <h4>Web Design</h4>
                        <p>It's crafted with the latest trend of design & coded with all modern approaches.</p>
                    </div>
                </div>
                <!-- Single About Area-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-about-area text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon mx-auto"><i class="lni-heart"></i></div>
                        <h4>Branding</h4>
                        <p>It's crafted with the latest trend of design & coded with all modern approaches.</p>
                    </div>
                </div>
                <!-- Single About Area-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-about-area text-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="icon mx-auto"><i class="lni-infinite"></i></div>
                        <h4>Marketing</h4>
                        <p>It's crafted with the latest trend of design & coded with all modern approaches.</p>
                    </div>
                </div>
                <!-- Single About Area-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-about-area text-center wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                        <div class="icon mx-auto"><i class="lni-cart"></i></div>
                        <h4>Ecommerce Solution</h4>
                        <p>It's crafted with the latest trend of design & coded with all modern approaches.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-md-center justify-content-lg-between">
            <!-- About Thumbnail Area-->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="aboutUs-thumbnail mt-120 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"><img class="w-100" src="img/bg-img/5.jpg" alt=""></div>
            </div>
            <!-- About Us Content Area-->
            <div class="col-12 col-md-8 col-lg-6">
                <div class="aboutUs-content mt-120 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                    <div class="section-heading mb-5">
                        <h6>Key features</h6>
                        <h2>We focus on the growth of your business.</h2>
                        <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p><a class="btn saasbox-btn mt-5" href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area-->
<section class="saasbox-features-area feature2 section-padding-120-90">
    <!-- Background Shape-->
    <div class="background-shape wow fadeInLeftBig" data-wow-duration="4000ms"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                <div class="section-heading text-center"><i class="lni-brush"></i>
                    <h2><span>Our best </span> solutions</h2>
                    <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-8 col-xxl-9">
                <div class="row g-4">
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-wordpress"></i>
                                <div class="fea-text">
                                    <h6>WordPress Solution</h6><span>Ultimate Solution for WP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-brush"></i>
                                <div class="fea-text">
                                    <h6>Frontend Solution</h6><span>Solution for Webs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area           -->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bar-chart"></i>
                                <div class="fea-text">
                                    <h6>Digital Branding</h6><span>Boot your sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area           -->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-wechat"></i>
                                <div class="fea-text">
                                    <h6>Live Chat Help</h6><span>Support 24h a day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area        -->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-cog"></i>
                                <div class="fea-text">
                                    <h6>Easy Setup</h6><span>Solution for setup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area  -->
                    <div class="col-12 col-md-6">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xxl-3">
                <div class="card video-card video2 border-0 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                    <div class="card-body p-0"><img src="img/bg-img/6.jpg" alt=""><a class="video-play-btn" href="https://www.youtube.com/watch?v=lFGvqvPh5jI"><i class="lni-play"></i><span class="video-sonar"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Area-->
<section class="service-area section-padding-120" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                <div class="section-heading text-center"><i class="lni-flower"></i>
                    <h2>We do all <span>creative  </span> services</h2>
                    <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-5">
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-android"></i></div>
                        <h4>Mobile Apps Developement</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card active wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-layout"></i></div>
                        <h4>Modern Website Developement</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-pie-chart"></i></div>
                        <h4>Digital Content &amp; SEO Marketing</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-wordpress"></i></div>
                        <h4>WordPress 5.0 Ultimate Solution</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-sun"></i></div>
                        <h4>Business Idea &amp; Creative Leads</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card service-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                    <div class="card-body">
                        <div class="icon"><i class="lni-play"></i></div>
                        <h4>Tutorial: Learning for future</h4>
                        <p>It's crafted with the latest trend of design.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Plan Area-->
<section class="saasbox-pricing-plan-area price2 section-padding-120 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                <div class="section-heading text-center">
                    <h6>Pricing Plan</h6>
                    <h2>Simple, Transparent Price</h2>
                    <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pricing-table-switch mb-100">
                    <ul class="nav nav-tabs border-bottom-0 justify-content-center" id="priceTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="month--tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a></li>
                        <li class="nav-item"><a class="nav-link" id="yearly--tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="popular-badge">Save 20%</span>Yearly</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content" id="priceTabContent">
                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="month--tab">
                        <div class="row g-0 justify-content-center">
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-pizza"></i></div>
                                        <div class="price">
                                            <h5>Basic</h5>
                                            <h2>$19</h2><span>per month</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li class="times">1 Website License</li>
                                            <li class="times">Free Support</li>
                                            <li class="times">Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card active mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-offer"></i></div>
                                        <div class="price">
                                            <h5>Standard</h5>
                                            <h2>$29</h2><span>per month</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li>1 Website License</li>
                                            <li class="times">Free Support</li>
                                            <li class="times">Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-burger"></i></div>
                                        <div class="price">
                                            <h5>Business</h5>
                                            <h2>$49</h2><span>per month</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li>1 Website License</li>
                                            <li>Free Support</li>
                                            <li>Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="yearly--tab">
                        <div class="row g-0 justify-content-center">
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-pizza"></i></div>
                                        <div class="price">
                                            <h5>Basic</h5>
                                            <h2>$39</h2><span>per year</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li class="times">1 Website License</li>
                                            <li class="times">Free Support</li>
                                            <li class="times">Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card active mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-offer"></i></div>
                                        <div class="price">
                                            <h5>Standard</h5>
                                            <h2>$89</h2><span>per year</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li>1 Website License</li>
                                            <li class="times">Free Support</li>
                                            <li class="times">Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                            <!-- Single Pricing Plan-->
                            <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                                <div class="card pricing-card mb-30">
                                    <div class="pricing-heading d-flex align-items-center">
                                        <div class="price-icon"><i class="lni-burger"></i></div>
                                        <div class="price">
                                            <h5>Business</h5>
                                            <h2>$149</h2><span>per year</span>
                                        </div>
                                    </div>
                                    <div class="pricing-desc">
                                        <ul class="pl-0">
                                            <li>1 Month Usage</li>
                                            <li>Lifetime Updates</li>
                                            <li>1 Website License</li>
                                            <li>Free Support</li>
                                            <li>Download New Release</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Area-->
<section class="saasbox-portfolio-area section-padding-120">
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-12 col-md-8 col-lg-7 col-xxl-6">
                <div class="section-heading mb-0">
                    <h2>Check our latest awesome creative works</h2>
                    <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-5">
                <div class="portfolio-btn pb-3 text-md-right mt-5 mt-md-0"><a class="btn saasbox-btn" href="portfolio-creative.html">View All Works</a></div>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <div class="portfolio-slides-2 owl-carousel">
            <!-- Single Portfolio Area-->
            <div class="single-portfolio-area mx-3 mt-70 mb-80 no-boxshadow"><img src="img/bg-img/p5.jpg" alt="">
                <!-- Ovarlay Content-->
                <div class="overlay-content">
                    <div class="portfolio-title"><a href="portfolio-details-one.html">Portfolio Title</a></div>
                    <div class="portfolio-links"><a class="image-popup" href="img/bg-img/p5.jpg" data-effect="mfp-zoom-in" title="Portfolio Title"><i class="lni-play"></i></a><a href="#"><i class="lni-heart"></i></a><a href="portfolio-details-one.html"><i class="lni-link"></i></a></div>
                </div>
            </div>
            <!-- Single Portfolio Area-->
            <div class="single-portfolio-area mx-3 mt-70 mb-80 no-boxshadow"><img src="img/bg-img/p6.jpg" alt="">
                <!-- Ovarlay Content-->
                <div class="overlay-content bg-gray">
                    <div class="portfolio-title"><a href="portfolio-details-one.html">Portfolio Title</a></div>
                    <div class="portfolio-links"><a class="image-popup" href="img/bg-img/p6.jpg" data-effect="mfp-zoom-in" title="Portfolio Title"><i class="lni-play"></i></a><a href="#"><i class="lni-heart"></i></a><a href="portfolio-details-one.html"><i class="lni-link"></i></a></div>
                </div>
            </div>
            <!-- Single Portfolio Area-->
            <div class="single-portfolio-area mx-3 mt-70 mb-80 no-boxshadow"><img src="img/bg-img/p7.jpg" alt="">
                <!-- Ovarlay Content-->
                <div class="overlay-content bg-gray">
                    <div class="portfolio-title"><a href="portfolio-details-one.html">Portfolio Title</a></div>
                    <div class="portfolio-links"><a class="image-popup" href="img/bg-img/p7.jpg" data-effect="mfp-zoom-in" title="Portfolio Title"><i class="lni-play"></i></a><a href="#"><i class="lni-heart"></i></a><a href="portfolio-details-one.html"><i class="lni-link"></i></a></div>
                </div>
            </div>
            <!-- Single Portfolio Area-->
            <div class="single-portfolio-area mx-3 mt-70 mb-80 no-boxshadow"><img src="img/bg-img/p8.jpg" alt="">
                <!-- Ovarlay Content-->
                <div class="overlay-content bg-gray">
                    <div class="portfolio-title"><a href="portfolio-details-one.html">Portfolio Title</a></div>
                    <div class="portfolio-links"><a class="image-popup" href="img/bg-img/p8.jpg" data-effect="mfp-zoom-in" title="Portfolio Title"><i class="lni-play"></i></a><a href="#"><i class="lni-heart"></i></a><a href="portfolio-details-one.html"><i class="lni-link"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Feedback Area-->
<section class="client-feedback-area d-md-flex align-items-center justify-content-between section-padding-120 bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/7.jpg');">
    <!-- Client Feedback Heading-->
    <div class="client-feedback-heading">
        <div class="section-heading mb-0 text-right white">
            <h6>Testimonials</h6>
            <h2 class="mb-0">Our Customers Feedback</h2>
        </div>
    </div>
    <!-- Client Feedback Content-->
    <div class="client-feedback-content">
        <div class="client-feedback-slides owl-carousel">
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body"><i class="lni-quotation"></i>
                    <p>You've saved our business! Thanks guys, keep up the good work! The best on the net!</p>
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="img/bg-img/t1.png" alt=""></div>
                        <div class="client-name">
                            <h6>Lim Jannat</h6>
                            <p>UX/UI Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body"><i class="lni-quotation"></i>
                    <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="img/bg-img/t2.png" alt=""></div>
                        <div class="client-name">
                            <h6>Pryce R.</h6>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body"><i class="lni-quotation"></i>
                    <p>Absolutely wonderful! I wish I would have thought of it first. I would be lost without agency.</p>
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="img/bg-img/t3.png" alt=""></div>
                        <div class="client-name">
                            <h6>Cy N.</h6>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body"><i class="lni-quotation"></i>
                    <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="img/bg-img/t4.png" alt=""></div>
                        <div class="client-name">
                            <h6>Juergen T.</h6>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Area-->
<section class="saasbox-news-area news2 section-padding-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-lg-7 col-xxl-6">
                <div class="section-heading text-center">
                    <h6>Latest info</h6>
                    <h2>All Trending News</h2>
                    <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center g-5">
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="blog-card.html"><img src="img/bg-img/blog4.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">News</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>Seven ways agency can improve your business.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>2 min read</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card    -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="image-wrap mb-4"><img src="img/bg-img/blog5.jpg" alt="">
                        <!-- Video--><span class="video-content"><a class="video-play-btn" href="https://www.youtube.com/watch?v=lFGvqvPh5jI"><i class="lni-play"></i></a></span>
                    </div>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">Agency</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>The reason why everyone love business.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>4 min read</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="blog-card.html"><img src="img/bg-img/blog6.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">Trend</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>Seven ways agency can improve your business.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>3 min read</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner Area-->
<div class="our-partner-area section-padding-0-120 partner2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-partner-slides owl-carousel">
                    <div class="single-partner"><img src="img/partner-img/1.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/2.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/3.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/4.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/5.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/6.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/1.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/2.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/3.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/4.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/5.png" alt=""></div>
                    <div class="single-partner"><img src="img/partner-img/6.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cookie Alert Area-->
<div class="cookiealert mb-0" role="alert">
    <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>
    <button class="btn btn-primary acceptcookies" type="button" aria-label="Close">I agree</button>
</div>
<!-- Footer Area-->
<footer class="footer-area footer2 section-padding-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-10 col-lg-3">
                <div class="footer-widget-area mb-70"><a class="d-block mb-4" href="index.html"><img src="img/core-img/logo-white.png" alt=""></a>
                    <p>It's crafted with the latest trend of design & coded with all modern approaches.</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input class="form-control" type="email" placeholder="Enter email &amp; press enter">
                            <button class="btn d-none" type="submit">Go</button>
                        </form>
                    </div>
                    <div class="footer-social-icon d-flex align-items-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Facbook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></div>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Important Links</h5>
                    <ul>
                        <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                        <li><a href="#" target="_blank">About Licences</a></li>
                        <li><a href="#" target="_blank">Help &amp; Support</a></li>
                        <li><a href="#" target="_blank">Careers</a></li>
                        <li><a href="#" target="_blank">Privacy Policy</a></li>
                        <li><a href="#" target="_blank">Community &amp; Forum</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Our Products</h5>
                    <ul>
                        <li><a href="#" target="_blank">Apland Landing</a></li>
                        <li><a href="#" target="_blank">Ecaps Admin</a></li>
                        <li><a href="#" target="_blank">Bigshop Ecommerce</a></li>
                        <li><a href="#" target="_blank">Classy Multipurpose</a></li>
                        <li><a href="#" target="_blank">Educamp Education</a></li>
                        <li><a href="#" target="_blank">Champ Portfolio</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">My Account</h5>
                    <ul>
                        <li><a href="#" target="_blank">Community &amp; Forum</a></li>
                        <li><a href="#" target="_blank">About Licences</a></li>
                        <li><a href="#" target="_blank">Careers</a></li>
                        <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                        <li><a href="#" target="_blank">Privacy Policy</a></li>
                        <li><a href="#" target="_blank">Help &amp; Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5">
                <!-- Copywrite Text-->
                <div class="footer--content-text">
                    <p class="mb-0">All rights reserved by <a href="#" target="_blank">Designing World</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <!-- Footer Nav-->
                <div class="footer-nav">
                    <ul class="d-flex">
                        <li><a href="#" target="_blank">Privacy Policy</a></li>
                        <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                        <li><a href="#" target="_blank">Get Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <!-- Default dropup button-->
                <div class="language-dropdown text-center text-lg-right mt-4 mt-lg-0">
                    <div class="btn-group dropup">
                        <button class="btn saasbox-btn-2 dropdown-toggle text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-sa"></span>Arabic</a><a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-bd"></span>Bengali</a><a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-us"></span>English</a><a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-my"></span>Malay</a><a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-es"></span>Spanish</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- All JavaScript Files-->
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/default/classy-nav.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/default/jquery.scrollup.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/default/isotope.pkgd.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery.animatedheadline.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jarallax.min.js"></script>
<script src="/js/jarallax-video.min.js"></script>
<script src="/js/default/cookiealert.js"></script>
<script src="/js/default/jquery.passwordstrength.js"></script>
<script src="/js/default/mail.js"></script>
<script src="/js/default/active.js"></script>
</body>
</html>