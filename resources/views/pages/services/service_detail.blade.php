@extends('layouts.app')
@section('title', $service['name'])

@section('content')
    <section class="relative py-40 md:py-56 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}"
                class="w-full h-full object-cover transform scale-105">

            <div class="absolute inset-0 bg-[#1A1B3F]/80 mix-blend-multiply"></div>

            <div class="absolute inset-0 bg-gradient-to-b from-[#1A1B3F]/20 via-transparent to-[#1A1B3F]/60"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl">
            <div class="space-y-4">
                <h4 class="text-[#A3D133] font-black uppercase tracking-[0.5em] text-[10px] md:text-xs mb-4 opacity-90">
                    Service Excellence
                </h4>

                <h1
                    class="text-5xl md:text-8xl font-black text-white uppercase tracking-tighter leading-none transition-all duration-700">
                    {{ $service['name'] }}
                </h1>

                <div class="flex justify-center mt-8">
                    <div class="w-24 h-1.5 bg-[#A3D133] rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <div class="lg:col-span-4 space-y-8 order-2 lg:order-1">
                    <div class="bg-[#1A1B3F] p-10 rounded-3xl text-white">
                        <h3 class="text-xl font-black uppercase mb-6 text-[#A3D133]">Key Benefits</h3>
                        <ul class="space-y-4">
                            @foreach ($service['benefits'] as $benefit)
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-[#A3D133] mt-1"></i>
                                    <span class="text-sm font-bold text-gray-300 leading-relaxed">{{ $benefit }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="p-8 border border-gray-100 rounded-3xl">
                        <h5 class="text-xs font-black uppercase tracking-widest mb-4">Categories</h5>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($service['tags'] as $tag)
                                <span
                                    class="bg-gray-50 text-[#1A1B3F] px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest border border-gray-100">
                                    #{{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 order-1 lg:order-2 space-y-12">
                    <div class="prose prose-xl max-w-none">
                        <h2 class="text-3xl font-black text-[#1A1B3F] uppercase mb-6">Overview</h2>
                        <p class="text-gray-600 leading-loose text-lg mb-8">{{ $service['content'] }}</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-12">
                            @foreach ($service['features_media'] as $media)
                                <div class="rounded-2xl overflow-hidden h-64 shadow-lg group">
                                    @if ($media['type'] == 'video')
                                        <video controls class="w-full h-full object-cover">
                                            <source src="{{ $media['src'] }}" type="video/mp4">
                                        </video>
                                    @else
                                        <img src="{{ $media['src'] }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <h2 class="text-3xl font-black text-[#1A1B3F] uppercase mb-6">Service Standards</h2>
                        <p class="text-gray-600 leading-loose text-lg">{{ $service['content_two'] }}</p>
                    </div>

                    <div class="bg-gray-50 p-10 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6">
                        <div>
                            <h4 class="text-xl font-black text-[#1A1B3F] uppercase">Ready to get started?</h4>
                            <p class="text-gray-500">Contact our experts for a personalized quote.</p>
                        </div>
                        <a href="{{ route('contact') }}"
                            class="bg-[#A3D133] text-[#1A1B3F] px-10 py-4 font-black uppercase tracking-widest text-xs rounded-full hover:bg-[#1A1B3F] hover:text-white transition-all">
                            Book Service Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-xl">
                    <h4 class="text-[#A3D133] font-black uppercase tracking-[0.3em] text-xs mb-3">Check These Out</h4>
                    <h2 class="text-3xl md:text-4xl font-black text-[#1A1B3F] uppercase">Other <span
                            class="text-[#A3D133]">Services</span> Available</h2>
                </div>
                <a href="{{ route('service') }}"
                    class="text-[#1A1B3F] font-black uppercase text-xs tracking-widest border-b-2 border-[#A3D133] pb-1 hover:text-[#A3D133] transition-all">
                    View All Services
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($relatedServices as $rel)
                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-[#1A1B3F]/40 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>

                        <div class="p-8">
                            <div class="flex justify-between items-start mb-4">
                                <h3
                                    class="text-xl font-black text-[#1A1B3F] uppercase group-hover:text-[#A3D133] transition-colors">
                                    {{ $rel['name'] }}
                                </h3>
                            </div>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-6">
                                {{ $rel['desc'] }}
                            </p>

                            <a href="{{ route('service.show', $rel['id']) }}"
                                class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-[#1A1B3F]">
                                Read More
                                <span class="w-8 h-[2px] bg-[#A3D133] group-hover:w-12 transition-all"></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
