@extends('layouts.all')

@section('main')
    <section class="banner_video">
        <video autoplay muted loop class="_video">
            <source src="{{ asset('img/video_bg_2.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text tour_page_title">
            <div class="bnr_text">
                <h1>{!! $tour_info->title !!}</h1>
                <p class="label label_gold">от {{ $tour_info->prices[0]['price'] }} ₽</p>
                <p class="label label_white">{{ $tour_info->deycount }} дней</p>
                <p class="label label_white">{{ date ("d.m.Y", strtotime($tour_info->start_data)) }}</p>
                <a class="button" href="#tours_content">Подробнее о туре</a>
            </div>

            <div class="dop_param page_top_galery">
                @foreach ($tour_info->galery as $photo)
                    @if ($photo['in_top'])
                        <x-palaroid :item="$photo"></x-palaroid>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="tours_content" class="tours_content">
        <div class="container">
            <div class="tour_info">
                <div id="price_app" class="top_info text_styles">
                    <div class="text">
                        {!! $tour_info->top_description !!}
                    </div>
                    <div class="pay_wrapper">
                        <tour-price title="{{$tour_info->title}}" img="{{config('app.url').Storage::url($tour_info->img)}}"  :prices="{{json_encode($tour_info->prices)}}"></tour-price>
                    </div>
                </div>

                <div class="galery">
                    <h2 class="big">Яркие моменты тура</h2>
                    <div class="cards">
                        @foreach ($tour_info->galery as $photo)
                            <x-palaroid :item="$photo"></x-palaroid>
                        @endforeach
                    </div>
                </div>

                <div class="program">
                    <h2 class="big">Программа тура</h2>
                    <div class="text_styles">
                        {!! $tour_info->program !!}
                    </div>
                </div>
                <div class="girland"></div>

                <div class="in_price">
                    <h2 class="big">В цену входит</h2>
                    <div class="text_styles">
                        {!! $tour_info->in_price !!}
                    </div>
                </div>

                <div class="program">
                    <h2 class="big">За отдельную плату</h2>
                    <div class="text_styles">
                        {!! $tour_info->in_price !!}
                    </div>
                </div>
            </div>


        </div>
    </section>

    <x-contacts-section></x-contacts-section>

@endsection

