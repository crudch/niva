@extends('layouts.app')

@section('title', 'Мой профиль')
@section('description', 'Профиль')

@section('content')
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area bg-img bg-overlay jarallax" style="background-image: url('/img/custom-img/profile.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">Профиль</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item"><a href="#">Профиль</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Area-->
    <div class="profile-area profile-page section-padding-120">
        <div class="container position-relative zindex-5 pb-4 mb-md-3">
            <div class="row">
                <!-- Sidebar-->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-white rounded-3 shadow">
                        <div class="px-4 py-4 mb-1 text-center"><img class="d-block rounded-circle mx-auto my-2" src="/img/custom-img/Hanna.jpg" alt="Ханна Вилсон" width="110">
                            <h6 class="mb-0 pt-1">Ханна Вилсон</h6><span class="text-muted fs-sm">@hanna_w</span>
                        </div>
                        <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2" href="#" data-bs-toggle="collapse">Меню</a></div>
                        <div class="d-lg-block collapse pb-2" id="account-menu">
                            <h3 class="d-block bg-light fs-sm fw-semibold text-muted mb-0 px-4 py-3">Статистика</h3>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="#">Отзывы<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">7</span></a>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Посты<span class="text-muted fs-sm fw-normal ms-auto">2</span></a>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Друзья<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">100</span></a>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Подписчики<span class="text-muted fs-sm fw-normal ms-auto">34</span></a>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Избранное<span class="text-muted fs-sm fw-normal ms-auto">15</span></a>
                            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Награды<span class="text-muted fs-sm fw-normal ms-auto">6</span></a>
                            <h3 class="d-block bg-light fs-sm fw-semibold text-muted mb-0 px-4 py-3">Настройки</h3><a class="d-flex align-items-center nav-link-style px-4 py-3 active" href="#">Активность</a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Способы связи</a>
                            <div class="d-flex align-items-center border-top"><a class="d-block w-100 nav-link-style px-4 py-3" href="#">Уведомления</a>
                                <div class="ms-auto px-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifications-switch" data-master-checkbox-for="#notification-settings" checked="">
                                        <label class="form-check-label" for="notifications-switch"></label>
                                    </div>
                                </div>
                            </div><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Выйти</a>
                        </div>
                    </div>
                </div>
                <!-- Content-->
                <div class="col-lg-8">
                    <div class="d-flex flex-column h-100 bg-white rounded-3 shadow p-4">
                        <div class="py-2 p-md-3">
                            <!-- Title + Delete link-->
                            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start">
                                <h1 class="h3 mb-2 text-nowrap">Информация профиля</h1><a class="btn btn-link text-danger fw-medium btn-sm mb-2" href="#">Удалить аккаунт</a>
                            </div>
                            <!-- Content-->
                            <div class="bg-light rounded-3 p-4 mb-4">
                                <div class="d-block d-sm-flex align-items-center"><img class="d-block rounded-circle mx-sm-0 mx-auto mb-3 mb-sm-0" src="/img/custom-img/Hanna.jpg" alt="Ханна Вилсон" width="110">
                                    <div class="ps-sm-3 text-center text-sm-start">
                                        <button class="btn btn-light bg-white shadow-sm btn-sm mb-2" type="button">Изменить аватар</button>
                                        <div class="p mb-0 fs-ms text-muted">Загрузите изображение в формате JPG, GIF или PNG.<br>Рекомендуемый размер 300px x 300px.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-fn">Имя</label>
                                        <input class="form-control" type="text" id="account-fn" value="Ханна">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-ln">Фамилия</label>
                                        <input class="form-control" type="text" id="account-ln" value="Вилсон">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-email">Email</label>
                                        <input class="form-control" type="text" id="account-email" value="h.wilson@example.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-username">Имя пользователя</label>
                                        <div class="input-group"><span class="input-group-text">@</span>
                                            <input class="form-control" type="text" id="account-username" value="hanna_w">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-country">Страна</label>
                                        <select class="form-select" id="account-country">
                                            <option value="">Select country</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Spain">Spain</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="USA" selected="">Российская Федерация</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-city">Город</label>
                                        <input class="form-control" type="text" id="account-city" value="Москва">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-address">Адрес</label>
                                        <input class="form-control" type="text" id="account-address" value="Some Cool Street">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 pb-1">
                                        <label class="form-label px-0" for="account-zip">ZIP Code</label>
                                        <input class="form-control" type="text" id="account-zip">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-4">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="form-check d-block">
                                            <input class="form-check-input" type="checkbox" id="show-email" checked="">
                                            <label class="form-check-label" for="show-email">Показывать мой email зарегистрированным пользователям</label>
                                        </div>
                                        <button class="btn btn-primary mt-3 mt-sm-0" type="button">Сохранить</button>
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
