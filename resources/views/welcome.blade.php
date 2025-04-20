@extends('layouts.app')

@section('title', 'Welcome Page')

@section('meta')
    <meta name="description" content="We are passionate about connecting high-quality food and beverage products with businesses that share our commitment to excellence.">
    <meta name="keywords" content="Lim Siang Huat, F&B Distributor, Indonesia, Food and Beverage">
    <meta name="author" content="Lim Siang Huat">
@endsection

@push('plugins-scripts')
    @vite('resources/js/swiper-plugins.js')
@endpush

@section('content')

    <section>
        <!-- Swiper Carousel -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 1" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                    <div class="banner-title">
                        <span>GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </span>
                        <a href="#" class="btn-learn-more-banner">EXPLORE MORE</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 2" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                    <div class="banner-title">
                        <span>GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </span>
                        <a href="#" class="btn-learn-more-banner">LEARN MORE</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 3" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                    <div class="banner-title">
                        <span>GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </span>
                        <a href="#" class="btn-learn-more-banner">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 pb-10">
        <div class="container mx-auto">
            <div class="font-bold text-2xl text-left pb-5 relative">
                <p>
                    <span>At Lim Siang Huat</span> <br>
                    <span>We're a partner in your success.</span>
                </p>

                <div class="absolute inset-0 bg-red-500 h-1 w-48 mt-auto"></div>
            </div>
        </div>

        <div class="container mx-auto mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[572px]">
                <div class="relative h-full">

                    <div class="relative lg:absolute lg:pl-14 py-10 bg-gray-200 lg:inset-0 lg:w-[108%] rounded-2xl h-min">
                        <div class="max-w-4/5 md:space-y-3 xl:space-y-5">
                            <p class="text-2xl">WHO WE ARE</p>
                            <h1 class="text-5xl font-semibold leading-16">F&B Distributor Since <span class="italic text-red-500 text-5xl font-bold">2002</span></h1>
                            <p>We are passionate about connecting high-quality food and beverage products with businesses that share our commitment to excellence.</p>
                            <p class="font-bold underline text-lg">We Commit to These Values</p>

                            <div class="w-full grid lg:grid-cols-2 xl:grid-cols-3 gap-2.5">
                                <div class="flex flex-col gap-2 items-center p-4 bg-white rounded-4xl shadow-2xl">
                                    <img src="{{ asset('img/icons/Arhive_fill.png') }}" alt="">
                                    <p class="text-xl text-center">work with <br> <span class="text-2xl font-bold text-red-500 uppercase italic">passion</span></p>
                                </div>
                                <div class="flex flex-col gap-2 items-center p-4 bg-white rounded-4xl shadow-2xl">
                                    <img src="{{ asset('img/icons/Check_round_fill.png') }}" alt="">
                                    <p class="text-xl text-center"><span class="text-2xl font-bold text-red-500 uppercase italic">value & respect</span> <br> our relations </p>
                                </div>
                                <div class="flex flex-col gap-2 items-center p-4 bg-white rounded-4xl shadow-2xl">
                                    <img src="{{ asset('img/icons/Group_fill.png') }}" alt="">
                                    <p class="text-xl text-center">strength of <br> <span class="text-2xl font-bold text-red-500 uppercase italic">Teamwork</span></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="relative h-full">
                    <div class="lg:inset-0 lg:top-auto lg:bottom-0 relative lg:absolute lg:ml-[-4%]">
                        <div class="lg:w-max lg:h-max relative group overflow-hidden rounded-4xl cursor-pointer">
                            <img src="{{ asset('img/placeholder/Industrial.png') }}" alt="" class="w-auto mr-auto group-hover:scale-110 group-hover:-translate-x-1 group-hover:translate-y-1 transition-all duration-500 ease-in-out">

                            <div class="absolute lg:top-0 lg:right-0">
                                <div class="w-max-h-max">
                                    <span>
                                        <img  src="{{ asset('img/icons/play-youtube.png') }}" alt="" class="shadow-2xl group-hover:scale-125 group-hover:-translate-x-1.5 group-hover:translate-y-1.5 delay-300 transition-all duration-500 ease-in-out">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-24 space-y-5">
            <p class="text-2xl text-center">DISTRIBUTION</p>
            <h2 class="section-title text-center">Present in Key Provinces, <br>
                Dedicated to <span class="italic text-red-500">Serving You</span>.</h2>
                <p class="text-center text-xl">Over the past 20 years, LSH Indonesia has expanded into five different cities <br>
                    and continues to grow, establishing a strong presence throughout the country.</p>

                <div class="relative">
                    <img src="{{ asset('img/placeholder/maps.png') }}" class="w-full h-auto" alt="">

                    <div class="absolute inset-0">
                        <svg class="w-full h-full" width="1112" height="410" viewBox="0 0 1112 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Frame 4">
                                <!-- Batam -->
                                <circle cx="219" cy="122" r="7" fill="#E31D1C" />
                                <circle cx="219" cy="122" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Jakarta -->
                                <circle cx="276" cy="296" r="7" fill="#E31D1C" />
                                <circle cx="276" cy="296" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Surabaya -->
                                <circle cx="416" cy="319" r="7" fill="#E31D1C" />
                                <circle cx="416" cy="319" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Bali -->
                                <circle cx="488" cy="347" r="7" fill="#E31D1C" />
                                <circle cx="488" cy="347" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>
                            </g>
                        </svg>
                    </div>

                </div>

                {{-- Learn More Button --}}
                <a href="#" class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max mx-auto">
                    <span class="font-medium">
                        Learn More
                    </span>

                    <span class="inline-block ml-2">
                        <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38 20C38 31.0457 29.4934 40 19 40C8.50659 40 0 31.0457 0 20C0 8.9543 8.50659 0 19 0C29.4934 0 38 8.9543 38 20Z" fill="#E31D1C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.38 19.75L20.7615 15.4852L21.9052 14.5148L26.9836 20.5L21.9052 26.4852L20.7615 25.5148L24.38 21.25H12C11.5858 21.25 11.25 20.9142 11.25 20.5C11.25 20.0858 11.5858 19.75 12 19.75H24.38Z" fill="white"/>
                            </svg>
                    </span>
                </a>
        </div>

        <div class="container mx-auto mt-24 space-y-5">
            <h2 class="text-center section-title">We <span class="italic text-red-500">Know the Route</span>, <br>
                We Understand the Channels.</h2>
            <p class="text-center text-xl">
                With strong access to General Trade, Modern Trade, and HoReCa, <br> we ensure your products reach key markets efficiently and effectively.
            </p>


            <div class="py-20 swiper-distribution-container overflow-hidden h-[600px]">


                <div class="swiper-container h-full distributionSwiper z-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="distribution-card">
                                <div class="distribution-body">
                                    <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%" class="text-red-500 italic text-xl">01</span>
                                    <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0" class="text-6xl font-semibold leading-16">Hotel <br>
                                        Restaurant <br>
                                        Cafe </h5>
                                        <a href="#"
                                            data-swiper-parallax-y="-100"
                                            data-swiper-parallax-x="100%"
                                            data-swiper-parallax-duration="500"
                                            data-swiper-parallax-opacity="0" class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                            <span class="font-medium">
                                                Discover More
                                            </span>

                                            <span class="inline-block ml-2">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z" fill="#E31D1C"/>
                                                </svg>
                                            </span>
                                        </a>
                                </div>
                                <div class="w-1/2 relative z-20">
                                    <div class="w-full h-full relative">
                                        {{-- add more swiper --}}
                                        <div data-swiper="bulkswiper" class="swiper swiper-dis-content-0" data-class-name="swiper-dis-content-0">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="left-arrow-swiper left-arrow-swiper-dis-content-0">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_113)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M46 37L40 43L46 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_113" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_113"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_113"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_113" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                    <span class="right-arrow-swiper right-arrow-swiper-dis-content-0">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_112)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M40 37L46 43L40 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_112" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_112"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_112"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_112" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="distribution-card">
                                <div class="distribution-body">
                                    <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%" class="text-red-500 italic text-xl">02</span>
                                    <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0" class="text-6xl font-semibold leading-16">General <br>
                                        Trade</h5>
                                        <a href="#"
                                            data-swiper-parallax-y="-100"
                                            data-swiper-parallax-x="100%"
                                            data-swiper-parallax-duration="500"
                                            data-swiper-parallax-opacity="0" class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                            <span class="font-medium">
                                                Discover More
                                            </span>

                                            <span class="inline-block ml-2">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z" fill="#E31D1C"/>
                                                </svg>
                                            </span>
                                        </a>
                                </div>
                                <div class="w-1/2 relative z-20">
                                    <div class="w-full h-full relative">
                                        {{-- add more swiper --}}
                                        <div data-swiper="bulkswiper" class="swiper swiper-dis-content-1"  data-class-name="swiper-dis-content-1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <span class="left-arrow-swiper left-arrow-swiper-dis-content-1">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_113)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M46 37L40 43L46 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_113" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_113"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_113"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_113" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                    <span class="right-arrow-swiper right-arrow-swiper-dis-content-1">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_112)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M40 37L46 43L40 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_112" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_112"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_112"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_112" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="distribution-card">
                                <div class="distribution-body">
                                    <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%" class="text-red-500 italic text-xl">03</span>
                                    <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0" class="text-6xl font-semibold leading-16">Modern <br>
                                        Trade</h5>
                                        <a href="#"
                                            data-swiper-parallax-y="-100"
                                            data-swiper-parallax-x="100%"
                                            data-swiper-parallax-duration="500"
                                            data-swiper-parallax-opacity="0" class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                            <span class="font-medium">
                                                Discover More
                                            </span>

                                            <span class="inline-block ml-2">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z" fill="#E31D1C"/>
                                                </svg>
                                            </span>
                                        </a>
                                </div>
                                <div class="w-1/2 relative z-20">
                                    <div class="w-full h-full relative">
                                        {{-- add more swiper --}}
                                        <div data-swiper="bulkswiper" class="swiper swiper-dis-content-2"  data-class-name="swiper-dis-content-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt="" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="left-arrow-swiper left-arrow-swiper-dis-content-2">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_113)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M46 37L40 43L46 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_113" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_113"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_113"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_113" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                    <span class="right-arrow-swiper right-arrow-swiper-dis-content-2">
                                        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_2117_112)">
                                            <circle cx="43" cy="43" r="30" fill="white"/>
                                            <circle cx="43" cy="43" r="29.5" stroke="#D9D9D9"/>
                                            </g>
                                            <path d="M40 37L46 43L40 49" stroke="#33363F" stroke-width="2"/>
                                            <defs>
                                            <filter id="filter0_d_2117_112" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feMorphology radius="3" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_2117_112"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="5"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2117_112"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2117_112" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
