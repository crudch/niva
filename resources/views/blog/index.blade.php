<?php
/**
 * @var \App\Models\Rubric[] $rubrics
 * @var \App\Models\Article[] $articles
 * @var \App\Models\Article[] $news
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Блог</title>
    <!-- Favicon-->
    <link rel="icon" type="image/svg+xml" href="/img/core-img/logo.svg">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div>
</div>
<!-- Header Area-->
<header class="header-area">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id="saasboxNav">
                <!-- Logo--><a class="nav-brand mr-5" href="/"><img src="/img/core-img/logo-white.png" alt=""></a>
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
                            <li><a href="{{ route('blog.index') }}">Блог</a></li>
                            <li><a href="#">Компании</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                        <!-- Login Button-->
                        <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Войти</a></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Breadcrumb Area-->
<div class="breadcrumb--area bg-img bg-overlay jarallax" style="background-image: url('/img/custom-img/blog.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Блог</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Блог</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area-->
<div class="saasbox--blog--area section-padding-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-7">
                <div class="row g-5">
                    @foreach($articles as $article)
                    <!-- Single Blog Post-->
                    <div class="col-12">
                        <div class="card blog-card border-0 no-boxshadow rounded-0">
                            <a class="d-block mb-4" href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">
                                <img src="{{ $article->img }}" alt="{{ $article->title }}">
                            </a>
                            <div class="post-content">
                                <a class="d-block mb-1" href="{{ route('blog.rubric', $article->rubric) }}">{{ $article->rubric->title }}</a>
                                <a class="post-title d-block mb-3" href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">
                                    <h4>{{ $article->title }}</h4>
                                </a>
                                <p>{{ $article->description }}</p>
                                <div class="post-meta"><span class="text-muted">Время чтения 2 мин.</span></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination Area-->
                {{ $articles->onEachSide(0)->links('particles.paginate') }}
            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <div class="blog-sidebar-area">
                    <!-- Single Widget Area-->
                    <div class="single-widget-area mb-5">
                        <!-- Search Form-->
                        <form class="widget-form" action="#" method="post">
                            <input class="form-control" type="search" placeholder="Поиск по блогу...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Single Widget Area-->
                    <div class="single-widget-area mb-5">
                        <h4 class="widget-title mb-30">Категории</h4>
                        <ul class="catagories-list pl-0">
                            @foreach($rubrics as $rubric)
                                <li>
                                    <a href="{{ route('blog.rubric', $rubric) }}">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $rubric->title }}
                                        <span class="text-muted ml-2">({{ $rubric->articles_count }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single Widget Area-->
                    <div class="single-widget-area mb-5">
                        <h4 class="widget-title mb-30">Новые записи</h4>
                        @foreach($news as $article)
                        <!-- Single Recent Post-->
                        <div class="single-recent-post d-flex align-items-center">
                            <div class="post-thumb">
                                <a href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">
                                    <img src="{{ $article->img }}" alt="{{ $article->title }}">
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-title" href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">{{ $article->title }}</a>
                                <p class="post-date">{{ $article->created_at->format('d.m.Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Single Widget Area-->
                    <div class="single-widget-area">
                        <h4 class="widget-title mb-30">Популярные теги</h4>
                        <ul class="popular-tags clearfix pl-0">
                            <li><a href="#">ягода</a></li>
                            <li><a href="#">кольцо</a></li>
                            <li><a href="#">выходной</a></li>
                            <li><a href="#">праздник</a></li>
                            <li><a href="#">вечер</a></li>
                            <li><a href="#">туризм</a></li>
                            <li><a href="#">лето</a></li>
                            <li><a href="#">хорошее настроение</a></li>
                            <li><a href="#">природа</a></li>
                            <li><a href="#">солнце</a></li>
                            <li><a href="#">лес</a></li>
                            <li><a href="#">море</a></li>
                            <li><a href="#">пляж</a></li>
                            <li><a href="#">напитки</a></li>
                            <li><a href="#">сок</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cool Facts Area-->
<section class="cta-area cta3 py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-sm-8">
                <div class="cta-text mb-4 mb-sm-0">
                    <h3 class="text-white mb-0">Интересный товар.</h3>
                </div>
            </div>
            <div class="col-12 col-sm-4 text-sm-right"><a class="btn saasbox-btn white-btn" href="#">Перейти</a></div>
        </div>
    </div>
</section>
<!-- Footer Area-->
<footer class="footer-area section-padding-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-10 col-lg-3">
                <div class="footer-widget-area mb-70"><a class="d-block mb-4" href="/"><img src="/img/core-img/logo-white.png" alt=""></a>
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
                        <li><a href="{{ route('blog.index') }}" target="_blank">Блог</a></li>
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