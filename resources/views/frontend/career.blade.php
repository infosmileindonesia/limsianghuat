{{-- filepath: resources/views/frontend/careers.blade.php --}}
@extends('layouts.app')

@section('title', 'Careers')

@section('content')

<section>

    <x-frontend.hero.minimal
        :image="asset('img/placeholder/contact.png')"
        :title="'Career'"
    />

    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center">Careers</h1>
        <p class="text-center mt-4">Join our team and grow your career with us.</p>
    </div>
</section>

@endsection
