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

    <div class="mx-auto px-2 lg:px-0 pt-10 pb-[51px] container">

        <h1 class="text-red-500 text-center section-title-secondary-3">@lang('STEP IN. STAND OUT.')</h1>
        <p class="mt-2 mb-6 text-3xl text-center">@lang('We’re seeking passionate individuals to fuel our mission.')</p>

        <livewire:frontend.careers.listing />


    </div>


</section>

@endsection
