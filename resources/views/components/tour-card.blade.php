<a href="#" class="tour_card">
    <div class="img">
        <img src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">

        @if ($item['prices'])
            <div class="label price_label">
                {{ $item['prices'][0]['price'] }} ₽
            </div>
        @endif
    </div>
    <div class="text">
        <h3>{{ $item['title'] }}</h3>
        <p class="label label_white">{{ $item['deycount'] }} дней</p>
        <p class="label label_white">{{ date ("d.m.Y", strtotime($item['start_data'])) }}</p>
        <button class="button">Подробнее</button>
    </div>
</a>
