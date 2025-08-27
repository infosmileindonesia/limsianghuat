{{-- filepath: resources/views/frontend/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Us')

@section('meta')

    <meta name="description" content="About Us - Connecting Brands to Consumer. Our mission is to do every work with passion, value and respect the relationship with brand owners and customers, believe in the strength of teamwork.">
    <meta name="keywords" content="About Us, Company, Mission, Vision, Values">

@endsection

@push('plugins-scripts')
    @vite(['resources/js/motion-plugin.js', 'resources/js/swiper-plugins.js'])
@endpush

@section('content')

<section>

    <x-frontend.hero.minimal
        :image="asset('img/placeholder/career.png')"
        :title="'About Us'"
        />


    <div class="mx-auto pt-10 pb-14 lg:pb-28 container">
        <h1 class="mb-8 text-center section-title">@lang('contents.about.introduction')</h1>
        <p class="about--intro-subtitle">@lang('contents.about.intro_subtitle')</p>

        <div class="md:flex flex-wrap justify-center md:items-start md:gap-3 lg:gap-0 lg:grid lg:grid-cols-5 mt-4 lg:mt-8">
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="flex items-center space-x-2 font-bold text-red-500 text-6xl">
                    <span class="relative" data-counter data-counter-end="20" data-counter-start="0" data-counter-duration="500">20</span>
                </div>
                <p class="text-lg text-center">@lang('contents.about.counters.year')</p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="flex items-center space-x-2 font-bold text-red-500 text-6xl">
                    <span class="relative" data-counter data-counter-end="200" data-counter-start="0" data-counter-duration="500">200</span>
                </div>
                <p class="text-lg text-center">@lang('contents.about.counters.sku')</p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="flex items-center space-x-2 font-bold text-red-500 text-6xl">
                    <span class="relative" data-counter data-counter-end="15000" data-counter-start="0" data-counter-duration="500">15000</span>
                </div>
                <p class="text-lg text-center">@lang('contents.about.counters.outlet')</p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="flex items-center space-x-2 font-bold text-red-500 text-6xl">
                    <span class="relative" data-counter data-counter-end="15" data-counter-start="0" data-counter-duration="500">15</span>
                </div>
                <p class="text-lg text-center">@lang('contents.about.counters.company')</p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="flex items-center space-x-2 font-bold text-red-500 text-6xl">
                    <span class="relative" data-counter data-counter-end="11" data-counter-start="0" data-counter-duration="500">11</span>
                </div>
                <p class="text-lg text-center">@lang('contents.about.counters.city')</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-black py-10 lg:py-14" id="about-why">

    <div class="mx-auto px-2 lg:px-0">
        <h2 class="about--why-title">@lang('contents.about.why_title')</h2>
        <p class="about--why-description">@lang('contents.about.why_description')</p>

        <div class="space-y-3 lg:space-y-4 mt-12 px-2 lg:px-14">
            @foreach ($whyContents as $items)
                <div class="card-why-wrapper" data-animate-view data-animate-target=".card-why">
                    @foreach ($items as $item)
                        <div>
                            <div class="card-why">
                                <h3 class="text-outline font-black text-white text-3xl lg:text-5xl text-center">{{ $item->number }}</h3>
                                <p class="lg:min-h-[80px] font-bold text-red-500 text-2xl lg:text-4xl text-center">{!! $item->title !!}</p>
                                <p class="card-description">{!! $item->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="relative">
<!-- ini bagian testimony
    <div class="relative space-y-5 mx-auto my-10 lg:my-24 px-2 lg:px-0 container">
        {{-- <p class="text-2xl text-center">TESTIMONIALS</p> --}}
        <h2 class="text-center section-title">@lang("Compliments")</h2>

        <div class="p-0 lg:p-12">

            <div class="bg-neutral-100 shadow lg:shadow-2xl rounded lg:rounded-4xl swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    @php

                        $testiCount = $testimonials->count() ?? 0;

                    @endphp

                    @if ($testiCount > 0)
                        @foreach ($testimonials as $testimonial)
                            <div class="px-2 py-5 lg:py-10 swiper-slide">
                                <div class="pt-7 lg:pt-14 pr-4 lg:pr-9 pb-8 lg:pb-16 pl-4 lg:pl-16">
                                    <div class="gap-x-24 grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
                                        <div>
                                            <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ $testimonial->image }}" class="w-full max-w-11/12 h-auto" alt="">
                                        </div>

                                        <div data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-y="-100%" class="flex flex-col justify-between space-y-36">
                                            <p class="text-2xl">{{ $testimonial->content }}</p>
                                        </div>
                                    </div>
                                    <div class="gap-x-0 gap-y-4 lg:gap-x-24 lg:gap-y-0 grid grid-cols-1 lg:grid-cols-2 mt-12 lg:mt-36 overflow-hidden">
                                        <div class="flex items-center gap-x-8 overflow-hidden">
                                            <div class="relative flex-1">
                                                <span class="absolute inset-0 bg-black w-full h-px -translate-y-1/2"></span>
                                            </div>
                                            <div class="text-gray-400">
                                                <span class="text-black" data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%">{{ $loop->iteration }}</span> / {{ $testiCount }}
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%">
                                                <span class="font-bold text-2xl">{{ $testimonial->name }}</span> <br>
                                                <span class="text-xl">{{ $testimonial->position }} of A {{ $testimonial->company }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                        @php
                            // Fallback for when there are no testimonials
                            $testiCount = 5; // Set a default count for fallback
                        @endphp

                        @for ($i = 1; $i <= $testiCount; $i++)

                        <div class="px-2 py-5 lg:py-10 swiper-slide">
                            <div class="pt-7 lg:pt-14 pr-4 lg:pr-9 pb-8 lg:pb-16 pl-4 lg:pl-16">
                                <div class="gap-x-24 grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
                                    <div>
                                        <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ asset('img/placeholder/clients/aeon-hall.png') }}" class="w-full max-w-11/12 h-auto" alt="">
                                    </div>

                                    <div data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-y="-100%" class="flex flex-col justify-between space-y-36">
                                        <p class="text-2xl">“We are grateful for choosing LSH as our
                                            product distributor, as they have
                                            consistently demonstrated outstanding
                                            performance in our partnership.”</p>

                                    </div>
                                </div>
                                <div class="gap-x-0 gap-y-4 lg:gap-x-24 lg:gap-y-0 grid grid-cols-1 lg:grid-cols-2 mt-12 lg:mt-36 overflow-hidden">
                                    <div class="flex items-center gap-x-8 overflow-hidden">
                                        <div class="relative flex-1">
                                            <span class="absolute inset-0 bg-black w-full h-px -translate-y-1/2"></span>
                                        </div>
                                        <div class="text-gray-400">
                                            <span class="text-black" data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%">{{ $i }}</span> / {{ $testiCount }}
                                        </div>
                                    </div>

                                    <div class="overflow-hidden">
                                        <p data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%">
                                            <span class="font-bold text-2xl">Nixon</span> <br>
                                            <span class="text-xl">Branch Manager of A</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @endfor
                    @endif

                </div>

            </div>


        </div>

        <div class="swiper-pagination testimonial-swiper-pagination"></div>

    </div> -->

    <div class="mx-auto mt-10 lg:mt-24 px-2 lg:px-0 container">
        <h2 class="section-title" style="text-align: center !important;">@lang("Achievement")</h2>    
 <!--    <div style="width:40%; border: 0px solid #000; position: absolute; margin-top: 50px;"><img src="img/placeholder/clients/aeon-hall.png" style="float: right;"></div>     -->       
    </div>
                     
    <div class="mb-24 ml-0 lg:ml-auto px-2 lg:px-0 w-full lg:w-1/2" style="width:70% !important; margin: auto !important;">

        <div class="swiper half-wrapper-swiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 1; $i++)
 <!--               <div class="px-2 py-10 swiper-slide">
                    <div class="bg-neutral-100 shadow-xl p-8 rounded-4xl w-full max-w-none lg:max-w-[341px] aspect-[3/4]">
                        <h3 class="font-bold text-2xl">Slide {{ $i }}</h3>
                        <p class="mt-4">This is the content of slide {{ $i }}.</p>
                    </div>
                </div>
 -->               

                 <div class="px-2 py-10 swiper-slide">
                    <div class="bg-neutral-100 shadow-xl p-8 rounded-4xl w-full max-w-none lg:max-w-[341px] aspect-[3/4]">
                        <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ asset('img/achievement/ptd-lshr-2012.png') }}" class="w-full max-w-11/12 h-auto" alt="" style="margin: auto; height: 90%;">
                        <!--<h3 class="font-bold text-2xl"></h3> -->
                        <p class="mt-4" style="margin:auto; text-align: center;">PT. Delta Djakarta</p>
                    </div>
                </div>    
                 <div class="px-2 py-10 swiper-slide">
                    <div class="bg-neutral-100 shadow-xl p-8 rounded-4xl w-full max-w-none lg:max-w-[341px] aspect-[3/4]">
                        <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ asset('img/achievement/otsuka-lshk-2023.png') }}" class="w-full max-w-11/12 h-auto" alt="" style="margin: auto; height: 90%;">
                        <!--<h3 class="font-bold text-2xl"></h3> -->
                        <p class="mt-4" style="margin:auto; text-align: center;">PT. Amerta Indah Otsuka</p>
                    </div>
                </div>                              
                @endfor
            </div>

        </div>

    </div>

    <div class="-bottom-4 lg:bottom-0 absolute inset-x-0 mx-auto container">
        <div class="flex justify-center lg:justify-start space-x-10 max-w-none lg:max-w-md swiper-half-button-navigation-wrapper" style="width: 100% !important; margin: auto !important; height: 100px; padding-top: 40px;">

            {{-- arrow button for achievement slider --}}
            <div class="swiper-button-prev swiper-button-prev-half-wrapper-swiper" style="margin:auto; margin-top: 50px !important;">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 15L3.23223 13.2322L1.46447 15L3.23223 16.7678L5 15ZM23.75 17.5C25.1307 17.5 26.25 16.3807 26.25 15C26.25 13.6193 25.1307 12.5 23.75 12.5V17.5ZM10.7322 5.73223L3.23223 13.2322L6.76777 16.7678L14.2678 9.26777L10.7322 5.73223ZM3.23223 16.7678L10.7322 24.2678L14.2678 20.7322L6.76777 13.2322L3.23223 16.7678ZM5 17.5H23.75V12.5H5V17.5Z" fill="black"/>
                </svg>
            </div>

            <div class="swiper-button-next swiper-button-next-half-wrapper-swiper" style="margin:auto; margin-top: 50px !important;">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 15L26.7678 13.2322L28.5355 15L26.7678 16.7678L25 15ZM6.25 17.5C4.86929 17.5 3.75 16.3807 3.75 15C3.75 13.6193 4.86929 12.5 6.25 12.5V17.5ZM19.2678 5.73223L26.7678 13.2322L23.2322 16.7678L15.7322 9.26777L19.2678 5.73223ZM26.7678 16.7678L19.2678 24.2678L15.7322 20.7322L23.2322 13.2322L26.7678 16.7678ZM25 17.5H6.25V12.5H25V17.5Z" fill="black"/>
                </svg>
            </div>

        </div>
    </div>


</section>


@endsection
