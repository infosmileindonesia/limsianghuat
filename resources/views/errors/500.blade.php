{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\errors\500.blade.php --}}
@extends('layouts.error')

@section('title', 'Server Error')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 w-full">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-500">500</h1>
        <p class="text-xl text-gray-700 mt-4">Oops! Something went wrong on our end.</p>
        <p class="text-gray-500 mt-2">Please try again later or contact support.</p>
        <a href="{{ route('home') }}" class="btn-primary mt-6 inline-block">
            Go Back to Homepage
        </a>
    </div>
</div>
@endsection
