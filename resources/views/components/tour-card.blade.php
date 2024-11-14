<a href="{{ ($item['out_lnk'])?$item['out_lnk']:route('tour_page', $item['slug']) }}" class="tour_card">
    <div class="img">
        <img src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">

        @if ($item['prices'])
            <div class="label price_label">
                от {{ $item['prices'][0]['price'] }} ₽
            </div>
        @endif
    </div>
    <div class="text">
        <h3>{{ $item['title'] }}</h3>
        <p class="label label_white">{{ $item['deycount'] }} {{ echo_days($item['deycount']) }}</p>
        <p class="label label_white">{{ date ("d.m.Y", strtotime($item['start_data'])) }}</p>
        <button class="button">Подробнее</button>
    </div>
</a>
