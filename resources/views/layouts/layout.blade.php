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
    <link rel="icon" type="image/svg+xml" href="/img/core-img/logo.svg">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-light" role="status"><span class="sr-only">Загрузка...</span></div>
</div>
<!-- Header Area-->
<header class="header-area header2">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar navbar2 justify-content-between" id="saasboxNav">
                <!-- Logo--><a class="nav-brand mr-5" href="/"><img src="img/core-img/logo.png" alt=""></a>
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
                            <li><a href="/">Главная</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="#">Компании</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <!-- Login Button-->
                        <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Войти</a></div>
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
                    <h2 class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">Читайте и размещайте отзывы о товарах и компаниях, узнавайте и применяйте лучший опыт и рекомендации.</h2>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">Платформа размещения авторских отзывов</p>
                    <!-- Button Group-->
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
            <h2 class="mb-4">Данные отзывы набрали наибольшее количество голосов за последние 7 дней</h2>
        </div>
    </div>
    <!-- Client Feedback Content-->
    <div class="client-feedback-content">
        <div class="client-feedback-slides owl-carousel">
            <!-- Single Feedback Slide-->
            <div class="card feedback-card bg-white">
                <div class="card-body">
                    <div class="client-info d-flex align-items-center">
                        <div class="client-thumb"><img src="/img/custom-img/David.jpg" alt=""></div>
                        <div class="client-name">
                            <h6>Дэвид</h6>
                            <p>David</p>
                        </div>
                    </div>
                    <p>Вкусный и полезный зелёный чай с натуральным составом </p>
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
                        <div class="client-thumb"><img src="/img/custom-img/Hanna.jpg" alt=""></div>
                        <div class="client-name">
                            <h6>Ханна</h6>
                            <p>Hanna</p>
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
                        <div class="client-thumb"><img src="/img/custom-img/Richard.jpg" alt=""></div>
                        <div class="client-name">
                            <h6>Ричард</h6>
                            <p>Richard</p>
                        </div>
                    </div>
                    <p>Хочу поделиться впечатлениями об аромате, который уже второе лето является моим фаворитом на каждый день</p>
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
                        <div class="client-thumb"><img src="/img/custom-img/Katie.jpg" alt=""></div>
                        <div class="client-name">
                            <h6>Кэти</h6>
                            <p>Katie</p>
                        </div>
                    </div>
                    <p>Даже не ожидала, что патчи а 55 рублей, тем более что в упаковке их целых 10 штук, покажут хороший результат</p>
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
                            <h5>Рестораны</h5>
                            <p class="mb-0">Блюда со всего света</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-juice"></i>
                            <h5>Бары</h5>
                            <p class="mb-0">Напитки и ночная жизнь</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-coffee-cup"></i>
                            <h5>Кофейни</h5>
                            <p class="mb-0">Бодрость начинается отсюда</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="700ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-delivery"></i>
                            <h5>Доставка еды</h5>
                            <p class="mb-0">Круглосуточно и быстро</p>
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
                            <p class="mb-0">Парки и частные водители</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Card-->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="card-body"><i class="lni-spray"></i>
                            <h5>Салоны красоты</h5>
                            <p class="mb-0">Стрижка, маникюр, макияж</p>
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
                    <h6>Новые записи</h6>
                    <p>Интересные статьи и полезные новости от редакции</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center g-5">
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="#"><img src="/img/custom-img/berries.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="#">Новости</a><a class="post-title d-block mb-3" href="#">
                            <h4>Десять рецептов варенья из ягод.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 2 мин.</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="#"><img src="/img/custom-img/park.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="#">Новости</a><a class="post-title d-block mb-3" href="#">
                            <h4>Куда пойти в выходные.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 4 мин.</span></div>
                    </div>
                </div>
            </div>
            <!-- Blog Card-->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms"><a class="d-block mb-4" href="#"><img src="/img/custom-img/accessories.jpg" alt=""></a>
                    <div class="post-content"><a class="d-block mb-1" href="#">Новости</a><a class="post-title d-block mb-3" href="#">
                            <h4>Обзор полезных аксессуаров.</h4></a>
                        <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>Время чтения 3 мин.</span></div>
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
{{--<div class="cookiealert mb-0" role="alert">--}}
{{--    <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>--}}
{{--    <button class="btn btn-primary acceptcookies" type="button" aria-label="Close">I agree</button>--}}
{{--</div>--}}
<!-- Footer Area-->
<footer class="footer-area footer2 section-padding-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-10 col-lg-3">
                <div class="footer-widget-area mb-70"><a class="d-block mb-4" href="/"><img src="img/core-img/logo-white.png" alt=""></a>
                    <p>По всем вопросам сотрудничества, Вы можете связаться с нами через форму обратной связи и с помощью социальных сетей, указанных ниже</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input class="form-control" type="email" placeholder="Ваш email">
                            <button class="btn d-none" type="submit">Go</button>
                        </form>
                    </div>
                    <div class="footer-social-icon d-flex align-items-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Facbook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></div>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Оставить отзыв</h5>
                    <ul>
                        <li><a href="#" target="_blank">о компании</a></li>
                        <li><a href="#" target="_blank">о сайте</a></li>
                        <li><a href="#" target="_blank">о товаре</a></li>
                        <li><a href="#" target="_blank">о фильме</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Карта сайта</h5>
                    <ul>
                        <li><a href="#" target="_blank">Отзывы</a></li>
                        <li><a href="/blog" target="_blank">Блог</a></li>
                        <li><a href="#" target="_blank">Компании</a></li>
                        <li><a href="#" target="_blank">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Правила</h5>
                    <ul>
                        <li><a href="#" target="_blank">FAQ</a></li>
                        <li><a href="#" target="_blank">Информация для авторов</a></li>
                        <li><a href="#" target="_blank">Информация для компаний</a></li>
                        <li><a href="#" target="_blank">Лицензионное соглашение</a></li>
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
                    <p class="mb-0">2021 <a href="#" target="_blank">Отзовик</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <!-- Footer Nav-->
                <div class="footer-nav">
                    <ul class="d-flex">
                        <li><a href="#" target="_blank">О проекте</a></li>
                        <li><a href="#" target="_blank">Политика</a></li>
                        <li><a href="#" target="_blank">Поддержка</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <!-- Default dropup button-->
                <div class="language-dropdown text-center text-lg-right mt-4 mt-lg-0">
                    <div class="btn-group dropup">
                        <button class="btn saasbox-btn-2 dropdown-toggle text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Выбор языка</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-ru"></span>Русский</a>
                            <a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-us"></span>English</a>
                        </div>
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