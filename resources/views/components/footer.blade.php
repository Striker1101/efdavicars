<footer class="bg-[#0B0D2C] text-white pt-20 pb-10 px-12 relative">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
        <div>
            <h2 class="text-4xl font-bold leading-tight">We Develop & Create<br>a Better Future</h2>
        </div>

        <div>
            <h4 class="text-gray-400 font-bold mb-4">Address</h4>
            <p class="text-lg">{{ config('custom.address_one') }}</p>
            {{-- <p class="text-lg text-gray-300">785 15h Street, Office 478<br>Berlin, De 81566</p> --}}

            <div class="flex space-x-4 mt-6">
                <a href="{{ config('custom.fb') }}" class="border border-gray-700 p-2 rounded-full hover:bg-white hover:text-black"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ config('custom.twi') }}" class="border border-gray-700 p-2 rounded-full hover:bg-white hover:text-black"><i class="fab fa-twitter"></i></a>
                <a href="{{ config('custom.dribbble') }}" class="border border-gray-700 p-2 rounded-full hover:bg-white hover:text-black"><i class="fab fa-dribbble"></i></a>
                <a href="{{ config('custom.ins') }}" class="border border-gray-700 p-2 rounded-full hover:bg-white hover:text-black"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div>
            <h4 class="text-gray-400 font-bold mb-4">Say Hello</h4>
            <a href="mailto:info@email.com" class="text-lg border-b border-gray-500 pb-1">{{ config('custom.email') }}</a>
            <p class="text-2xl font-bold mt-6">{{ config('custom.phone_one') }}</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-gray-800 flex justify-between items-center text-sm text-gray-400">
        <div class="flex space-x-6 font-bold text-white">
            <a href="{{ route('home') }}" class="text-[#A3C639]">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('products') }}">Shop</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
       <p>AxiomThemes © {{ date('Y') }}. All Rights Reserved.</p>
    </div>

    <a href="#" class="absolute right-8 bottom-8 bg-[#A3C639] p-3">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </a>
</footer>
