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
                <a class="button" href="#tours_cat">Подробнее о туре</a>
            </div>

            <div class="dop_param">
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

        </div>
    </section>

    <x-contacts-section></x-contacts-section>

@endsection

