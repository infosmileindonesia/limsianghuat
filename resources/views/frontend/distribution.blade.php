{{-- filepath: resources/views/frontend/distribution.blade.php --}}
@extends('layouts.app')

@section('title', 'Distribution')

@section('content')

<section>

    <x-frontend.hero.minimal
        :image="asset('img/placeholder/distribution.png')"
        :title="'Distribution'"
    />

    <div class="mx-auto py-10 container" id="channel">
        <h1 class="distribution--main-title">
            @lang('contents.distribution.main_title')
        </h1>
        <p class="text-2xl text-center">@lang('contents.distribution.main_subtitle')</p>
        {{-- <p class="mt-4 text-2xl text-center">Our company have been continuosly develop and expand into different cities in <br>
            Indonesia to create wider connection with restaurants, hotels, supermarkets, bars, <br>
            night clubs and individual consumers. </p> --}}

            <div class="relative mt-4 lg:mt-9">
                <img src="{{ asset('img/placeholder/3d-distributions.png') }}" class="w-full h-auto" alt="">
            </div>
    </div>

    <div class="mx-auto pb-10 container" id="distribution">
        <h2 class="mt-10 mb-10 text-center section-title-lg">@lang('contents.distribution.unlock_title')</h2>

        <div class="accordions"
            x-data="{accordionActive: 1}"
            >

            @foreach ($distributions as $distribution)

            <div class="bg-zinc-100 accordion-item"
                style="background-color: {{ $distribution->attribute['background_color'] ?? '#f3f4f6' }}"
                id="hotel-restaurant-cafe"
                :class="{ 'accordion-active' : accordionActive === $loop->iteration}">
                <div class="group accordion-header" @click="accordionActive = accordionActive === {{$loop->iteration}} ? 0 : {{$loop->iteration}}">
                    <h3 class="group-hover:underline accordion-title">
                        {{-- @lang('contents.distribution.items.horeca.title') --}}
                        {!! nl2br($distribution->name) !!}
                    </h3>
                    <div class="group-hover:underline accordion-subtitle">
                        {{-- {!! __('contents.distribution.items.horeca.description') !!} --}}
                        {{ $distribution->description }}
                    </div>
                </div>
                <div
                    x-transition
                    x-show="accordionActive === {{$loop->iteration}}" class="accordion-content">
                    <div
                        data-perfect-scrollbar
                        data-wheel-speed="1"
                        data-suppress-scroll-x="true"
                        data-min-scrollbar-length="20"
                        data-max-scrollbar-length="100"
                        class="accordion-content-outter">
                        <div class="accordion-content-inner">

                            <div class="products-list">

                                @if ($distribution->getMedia('distribution_images')->isEmpty())
                                    
                                    @foreach ($horecaContents as $item)
                                        <div
                                            class="bg-white border-2 border-white hover:border-red-500 rounded-full aspect-square overflow-hidden hover:scale-105 transition-all duration-300 ease-in-out">
                                            {{-- <img src="{{ asset('images/distribution/horeca/' . $item) }}" alt="" class="w-full h-full object-cover"> --}}
                                            <img src="{{$item}}" alt="" class="w-full h-full object-cover">
                                        </div>
                                    @endforeach
                                    
                                @else
                                    
                                    @foreach($distribution->getMedia('distribution_images') as $media)
                                        
                                        <div
                                            class="bg-white border-2 border-white hover:border-red-500 rounded-full aspect-square overflow-hidden hover:scale-105 transition-all duration-300 ease-in-out">
                                            <img src="{{$media->getUrl('webp_render') }}" alt="" class="w-full h-full object-cover">
                                        </div>
                                    
                                    @endforeach
                                    
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            @endforeach


        </div>

    </div>
</section>

@endsection

