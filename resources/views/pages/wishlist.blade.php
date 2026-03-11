@extends('layouts.app')
@section('title', 'My Wishlist')

@section('content')
    <section class="relative py-32 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920"
                alt="Wishlist Background" class="w-full h-full object-cover transform scale-105">

            <div class="absolute inset-0 bg-[#1A1B3F]/85 mix-blend-multiply"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <div class="space-y-4">
                <h4 class="text-[#A3D133] font-black uppercase tracking-[0.5em] text-[10px]">
                    Personal Collection
                </h4>

                <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none">
                    My <span class="text-[#A3D133]">Wishlist</span>
                </h1>

                <div class="flex items-center justify-center gap-4">
                    <div class="h-[1px] w-12 bg-gray-500"></div>
                    <p class="text-gray-300 text-[10px] md:text-xs uppercase tracking-[0.3em] font-bold">
                        Your Saved Dream Vehicles
                    </p>
                    <div class="h-[1px] w-12 bg-gray-500"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 min-h-[60vh]" x-data="{
        wishlist: [],
        allData: {{ json_encode($allProducts) }},
        get items() {
            // Matches local storage IDs with actual product data
            return this.allData.filter(p => this.wishlist.some(w => w.id == p.id));
        },
        init() {
            this.wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        },
        removeItem(id) {
            this.wishlist = this.wishlist.filter(i => i.id != id);
            localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
            window.dispatchEvent(new CustomEvent('storage-updated'));
        },
        clearAll() {
            if (confirm('Are you sure you want to clear your wishlist?')) {
                this.wishlist = [];
                localStorage.removeItem('wishlist');
                window.dispatchEvent(new CustomEvent('storage-updated'));
            }
        }
    }">

        <div class="max-w-7xl mx-auto px-6">
            <template x-if="items.length > 0">
                <div>
                    <div class="flex justify-between items-center mb-10">
                        <h3 class="font-black text-[#1A1B3F] uppercase tracking-widest text-sm"
                            x-text="`${items.length} Vehicles Saved` text-sm"></h3>
                        <button @click="clearAll()"
                            class="text-red-500 font-black uppercase text-[10px] tracking-widest hover:underline">Clear
                            All</button>
                    </div>

                    <div class="grid grid-cols-1 gap-6">
                        <template x-for="car in items" :key="car.id">
                            <div
                                class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 flex flex-col md:flex-row items-center gap-8 group hover:shadow-md transition-all">
                                <div class="w-full md:w-48 h-32 rounded-2xl overflow-hidden">
                                    <img :src="car.image" class="w-full h-full object-cover">
                                </div>

                                <div class="flex-1 text-center md:text-left">
                                    <h4 class="text-xl font-black text-[#1A1B3F] uppercase" x-text="car.name"></h4>
                                    <p class="text-[#A3D133] text-xs font-bold uppercase tracking-widest"
                                        x-text="car.model"></p>
                                </div>

                                <div class="text-center md:text-left">
                                    <p class="text-[10px] font-black text-gray-400 uppercase">Price</p>
                                    <p class="text-lg font-black text-[#1A1B3F]"
                                        x-text="'$' + Number(car.price).toLocaleString()"></p>
                                </div>

                                <div class="flex items-center gap-4 w-full md:w-auto">
                                    <a :href="'/product/' + car.id"
                                        class="flex-1 md:flex-none bg-[#1A1B3F] text-white px-8 py-4 rounded-full font-black uppercase text-[10px] tracking-widest text-center hover:bg-[#A3D133] hover:text-[#1A1B3F] transition-all">
                                        View Details
                                    </a>
                                    <button @click="removeItem(car.id)"
                                        class="p-4 text-gray-300 hover:text-red-500 transition-colors">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>

            <template x-if="items.length === 0">
                <div class="text-center py-20">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-[#1A1B3F] uppercase">Your wishlist is empty</h3>
                    <p class="text-gray-500 mt-2 mb-8">Start saving your favorite vehicles today.</p>
                    <a href="{{ route('products') }}"
                        class="inline-block bg-[#1A1B3F] text-white px-10 py-4 rounded-full font-black uppercase text-xs tracking-[0.2em] hover:bg-[#A3D133] hover:text-[#1A1B3F] transition-all">
                        Browse Inventory
                    </a>
                </div>
            </template>
        </div>
    </section>
@endsection
