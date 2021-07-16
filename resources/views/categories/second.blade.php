<?php
/**
 * @var \App\Models\Category $category
 */
?>
@extends('layouts.app', ['h' => 'header2'])

@section('title', $category->title)
@section('description', $category->description)

@section('content')
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/categories.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">{{ $category->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('reviews.index') }}">Отзывы</a></li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('reviews.test', ['category1' => $category->parent->slug]) }}">
                                        {{ $category->parent->title }}
                                    </a>
                                </li>
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
@endsection
