{{-- filepath: resources/views/frontend/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Us')

@section('meta')
    <meta name="description" content="Contact Us - Lim Siang Huat Balindo">
    <meta name="keywords" content="Contact, Lim Siang Huat Balindo, Batam, Jakarta">
    <meta name="author" content="Lim Siang Huat Balindo">
@endsection

@push('plugins-scripts')
    @vite(['resources/js/swiper-plugins.js'])
@endpush

@section('content')

<section>

    <x-frontend.hero.minimal
        :image="asset('img/placeholder/contact.png')"
        :title="'Contact Us'"
    />

    <div class="container mx-auto pt-10 pb-[51px]">

        <h1 class="section-title-secondary-3 text-red-500 text-center">CONTACT INFORMATION</h1>

        <h1 class="section-title-secondary text-center">Get In Touch With Us !</h1>
    </div>

    <div class="container mx-auto pb-16">
        <div class="grid grid-cols-3 gap-x-7">
            <div class="bg-black rounded-2xl flex flex-col py-10 items-center justify-end gap-y-3">
                <span>
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.67962 17.6362L19.6087 0.707107C19.9992 0.316582 20.6324 0.316582 21.0229 0.707106L36.6613 16.3455C37.0518 16.736 37.0518 17.3692 36.6613 17.7597L25.5983 28.8228C24.9895 29.4315 24.8386 30.3615 25.2236 31.1314L29.6766 40.0375C31.9022 44.4886 35.5114 48.0978 39.9625 50.3234L48.8686 54.7764C49.6385 55.1614 50.5685 55.0105 51.1772 54.4017L62.2403 43.3387C62.6308 42.9482 63.2639 42.9482 63.6545 43.3387L79.2929 58.9771C79.6834 59.3676 79.6834 60.0008 79.2929 60.3913L62.3638 77.3204C60.2525 79.4317 56.9099 79.6693 54.5212 77.8777L27.2075 57.3925C25.464 56.0848 23.9152 54.536 22.6075 52.7925L2.12226 25.4788C0.330722 23.0901 0.56827 19.7475 2.67962 17.6362Z" fill="white"/>
                        </svg>
                </span>
                <div class="text-center">
                    <p class="text-red-500 text-2xl md:text-4xl font-medium">Phone</p>
                    <a href="tel:+62 778 430359" class="text-white text-lg md:text-2xl font-normal">+62 778 430359</a>
                </div>
            </div>
            <div class="bg-black rounded-2xl flex flex-col py-10 items-center justify-end gap-y-3">
                <span></span>
                <div class="text-center">
                    <p class="text-red-500 text-2xl md:text-4xl font-medium">Email</p>
                    <a href="mailto:lsh@gmail.com" class="text-white text-lg md:text-2xl font-normal">lsh@gmail.com</a>
                </div>
            </div>
            <div class="bg-black rounded-2xl flex flex-col py-10 items-center justify-end gap-y-3">
                <span></span>
                <div class="text-center">
                    <p class="text-red-500 text-2xl md:text-4xl font-medium">Head Office</p>
                    <p class="text-white text-lg md:text-2xl font-normal">Batam, Kepulauan Riau</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto pb-12">
        <h2 class="section-title-secondary-3 text-red-500 text-center mb-10">OUR LOCATION</h2>

        {{-- create swiper wrapper with three slides item map embed --}}
        <div class="swiper maps-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-[1112px] h-[543px] rounded-2xl overflow-hidden">
                        <iframe width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT.+Lim+Siang+Huat+Balindo+Jakarta&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[1112px] h-[543px] rounded-2xl overflow-hidden">
                        <iframe width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT.+Lim+Siang+Huat+Balindo+Batam&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-maps-controls">
            <div class="swiper-button-prev swiper-maps-button-prev cursor-pointer">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1215 18.5001H29.0002V21.5001H16.1215L21.0609 26.4395L18.9396 28.5608L10.3789 20.0001L18.9396 11.4395L21.0609 13.5608L16.1215 18.5001Z" fill="#999999"/>
                </svg>
            </div>
            <div class="swiper-pagination swiper-maps-pagination"></div>
            <div class="swiper-button-next swiper-maps-button-next cursor-pointer">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.478 21.5568H10.9243V18.4428H23.478L18.6633 13.3157L20.7311 11.1138L29.0757 19.9998L20.7311 28.8858L18.6633 26.6838L23.478 21.5568V21.5568Z" fill="#999999"/>
                </svg>
            </div>
        </div>

    </div>

    <div class="container mx-auto pb-36">
        <h2 class="section-title-secondary-3 text-red-500 text-center">GOT QUESTIONS? WE’RE HERE TO HELP</h2>
        <p class="text-center mt-4 mb-6 text-3xl">Don’t hesitate to drop your curiosity through the following form: </p>

        <div class="w-full">
            <livewire:frontend.contacts.form-component />
        </div>
    </div>


</section>

@endsection
