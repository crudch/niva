<?php
/**
 * @var \App\Models\Category[] $categories
 * @var \App\Models\Article[]  $articles
 */
?>
@extends('layouts.app', ['h' => 'header2', 'search' => true])

@section('title', 'Отзовик')

@section('content')
    <!-- Welcome Area -->
    <section class="welcome-area hero2" id="home">
        <!-- Background Shape-->
        <div class="hero-background-shape"><img src="/img/core-img/hero-2.png" alt=""></div>
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
                    <div class="welcome-thumb wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"><img src="/img/bg-img/hero-6.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="border-dashed mb-4"></div>
    </div>
    <!-- Client Feedback Area -->
    <section class="client-feedback-area flex-column d-md-flex align-items-center justify-content-between section-padding-120 bg-img bg-overlay jarallax" style="background-image: url('/img/custom-img/mountain.jpg');">
        <!-- Client Feedback Heading-->
        <div class="client-feedback-heading">
            <div class="section-heading mb-0 text-right white">
                <h6>Лучшие отзывы</h6>
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
                    @foreach($categories as $category)
                        <!-- Single Hero Card-->
                        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                <a href="#" class="card hero-card h-100 border-0 wow fadeInUp p-3" data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <div class="card-body"><i class="{{ $category->icon }}"></i>
                                        <h5>{{ $category->title }}</h5>
                                        <p class="mb-0">{{ $category->description }}</p>
                                    </div>
                                </a>
                            </div>
                    @endforeach
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
                @foreach($articles as $article)
                    <!-- Blog Card-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                            <div class="card blog-card border-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <a class="d-block mb-4" href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">
                                    <img src="{{ $article->img }}" alt="{{ $article->title }}">
                                </a>
                                <div class="post-content">
                                    <a class="d-block mb-1" href="{{ route('blog.rubric', $article->rubric) }}">{{ $article->rubric->title }}</a>
                                    <a class="post-title d-block mb-3" href="{{ route('blog.show', ['rubric_slug' => $article->rubric->slug, 'article' => $article->slug]) }}">
                                        <h4>{{ $article->title }}</h4>
                                    </a>
                                    <div class="post-meta"><span class="text-muted"><i class="lni-timer mr-2"></i>{{ $article->created_at->format('d.m.Y') }}</span></div>
                                </div>
                            </div>
                        </div>
                @endforeach
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
@endsection