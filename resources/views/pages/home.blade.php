@extends('layouts.app')

@section('content')
    {{-- slides --}}
    <section class="relative h-[600px] md:h-screen w-full overflow-hidden">
        <div
            class="swiper mainHeroSwiper h-full w-full
                        [&_.swiper-pagination-bullet]:w-10 [&_.swiper-pagination-bullet]:h-1 [&_.swiper-pagination-bullet]:rounded-none [&_.swiper-pagination-bullet]:bg-white/50 [&_.swiper-pagination-bullet]:opacity-100
                        [&_.swiper-pagination-bullet-active]:bg-[#A3D133]">

            <div class="swiper-wrapper">
                @foreach (config('home_slide') as $slide)
                    <div class="swiper-slide relative flex items-center justify-center">
                        <div class="absolute inset-0 bg-black/40 z-10"></div>

                        <img src="{{ $slide['image'] }}" class="absolute inset-0 w-full h-full object-cover" alt="Slide Image">

                        <div
                            class="relative z-20 px-6 max-w-5xl text-center flex flex-col items-center justify-center h-full">
                            <h4
                                class="text-yellow-400 font-bold mb-4 uppercase tracking-[0.2em] text-xs md:text-sm animate-fadeInDown">
                                {{ $slide['subtitle'] }}
                            </h4>
                            <h1
                                class="text-4xl md:text-7xl lg:text-8xl font-black text-white mb-10 leading-[1.1] drop-shadow-lg">
                                {{ $slide['title'] }}
                            </h1>
                            <div class="flex flex-wrap justify-center gap-4">
                                <a href="{{ $slide['link'] }}"
                                    class="bg-[#A3D133] hover:bg-white hover:text-[#1A1B3F] text-white font-bold py-4 px-10 transition-all duration-300 transform hover:-translate-y-1 shadow-xl">
                                    Learn More
                                </a>
                                <a href="{{ route('contact') }}"
                                    class="border-2 border-white text-white hover:bg-white hover:text-[#1A1B3F] font-bold py-4 px-10 transition-all duration-300">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination !pb-12"></div>
        </div>
    </section>


    {{-- why choose us --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h4 class="text-[#A3D133] font-bold uppercase tracking-widest text-sm mb-3">Why Choose Us</h4>
                <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F]">Modern Electric Solutions</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach (config('why_choose_us') as $item)
                    <div
                        class="group bg-white p-10 shadow-sm border border-gray-100 transition-all duration-300 hover:bg-[#A3D133] hover:-translate-y-2">
                        <div class="mb-6 inline-block">
                            <div
                                class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-white/20">
                                <i
                                    class="{{ $item['icon'] }} text-3xl text-[#1D2191] group-hover:text-white transition-colors"></i>
                            </div>
                        </div>

                        <h3
                            class="text-xl font-black text-[#1A1B3F] mb-4 group-hover:text-white transition-colors uppercase">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-gray-500 leading-relaxed group-hover:text-white/90 transition-colors">
                            {{ $item['content'] }}
                        </p>

                        <div class="mt-8 w-12 h-1 bg-[#A3D133] group-hover:bg-white transition-colors"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- about our company --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">

                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/home/home1-image1.png') }}" alt="About Us"
                            class="w-full h-auto object-cover">
                    </div>

                    <div
                        class="absolute -bottom-10 -right-6 md:right-10 z-20 bg-[#A3D133] p-8 text-white shadow-xl rounded-sm">
                        <div class="flex items-center space-x-4">
                            <span class="text-5xl font-black">{{ config('about_section.experience_years') }}</span>
                            <p class="text-sm font-bold uppercase leading-tight tracking-wider">
                                {!! str_replace(' ', '<br>', config('about_section.experience_text')) !!}
                            </p>
                        </div>
                    </div>

                    <div class="absolute -top-6 -left-6 w-32 h-32 border-8 border-gray-100 -z-0"></div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="space-y-6">
                        <h4 class="text-[#A3D133] font-bold uppercase tracking-widest text-sm">
                            {{ config('about_section.subtitle') }}
                        </h4>

                        <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F] leading-tight">
                            {{ config('about_section.title') }}
                        </h2>

                        <p class="text-gray-500 text-lg leading-relaxed">
                            {{ config('about_section.description') }}
                        </p>

                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-4 pt-4">
                            @foreach (config('about_section.features') as $feature)
                                <li class="flex items-center space-x-3 text-[#1A1B3F] font-bold">
                                    <div class="bg-[#A3D133]/10 p-1 rounded-full">
                                        <svg class="w-5 h-5 text-[#A3D133]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="pt-8">
                            <a href="{{ route('about') }}"
                                class="inline-block bg-[#1D2191] text-white font-black px-10 py-5 hover:bg-[#A3D133] transition-colors duration-300 uppercase tracking-wider text-sm">
                                {{ config('about_section.button_text') }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- features --}}
    <section class="py-24 bg-gray-50" x-data="{ activeTab: '{{ config('features')[0]['id'] }}' }">

        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-12">
                <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Core Excellence</h4>
                <h2 class="text-4xl font-black text-[#1A1B3F]">Premium Automotive Features</h2>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-1/3 flex flex-col gap-2">
                    @foreach (config('features') as $feature)
                        <button @click="activeTab = '{{ $feature['id'] }}'"
                            :class="activeTab === '{{ $feature['id'] }}' ? 'bg-[#1A1B3F] text-white shadow-lg' :
                                'bg-white text-[#1A1B3F] hover:bg-gray-100 shadow-sm'"
                            class="flex items-center justify-between p-6 transition-all duration-300 text-left group border border-gray-100">
                            <div class="flex items-center gap-4">
                                <i class="{{ $feature['icon'] }} text-xl transition-colors"
                                    :class="activeTab === '{{ $feature['id'] }}' ? 'text-[#A3D133]' : 'text-gray-400'"></i>
                                <span class="font-black uppercase tracking-wider text-sm">{{ $feature['title'] }}</span>
                            </div>
                            <i class="fas fa-chevron-right text-xs transition-all duration-300"
                                :class="activeTab === '{{ $feature['id'] }}' ? 'translate-x-0 opacity-100' :
                                    '-translate-x-2 opacity-0'"></i>
                        </button>
                    @endforeach
                </div>

                <div
                    class="w-full lg:w-2/3 bg-[#1A1B3F] shadow-2xl grid grid-cols-1 grid-rows-1 min-h-[500px] overflow-hidden">
                    @foreach (config('features') as $feature)
                        <div x-show="activeTab === '{{ $feature['id'] }}'" {{-- This ensures the first one is visible even
                            before JS loads --}}
                            style="{{ $loop->first ? '' : 'display: none;' }}"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                            class="col-start-1 row-start-1 w-full h-full">
                            <div class="relative h-full w-full">
                                <img src="{{ $feature['image'] }}" class="w-full h-full object-cover min-h-[500px]"
                                    alt="{{ $feature['title'] }}">

                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-[#1A1B3F] via-[#1A1B3F]/80 to-transparent flex items-center p-8 md:p-16">
                                    <div class="max-w-md text-white">
                                        <div class="w-12 h-1 bg-[#A3D133] mb-6"></div>
                                        <h3 class="text-3xl md:text-4xl font-black uppercase mb-4 leading-tight">
                                            {{ $feature['title'] }}
                                        </h3>
                                        <p class="text-gray-200 text-lg leading-relaxed mb-8">
                                            {{ $feature['description'] }}
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center bg-[#A3D133] text-white font-black px-10 py-4 hover:bg-white hover:text-[#1A1B3F] transition-all duration-300 uppercase text-xs tracking-widest">
                                            Explore Details <span class="ml-2">→</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- gallery --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-xl">
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">
                        Our Gallery
                    </h4>
                    <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F] leading-tight">
                        Explore Our Latest <br> Featured Vehicles
                    </h2>
                </div>
                <div class="pb-2">
                    <a href="#"
                        class="group flex items-center gap-3 text-[#1A1B3F] font-black uppercase tracking-widest text-xs">
                        View All Projects
                        <span
                            class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-[#A3D133] group-hover:border-[#A3D133] group-hover:text-white transition-all">
                            →
                        </span>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('projects') as $project)
                    <div class="group relative overflow-hidden bg-[#1A1B3F]">

                        <div class="relative h-[400px] overflow-hidden">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:opacity-50">

                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <a href="{{ $project['link'] }}"
                                    class="w-16 h-16 bg-[#A3D133] text-white flex items-center justify-center rounded-full transform scale-50 group-hover:scale-100 transition-transform duration-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-8 bg-white border border-gray-100 transition-colors duration-500 group-hover:bg-[#1A1B3F]">
                            <span class="text-[#A3D133] font-bold uppercase tracking-widest text-xs mb-2 block">
                                {{ $project['category'] }}
                            </span>
                            <h3
                                class="text-xl font-black text-[#1A1B3F] group-hover:text-white transition-colors uppercase">
                                {{ $project['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- how it works  --}}
    <section class="py-24 relative overflow-hidden bg-[#1A1B3F]">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.working_process_bg') }}" class="w-full h-full object-cover opacity-20"
                alt="Background">
            <div class="absolute inset-0 bg-gradient-to-b from-[#1A1B3F] via-transparent to-[#1A1B3F]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="text-center mb-20">
                <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Working Process</h4>
                <h2 class="text-4xl md:text-5xl font-black text-white">How We Work For You</h2>
            </div>

            <div class="relative">
                <div
                    class="hidden lg:block absolute top-1/4 left-0 w-full h-0.5 border-t-2 border-dashed border-white/20 -z-0">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative z-10">
                    @foreach (config('custom.working_process') as $step)
                        <div class="text-center group">
                            <div class="relative mb-8 inline-block">
                                <div
                                    class="absolute -top-2 -right-2 w-10 h-10 bg-[#A3D133] text-white rounded-full flex items-center justify-center font-black text-sm z-20 border-4 border-[#1A1B3F]">
                                    0{{ $loop->iteration }}
                                </div>

                                <div
                                    class="w-32 h-32 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full flex items-center justify-center transition-all duration-500 group-hover:bg-[#A3D133] group-hover:rotate-[360deg] group-hover:border-[#A3D133]">
                                    <i
                                        class="{{ $step['icon'] }} text-4xl text-white group-hover:text-[#1A1B3F] transition-colors duration-500"></i>
                                </div>
                            </div>

                            <h3 class="text-xl font-black text-white mb-4 uppercase tracking-wider">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-gray-300 leading-relaxed px-4 group-hover:text-white transition-colors">
                                {{ $step['content'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- testimonials --}}
    <section class="py-24 bg-white" x-data="{ activeId: {{ config('testimonials')[0]['id'] }} }">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col lg:flex-row items-stretch gap-12 bg-gray-50 rounded-3xl overflow-hidden shadow-sm">

                <div class="w-full lg:w-1/2 relative min-h-[400px] lg:min-h-[600px] bg-[#1A1B3F]">
                    @foreach (config('testimonials') as $item)
                        <div x-show="activeId === {{ $item['id'] }}"
                            x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" class="absolute inset-0 w-full h-full">

                            @if ($item['type'] === 'video')
                                <video src="{{ $item['media'] }}" class="w-full h-full object-cover" autoplay muted
                                    loop></video>
                            @else
                                <img src="{{ $item['media'] }}" class="w-full h-full object-cover"
                                    alt="{{ $item['name'] }}">
                            @endif

                            @if ($item['type'] === 'video')
                                <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                                    <div
                                        class="w-20 h-20 bg-[#A3D133] rounded-full flex items-center justify-center text-white animate-pulse">
                                        <i class="fas fa-play ml-1"></i>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="w-full lg:w-1/2 p-8 md:p-16 flex flex-col justify-center">
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-widest text-sm mb-4">Our Testimonials</h4>

                    <div class="mb-12 min-h-[200px]">
                        @foreach (config('testimonials') as $item)
                            <div x-show="activeId === {{ $item['id'] }}" x-cloak>
                                <div class="flex gap-1 mb-4">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i
                                            class="fas fa-star text-sm {{ $i <= $item['rating'] ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                                    @endfor
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-[#1A1B3F] italic leading-snug">
                                    "{{ $item['quote'] }}"
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <div class="space-y-4 border-t border-gray-200 pt-8">
                        @foreach (config('testimonials') as $item)
                            <div @click="activeId = {{ $item['id'] }}"
                                class="flex items-center gap-4 cursor-pointer group transition-all"
                                :class="activeId === {{ $item['id'] }} ? 'translate-x-4' : 'opacity-50 hover:opacity-100'">

                                <div class="w-14 h-14 rounded-full overflow-hidden border-2"
                                    :class="activeId === {{ $item['id'] }} ? 'border-[#A3D133]' : 'border-transparent'">
                                    <img src="{{ $item['type'] === 'image' ? $item['media'] : 'https://ui-avatars.com/api/?name=' . urlencode($item['name']) }}"
                                        class="w-full h-full object-cover">
                                </div>

                                <div>
                                    <h5 class="font-black text-[#1A1B3F] uppercase tracking-wider text-sm"
                                        :class="activeId === {{ $item['id'] }} ? 'text-[#A3D133]' : ''">
                                        {{ $item['name'] }}
                                    </h5>
                                    <p class="text-xs text-gray-500 font-bold uppercase">{{ $item['position'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- cars --}}
    <section class="py-24 bg-white" x-data="{ activeCategory: 'All' }">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-8">
                <div>
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Our Fleet</h4>
                    <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F]">Featured Vehicles</h2>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach (config('cars.categories') as $cat)
                        <button @click="activeCategory = '{{ $cat }}'"
                            :class="activeCategory === '{{ $cat }}' ? 'bg-[#1A1B3F] text-white' :
                                'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                            class="px-6 py-2 rounded-full text-sm font-bold transition-all duration-300">
                            {{ $cat }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('cars.products') as $car)
                    <div x-show="activeCategory === 'All' || {{ json_encode($car['category']) }}.includes(activeCategory)"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        class="group bg-white border border-gray-100 hover:shadow-2xl transition-all duration-500 rounded-2xl overflow-hidden">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            @if ($car['best'])
                                <span
                                    class="absolute top-4 left-4 z-20 bg-[#A3D133] text-white text-[10px] font-black px-3 py-1 uppercase rounded-full">
                                    Best Choice
                                </span>
                            @endif

                            @if ($car['discount_percentage'] > 0)
                                <span
                                    class="absolute top-4 right-4 z-20 bg-red-500 text-white text-[10px] font-black px-3 py-1 uppercase rounded-full">
                                    -{{ $car['discount_percentage'] }}%
                                </span>
                            @endif

                            <img src="{{ $car['image'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="{{ $car['name'] }}">

                            <div
                                class="absolute inset-0 bg-[#1A1B3F]/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('product_detail', $car['id']) }}">
                                    <button href="{{ route('product_detail', $car['id']) }}"
                                        class="bg-white text-[#1A1B3F] p-4 rounded-full hover:bg-[#A3D133] hover:text-white transition-colors">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>

                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <h3
                                        class="text-xl font-black text-[#1A1B3F] group-hover:text-[#A3D133] transition-colors leading-tight">
                                        {{ $car['name'] }}
                                    </h3>
                                    <p class="text-gray-400 text-sm font-bold uppercase">{{ $car['model'] }}</p>
                                </div>
                                <div class="flex text-yellow-400 text-xs">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $car['star'] ? '' : 'text-gray-200' }}"></i>
                                    @endfor
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 my-4">
                                @foreach ($car['properties'] as $prop)
                                    <span
                                        class="text-[10px] font-bold uppercase px-2 py-1 bg-gray-50 text-gray-500 rounded border border-gray-100">
                                        {{ $prop }}
                                    </span>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between border-t border-gray-50 pt-4 mt-4">
                                <div class="flex flex-col">
                                    @if ($car['discount_price'])
                                        <span
                                            class="text-gray-400 line-through text-xs font-bold">${{ number_format($car['price']) }}</span>
                                        <span
                                            class="text-2xl font-black text-[#1A1B3F]">${{ number_format($car['discount_price']) }}</span>
                                    @else
                                        <span
                                            class="text-2xl font-black text-[#1A1B3F]">${{ number_format($car['price']) }}</span>
                                    @endif
                                </div>
                                <a href="{{ route('product_detail', $car['id']) }}">
                                    <button
                                        class="bg-[#1A1B3F] text-white p-3 rounded-lg group-hover:bg-[#A3D133] transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- box test drive  --}}
    <section class="relative bg-[#1A1B3F] overflow-hidden">
        <div class="flex flex-col lg:flex-row min-h-[600px]">

            <div class="w-full lg:w-1/2 relative min-h-[400px] lg:min-h-full">
                <img src="{{ config('custom.promo_section.image') }}" alt="Promo Car"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#1A1B3F]/20"></div>
            </div>

            <div class="w-full lg:w-1/2 flex items-center p-8 md:p-16 lg:p-24 relative">
                <div class="absolute right-0 bottom-0 opacity-5 pointer-events-none">
                    <i class="fas fa-car-side text-[20rem] text-white"></i>
                </div>

                <div class="relative z-10 space-y-8 max-w-xl">
                    <div class="space-y-4">
                        <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm">
                            {{ config('custom.promo_section.subtitle') }}
                        </h4>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight">
                            {{ config('custom.promo_section.title') }}
                        </h2>
                    </div>

                    <p class="text-gray-400 text-lg leading-relaxed">
                        {{ config('custom.promo_section.description') }}
                    </p>

                    <ul class="space-y-4">
                        @foreach (config('custom.promo_section.points') as $point)
                            <li class="flex items-center gap-4 text-white font-bold group">
                                <span
                                    class="w-8 h-8 rounded-full bg-[#A3D133] flex items-center justify-center text-[#1A1B3F] text-xs transition-transform group-hover:scale-110">
                                    <i class="fas fa-check"></i>
                                </span>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="pt-6">
                        <a href="{{ config('custom.promo_section.button_link') }}"
                            class="inline-block bg-[#A3D133] text-[#1A1B3F] font-black py-5 px-12 transition-all duration-300 hover:bg-white hover:-translate-y-1 shadow-xl uppercase tracking-widest text-sm">
                            {{ config('custom.promo_section.button_text') }}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- //contact -us --}}
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col lg:flex-row shadow-2xl rounded-3xl overflow-hidden bg-white">

                <div class="w-full lg:w-1/2 min-h-[400px] relative">
                    <iframe class="absolute inset-0 w-full h-full grayscale hover:grayscale-0 transition-all duration-700"
                        src="https://www.google.com/maps?q={{ urlencode(config('custom.address_one')) }}&output=embed"
                        frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>

                    <div class="absolute bottom-8 left-8 right-8 bg-[#1A1B3F] p-8 text-white hidden md:block">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <h5 class="text-[#A3D133] font-black uppercase text-xs tracking-widest mb-2">Office Address
                                </h5>
                                <p class="text-sm text-gray-300 leading-relaxed">{{ config('custom.address_one') }}</p>
                            </div>
                            <div>
                                <h5 class="text-[#A3D133] font-black uppercase text-xs tracking-widest mb-2">Quick Connect
                                </h5>
                                <p class="text-sm text-gray-300">{{ config('custom.email') }}</p>
                                <p class="text-sm text-gray-300">{{ config('custom.phone_one') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 p-8 md:p-16 lg:p-20">
                    <div class="mb-10">
                        <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Get In Touch</h4>
                        <h2 class="text-4xl font-black text-[#1A1B3F] leading-tight">Ready To Find Your <br> Dream Vehicle?
                        </h2>
                    </div>

                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-500 text-white font-bold rounded-lg">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="mb-6 p-4 bg-red-500 text-white font-bold rounded-lg">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase text-[#1A1B3F] tracking-widest">Your
                                    Name</label>
                                <input type="text" name="name" placeholder="John Doe" required
                                    class="w-full bg-gray-50 border-none px-6 py-4 focus:ring-2 focus:ring-[#A3D133] outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase text-[#1A1B3F] tracking-widest">Email
                                    Address</label>
                                <input type="email" name="email" placeholder="john@example.com" required
                                    class="w-full bg-gray-50 border-none px-6 py-4 focus:ring-2 focus:ring-[#A3D133] outline-none transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase text-[#1A1B3F] tracking-widest">Subject</label>
                            <select name="subject"
                                class="w-full bg-gray-50 border-none px-6 py-4 focus:ring-2 focus:ring-[#A3D133] outline-none transition-all appearance-none">
                                <option value="General Inquiry">Inquiry About a Specific Car</option>
                                <option value="Test Drive">Test Drive Request</option>
                                <option value="Financing">Financing Questions</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase text-[#1A1B3F] tracking-widest">Message</label>
                            <textarea name="message" rows="4" placeholder="How can we help you today?" required
                                class="w-full bg-gray-50 border-none px-6 py-4 focus:ring-2 focus:ring-[#A3D133] outline-none transition-all resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#1A1B3F] text-white font-black py-5 px-10 uppercase tracking-[0.2em] text-sm hover:bg-[#A3D133] transition-all duration-500 shadow-xl group">
                            Send Message
                            <span class="inline-block ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- news letter --}}
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.stats_bg') }}" class="w-full h-full object-cover bg-fixed"
                alt="Stats Background">
            <div class="absolute inset-0 bg-[#1A1B3F]/90 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#1A1B3F] via-transparent to-[#A3D133]/10"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                @foreach (config('custom.stats') as $stat)
                    <div class="flex flex-col items-center text-center group">
                        <div class="mb-6 relative">
                            <div
                                class="absolute inset-0 bg-[#A3D133] blur-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500">
                            </div>
                            <i
                                class="{{ $stat['icon'] }} text-4xl text-[#A3D133] relative z-10 transform transition-transform duration-500 group-hover:scale-110"></i>
                        </div>

                        <div class="flex items-baseline mb-2">
                            <span class="text-5xl md:text-6xl font-black text-white tracking-tighter">
                                {{ $stat['count'] }}
                            </span>
                            <span class="text-3xl font-black text-[#A3D133] ml-1">
                                {{ $stat['suffix'] }}
                            </span>
                        </div>

                        <p class="text-gray-400 font-bold uppercase tracking-[0.2em] text-xs">
                            {{ $stat['title'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.mainHeroSwiper', {
                loop: true,
                effect: 'fade', // Added fade effect for a "high-end" feel
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
@endsection
