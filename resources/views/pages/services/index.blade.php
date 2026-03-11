@extends('layouts.app')
@section('title', 'Our Services')

@section('content')
    <section class="relative py-32 md:py-48 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.services_hero_bg') }}" alt="Our Services" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-[#1A1B3F]/85 mix-blend-multiply"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-[#F9FAFB] via-transparent to-transparent opacity-30"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <div class="space-y-4">
                <h4 class="text-[#A3D133] font-black uppercase tracking-[0.4em] text-xs md:text-sm animate-fade-in">
                    What We Do
                </h4>
                <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none">
                    Our <span class="text-[#A3D133]">Services</span>
                </h1>

                <div class="flex justify-center mt-6">
                    <div class="w-16 h-1.5 bg-[#A3D133] rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('services_data') as $service)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $service['image'] }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute top-4 left-4 flex gap-2">
                                @foreach (array_slice($service['tags'], 0, 2) as $tag)
                                    <span
                                        class="bg-[#1A1B3F] text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-black text-[#1A1B3F] mb-4 uppercase">{{ $service['name'] }}</h3>
                            <p class="text-gray-500 mb-6 line-clamp-2">{{ $service['desc'] }}</p>
                            <a href="{{ route('service.show', $service['id']) }}"
                                class="inline-block text-[#1A1B3F] font-black uppercase text-sm tracking-widest border-b-2 border-[#A3D133] hover:text-[#A3D133] transition-colors">
                                Explore Service →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
