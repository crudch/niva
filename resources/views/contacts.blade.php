@extends('layouts.app', ['h' => 'header2'])

@section('title', 'Контакты')
@section('description', 'Контакты')

@section('content')
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
@endsection
