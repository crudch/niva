<?php
/**
 * @var \App\Models\Article $article
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
    <title>{{ $article->title }}</title>
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
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <!-- Login Button-->
                        <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Войти</a></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Scroll Indicator-->
<div id="scrollIndicator"></div>
<!-- Breadcrumb Area-->
<div class="breadcrumb--area bg-img bg-overlay jarallax" style="background-image: url('{{ $article->img }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">{{ $article->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog.index') }}">Блог</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $article->rubric->title }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- saasbox Blog Area-->
<div class="saasbox--blog--area section-padding-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="post--like-post"><a href="#"><i class="lni-heart"></i></a><span>267 Like</span></div>
            <div class="col-12 col-sm-10 col-md-8">
                <!-- Blog Details Area-->
                <div class="single-blog-details-area"><img class="post-thumbnail mb-5" src="{{ $article->img }}" alt="">
                    <div class="post-date mb-2">{{ $article->created_at->format('d.m.Y') }}</div>
                    <h2 class="mb-3">{{ $article->title }}</h2>
                    <div class="post-meta mb-5"><a class="post-author" href="#">Редакция Отзовик</a><a class="post-tutorial" href="#">Илья Абрамов</a></div>
                    <p>{!! $article->body !!}</p>
                </div>
                <!-- Post Tag & Share Button-->
                <div class="post-tag-share-button d-sm-flex align-items-center justify-content-between my-5">
                    <!-- Post Tags-->
                    <div class="post-tag pb-5">
                        <ul class="d-flex align-items-center pl-0">
                            <li><a href="#">ягоды</a></li>
                            <li><a href="#">блюда</a></li>
                            <li><a href="#">рецепт</a></li>
                        </ul>
                    </div>
                    <!-- Share Button-->
                    <div class="share-button pb-5"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-pinterest"></i></a></div>
                </div>
                <!-- Comments Area-->
                <div class="comment_area mb-50 clearfix">
                    <h4 class="mb-5">Комментарии</h4>
                    <ol class="pl-0">
                        <!-- Single Comment Area-->
                        <li class="single_comment_area">
                            <div class="comment-content d-flex">
                                <div class="comment-author"><img src="/img/bg-img/t4.png" alt="author"></div>
                                <div class="comment-meta py-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Иван Пантелеев</h6><a class="post-date" href="#">3 часа назад</a>
                                    </div>
                                    <p>Вы спасли наш бизнес! Спасибо, ребята, продолжайте в том же духе!</p><a class="like" href="#">👍</a><a class="reply" href="#">Reply</a>
                                </div>
                            </div>
                            <ol class="children">
                                <!-- Single Comment Area-->
                                <li class="single_comment_area">
                                    <div class="comment-content d-flex">
                                        <div class="comment-author"><img src="/img/bg-img/t2.png" alt="author"></div>
                                        <div class="comment-meta py-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6>Игорь Станиславский</h6><a class="post-date" href="#">2 часа назад</a>
                                            </div>
                                            <p>Я настоятельно рекомендую агентство ВСЕМ, кто заинтересован в ведении успешного онлайн-бизнеса!</p><a class="like" href="#">👍</a><a class="reply" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <!-- Single Comment Area-->
                        <li class="single_comment_area">
                            <div class="comment-content d-flex">
                                <div class="comment-author"><img src="/img/bg-img/t3.png" alt="author"></div>
                                <div class="comment-meta py-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Юрий Жернов</h6><a class="post-date" href="#">41 минута назад</a>
                                    </div>
                                    <p>Абсолютно замечательные!</p><a class="like" href="#">👍</a><a class="reply" href="#">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="contact-area">
                    <h4 class="mb-5">Оставить комментарий</h4>
                    <form class="contact-from" action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input class="form-control mb-30" type="text" name="message-name" placeholder="Имя">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input class="form-control mb-30" type="email" name="message-email" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control mb-30" name="message" placeholder="Текст комментария..."></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn saasbox-btn" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
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
<script src="/js/default/scrollindicator.js"></script>
<script src="/js/default/active.js"></script>
</body>
</html>