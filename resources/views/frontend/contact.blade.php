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

    <div class="mx-auto pt-10 pb-[51px] container">

        <h1 class="text-red-500 text-center section-title-secondary-3">@lang('CONTACT INFORMATION')</h1>

        <h1 class="text-center section-title-secondary">@lang('Get In Touch With Us !')</h1>
    </div>

    <div class="mx-auto px-2 lg:px-0 pb-16 container">
        <div class="gap-x-0 gap-y-2 lg:gap-x-7 lg:gap-y-0 grid grid-cols-1 lg:grid-cols-3">
            <div class="flex flex-col justify-end items-center gap-y-6 bg-black py-10 rounded-2xl">
                <span>
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.67962 17.6362L19.6087 0.707107C19.9992 0.316582 20.6324 0.316582 21.0229 0.707106L36.6613 16.3455C37.0518 16.736 37.0518 17.3692 36.6613 17.7597L25.5983 28.8228C24.9895 29.4315 24.8386 30.3615 25.2236 31.1314L29.6766 40.0375C31.9022 44.4886 35.5114 48.0978 39.9625 50.3234L48.8686 54.7764C49.6385 55.1614 50.5685 55.0105 51.1772 54.4017L62.2403 43.3387C62.6308 42.9482 63.2639 42.9482 63.6545 43.3387L79.2929 58.9771C79.6834 59.3676 79.6834 60.0008 79.2929 60.3913L62.3638 77.3204C60.2525 79.4317 56.9099 79.6693 54.5212 77.8777L27.2075 57.3925C25.464 56.0848 23.9152 54.536 22.6075 52.7925L2.12226 25.4788C0.330722 23.0901 0.56827 19.7475 2.67962 17.6362Z" fill="white"/>
                        </svg>
                </span>
                <div class="text-center">
                    <p class="font-medium text-red-500 text-2xl md:text-4xl">
                        <a href="tel:+62 778 430359">@lang('Phone')</a>
                    </p>
                    {{-- <a href="tel:+62 778 430359" class="font-normal text-white text-lg md:text-2xl">+62 778 430359</a> --}}
                </div>
            </div>
            <div class="flex flex-col justify-end items-center gap-y-6 bg-black py-10 rounded-2xl">
                <span>
                    <svg width="69" height="55" viewBox="0 0 69 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.5 14L34.5 30.875L7.5 14V7.25L34.5 24.125L61.5 7.25M61.5 0.5H7.5C3.75375 0.5 0.75 3.50375 0.75 7.25V47.75C0.75 49.5402 1.46116 51.2571 2.72703 52.523C3.9929 53.7888 5.70979 54.5 7.5 54.5H61.5C63.2902 54.5 65.0071 53.7888 66.273 52.523C67.5388 51.2571 68.25 49.5402 68.25 47.75V7.25C68.25 5.45979 67.5388 3.7429 66.273 2.47703C65.0071 1.21116 63.2902 0.5 61.5 0.5Z" fill="white"/>
                        </svg>
                </span>
                <div class="text-center">
                    <p class="font-medium text-red-500 text-2xl md:text-4xl">
                        <a href="mailto:lsh@gmail.com">@lang('Email')</a>
                    </p>
                    {{-- <a href="mailto:lsh@gmail.com" class="font-normal text-white text-lg md:text-2xl">lsh@gmail.com</a> --}}
                </div>
            </div>
            <div class="flex flex-col justify-end items-center gap-y-6 bg-black py-10 rounded-2xl">
                <span>
                    <svg width="59" height="65" viewBox="0 0 59 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.2662 60.875C31.655 55.5762 27.875 48.59 27.875 42.3125C27.875 36.1362 31.115 30.5 35.975 27.125H34.625V20.375H41.375V24.5262C43.0625 24.0537 44.75 23.75 46.4375 23.75C47.0112 23.75 47.585 23.75 48.125 23.8512V0.125H0.875V60.875H21.125V49.0625H27.875V60.875H35.2662ZM34.625 6.875H41.375V13.625H34.625V6.875ZM14.375 54.125H7.625V47.375H14.375V54.125ZM14.375 40.625H7.625V33.875H14.375V40.625ZM14.375 27.125H7.625V20.375H14.375V27.125ZM14.375 13.625H7.625V6.875H14.375V13.625ZM21.125 6.875H27.875V13.625H21.125V6.875ZM21.125 20.375H27.875V27.125H21.125V20.375ZM21.125 40.625V33.875H27.875V40.625H21.125ZM46.4375 30.5C40.025 30.5 34.625 35.9338 34.625 42.3125C34.625 51.1213 46.4375 64.25 46.4375 64.25C46.4375 64.25 58.25 51.1213 58.25 42.3125C58.25 35.9338 52.85 30.5 46.4375 30.5ZM46.4375 46.7337C44.075 46.7337 42.3875 44.7088 42.3875 42.6838C42.3875 40.3213 44.4125 38.6338 46.4375 38.6338C48.4625 38.6338 50.4875 40.625 50.4875 42.6838C50.825 44.7088 48.8 46.7337 46.4375 46.7337Z" fill="white"/>
                        </svg>
                </span>
                <div class="text-center">
                    <p class="font-medium text-red-500 text-2xl md:text-4xl">
                        <a href="https://maps.app.goo.gl/1h4mEdfGsB1GwjLx5" target="_blank">@lang('Head Office')</a>
                    </p>
                    {{-- <p class="font-normal text-white text-lg md:text-2xl">Batam, Kepulauan Riau</p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto px-2 lg:px-0 pb-12 container">
        <h2 class="mb-10 text-red-500 text-center section-title-secondary-3">@lang('OUR LOCATION')</h2>

        {{-- create swiper wrapper with three slides item map embed --}}
        <div class="swiper maps-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rounded-2xl w-full lg:w-[1112px] h-[300px] lg:h-[543px] overflow-hidden">
                        <iframe class="w-full h-full" width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=Pt.+Lim+Siang+Huat&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl w-full lg:w-[1112px] h-[300px] lg:h-[543px] overflow-hidden">
                        <iframe class="w-full h-full" width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT.+Lim+Siang+Huat+Balindo+Jakarta&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl w-full lg:w-[1112px] h-[300px] lg:h-[543px] overflow-hidden">
                        <iframe class="w-full h-full" width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT.LSHR+JAKARTA&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl w-full lg:w-[1112px] h-[300px] lg:h-[543px] overflow-hidden">
                        <iframe class="w-full h-full" width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT+Lim+Siang+Huat+Balindo+Surabaya&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl w-full lg:w-[1112px] h-[300px] lg:h-[543px] overflow-hidden">
                        <iframe class="w-full h-full" width="1112" height="543" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=PT.+Lim+Siang+Huat+Bali&key={{ env('GOOGLE_MAP_API_KEY') }}"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-maps-controls">
            <div class="cursor-pointer swiper-button-prev swiper-maps-button-prev">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1215 18.5001H29.0002V21.5001H16.1215L21.0609 26.4395L18.9396 28.5608L10.3789 20.0001L18.9396 11.4395L21.0609 13.5608L16.1215 18.5001Z" fill="#999999"/>
                </svg>
            </div>
            <div class="swiper-pagination swiper-maps-pagination"></div>
            <div class="cursor-pointer swiper-button-next swiper-maps-button-next">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.478 21.5568H10.9243V18.4428H23.478L18.6633 13.3157L20.7311 11.1138L29.0757 19.9998L20.7311 28.8858L18.6633 26.6838L23.478 21.5568V21.5568Z" fill="#999999"/>
                </svg>
            </div>
        </div>

    </div>

    <div class="mx-auto pb-36 container">
        <h2 class="text-red-500 text-center section-title-secondary-3">@lang('GOT QUESTIONS? WE’RE HERE TO HELP')</h2>
        <p class="mt-4 mb-6 text-3xl text-center">@lang('Don’t hesitate to drop your curiosity through the following form:') </p>

        <div class="w-full">
            <livewire:frontend.contacts.form-component />
        </div>
    </div>


</section>

@endsection
