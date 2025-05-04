{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\errors\404.blade.php --}}
@extends('layouts.error')

@section('title', 'Page Not Found')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 w-full">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-500">404</h1>
        <p class="text-xl text-gray-700 mt-4">Oops! The page you are looking for does not exist.</p>
        <p class="text-gray-500 mt-2">It might have been moved or deleted.</p>
        <a href="{{ route('home') }}" class="btn-primary mt-6 inline-block">
            Go Back to Homepage
        </a>
    </div>
</div>
@endsection
