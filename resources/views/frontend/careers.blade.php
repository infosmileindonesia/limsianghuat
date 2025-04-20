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

        <h1 class="section-title-secondary-3 text-red-500 text-center">STEP IN. STAND OUT.</h1>
        <p class="text-center mt-2 mb-6 text-3xl">We’re seeking passionate individuals to fuel our mission.</p>


    </div>


</section>

@endsection
