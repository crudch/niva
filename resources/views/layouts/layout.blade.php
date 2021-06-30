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
    <div class="container mb-4">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-12">
                <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Поиск..."></div>
            </div>
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
                    <h2 class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">Будьте в курсе Читайте отзывы о компаниях вашего города, откройте для себя новые места.</h2>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">Это надежный и многомерный шаблон, который можно использовать.</p>
                    <!-- Button Group-->
                    <div class="btn-group-one wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms"><a class="btn saasbox-btn white-btn mt-3" href="#">More About Us</a><a class="btn saasbox-btn-2 mt-3 ml-3 ml-sm-4 video-play-btn" href="https://www.youtube.com/watch?v=lFGvqvPh5jI" data-effect="mfp-zoom-in"><i class="mr-1 lni-play"></i>Play Video</a></div>
                </div>
            </div>
            <div class="col-10 col-md-6">
                <div class="welcome-thumb wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"><img src="img/bg-img/hero-6.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="border-dashed mb-4"></div>
</div>
<!-- Client Feedback Area-->
<section class="client-feedback-area flex-column d-md-flex align-items-center justify-content-between section-padding-120 bg-img bg-overlay jarallax" style="background-image: url('/img/custom-img/mountain.jpg');">
    <!-- Client Feedback Heading-->
    <div class="client-feedback-heading">
        <div class="section-heading mb-0 text-right white">
            <h6>ЛУчшие отзывы</h6>
            <h2 class="mb-4">Самые правдивейшие и честнейшие отзывы во всём мультивёрсе, по-любому</h2>
        </div>
    </div>
    <!-- Client Feedback Content-->
    <div class="client-feedback-content">
        <div class="client-feedback-slides owl-carousel">
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body">
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="/img/custom-img/man.png" alt=""></div>
                        <div class="client-name">
                            <h6>Григорий Петров</h6>
                            <p>Хозяин</p>
                        </div>
                    </div>
                    <p>Вы спасли наш бизнес! Спасибо, ребята, продолжайте в том же духе! Лучшее в сети!</p>
                    <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                    </ul>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body">
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="/img/custom-img/man.png" alt=""></div>
                        <div class="client-name">
                            <h6>Ахмет АХМЕТ</h6>
                            <p>CEO</p>
                        </div>
                    </div>
                    <p>НАСТОЯТЕЛЬНО рекомендую агентство ВСЕМ, кто заинтересован в ведении успешного бизнеса!</p>
                    <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star"></i></li>
                    </ul>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body">
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="/img/custom-img/man.png" alt=""></div>
                        <div class="client-name">
                            <h6>Син Джин По</h6>
                            <p>營成</p>
                        </div>
                    </div>
                    <p>我向有興趣經營成功的每個人強烈推薦代理商！</p>
                    <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star"></i></li>
                        <li class="active"><i class="lni-star"></i></li>
                    </ul>
                </div>
            </div>
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body">
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="/img/custom-img/man.png" alt=""></div>
                        <div class="client-name">
                            <h6>Ваня Д.</h6>
                            <p>Ваня</p>
                        </div>
                    </div>
                    <p>Абсолютно замечательный! Хотел бы я сначала подумать об этом. Я бы потерялся без свободы воли.</p>
                    <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                        <li class="active"><i class="lni-star-filled"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area-->
<section class="about-area about3 section-padding-120 bg-gray">
    <div class="container">
        <div class="hero--content--area">
            <div class="row justify-content-center g-4">
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-dinner"></i>
                            <h5>Поесть</h5>
                            <p class="mb-0">Самые вкусные блюда</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-juice"></i>
                            <h5>Бары</h5>
                            <p class="mb-0">Побариться</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-coffee-cup"></i>
                            <h5>Кофейни</h5>
                            <p class="mb-0">Взбодриться</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="700ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-delivery"></i>
                            <h5>Доставка еды</h5>
                            <p class="mb-0">Прямо в кровать</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-shopify"></i>
                            <h5>Магазины</h5>
                            <p class="mb-0">Более 50000</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-taxi"></i>
                            <h5>Такси</h5>
                            <p class="mb-0">Довезут за 60 секунд</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-spray"></i>
                            <h5>Салоны красоты</h5>
                            <p class="mb-0">Помоем, Подкрасим, Подкачаем, Ощипаем </p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="700ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-baloon"></i>
                            <h5>Развлечения</h5>
                            <p class="mb-0">Для всех и каждого</p>
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
                    <h2>Блог</h2>
                    <h6>Свежие записи</h6>
                    <p>Он создан с учетом последних тенденций дизайна и закодирован с учетом всех современных подходов. Это надежный и многомерный шаблон. Его можно использовать!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center g-5">
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="blog-card.html"><img src="/img/custom-img/cucamber_00.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">Новости</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>Семь рецептов засолки огурцов.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 1 минута</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="blog-card.html"><img src="/img/custom-img/cucamber_01.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">Новости</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>Семь лучших сортов огурцов.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 1 минута</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="blog-card.html"><img src="/img/custom-img/cucamber_02.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="blog-card.html">Новости</a><a class="post-title d-block mb-3" href="blog-card.html">
                            <h4>Семь самых крупных огурцов.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 1 минута</span></div>
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
                    <div class="single-partner"><img src="/img/custom-img/camsoda.png" alt=""></div>
                    <div class="single-partner"><img src="/img/custom-img/bally.png" alt=""></div>
                    <div class="single-partner"><img src="/img/custom-img/canon.png" alt=""></div>
                    <div class="single-partner"><img src="/img/custom-img/asus.png" alt=""></div>
                    <div class="single-partner"><img src="/img/custom-img/art.png" alt=""></div>
                    <div class="single-partner"><img src="/img/custom-img/outgunned.png" alt=""></div>
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
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/default/classy-nav.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/default/jquery.scrollup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/default/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animatedheadline.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/jarallax-video.min.js"></script>
<script src="js/default/cookiealert.js"></script>
<script src="js/default/jquery.passwordstrength.js"></script>
<script src="js/default/mail.js"></script>
<script src="js/default/active.js"></script>
</body>
</html>