<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Контакты</title>
    <!-- Favicon-->
    <link rel="icon" type="image/svg+xml" href="/img/core-img/logo.svg">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="/css/app.css">
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
                <!-- Logo--><a class="nav-brand mr-5" href="/"><img src="/img/core-img/logo.png" alt=""></a>
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
<div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/contacts.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Контакты</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item"><a href="#">Контакты</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="col-12">--}}
{{--    <div class="breadcrumb-content">--}}
{{--        <nav aria-label="breadcrumb">--}}
{{--            <ol class="breadcrumb justify-content-left">--}}
{{--                <li class="breadcrumb-item"><a href="/">Главная</a></li>--}}
{{--                <li class="breadcrumb-item active" aria-current="page"><a href="#">Отзывы</a></li>--}}
{{--                <li class="breadcrumb-item active" aria-current="page"><a href="#">"Большая кормушка"</a></li>--}}
{{--            </ol>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Contacts Area-->
<div class="saasbox-contact-us-area section-padding-120-40">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Contact Side Info-->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="contact-side-info mb-80">
                    <h1 class="mb-3">Мы будем рады <br> обратной связи!</h1>
                    <p class="mb-4">Напишите нам. Мы свяжемся с Вами как можно быстрее. Обычно менеджеры отвечают в течение 24 часов.</p>
                    <div class="contact-mini-card-wrapper">
                        <!-- Contact Mini Card-->
                        <div class="contact-mini-card">
                            <div class="contact-mini-card-icon"><i class="lni lni-vk"></i></div>
                            <p>vk.com</p>
                        </div>
                        <!-- Contact Mini Card-->
                        <div class="contact-mini-card">
                            <div class="contact-mini-card-icon"><i class="lni lni-whatsapp"></i></div>
                            <p>whatsapp.com</p>
                        </div>
                        <!-- Contact Mini Card-->
                        <div class="contact-mini-card">
                            <div class="contact-mini-card-icon"><i class="lni lni-telegram"></i></div>
                            <p>telegram.org</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form-->
            <div class="col-12 col-lg-7">
                <div class="contact-form mb-80">
                    <form id="main_contact_form" action="#" method="POST">
                        <div id="success_fail_info"></div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label class="form-label" for="name">Имя:</label>
                                <input class="form-control mb-30" id="name" type="text" placeholder="Ваше Имя" value="" name="name" required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label" for="email">Email:</label>
                                <input class="form-control mb-30" id="email" type="email" placeholder="test@test.test" name="email" value="" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="subject">Тема:</label>
                                <input class="form-control mb-30" id="topics" type="text" placeholder="Предложение" name="topics" value="">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Сообщение:</label>
                                <textarea class="form-control mb-30" id="message" name="message" placeholder="Ваше сообщение"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn saasbox-btn w-100" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Google Maps-->
<div class="google-maps-wrapper">
    <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJybDUc_xKtUYRTM9XV8zWRD0&key=AIzaSyDNvZwDINy6AJe-Aqas44Y2dZje_7bU-ys" allowfullscreen=""></iframe>
</div>
<!-- Footer Area-->
<footer class="footer-area section-padding-120">
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