@push('plugins-scripts')

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const data = [
                {
                    id: 'batam',
                    name: 'Batam',
                    email: 'sm.batam@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'jakarta',
                    name: 'Jakarta',
                    email: 'sm.jkt@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'surabaya',
                    name: 'Surabaya',
                    email: 'sm.sub@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'bali',
                    name: 'Bali',
                    email: 'sm.bali@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'sulawesi-1',
                    name: 'XXXXX',
                    email: 'xxx@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'sulawesi-2',
                    name: 'XXXXX',
                    email: 'xxx@lsh.co.id',
                    phone: '021-12345678',
                },
            ],

            pointer = document.querySelectorAll('[data-pointer]'),
            parent = document.getElementById('map-parent'),
            tooltip = document.getElementById('tooltip');

            pointer.forEach(function (el) {
                el.addEventListener('mouseenter', function () {
                    const id = el.getAttribute('data-pointer');
                    const item = data.find(item => item.id === id);

                    tooltip.innerHTML = `
                        <div class="tooltip-header">
                            <h3>${item.name}</h3>
                        </div>
                        <div class="tooltip-body">
                            <p><span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.0063598 4.7913C1.98876e-10 5.23895 0 5.73315 0 6.28027V9.96502C0 12.7934 0 14.2077 0.87868 15.0863C1.75736 15.965 3.17157 15.965 6 15.965H14C16.8284 15.965 18.2426 15.965 19.1213 15.0863C20 14.2077 20 12.7935 20 9.96502V6.28027C20 5.73315 20 5.23895 19.9936 4.7913L10.9774 9.84191C10.3702 10.1821 9.6298 10.1821 9.02257 9.84191L0.0063598 4.7913ZM0.16361 2.65473C0.27479 2.67316 0.384724 2.71084 0.488716 2.76909L10 8.09702L19.5113 2.76909C19.6153 2.71084 19.7252 2.67316 19.8364 2.65473C19.7135 2.01135 19.4982 1.53588 19.1213 1.15895C18.2426 0.280273 16.8284 0.280273 14 0.280273H6C3.17157 0.280273 1.75736 0.280273 0.87868 1.15895C0.501753 1.53588 0.286516 2.01135 0.16361 2.65473Z"
                                            fill="black" />
                                    </svg>
                                </span> <a href="mailto:${item.email}">${item.email}</a></p>
                            <p><span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.67962 2.10985L4.08237 0.707107C4.47289 0.316582 5.10606 0.316582 5.49658 0.707106L8.71395 3.92447C9.10447 4.315 9.10447 4.94816 8.71395 5.33869L6.52687 7.52576C6.1808 7.87183 6.095 8.40053 6.31388 8.83829C7.57918 11.3689 9.63112 13.4208 12.1617 14.6861C12.5995 14.905 13.1282 14.8192 13.4742 14.4731L15.6613 12.2861C16.0518 11.8955 16.685 11.8955 17.0755 12.2861L20.2929 15.5034C20.6834 15.8939 20.6834 16.5271 20.2929 16.9176L18.8902 18.3204C16.7788 20.4317 13.4362 20.6693 11.0475 18.8777L8.57594 17.0241C6.83241 15.7164 5.28359 14.1676 3.97594 12.4241L2.12226 9.95249C0.330722 7.56377 0.568273 4.2212 2.67962 2.10985Z"
                                            fill="black" />
                                    </svg>
                                </span><a href="tel:${item.phone}">${item.phone}</a></p>
                        </div>
                    `;
                    tooltip.classList.add('tooltip-active');

                    const rect = el.getBoundingClientRect();
                    const parentRect = parent.getBoundingClientRect();

                    // get the position of the element
                    const x = rect.left - parentRect.left + (rect.width / 2) - (tooltip.offsetWidth / 2);
                    const y = rect.top - parentRect.top - tooltip.offsetHeight - 10;

                    tooltip.style.left = `${x}px`;
                    tooltip.style.top = `${y}px`;

                });
            });

            parent.addEventListener('mouseleave', function () {
                tooltip.classList.remove('tooltip-active');
            });

        })

    </script>

@endpush
