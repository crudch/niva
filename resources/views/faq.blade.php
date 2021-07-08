@extends('layouts.app', ['h' => 'header2'])

@section('title', 'FAQ')
@section('description', 'FUCK')

@section('content')
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/faq.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">FAQ</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item"><a href="#">FAQ</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Area-->
    <div class="faq--area section-padding-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6">
                    <div class="faq-content">
                        <div class="accordion faq--accordian" id="faqaccordian">
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingOne">
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. Как я могу оставить отзыв?</button>
                                </div>
                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqaccordian">
                                    <div class="card-body">
                                        <p>Откроется страница, на которой вам будет предложено оценить транзакцию (положительно, нейтрально или отрицательно), ввести дополнительные сведения (кратко описать свои впечатления от сделки) и оценить подробности (точность описания, качество коммуникации, скорость обработки заказа и разумность платы за доставку).</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">2. Можно ли изменить отзыв?</button>
                                </div>
                                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqaccordian">
                                    <div class="card-body">
                                        <p>Если вы хотите изменить оставленный вами отзыв, вы можете попросить продавца запросить пересмотр отзыва, после чего вам придет специальное почтовое сообщение с инструкциями..</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingThree">
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">3. Что означает статус «Лучший продавец»?</button>
                                </div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqaccordian">
                                    <div class="card-body">
                                        <p>Участники, получившие статус «Лучший продавец», постоянно предлагают своим клиентам услуги самого высокого качества. Эмблему «Лучший продавец» вы можете видеть как на странице с результатами поиска товаров.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="faq-content">
                        <div class="accordion faq--accordian" id="faqaccordian2">
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingFour">
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">4. На что обязательно следует обращать внимание в объявлении?</button>
                                </div>
                                <div class="collapse show" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqaccordian2">
                                    <div class="card-body">
                                        <p>Во-первых, внимательно изучите фотографии товара и всю информацию во вкладке Описание. Вас должны интересовать состояние (новый, бывший в употреблении, в нерабочем состоянии и т.п.), комплектация и прочие важные для данного типа товара подробности, равно как и дополнительные условия продавца.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingFive">
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">5. Как связаться со cлужбой поддержки?</button>
                                </div>
                                <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqaccordian2">
                                    <div class="card-body">
                                        <p>Связаться со Службой поддержки вы можете следующим образом:</p>
                                        <ul>
                                            <li style="list-style: disc;">Авторизуйтесь, указав логин и пароль</li>
                                            <li style="list-style: disc;">Нажмите на ссылку Справка и помощь в верхней части страницы</li>
                                            <li style="list-style: disc;">Выберите закладку Популярные решения или Просмотр по разделу</li>
                                            <li style="list-style: disc;">Если вашей проблемы нет в перечне, нажмите Свяжитесь с нами внизу страницы</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FAQ-->
                            <div class="card border-0">
                                <div class="card-header" id="headingSix">
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">6. Как изменить личные данные?</button>
                                </div>
                                <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#faqaccordian2">
                                    <div class="card-body">
                                        <p>Для изменения адреса регистрации или основного адреса доставки перейдите в личный кабинет:</p>
                                        <ul>
                                            <li style="list-style: disc;">Откройте вкладку Учетная запись</li>
                                            <li style="list-style: disc;">Нажмите ссылку Адреса</li>
                                            <li style="list-style: disc;"> Нажмите на ссылку Изменить рядом с требуемым адресом.</li>
                                            <li style="list-style: disc;">Если вашей проблемы нет в перечне, нажмите Свяжитесь с нами внизу страницы</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="border-top"></div>
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
