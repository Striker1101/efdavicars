<div x-data="{
    menuOpen: false,
    searchOpen: false,
    cartCount: 0,
    wishlistCount: 0,
    updateCounts() {
        this.cartCount = (JSON.parse(localStorage.getItem('cart')) || []).length;
        this.wishlistCount = (JSON.parse(localStorage.getItem('wishlist')) || []).length;
    }
}" x-init="updateCounts()" @storage-updated.window="updateCounts()" class="relative">

    <nav class="flex items-center justify-between px-8 py-4 border-b border-gray-100 bg-white sticky top-0 z-40">
        <div class="flex items-center space-x-2">
            <a href="{{ route('home') }}">
                <div class="w-10">
                    <img src="{{ asset('logo.jpeg') }}" alt="Logo">
                </div>
            </a>
            <span class="text-2xl font-black text-[#1A1B3F]">{{ config('custom.title') }}</span>
        </div>

        <div class="flex items-center space-x-6">
            <button @click="menuOpen = true"
                class="p-2 bg-blue-50 rounded-full text-[#1A1B3F] hover:bg-blue-100 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <button @click="searchOpen = !searchOpen" class="text-gray-600 hover:text-[#1A1B3F]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>

            <a href="{{ route('wishlist') }}" class="relative text-gray-600 hover:text-red-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <span x-show="wishlistCount > 0" x-text="wishlistCount" x-cloak
                    class="absolute -top-2 -right-2 bg-[#A3D133] text-[#1A1B3F] text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full border-2 border-white">
                </span>
            </a>

            <a href=" {{ route('cart') }}" class="relative text-gray-600 hover:text-[#1A1B3F] transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span x-show="cartCount > 0" x-text="cartCount" x-cloak
                    class="absolute -top-2 -right-2 bg-[#1A1B3F] text-[#A3D133] text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full border-2 border-white">
                </span>
            </a>

            <div class="hidden lg:flex items-center space-x-3">
                <div class="bg-cyan-400 p-2 rounded-full text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                        </path>
                    </svg>
                </div>
                <a class="font-bold text-[#1A1B3F]"
                    href="tel:{{ config('custom.link_phone_one') }}">{{ config('custom.phone_one') }}</a>
            </div>

            <a href="{{ route('contact') }}"
                class="hidden md:block bg-[#1D2191] text-white px-8 py-3 font-bold hover:bg-blue-800 transition">Let's
                Talk</a>
        </div>

        <div x-show="searchOpen" x-transition x-cloak
            class="absolute top-full left-0 w-full bg-white p-4 shadow-lg border-t border-gray-100 z-30">
            <input type="text" placeholder="Search..." class="w-full border-none focus:ring-0 text-lg p-2 font-bold">
        </div>
    </nav>

    <div x-show="menuOpen" x-cloak x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-[-20px]" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-[-20px]"
        class="fixed inset-0 z-50 flex h-screen w-screen overflow-hidden">

        <div class="w-full md:w-[70%] bg-[#0B0D1B] p-10 flex flex-col justify-between relative overflow-y-auto">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('logo.jpeg') }}" alt="Logo" class="w-full">
                </div>
                <span class="text-2xl font-black text-white">{{ config('custom.title') }}</span>
            </div>

            <ul class="space-y-6 mt-10">
                <li class="group"><a href="{{ route('home') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">Home <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
                <li class="group"><a href="{{ route('service') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">Services <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
                <li class="group"><a href="{{ route('about') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">About Us <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
                <li class="group"><a href="{{ route('products') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">Shop <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
                <li class="group"><a href="{{ route('vote') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">Vote <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
                <li class="group"><a href="{{ route('contact') }}"
                        class="text-4xl font-bold text-white flex items-center hover:text-blue-400">Contact <span
                            class="ml-4 opacity-0 group-hover:opacity-100 transition">→</span></a></li>
            </ul>

            <div class="mt-10 border-t border-gray-800 pt-8">
                <div class="flex space-x-4 text-white">
                    <a href="{{ config('custom.fb') }}"><i class="fab fa-facebook"></i></a>
                    <a href="{{ config('custom.twi') }}"><i class="fab fa-twitter text-sm"></i></a>
                    <a href="{{ config('custom.ins') }}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="hidden md:flex w-[30%] bg-[#1D2191] p-10 flex-col justify-between text-white relative">
            <button @click="menuOpen = false"
                class="absolute top-10 right-10 flex items-center space-x-2 hover:scale-105 transition">
                <span class="font-bold text-lg uppercase tracking-widest">Close</span>
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="mt-20 space-y-12">
                <div>
                    <p class="text-gray-300 font-semibold mb-2">Want to Buy Vehicles?</p>
                    <a href="{{ route('products') }}" class="text-2xl font-bold flex items-center group">
                        Go to Shop <span class="ml-2 group-hover:translate-x-2 transition">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
