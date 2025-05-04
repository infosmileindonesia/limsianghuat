{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\errors\403.blade.php --}}
@extends('layouts.error')

@section('title', 'Access Denied')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 w-full">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-500">403</h1>
        <p class="text-xl text-gray-700 mt-4">You do not have permission to access this page.</p>
        <p class="text-gray-500 mt-2">If you believe this is an error, please contact support.</p>
        <a href="{{ route('home') }}" class="btn-primary mt-6 inline-block">
            Go Back to Homepage
        </a>
    </div>
</div>
@endsection
