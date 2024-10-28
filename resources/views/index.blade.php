@extends('layouts.all')

@section('main')
    <section class="banner_video">
        <video autoplay muted loop class="_video">
            <source src="{{ asset('img/video_bg_2.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


            <div class="container left_text">
                <div class="bnr_text">
                    <h1>{!! seo_data()->seo_data->page_title !!}</h1>
                    <p class="subtext">{!! seo_data()->seo_data->page_sub_title !!}</p>
                    <br>
                    <br>
                    <a class="button" href="#tours_cat">Выбрать тур</a>
                </div>
                <div class="dop_param">
                    <div class="param_blk param_blk_1 yandex">
                        <div class="ya_logo"></div>
                        <div class="text_blk">
                            <div class="stars_wrapper">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <p>Один из лучших туроператоров <br>области</p>
                        </div>

                    </div>

                    <div class="param_blk param_blk_2 cr_1">
                        <div class="cerecter">
                            20
                        </div>
                        <p>Лент на рынке туристических услуг Курской области</p>
                    </div>

                    <div class="param_blk param_blk_3 cr_2">
                        <div class="cerecter">
                            13
                        </div>
                        <p>Уникальных предложений на новогодние путешествия для всей семьи</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="tours_cat" class="turs_in_main_section">
        <div class="container">
            <div class="about_tours">
                <div class="text">
                    <h2>Новогодние туры <br>из Курска <strong class="gold">2025</strong></h2>
                    <p class="subtitle">Начните новый год с урагана эмоций и впечатлений вместе с новогодними турами от МирТуризма46. У нас Вы найдете тур на любой вкус и кошелек.</p>
                    <a class="button" href="#showModal">Получить консультацию</a>
                </div>
                <div class="el">
                    <img src="{{ asset('img/main_el.svg') }}" alt="Каталог новогодних туров из Курска 2025">
                </div>
            </div>

            <x-tours-in-main></x-tours-in-main>
        </div>
    </section>



    {{-- <section id="about" class="about_section">
        <div class="container">
            <div class="about">
                <div class="photo">
                    <div class="col">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp.webp') }}" alt="">
                        </div>
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp1.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp2.webp') }}" alt="">
                        </div>

                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp3.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col col_one">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp4.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="text">
                    <div class="inner">
                        <h2>Дорогие друзья! <br>Приглашаем Вас в Новогодний тур в Москву! </h2>
                        <p>Вы посетите незабываемое мероприятие <strong>«Кремлёвскую Ёлку🎄»</strong> – самое главное Новогоднее представление в России и заветная мечта для миллионов мальчишек и девчонок! Побывать здесь – означает убедиться в том, что Дед Мороз существует, что он настоящий и что сказка это не вымысел, а реальность!

                        </p>
                        <x-persons></x-persons>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--
    <section id="location" class="location_section">
        <div class="container">
            <h2>Лучшие моменты <br>представления</h2>
            <x-moments></x-moments>
        </div>
    </section>

    <section id="program" class="program_section central_section">
        <div class="container">
            <h2>Ознакомьтесь с<br>программой тура «Кремлёвская Ёлка»</h2>
            <x-program></x-program>
        </div>
    </section>

    <section id="location" class="location_section">
        <div class="container">
            <h2>Лучшие локации <br>Москвы</h2>
            <x-locations></x-locations>
        </div>
    </section>

    <section id="philosophy" class="program_section central_section">
        <div class="container">
            <x-philosophy></x-philosophy>
        </div>
    </section>


    <section id="in_tur" class="in_tur">
        <div class="container text_styles">
            <div class="wrapper">
                <h2>Стоимость тура:</h2>

                <ul>
                    <li>9000 ₽ дети </li>
                    <li>8500 ₽ взрослые</li>
                </ul>

                <h2>В цену тура входит:</h2>
                <ul>
                    <li>Билеты на <strong>Кремлёвскую Ёлку 🎄</strong></li>
                    <li>Cладкий подарок детям 🎁</li>
                    <li>Проезд <strong>на комфортабельном автобусе 🚌</strong>  </li>
                    <li>Траснпортное обслуживание (автобус) <strong>по Москве</strong></li>
                    <li>Новогодняя <strong>экскурсия</strong> по столице с гидом 🎤</li>
                </ul>
            </div>

        </div>
    </section> --}}

    <x-contacts-section></x-contacts-section>

@endsection

