@extends('layouts.app', ['h' => 'header2'])

@section('title', 'Отзыв о...')
@section('description', 'Отзыв о...')

@section('content')
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area bg-img bg-overlay--gray jarallax" style="background-image: url('/img/custom-img/single.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">Карточка фирмы</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item"><a href="#">Отзывы</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Отзыв о "Большая кормушка"</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Area-->
    <div class="product-details-area product-details-page section-padding-120">
        <div class="container">
            <div class="card product-description-card mb-5">
                <h6 class="product-meta-title mb-0 pl-5 py-4">ЗАО "Большая кормушка"</h6>
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                        <img src="/img/custom-img/feeder.jpg" alt="..." style="width: 300px; height: 300px">
                        <ul class="ratings-list d-flex align-items-center justify-content-center mb-3">
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                            <li class="active"><i class="lni-star-filled"></i></li>
                        </ul><span>4.89 из 5.00 (23 отзыва)</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            {{--                        <h5 class="card-title">Большая кормушка</h5>--}}
                            <p class="card-text">Каждый день наша команда сплоченно работает для достижения общей цели - предложить Вам нужный товар, хорошую цену и качественное обслуживание. Для этого одни из нас посещают всевозможные выставки по всему миру, собирая лучшее предложения и самые горячие новинки, другие - стремятся максимально информативно донести Вам эти тенденции, работа третьих заключается в том, чтобы клиент получил все "в лучшем виде". Сегодня более 50 человек заняты этой, без преувеличения, приятной работой. Ведь когда мы слышим позитивный отзыв - радуемся всем коллективом.</p>
                            <p class="card-text"><small class="text-muted">Последнее обновление 3 минуты назад</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <!-- Product Review-->
                <!--          <div class="col-12 col-md-9 col-lg-12 mb-5">-->
                <!--            <div class="card product-review-card">-->
                <!--              <h6 class="product-meta-title mb-0 pl-5 py-4">ЗАО "Большая кормушка"</h6>-->
                <!--              <div class="card-body p-5 text-center">-->

                <!--              </div>-->
                <!--            </div>-->
                <!--          </div>-->
                <div class="col-12 col-md-9 col-lg-6">
                    <!-- Product Image Wrapper-->
                    <div class="product-image-wrapper mb-5"><img class="w-100" src="/img/custom-img/feeder_00.jpg" alt="">
                        <!-- Related Image Carousel-->
                        <div class="related-image-carousel owl-carousel">
                            <!-- Single Slide--><a class="image-popup" href="/img/custom-img/feeder_01.jpg" data-effect="mfp-zoom-in" title="Shop Image"><img src="/img/custom-img/feeder_01.jpg" alt=""></a>
                            <!-- Single Slide--><a class="image-popup" href="/img/custom-img/feeder_02.jpg" data-effect="mfp-zoom-in" title="Shop Image"><img src="/img/custom-img/feeder_02.jpg" alt=""></a>
                            <!-- Single Slide--><a class="image-popup" href="/img/custom-img/feeder_03.jpg" data-effect="mfp-zoom-in" title="Shop Image"><img src="/img/custom-img/feeder_03.jpg" alt=""></a>
                            <!-- Single Slide--><a class="image-popup" href="/img/custom-img/feeder_04.jpg" data-effect="mfp-zoom-in" title="Shop Image"><img src="/img/custom-img/feeder_04.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Product Description-->
                <div class="col-12 col-md-9 col-lg-6">
                    <div class="card product-description-card mb-5">
                        <h6 class="product-meta-title mb-0 pl-5 py-4">Информация</h6>
                        <div class="card-body p-3 p-sm-4">
                            <!--                <h4 class="mb-3">Bonsai Tree with Superb Pot</h4>-->
                            <!--                <h3 class="product-price mb-4">$19.99<span>$32.89</span></h3>-->
                            <!--                <h6 class="mb-4">36 Product Left                            </h6>-->
                            <!--                <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template. It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template. It's crafted with the latest trend of design & coded with all modern approaches.</p>-->
                            <!--                <form class="d-flex align-items-end mt-4" action="#">-->
                            <!--                  <div class="form-group mb-0">-->
                            <!--                    <label class="mr-2 mb-2" for="totalQuantity">Quantity</label>-->
                            <!--                    <input class="form-control" id="totalQuantity" min="1" max="12" name="quantity" value="1">-->
                            <!--                  </div>-->
                            <!--                  <button class="btn saasbox-btn ml-3" type="submit">Buy Now</button>-->
                            <!--                </form>-->
                            <div class="table-responsive">
                                <table class="table mb-4">
                                    <tbody>
                                    <tr>
                                        <td class="px-3">Телефон:</td>
                                        <td class="px-3"><a href="">+7(812)9204370</a></td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Сайт компании:</td>
                                        <td class="px-3"><a href="#">big-korm.com</a></td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Социальные сети:</td>
                                        <td class="px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" id="facebook"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" id="instagram"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 00-1.417.923A3.927 3.927 0 00.42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 001.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 00-.923-1.417A3.911 3.911 0 0013.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 01-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 01-.92-.598 2.48 2.48 0 01-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 100 1.92.96.96 0 000-1.92zm-4.27 1.122a4.109 4.109 0 100 8.217 4.109 4.109 0 000-8.217zm0 1.441a2.667 2.667 0 110 5.334 2.667 2.667 0 010-5.334z"></path></svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Часы работы:</td>
                                        <td class="px-3">09:00-21:00</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Адрес:</td>
                                        <td class="px-3">Санкт-Петербург, проспект Большевиков 37к1</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Рубрики:</td>
                                        <td class="px-3">Кафе-кондитерские</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Wi-Fi:</td>
                                        <td class="px-3">Wi-Fi</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">Способы оплаты:</td>
                                        <td class="px-3">Оплата картой/Наличный расчёт</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reviews Area-->
                <!-- Rating & Review Wrapper-->
                <div class="rating-and-review-wrapper bg-white py-3 mb-3">
                    <div class="container">
                        <h6>Отзывы</h6>
                        <div class="rating-review-content">
                            <ul class="ps-0">
                                <li class="single-user-review d-flex">
                                    <div class="user-thumbnail"><img src="/img/custom-img/David.jpg" alt=""></div>
                                    <div class="rating-comment">
                                        <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                        <p class="comment mb-0">Вчера вечером ходил вместе с подругой на Презентацию. Она проходила в Торговом центре. Нас встретили сотрудники, были с нами вежливыми. Стали рассказывать про товары. Очень понравилось! It's just amazing!</p><span class="name-date">01.06.2021</span>
                                    </div>
                                </li>
                                <li class="single-user-review d-flex">
                                    <div class="user-thumbnail"><img src="/img/custom-img/Hanna.jpg" alt=""></div>
                                    <div class="rating-comment">
                                        <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                        <p class="comment mb-0"> Непосредственно про компанию Большая кормушка я сказать ничего не могу, потому что лично с ними не контактировала, а вот про качество их продукции кое-что знаю. Нам с мужем на свадьбу подарили десяток курочек. Отлично!</p><span class="name-date">14.06.2021</span>
                                    </div>
                                </li>
                                <li class="single-user-review d-flex">
                                    <div class="user-thumbnail"><img src="/img/custom-img/Katie.jpg" alt=""></div>
                                    <div class="rating-comment">
                                        <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                        <p class="comment mb-0">Хорошая компания, мне нравится. Часто туда хожу. И не понимаю эти отрицательные отзывы. Работаю в похожей сфере.</p><span class="name-date">28.06.2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Ratings Submit Form-->
                <div class="ratings-submit-form bg-white py-3">
                    <div class="container">
                        <h6>Оставить отзыв</h6>
                        <form action="#" method="">
                            <div class="stars mb-3">
                                <input class="star-1" type="radio" name="star" id="star1">
                                <label class="star-1" for="star1"></label>
                                <input class="star-2" type="radio" name="star" id="star2">
                                <label class="star-2" for="star2"></label>
                                <input class="star-3" type="radio" name="star" id="star3">
                                <label class="star-3" for="star3"></label>
                                <input class="star-4" type="radio" name="star" id="star4">
                                <label class="star-4" for="star4"></label>
                                <input class="star-5" type="radio" name="star" id="star5">
                                <label class="star-5" for="star5"></label><span></span>
                            </div>
                            <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10" data-max-length="200" placeholder="Ваше сообщение..."></textarea>
                            <button class="btn btn-sm btn-primary" type="submit">Отправить</button>
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
