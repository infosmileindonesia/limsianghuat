@extends('layouts.app')

@section('title', 'Welcome Page')

@section('meta')
    <meta name="description" content="We are passionate about connecting high-quality food and beverage products with businesses that share our commitment to excellence.">
    <meta name="keywords" content="Lim Siang Huat, F&B Distributor, Indonesia, Food and Beverage">
    <meta name="author" content="Lim Siang Huat">
@endsection

@push('plugins-scripts')
    @vite(['resources/js/swiper-plugins.js', 'resources/js/motion-plugin.js'])
@endpush

@section('content')

    <section>
        <!-- Swiper Carousel -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                @if ($banners)

                    @foreach ($banners as $banner)
                        <div class="relative swiper-slide">
                            <img src="{{ asset($banner->image_url) }}" alt="{{ $banner->title }}" class="w-full object-cover aspect-square xl:aspect-[4/2]">
                            <div class="banner-title">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">{!! nl2br($banner->title) !!}</span>
                                <a href="{{ $banner->url }}" class="btn-learn-more-banner">{{ $banner->button_text }}</a>
                            </div>
                        </div>
                    @endforeach

                @else
                    <!-- Slide 1 -->
                    <div class="relative swiper-slide">
                        <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 1" class="w-full object-cover aspect-square xl:aspect-[4/2]">
                        <div class="banner-title">
                            <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">{!! __('contents.banners.banner_1') !!} </span>
                            <a href="#" class="btn-learn-more-banner">LEARN MORE</a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="relative swiper-slide">
                        <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 2" class="w-full object-cover aspect-square xl:aspect-[4/2]">
                        <div class="banner-title">
                            <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">{!! __('contents.banners.banner_1') !!} </span>
                            <a href="#" class="btn-learn-more-banner">LEARN MORE</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="pt-12 pb-10">
        <div class="mx-auto px-2 lg:px-0 container">
            <div class="relative pb-5 font-semibold text-2xl text-left">
                <p>
                    @lang('contents.home.whoarewe_header')
                </p>

                <div class="absolute inset-0 bg-red-500 mt-auto w-48 h-1"></div>
            </div>
        </div>

        <div class="mx-auto mt-10 container">
            <div class="grid grid-cols-1 lg:grid-cols-5 min-h-[572px]">
                <div class="relative col-span-3 h-full">

                    <div class="lg:absolute relative lg:inset-0 bg-[#F2F2F2] py-10 lg:pl-10 lg:rounded-2xl lg:w-[108%] h-min">
                        <div class="space-y-3 md:space-y-3 xl:space-y-5 px-2 lg:px-0 max-w-none xl:max-w-[74%]">
                            <p class="text-2xl">@lang('contents.home.whoarewe_title')</p>
                            <h1 class="home--whoarewe-subtitle">@lang('contents.home.whoarewe_subtitle')</h1>
                            <p>
                                @lang('contents.home.whoarewe_description_1')
                            </p>
                            <p class="mb-5 font-bold text-lg underline">
                                @lang('contents.home.whoarewe_description_2')
                            </p>

                            <div class="gap-2.5 grid lg:grid-cols-2 xl:grid-cols-4 mx-auto w-full max-w-3/5 lg:max-w-none">
                                <div class="flex flex-col items-center gap-1 bg-white shadow-2xl px-2 pt-4 pb-4 rounded-4xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Check-Round.png') }}" alt="">
                                    <p class="home--whoarewe-values">{!! __('contents.home.whoarewe_values.respect') !!}</p>
                                </div>
                                <div class="flex flex-col items-center gap-1 bg-white shadow-2xl px-2 pt-4 pb-4 rounded-4xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Archive.png') }}" alt="">
                                    <p class="home--whoarewe-values">{!! __('contents.home.whoarewe_values.integration') !!}</p>
                                </div>
                                <div class="flex flex-col items-center gap-1 bg-white shadow-2xl px-2 pt-4 pb-4 rounded-4xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Group.png') }}" alt="">
                                    <p class="home--whoarewe-values">{!! __('contents.home.whoarewe_values.teamwork') !!}</p>
                                </div>
                                <div class="flex flex-col items-center gap-1 bg-white shadow-2xl px-2 pt-4 pb-4 rounded-4xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Effective.png') }}" alt="">
                                    <p class="home--whoarewe-values">{!! __('contents.home.whoarewe_values.teamwork') !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="relative col-span-2 h-full">
                    <div class="lg:bottom-[-2px] lg:absolute relative lg:ml-[-19%] pt-10">
                        <div class="group relative rounded-none lg:rounded-4xl lg:w-max lg:h-max overflow-hidden cursor-pointer">
                            <img src="{{ asset('img/placeholder/Industrial.png') }}" alt="" class="mr-auto w-auto group-hover:scale-110 transition-all group-hover:-translate-x-1 group-hover:translate-y-1 duration-500 ease-in-out">

                            <div class="lg:top-0 lg:right-0 absolute">
                                <div class="w-max-h-max">
                                    <span>
                                        <img src="{{ asset('img/icons/play-youtube.png') }}" alt="" class="shadow-2xl group-hover:scale-125 transition-all group-hover:-translate-x-1.5 group-hover:translate-y-1.5 duration-500 ease-in-out delay-300">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-5 mx-auto mt-16 lg:mt-36 px-2 lg:px-0 container">
            {{-- <p class="text-2xl text-center">DISTRIBUTION</p> --}}
            <p class="text-2xl text-center">@lang('contents.home.route_header')</p>
            <h2 class="text-center section-title home--route_title">{!! __('contents.home.route_title') !!}</h2>
                <p class="text-xl text-center">{{ __('contents.home.route_subtitle') }}</p>

                <div class="relative mt-9">
                    <img src="{{ asset('img/placeholder/maps.png') }}" class="w-full h-auto" alt="">

                    <div class="absolute inset-0">
                        <svg class="w-full h-full" width="1112" height="410" viewBox="0 0 1112 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Frame 4">
                                <!-- Batam -->
                                <circle cx="219" cy="122" r="9" fill="#E31D1C" />
                                <circle cx="219" cy="122" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Jakarta -->
                                <circle cx="276" cy="296" r="9" fill="#E31D1C" />
                                <circle cx="276" cy="296" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Surabaya -->
                                <circle cx="416" cy="319" r="9" fill="#E31D1C" />
                                <circle cx="416" cy="319" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Bali -->
                                <circle cx="488" cy="347" r="9" fill="#E31D1C" />
                                <circle cx="488" cy="347" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Sulawesi 1 -->
                                {{-- <circle cx="645" cy="185" r="9" fill="#E31D1C" />
                                <circle cx="645" cy="185" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle> --}}

                                <!-- Sulawesi 2 -->
                                <circle cx="665" cy="240" r="9" fill="#E31D1C" />
                                <circle cx="665" cy="240" r="9" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>
                            </g>
                        </svg>
                    </div>

                </div>

                {{-- Learn More Button --}}
                <a href="{{ route('distribution') }}#channel" class="flex items-center mx-auto mt-9 py-1 pr-2 pl-5 border border-slate-600 rounded-full w-max">
                    <span class="font-medium">
                        @lang('contents.generals.learn_more')
                    </span>

                    <span class="inline-block ml-2">
                        <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38 20C38 31.0457 29.4934 40 19 40C8.50659 40 0 31.0457 0 20C0 8.9543 8.50659 0 19 0C29.4934 0 38 8.9543 38 20Z" fill="#E31D1C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.38 19.75L20.7615 15.4852L21.9052 14.5148L26.9836 20.5L21.9052 26.4852L20.7615 25.5148L24.38 21.25H12C11.5858 21.25 11.25 20.9142 11.25 20.5C11.25 20.0858 11.5858 19.75 12 19.75H24.38Z" fill="white"/>
                            </svg>
                    </span>
                </a>
        </div>

        <div class="space-y-5 mx-auto mt-10 lg:mt-36 container">
            <h2 class="text-center section-title home--distribution_title">
                {!! __('contents.home.distribution_title') !!}
            </h2>
            <p class="text-xl text-center">
                @lang('contents.home.distribution_subtitle')
            </p>


            {{-- create a stacked card scroll driven section page --}}
            <div class="card_distribution__wrapper">
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 text-xl italic">01</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="font-semibold text-6xl leading-16">
                                    {!! __('contents.home.distribution_items.horeca') !!}
                                </h5>
                                <a href="{{ route('distribution') }}#hotel-restaurant-cafe" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="flex items-center py-1 pr-2 pl-5 border border-slate-600 rounded-full w-max">
                                    <span class="font-normal text-2xl">
                                        @lang('contents.generals.discover_button')
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="w-full h-full">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper-dis-content-0 swiper"
                                        data-class-name="swiper-dis-content-0">
                                        <div class="swiper-wrapper">
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
                                        </div>


                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-0" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-0" />
                                <div class="pagination-swiper-dis-content-0 swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 text-xl italic">02</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="font-semibold text-6xl leading-16">
                                    {!! __('contents.home.distribution_items.modern_trade') !!}
                                </h5>
                                <a href="{{ route('distribution') }}#general-trade" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="flex items-center py-1 pr-2 pl-5 border border-slate-600 rounded-full w-max">
                                    <span class="font-normal text-2xl">
                                        @lang('contents.generals.discover_button')
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="relative w-full h-full">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper-dis-content-1 swiper"
                                        data-class-name="swiper-dis-content-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="pagination-swiper-dis-content-1 swiper-pagination"></div>
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-1" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-1" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 text-xl italic">03</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="font-semibold text-6xl leading-16">
                                    {!! __('contents.home.distribution_items.general_trade') !!}
                                </h5>
                                <a href="{{ route('distribution') }}#modern-trade" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="flex items-center py-1 pr-2 pl-5 border border-slate-600 rounded-full w-max">
                                    <span class="font-normal text-2xl">
                                        @lang('contents.generals.discover_button')
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="relative w-full h-full">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper-dis-content-2 swiper"
                                        data-class-name="swiper-dis-content-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-swiper-dis-content-2 swiper-pagination"></div>
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-2" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 text-xl italic">04</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="font-semibold text-6xl leading-16">
                                    {!! __('contents.home.distribution_items.kol_management') !!}
                                </h5>
                                <a href="{{ route('distribution') }}#modern-trade" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="flex items-center py-1 pr-2 pl-5 border border-slate-600 rounded-full w-max">
                                    <span class="font-normal text-2xl">
                                        @lang('contents.generals.discover_button')
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="relative w-full h-full">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper-dis-content-2 swiper"
                                        data-class-name="swiper-dis-content-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-swiper-dis-content-2 swiper-pagination"></div>
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-2" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-2" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
