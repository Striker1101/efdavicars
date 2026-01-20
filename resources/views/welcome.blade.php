@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <x-card icon="fa-solid fa-bolt" title="Fast">
                Optimized Laravel 12 setup.
            </x-card>

            <x-card icon="fa-solid fa-lock" title="Secure">
                Built with modern best practices.
            </x-card>

            <x-card icon="fa-solid fa-code" title="Clean Code">
                Blade + Tailwind architecture.
            </x-card>
        </div>
    </div>
@endsection
