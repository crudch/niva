@extends('layouts.app', ['h' => 'header2'])

@section('title', 'Дочерние категории')
@section('description', 'Дочерние категории')

@section('content')
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/categories.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">Дочерние категории</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item"><a href="/">Категории</a></li>
                                <li class="breadcrumb-item"><a href="#">Дочерние категории</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Area-->
    <section class="about-area about3 section-padding-120 bg-gray">
        <div class="container">
            <div class="hero--content--area">
                <div class="row justify-content-center g-4">
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="100ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-dinner"></i>
                                <h5>Рестораны</h5>
                                <p class="mb-0">Блюда со всего света</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-juice"></i>
                                <h5>Бары</h5>
                                <p class="mb-0">Напитки и ночная жизнь</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-coffee-cup"></i>
                                <h5>Кофейни</h5>
                                <p class="mb-0">Бодрость начинается отсюда</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="700ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 700ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-delivery"></i>
                                <h5>Доставка еды</h5>
                                <p class="mb-0">Круглосуточно и быстро</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="100ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-shopify"></i>
                                <h5>Магазины</h5>
                                <p class="mb-0">Более 50000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-taxi"></i>
                                <h5>Такси</h5>
                                <p class="mb-0">Парки и частные водители</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-spray"></i>
                                <h5>Салоны красоты</h5>
                                <p class="mb-0">Стрижка, маникюр, макияж</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Card-->
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <div class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="700ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 700ms; animation-name: fadeInUp;">
                            <div class="card-body"><i class="lni-baloon"></i>
                                <h5>Развлечения</h5>
                                <p class="mb-0">Для всех и каждого</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-wordpress"></i>
                                <div class="fea-text">
                                    <h6>WordPress Solution</h6><span>Ultimate Solution for WP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-brush"></i>
                                <div class="fea-text">
                                    <h6>Frontend Solution</h6><span>Solution for Webs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area           -->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bar-chart"></i>
                                <div class="fea-text">
                                    <h6>Digital Branding</h6><span>Boot your sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area           -->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-wechat"></i>
                                <div class="fea-text">
                                    <h6>Live Chat Help</h6><span>Support 24h a day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area        -->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-cog"></i>
                                <div class="fea-text">
                                    <h6>Easy Setup</h6><span>Solution for setup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1100ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1300ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area-->
                    <div class="col-12 col-md-3">
                        <div class="card feature-card wow fadeInUp" data-wow-delay="1600ms" data-wow-duration="1000ms">
                            <div class="card-body d-flex align-items-center"><i class="lni-bug"></i>
                                <div class="fea-text">
                                    <h6>Fixed Bugs</h6><span>Unlimited bug fix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Area-->
    <div class="saasbox-tab-area section-padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-6">
                    <div class="section-heading text-center"><i class="lni-crown"></i>
                        <h2>Актуально сейчас</h2>
                        <h3>Найдите интересные заведения поблизости</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab--area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Рестораны</a></li>
                            <li class="nav-item"><a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Такси</a></li>
                            <li class="nav-item"><a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Развлечение</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Pane-->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-md-6 col-xxl-5">
                                        <div class="tab--text mt-5">
                                            <h6>Рестораны</h6>
                                            <h2>Субботица Садовая</h2>
                                            <p>Название придумано специально для нового заведения: почти на границе Сербии и Венгрии есть такой город, но у него только одно «б»; второе добавили, чтобы было похоже на русское слово «суббота». В ресторане 66 посадочных мест, из них 18 — в отдельном зале, где, как правило, весело отмечают что-то большие балканские мужчины.</p>
                                            <span class="d-block mt-4 mb-1">Довольных клиентов: 90%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="tab-thumb mt-5"><img src="/img/custom-img/Subbotitsa.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane-->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-md-6 col-xxl-5">
                                        <div class="tab--text mt-5">
                                            <h6>Такси</h6>
                                            <h2>ТаксиЛэнд</h2>
                                            <p>Служба заказов такси «Такси Лэнд» обеспечивает население города Москвы и Подмосковья по недорогим и разумным ценам услугами качественных пассажирских перевозок. Такси в нашей компании можно заказать круглосуточно и заранее оставить заказ на подачу машины с гарантией исполнения.</p>
                                            <span class="d-block mt-4 mb-1">Довольных клиентов: 90%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="tab-thumb mt-5"><img src="/img/custom-img/Taksilend.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane-->
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-md-6 col-xxl-5">
                                        <div class="tab--text mt-5">
                                            <h6>Развлечения</h6>
                                            <h2>Леонид Агутин</h2>
                                            <p>Леонид Агутин на отечественной эстраде — фигура, без сомнений, позитивная. Автор и исполнитель многих собственных песен, Агутин всегда отличался интимной, непафосной любовной лирикой, приятными латиноамериканскими ритмами в аранжировках, а также умением обходиться без фонограммы на живых выступлениях и телеэфирах.</p>
                                            <span class="d-block mt-4 mb-1">Довольных клиентов: 90%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="tab-thumb mt-5"><img src="img/custom-img/Leonid.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
