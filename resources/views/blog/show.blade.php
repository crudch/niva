<?php
/**
 * @var \App\Models\Article $article
 */
?>

@extends('layouts.app')

@section('title', $article->title)
@section('description', $article->title)

@section('content')
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
                                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Блог</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.rubric', $article->rubric) }}">{{ $article->rubric->title }}</a></li>
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
@endsection
