<div class="swiper-wrapper">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

    @if ($distribution->getMedia('distribution_thumbnails')->isEmpty())

        <div class="swiper-slide">
            <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                class="w-full h-full object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                class="w-full h-full object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                class="w-full h-full object-cover">
        </div>
    @else

    @foreach ($distribution->getMedia('distribution_thumbnails') as $item)
        <div class="swiper-slide">
            <img src="{{ $item->getUrl('webp_render_home') }}" alt="{{ $distribution->name }}" class="w-full h-full object-center object-cover">
        </div>
    @endforeach

    @endif

</div>
