@extends('layouts.app')

@section('title', 'About us ')

@section('content')


    {{-- about header --}}
    <section class="relative h-[400px] md:h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.about_hero_bg') }}" class="w-full h-full object-cover" alt="About Us">
            <div class="absolute inset-0 bg-[#1A1B3F]/70"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#1A1B3F] via-transparent to-transparent opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="flex flex-col items-center text-center">
                <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.4em] text-sm mb-6 animate-fade-in-down">
                    Get To Know Us
                </h4>

                <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-8 leading-none">
                    About Our <br> <span class="text-[#A3D133]">Company</span>
                </h1>

                <nav
                    class="flex items-center gap-4 bg-white/5 backdrop-blur-md px-8 py-3 rounded-full border border-white/10">
                    <a href="/"
                        class="text-gray-300 hover:text-[#A3D133] font-bold uppercase text-xs tracking-widest transition-colors">
                        Home
                    </a>
                    <span class="text-gray-500 text-xs">/</span>
                    <span class="text-[#A3D133] font-bold uppercase text-xs tracking-widest">
                        About Us
                    </span>
                </nav>
            </div>
        </div>
    </section>

    {{--  clients / partners --}}
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 mb-16">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Our Partners</h4>
                    <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F] leading-tight">
                        Trusted By World-Class <br> Automotive Brands
                    </h2>
                </div>
                <p class="text-gray-500 max-w-sm">
                    We collaborate with the most reliable manufacturers to ensure every vehicle in our fleet meets global
                    safety and luxury standards.
                </p>
            </div>
        </div>

        <div class="relative flex overflow-x-hidden border-y border-gray-100 py-12 bg-gray-50/50">
            <div class="flex animate-marquee whitespace-nowrap items-center">
                @foreach (array_merge(config('gallery.brand_gallery'), config('gallery.brand_gallery')) as $brand)
                    <div
                        class="mx-12 w-40 h-20 flex items-center justify-center grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                        <img src="{{ $brand['image'] }}" alt="{{ $brand['name'] }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                @endforeach
            </div>

            <div class="absolute top-12 flex animate-marquee2 whitespace-nowrap items-center">
                @foreach (array_merge(config('gallery.brand_gallery'), config('gallery.brand_gallery')) as $brand)
                    <div
                        class="mx-12 w-40 h-20 flex items-center justify-center grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                        <img src="{{ $brand['image'] }}" alt="{{ $brand['name'] }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- gallery  --}}
    <section class="py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="max-w-2xl">
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-4">Inventory Gallery</h4>
                    <h2 class="text-4xl md:text-5xl font-black text-[#1A1B3F] leading-tight">
                        Premium Selections <br> For Every Journey
                    </h2>
                </div>
            </div>

            <div class="pb-2">
                <p class="text-gray-400 font-bold uppercase text-xs tracking-widest">Total Units:
                    {{ count(config('cars.products')) }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach (config('cars.products') as $car)
                    <div class="group relative h-[450px] overflow-hidden rounded-2xl bg-[#1A1B3F]">

                        <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:opacity-20">

                        <div class="absolute top-4 left-4 right-4 flex justify-between items-start z-20">
                            @if ($car['best'])
                                <span
                                    class="bg-[#A3D133] text-[#1A1B3F] text-[10px] font-black px-3 py-1 uppercase rounded">Best
                                    Seller</span>
                            @else
                                <span></span>
                            @endif
                            <span
                                class="bg-white/10 backdrop-blur-md text-white font-black py-1 px-4 rounded-full text-sm border border-white/20">
                                ${{ number_format($car['price']) }}
                            </span>
                        </div>

                        <div
                            class="absolute inset-0 flex flex-col justify-end p-8 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-8 group-hover:translate-y-0 z-30">

                            <div class="mb-6">
                                <h3 class="text-2xl font-black text-white uppercase mb-1">{{ $car['name'] }}</h3>
                                <p class="text-gray-400 text-xs font-bold">{{ $car['model'] }}</p>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach ($car['properties'] as $feature)
                                    <div
                                        class="flex items-center gap-1.5 bg-white/5 border border-white/10 px-3 py-1.5 rounded">
                                        <i class="fas fa-check text-[#A3D133] text-[10px]"></i>
                                        <span
                                            class="text-[10px] text-white font-bold uppercase tracking-tight">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex gap-2">
                                <a href="{{ Route::has('product_detail') ? route('product_detail', $car['id']) : '#' }}"
                                    class="flex-1 bg-[#A3D133] text-[#1A1B3F] text-center py-4 text-[10px] font-black uppercase tracking-widest hover:bg-white transition-all">
                                    View Details
                                </a>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/90 to-transparent transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-xl font-black text-white uppercase">{{ $car['name'] }}</h3>
                            <p class="text-[#A3D133] text-sm font-bold uppercase tracking-widest">
                                {{ $car['category'][0] ?? 'Featured' }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- news letter --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.newsletter_bg') }}" class="w-full h-full object-cover" alt="Newsletter Background">
            <div class="absolute inset-0 bg-[#1A1B3F]/90"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                <div class="max-w-lg text-center lg:text-left">
                    <h4 class="text-[#A3D133] font-bold uppercase tracking-[0.3em] text-sm mb-3">
                        Stay Updated
                    </h4>
                    <h2 class="text-3xl md:text-4xl font-black text-white uppercase leading-tight">
                        Subscribe To Our <br> <span class="text-[#A3D133]">Newsletter</span>
                    </h2>
                    <p class="text-gray-400 mt-4 font-medium">
                        Get the latest deals, vehicle arrivals, and automotive news delivered straight to your inbox.
                    </p>
                </div>

                <div class="w-full lg:max-w-xl">
                    <form action="#" method="POST" class="relative group">
                        @csrf
                        <div
                            class="flex flex-col sm:flex-row gap-4 p-2 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl sm:rounded-full overflow-hidden transition-all duration-300 focus-within:border-[#A3D133]/50 focus-within:shadow-[0_0_20px_rgba(163,209,51,0.2)]">

                            <div class="flex-1 flex items-center px-6 py-4">
                                <i class="far fa-envelope text-gray-400 mr-4"></i>
                                <input type="email" name="email" required placeholder="Enter your email address"
                                    class="w-full bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 outline-none font-bold text-sm">
                            </div>

                            <button type="submit"
                                class="bg-[#A3D133] text-[#1A1B3F] font-black px-10 py-4 rounded-xl sm:rounded-full uppercase tracking-widest text-xs hover:bg-white hover:scale-105 transition-all duration-300 active:scale-95 shadow-lg">
                                Subscribe Now
                            </button>
                        </div>

                        <p class="text-[10px] text-gray-500 mt-4 px-6 text-center lg:text-left uppercase tracking-tighter">
                            * We value your privacy. Unsubscribe at any time.
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes marquee2 {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0%);
            }
        }

        .animate-marquee {
            animation: marquee 30s linear infinite;
        }

        .animate-marquee2 {
            animation: marquee2 30s linear infinite;
        }
    </style>
@endsection
