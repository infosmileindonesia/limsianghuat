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
        :image="asset('img/placeholder/about.png')"
        :title="'About Us'"
        />


    <div class="container mx-auto pt-10 pb-14 lg:pb-28">
        <h1 class="section-title text-center mb-8">Connecting Brands to Consumer.</h1>
        <p class="text-center text-2xl mb-10">Our mission are to do every work with <span class="font-bold italic">passion</span>, <span class="font-bold italic">value</span> and <span class="font-bold italic">respect</span> the relationship <br> with brand owners and customers, <span class="font-bold italic">believe</span> in the strength of teamwork.</p>

        <div class="lg:grid md:items-center md:flex flex-wrap justify-center lg:grid-cols-5 md:gap-3 lg:gap-0 mt-4 lg:mt-8">
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="text-6xl font-bold text-red-500 flex items-center space-x-2">
                    <span class="relative" data-counter data-counter-end="20" data-counter-start="0" data-counter-duration="500">20</span>
                </div>
                <p class="text-center"><strong>Years</strong><br> <small>of experience</small></p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="text-6xl font-bold text-red-500 flex items-center space-x-2">
                    <span class="relative" data-counter data-counter-end="15" data-counter-start="0" data-counter-duration="500">15</span>
                </div>
                <p class="text-center"><strong>Company</strong><br> <small>as our principal</small></p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="text-6xl font-bold text-red-500 flex items-center space-x-2">
                    <span class="relative" data-counter data-counter-end="100" data-counter-start="0" data-counter-duration="500">100</span>
                </div>
                <p class="text-center"><strong>SKUs</strong> <br> <small>that we distribute</small></p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="text-6xl font-bold text-red-500 flex items-center space-x-2">
                    <span class="relative" data-counter data-counter-end="200" data-counter-start="0" data-counter-duration="500">200</span>
                </div>
                <p class="text-center"><strong>Outlets</strong><br> <small>that we connect with</small></p>
            </div>
            <div class="flex flex-col items-center lg:min-w-0 min-w-2xs">
                <div class="text-6xl font-bold text-red-500 flex items-center space-x-2">
                    <span class="relative" data-counter data-counter-end="20" data-counter-start="0" data-counter-duration="500">20</span>
                </div>
                <p class="text-center"><strong>Provinces</strong> <br> <small>of active market</small></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-black py-10 lg:py-14" id="about-why">

    <div class="container mx-auto px-2 lg:px-0">
        <h2 class="text-center text-6xl text-white font-semibold">Why <span class="font-bold">Lim Siang Huat ?</span></h2>
        <p class="text-white text-center mt-4 text-2xl">Several key factors distinguish us as the <span class="font-semibold italic">preferred choice</span> to fulfill your requirements.</p>

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3 mt-12" data-animate-view data-animate-target=".card-why">
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">01</h3>
                    <p class="text-4xl font-bold text-red-500">LSH's DNA</p>
                    <p class="text-center">Distribution is in <br>
                        LSH’s DNA.</p>
                </div>
            </div>
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">02</h3>
                    <p class="text-4xl font-bold text-red-500">Network</p>
                    <p class="text-center">Ready in micro <br>
                        distribution network.</p>
                </div>
            </div>
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">03</h3>
                    <p class="text-4xl font-bold text-red-500">Working System</p>
                    <p class="text-center">Work with system, neat,<br>
                        and documented.</p>
                </div>
            </div>
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">04</h3>
                    <p class="text-4xl font-bold text-red-500">Infrastructure</p>
                    <p class="text-center">Ready infrastructure to reach <br>
                        local and national market.</p>
                </div>
            </div>
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">05</h3>
                    <p class="text-4xl font-bold text-red-500">Channel</p>
                    <p class="text-center">We know the strategy to <br>
                        introduce the products <br>
                        to the market.</p>
                </div>
            </div>
            <div>
                <div class="card-why">
                    <h3 class="text-white text-5xl text-center font-black text-outline">06</h3>
                    <p class="text-4xl font-bold text-red-500">Experienced</p>
                    <p class="text-center">Dedicated field force for <br>
                        different types of market <br>
                        channels.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative">

    <div class="container mx-auto my-10 lg:my-24 space-y-5 px-2 lg:px-0 relative">
        <p class="text-2xl text-center">TESTIMONIALS</p>
        <h2 class="section-title text-center">Words From Principals</h2>

        <div class="p-0 lg:p-12">

            <div class="swiper testimonial-swiper bg-neutral-100 rounded lg:rounded-4xl shadow lg:shadow-2xl">
                <div class="swiper-wrapper">
                    @php

                        $testiCount = $testimonials->count() ?? 0;

                    @endphp

                    @if ($testiCount > 0)
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide px-2 py-5 lg:py-10">
                                <div class=" pt-7 lg:pt-14 pl-4 lg:pl-16 pr-4 lg:pr-9 pb-8 lg:pb-16">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-24 overflow-hidden">
                                        <div>
                                            <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ asset('img/placeholder/clients/akasha.png') }}" class="w-full h-auto max-w-11/12" alt="">
                                        </div>

                                        <div data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-y="-100%" class="flex-col flex space-y-36 justify-between">
                                            <p class="text-2xl">
                                                “{{ $testimonial->content }}”
                                            </p>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-0 lg:gap-y-0 gap-y-4 lg:gap-x-24 mt-12 lg:mt-36 overflow-hidden">
                                        <div class="flex items-center gap-x-8 overflow-hidden">
                                            <div class="relative flex-1">
                                                <span class="w-full h-px bg-black absolute inset-0 -translate-y-1/2"></span>
                                            </div>
                                            <div class="text-gray-400">
                                                <span class="text-black" data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%">{{ $loop->iteration }}</span> / {{ $testiCount }}
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%">
                                                <span class="font-bold text-2xl">{{ $testimonial->name }}</span> <br>
                                                <span class="text-xl">{{ $testimonial->position }}</span>
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

                        <div class="swiper-slide px-2 py-5 lg:py-10">
                            <div class=" pt-7 lg:pt-14 pl-4 lg:pl-16 pr-4 lg:pr-9 pb-8 lg:pb-16">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-24 overflow-hidden">
                                    <div>
                                        <img data-swiper-parallax="200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="100%" src="{{ asset('img/placeholder/clients/akasha.png') }}" class="w-full h-auto max-w-11/12" alt="">
                                    </div>

                                    <div data-swiper-parallax="-800" data-swiper-parallax-opacity="0.1" data-swiper-parallax-y="-100%" class="flex-col flex space-y-36 justify-between">
                                        <p class="text-2xl">“We are grateful for choosing LSH as our
                                            product distributor, as they have
                                            consistently demonstrated outstanding
                                            performance in our partnership.”</p>

                                    </div>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-0 lg:gap-y-0 gap-y-4 lg:gap-x-24 mt-12 lg:mt-36 overflow-hidden">
                                    <div class="flex items-center gap-x-8 overflow-hidden">
                                        <div class="relative flex-1">
                                            <span class="w-full h-px bg-black absolute inset-0 -translate-y-1/2"></span>
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

    </div>

    <div class="container mx-auto mt-10 lg:mt-24 px-2 lg:px-0">
        <h2 class="section-title">Achievement</h2>
    </div>

    <div class="w-full lg:w-1/2 mb-24 ml-0 lg:ml-auto px-2 lg:px-0">

        <div class="swiper half-wrapper-swiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 5; $i++)
                <div class="swiper-slide px-2 py-10">
                    <div class="bg-neutral-100 rounded-4xl shadow-xl p-8 aspect-[3/4] max-w-none w-full lg:max-w-[341px]">
                        <h3 class="text-2xl font-bold">Slide {{ $i }}</h3>
                        <p class="mt-4">This is the content of slide {{ $i }}.</p>
                    </div>
                </div>
                @endfor
            </div>

        </div>

    </div>

    <div class="container mx-auto absolute -bottom-4 lg:bottom-0  inset-x-0">
        <div class="flex space-x-10 max-w-none justify-center lg:justify-start lg:max-w-md swiper-half-button-navigation-wrapper">

            {{-- arrow button for achievement slider --}}
            <div class="swiper-button-prev swiper-button-prev-half-wrapper-swiper">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 15L3.23223 13.2322L1.46447 15L3.23223 16.7678L5 15ZM23.75 17.5C25.1307 17.5 26.25 16.3807 26.25 15C26.25 13.6193 25.1307 12.5 23.75 12.5V17.5ZM10.7322 5.73223L3.23223 13.2322L6.76777 16.7678L14.2678 9.26777L10.7322 5.73223ZM3.23223 16.7678L10.7322 24.2678L14.2678 20.7322L6.76777 13.2322L3.23223 16.7678ZM5 17.5H23.75V12.5H5V17.5Z" fill="black"/>
                </svg>
            </div>

            <div class="swiper-button-next swiper-button-next-half-wrapper-swiper">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 15L26.7678 13.2322L28.5355 15L26.7678 16.7678L25 15ZM6.25 17.5C4.86929 17.5 3.75 16.3807 3.75 15C3.75 13.6193 4.86929 12.5 6.25 12.5V17.5ZM19.2678 5.73223L26.7678 13.2322L23.2322 16.7678L15.7322 9.26777L19.2678 5.73223ZM26.7678 16.7678L19.2678 24.2678L15.7322 20.7322L23.2322 13.2322L26.7678 16.7678ZM25 17.5H6.25V12.5H25V17.5Z" fill="black"/>
                </svg>
            </div>

        </div>
    </div>


</section>


@endsection
