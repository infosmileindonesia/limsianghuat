@extends('layouts.app')

@section('title', 'Welcome Page')

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
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 1" class="w-full aspect-[16/6] object-cover">
                    <div class="absolute inset-0 flex flex-col space-y-3 items-center justify-center text-white font-bold italic text-8xl">
                        <h2 class="text-center">GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </h2>
                        <a href="#" class="rounded-full text-lg px-4 py-3 text-black bg-slate-50 not-italic">LEARN MORE</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 2" class="w-full aspect-[16/6] object-cover">
                    <div class="absolute inset-0 flex flex-col space-y-3 items-center justify-center text-white font-bold italic text-8xl">
                        <h2 class="text-center">GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </h2>
                        <a href="#" class="rounded-full text-lg px-4 py-3 text-black bg-slate-50 not-italic">LEARN MORE</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 3" class="w-full aspect-[16/6] object-cover">
                    <div class="absolute inset-0 flex flex-col space-y-3 items-center justify-center text-white font-bold italic text-8xl">
                        <h2 class="text-center">GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </h2>
                        <a href="#" class="rounded-full text-lg px-4 py-3 text-black bg-slate-50 not-italic">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 pb-10">
        <div class="container mx-auto">
            <div class="font-bold text-xl text-left pb-5 relative">
                <h2>PT Lim Siang Huat</h2>
                <p>We're a partner in your success.</p>

                <div class="absolute inset-0 bg-red-500 h-1 w-48 mt-auto"></div>
            </div>
        </div>
    </section>

@endsection
