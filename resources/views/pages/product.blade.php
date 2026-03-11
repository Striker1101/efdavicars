@extends('layouts.app')

@section('content')
    <section class="relative py-32 md:py-44 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.shop_hero_bg') }}" alt="Search Background"
                class="w-full h-full object-cover transform scale-105">

            <div class="absolute inset-0 bg-[#1A1B3F]/85 mix-blend-multiply"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-[#F9FAFB]/20 via-transparent to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 w-full">
            <div class="space-y-6">
                <h4 class="text-[#A3D133] font-black uppercase tracking-[0.4em] text-[10px] md:text-xs">
                    Premium Inventory
                </h4>

                <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none mb-10">
                    Find Your <span class="text-[#A3D133]">Dream Car</span>
                </h1>

                <form action="{{ route('products') }}" method="GET" class="max-w-2xl mx-auto relative group">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div class="relative flex items-center">
                        <i
                            class="fas fa-search absolute left-8 text-gray-400 group-focus-within:text-[#A3D133] transition-colors"></i>

                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Search by brand or model (e.g. Tesla, AMG)..."
                            class="w-full py-6 pl-16 pr-40 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white placeholder-gray-400 focus:ring-2 focus:ring-[#A3D133] focus:bg-[#1A1B3F]/50 outline-none transition-all duration-300 shadow-2xl">

                        <button type="submit"
                            class="absolute right-2 bg-[#A3D133] text-[#1A1B3F] px-10 py-4 rounded-full font-black uppercase text-[10px] tracking-widest hover:bg-white hover:scale-105 active:scale-95 transition-all duration-300">
                            Search Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-10">

                <aside class="w-full lg:w-1/4 space-y-6">
                    <form action="{{ route('products') }}" method="GET" class="space-y-6">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="sort" value="{{ request('sort') }}">

                        <div class="bg-white p-8 rounded-3xl shadow-sm">
                            <h3 class="text-sm font-black text-[#1A1B3F] uppercase mb-6 border-b pb-2">Categories</h3>
                            <div class="space-y-2">
                                @foreach ($categories as $cat)
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="radio" name="category" value="{{ $cat }}"
                                            onchange="this.form.submit()"
                                            {{ request('category', 'All') == $cat ? 'checked' : '' }}
                                            class="text-[#A3D133] focus:ring-[#A3D133]">
                                        <span
                                            class="text-xs font-bold uppercase {{ request('category') == $cat ? 'text-[#A3D133]' : 'text-gray-500' }}">{{ $cat }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-3xl shadow-sm">
                            <h3 class="text-sm font-black text-[#1A1B3F] uppercase mb-6 border-b pb-2">Price Range</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="number" name="min_price" value="{{ request('min_price') }}" placeholder="Min"
                                    class="text-xs p-3 bg-gray-50 border-none rounded-lg">
                                <input type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Max"
                                    class="text-xs p-3 bg-gray-50 border-none rounded-lg">
                            </div>
                            <button type="submit"
                                class="w-full mt-4 bg-[#1A1B3F] text-white py-3 rounded-lg text-[10px] font-black uppercase tracking-widest">Apply
                                Price</button>
                        </div>

                        <div class="bg-white p-8 rounded-3xl shadow-sm">
                            <h3 class="text-sm font-black text-[#1A1B3F] uppercase mb-6 border-b pb-2">Engine Type</h3>
                            <select name="type" onchange="this.form.submit()"
                                class="w-full text-xs p-3 bg-gray-50 border-none rounded-lg font-bold">
                                <option value="">All Types</option>
                                <option value="Petrol" {{ request('type') == 'Petrol' ? 'selected' : '' }}>Petrol</option>
                                <option value="Electric" {{ request('type') == 'Electric' ? 'selected' : '' }}>Electric
                                </option>
                                <option value="Hybrid" {{ request('type') == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                        </div>

                        <a href="{{ route('products') }}"
                            class="block text-center text-red-500 font-black text-[10px] uppercase tracking-widest mt-4">Clear
                            All Filters</a>
                    </form>
                </aside>

                <div class="w-full lg:w-3/4">
                    <div class="flex justify-between items-center mb-8 bg-white p-6 rounded-2xl shadow-sm">
                        <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Found:
                            {{ $products->total() }} Cars</span>
                        <form action="{{ route('products') }}" method="GET">
                            @foreach (request()->except('sort') as $key => $val)
                                <input type="hidden" name="{{ $key }}" value="{{ $val }}">
                            @endforeach
                            <select name="sort" onchange="this.form.submit()"
                                class="text-[10px] font-black uppercase border-none bg-gray-50 rounded-full px-6">
                                <option value="">Default Sort</option>
                                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low
                                    to High</option>
                                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price:
                                    High to Low</option>
                            </select>
                        </form>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        @foreach ($products as $car)
                            <div class="group relative h-[420px] rounded-3xl overflow-hidden bg-[#1A1B3F]">
                                <img src="{{ $car['image'] }}"
                                    class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:opacity-30">
                                <div
                                    class="absolute inset-0 p-8 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-all">
                                    <h3 class="text-2xl font-black text-white uppercase">{{ $car['name'] }}</h3>
                                    <p class="text-[#A3D133] font-bold mb-4">${{ number_format($car['price']) }}</p>
                                    <a href="{{ route('product_detail', $car['id']) }}"
                                        class="bg-white text-[#1A1B3F] py-4 text-center font-black uppercase text-[10px] tracking-widest">View
                                        Vehicle</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-12 flex justify-center">
                        {{ $products->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
