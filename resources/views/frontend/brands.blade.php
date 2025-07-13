{{-- filepath: resources/views/frontend/brand.blade.php --}}
@extends('layouts.app')

@section('title', 'Our Brand')

@push('plugins-scripts')

    {{-- preconnect https://placehold.co --}}
    <link rel="preconnect" href="https://placehold.co">
    <style>
        [x-cloak] { display: none !important; }
    </style>
@endpush

@section('content')

    <section>

        <x-frontend.hero.minimal
            :image="asset('img/placeholder/brands.png')"
            :title="'Brands'"
        />

        <div class="mx-auto px-2 lg:px-0 pt-20 pb-10 container" id="brand-alcohol">
            <p class="mt-4 text-2xl text-center">@lang('contents.brands.description')</p>

            <h1 class="mt-10 text-center section-title-secondary">@lang('contents.brands.categories.alcohol')</h1>


            {{-- Tab Navigation --}}
            <div class="mt-10 w-full" x-data="alcoholSection('beer')">
                <div class="w-full overflow-x-auto">
                    <ul class="flex flex-row flex-nowrap mb-4 pl-0 border-b w-full font-semibold text-3xl list-none"
                        role="tablist">
                        @foreach ($alcoholBrands as $brand)
                            <li
                                class="flex justify-center items-center h-max-16 text-center grow-0 shrink-0 basis-[220px]"
                                role="presentation">
                                <a href="#alcohol-{{ $brand['slug'] }}"
                                    class="brand-tab-link"
                                    :class="activeTab === '{{ $brand['slug'] }}' ? 'active' : ''"
                                    @click.prevent="setActiveTab('{{ $brand['slug'] }}')">
                                    {{ __($brand['name']) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {{-- Tab Content --}}
                {{-- Loop each element into a swiper wrapper --}}
                    <div class="flex justify-end items-center space-x-2 mt-5 swiper-arrow">
                        <div x-ref="navPrev" class="cursor-pointer alcohol-swiper-button-prev">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.41781 26.5018C4.41781 38.6981 14.3048 48.5851 26.5011 48.5851C38.6974 48.5851 48.5845 38.6981 48.5845 26.5018C48.5845 14.3055 38.6974 4.41846 26.5011 4.41846C14.3049 4.41846 4.41781 14.3055 4.41781 26.5018Z" stroke="black" stroke-width="2"/>
                                <path d="M23.1886 20.981C22.0719 22.0664 17.6678 24.9555 17.6678 26.5018M17.6678 26.5018C17.6678 28.0481 22.0719 30.9372 23.1886 32.0226M17.6678 26.5018L35.3345 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div x-ref="navNext" class="cursor-pointer alcohol-swiper-button-next">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.5827 26.5018C48.5827 38.6981 38.6956 48.5851 26.4993 48.5851C14.3031 48.5851 4.41602 38.6981 4.41602 26.5018C4.41602 14.3055 14.3031 4.41846 26.4993 4.41846C38.6956 4.41846 48.5827 14.3055 48.5827 26.5018Z" stroke="black" stroke-width="2"/>
                                <path d="M29.8118 20.981C30.9286 22.0664 35.3327 24.9555 35.3327 26.5018M35.3327 26.5018C35.3327 28.0481 30.9286 30.9372 29.8118 32.0226M35.3327 26.5018L17.666 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    @foreach ($alcoholBrands as $brand)
                        <div x-cloak x-show="activeTab === '{{ $brand['slug'] }}'" class="tab-content">
                            <div class="mt-5 swiper-container">
                                <div class="swiper alcohol-brands-swiper-{{ $brand['slug'] }}">
                                    <div class="swiper-wrapper">
                                        @foreach($brand['products'] as $product)
                                        <div class="swiper-slide" data-filter="{{$brand['slug']}}"/>
                                            <x-frontend.brand-card
                                                :image="$product['image']"
                                                :name="$product['name']"
                                            />
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mx-auto px-2 lg:px-0 py-10 container" id="brand-non-alcohol">
            <h2 class="mt-10 text-center section-title-secondary">@lang('contents.brands.categories.rtd')</h2>
            <div x-data="nonAlcoholSection">
                <div class="flex justify-end items-center space-x-2 mt-5 swiper-arrow">
                    <div x-ref="navPrev" class="cursor-pointer alcohol-swiper-button-prev">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.41781 26.5018C4.41781 38.6981 14.3048 48.5851 26.5011 48.5851C38.6974 48.5851 48.5845 38.6981 48.5845 26.5018C48.5845 14.3055 38.6974 4.41846 26.5011 4.41846C14.3049 4.41846 4.41781 14.3055 4.41781 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M23.1886 20.981C22.0719 22.0664 17.6678 24.9555 17.6678 26.5018M17.6678 26.5018C17.6678 28.0481 22.0719 30.9372 23.1886 32.0226M17.6678 26.5018L35.3345 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div x-ref="navNext" class="cursor-pointer alcohol-swiper-button-next">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48.5827 26.5018C48.5827 38.6981 38.6956 48.5851 26.4993 48.5851C14.3031 48.5851 4.41602 38.6981 4.41602 26.5018C4.41602 14.3055 14.3031 4.41846 26.4993 4.41846C38.6956 4.41846 48.5827 14.3055 48.5827 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M29.8118 20.981C30.9286 22.0664 35.3327 24.9555 35.3327 26.5018M35.3327 26.5018C35.3327 28.0481 30.9286 30.9372 29.8118 32.0226M35.3327 26.5018L17.666 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="mt-5 swiper non-alcohol-brands-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($nonAlcoholBrands as $brand)
                        <div class="swiper-slide"/>
                            <x-frontend.brand-card
                                :image="$brand['image']"
                                :name="$brand['name'] ?? ''"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto px-2 lg:px-0 py-10 container" id="brand-food">
            <h2 class="mt-10 text-center section-title-secondary">@lang('contents.brands.categories.rte')</h2>
            <div x-data="foodBrandsSection">
                <div class="flex justify-end items-center space-x-2 mt-5 swiper-arrow">
                    <div x-ref="navPrev" class="cursor-pointer alcohol-swiper-button-prev">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.41781 26.5018C4.41781 38.6981 14.3048 48.5851 26.5011 48.5851C38.6974 48.5851 48.5845 38.6981 48.5845 26.5018C48.5845 14.3055 38.6974 4.41846 26.5011 4.41846C14.3049 4.41846 4.41781 14.3055 4.41781 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M23.1886 20.981C22.0719 22.0664 17.6678 24.9555 17.6678 26.5018M17.6678 26.5018C17.6678 28.0481 22.0719 30.9372 23.1886 32.0226M17.6678 26.5018L35.3345 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div x-ref="navNext" class="cursor-pointer alcohol-swiper-button-next">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48.5827 26.5018C48.5827 38.6981 38.6956 48.5851 26.4993 48.5851C14.3031 48.5851 4.41602 38.6981 4.41602 26.5018C4.41602 14.3055 14.3031 4.41846 26.4993 4.41846C38.6956 4.41846 48.5827 14.3055 48.5827 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M29.8118 20.981C30.9286 22.0664 35.3327 24.9555 35.3327 26.5018M35.3327 26.5018C35.3327 28.0481 30.9286 30.9372 29.8118 32.0226M35.3327 26.5018L17.666 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="mt-5 swiper food-brands-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($foodBrands as $brand)
                        <div class="swiper-slide"/>
                            <x-frontend.brand-card
                                :image="$brand['image']"
                                :name="$brand['name'] ?? ''"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto px-2 lg:px-0 py-10 container" id="brand-consumer-goods">
            <h2 class="mt-10 text-center section-title-secondary">@lang('contents.brands.categories.consumer_goods')</h2>
            <div x-data="consumerGoodsSection">
                <div class="flex justify-end items-center space-x-2 mt-5 swiper-arrow">
                    <div x-ref="navPrev" class="cursor-pointer consumer-goods-swiper-button-prev">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.41781 26.5018C4.41781 38.6981 14.3048 48.5851 26.5011 48.5851C38.6974 48.5851 48.5845 38.6981 48.5845 26.5018C48.5845 14.3055 38.6974 4.41846 26.5011 4.41846C14.3049 4.41846 4.41781 14.3055 4.41781 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M23.1886 20.981C22.0719 22.0664 17.6678 24.9555 17.6678 26.5018M17.6678 26.5018C17.6678 28.0481 22.0719 30.9372 23.1886 32.0226M17.6678 26.5018L35.3345 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div x-ref="navNext" class="cursor-pointer consumer-goods-swiper-button-next">
                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48.5827 26.5018C48.5827 38.6981 38.6956 48.5851 26.4993 48.5851C14.3031 48.5851 4.41602 38.6981 4.41602 26.5018C4.41602 14.3055 14.3031 4.41846 26.4993 4.41846C38.6956 4.41846 48.5827 14.3055 48.5827 26.5018Z" stroke="black" stroke-width="2"/>
                            <path d="M29.8118 20.981C30.9286 22.0664 35.3327 24.9555 35.3327 26.5018M35.3327 26.5018C35.3327 28.0481 30.9286 30.9372 29.8118 32.0226M35.3327 26.5018L17.666 26.5018" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="mt-5 swiper consumer-goods-brands-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($foodBrands as $brand)
                        <div class="swiper-slide"/>
                            <x-frontend.brand-card
                                :image="$brand['image']"
                                :name="$brand['name'] ?? ''"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
