@extends('layouts.app', ['h' => 'header2'])

@section('title', 'Категория отзывов')
@section('description', 'Категория отзывов')

@section('content')
<!-- Breadcrumb Area-->
<div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/categories.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Категория отзывов</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item"><a href="/">Отзывы</a></li>
                            <li class="breadcrumb-item"><a href="#">Категория отзывов</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Meta-->
<div class="shop-meta section-padding-120-0">
    <div class="container">
        <div class="row">
            <!-- Shop Meta Data-->
            <div class="col-12">
                <div class="shop-meta-data d-sm-flex align-items-center justify-content-between">
                    <!-- Total Product View-->
                    <div class="total-product-view mb-4 mb-sm-0"><span>Представлено<span class="rs-counter">8</span>компаний из<span class="rs-counter">77</span></span></div>
                    <!-- Sorting Data-->
                    <select>
                        <option selected>По популярности</option>
                        <option value="1">По новизне</option>
                        <option value="2">По рейтингу</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reviews category Area-->
<div class="shop--area shop-fullwidth section-padding-120">
    <div class="container">
        <div class="row g-5">
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>lego</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/lego.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>bauer</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/bauer.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>playmobil</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/playmobil.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>megabloks</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/megabloks.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>sluban</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/sluban.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>mega construx</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/megaconstrux.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>город мастеров</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/gorodmasterov.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Single Shop Card-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shop-card">
                    <div class="product-meta d-flex align-items-center justify-content-center p-2">
                        <div class="product-name">
                            <h4>mobicaro</h4>
                        </div>
                    </div>
                    <div class="card-body p-2 text-center">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (25 отзывов)</span>
                    </div>
                    <div class="product-img-wrap"><img class="card-img-bottom" src="/img/custom-img/mobicaro.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pagination Area-->
<div class="saasbox-pagination-area section-padding-0-120">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">9</a></li>
        </ul>
    </nav>
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