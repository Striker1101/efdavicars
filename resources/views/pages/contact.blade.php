@extends('layouts.app')

@section('title', 'Contact US')


@section('content')
    <section class="relative h-[350px] md:h-[450px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ config('custom.contact_hero_bg') }}" class="w-full h-full object-cover" alt="Contact Greney Car">
            <div class="absolute inset-0 bg-[#1A1B3F]/80"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full text-center">
            <div class="space-y-6">
                <nav class="flex items-center justify-center gap-3 mb-4">
                    <a href="/"
                        class="text-gray-400 hover:text-[#A3D133] font-bold uppercase text-[10px] tracking-[0.3em] transition-colors">
                        Home
                    </a>
                    <span class="text-gray-600">/</span>
                    <span class="text-[#A3D133] font-bold uppercase text-[10px] tracking-[0.3em]">
                        Contact Us
                    </span>
                </nav>

                <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none">
                    Get In <span class="text-[#A3D133]">Touch</span>
                </h1>

                <div class="flex justify-center">
                    <div class="w-20 h-1.5 bg-[#A3D133] rounded-full"></div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] transform rotate-180">
            <svg class="relative block w-full h-[50px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="#F9FAFB"></path>
            </svg>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-32 relative z-20">

                <div class="bg-white p-10 shadow-xl rounded-2xl group hover:bg-[#1A1B3F] transition-all duration-500">
                    <div
                        class="w-16 h-16 bg-[#F4F7FF] rounded-full flex items-center justify-center mb-6 group-hover:bg-[#A3D133] transition-colors">
                        <i class="fas fa-phone-alt text-2xl text-[#1A1B3F]"></i>
                    </div>
                    <h3 class="text-xl font-black text-[#1A1B3F] group-hover:text-white mb-2 uppercase">Call Us Anytime</h3>
                    <p class="text-gray-500 group-hover:text-gray-300 font-bold">{{ config('custom.phone_one') }}</p>
                </div>

                <div
                    class="bg-white p-10 shadow-xl rounded-2xl group hover:bg-[#1A1B3F] transition-all duration-500 border-b-4 border-[#A3D133]">
                    <div
                        class="w-16 h-16 bg-[#F4F7FF] rounded-full flex items-center justify-center mb-6 group-hover:bg-[#A3D133] transition-colors">
                        <i class="fas fa-envelope-open-text text-2xl text-[#1A1B3F]"></i>
                    </div>
                    <h3 class="text-xl font-black text-[#1A1B3F] group-hover:text-white mb-2 uppercase">Write Email</h3>
                    <p class="text-gray-500 group-hover:text-gray-300 font-bold">{{ config('custom.email') }}</p>
                </div>

                <div class="bg-white p-10 shadow-xl rounded-2xl group hover:bg-[#1A1B3F] transition-all duration-500">
                    <div
                        class="w-16 h-16 bg-[#F4F7FF] rounded-full flex items-center justify-center mb-6 group-hover:bg-[#A3D133] transition-colors">
                        <i class="fas fa-map-marked-alt text-2xl text-[#1A1B3F]"></i>
                    </div>
                    <h3 class="text-xl font-black text-[#1A1B3F] group-hover:text-white mb-2 uppercase">Visit Office</h3>
                    <p class="text-gray-500 group-hover:text-gray-300 font-bold">{{ config('custom.address_one') }}</p>
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

                    <div x-data="{
                        isCart: new URLSearchParams(window.location.search).has('is_cart'),
                        cart: JSON.parse(localStorage.getItem('cart')) || [],
                        allProducts: {{ json_encode(config('cars.products')) }},
                        messageBody: '',

                        init() {
                            if (this.isCart && this.cart.length > 0) {
                                let cartText = 'I am interested in the following vehicles:\n\n';
                                let grandTotal = 0;

                                this.cart.forEach(cartItem => {
                                    const product = this.allProducts.find(p => p.id == cartItem.id);
                                    if (product) {
                                        const price = product.discount_price || product.price;
                                        const itemTotal = price * cartItem.quantity;
                                        grandTotal += itemTotal;

                                        cartText += `• ${product.name} (${product.model})\n`;
                                        cartText += `  Quantity: ${cartItem.quantity}\n`;
                                        cartText += `  Subtotal: $${itemTotal.toLocaleString()}\n\n`;
                                    }
                                });

                                cartText += `--------------------------\n`;
                                cartText += `GRAND TOTAL: $${grandTotal.toLocaleString()}\n`;
                                cartText += `--------------------------\n`;
                                cartText += `Please get back to me with the next steps.`;

                                this.messageBody = cartText;
                            }
                        }
                    }">

                        @if (session('success'))
                            <div class="mb-6 p-4 bg-green-500 text-white font-bold rounded-lg">{{ session('success') }}
                            </div>

                            <script>
                                // If the session has a success message, we clear the cart
                                // This only runs once when the success message is displayed
                                if (new URLSearchParams(window.location.search).has('is_cart') === false) {
                                    localStorage.removeItem('cart');
                                    // Update any navbar counters
                                    window.dispatchEvent(new CustomEvent('storage-updated'));
                                }
                            </script>
                        @endif
                        @if (session('error'))
                            <div class="mb-6 p-4 bg-red-500 text-white font-bold rounded-lg">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <template x-if="isCart">
                                <input type="hidden" name="from_cart" value="true">
                            </template>

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
                                    <option value="General Inquiry" :selected="!isCart">Inquiry About a Specific Car
                                    </option>
                                    <option value="Purchase Inquiry" :selected="isCart">Order/Purchase Inquiry</option>
                                    <option value="Test Drive">Test Drive Request</option>
                                    <option value="Financing">Financing Questions</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase text-[#1A1B3F] tracking-widest">Message</label>
                                <textarea name="message" rows="12" x-model="messageBody" placeholder="How can we help you today?" required
                                    class="w-full bg-gray-50 border-none px-6 py-4 focus:ring-2 focus:ring-[#A3D133] outline-none transition-all resize-none font-mono text-sm"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-[#1A1B3F] text-white font-black py-5 px-10 uppercase tracking-[0.2em] text-sm hover:bg-[#A3D133] transition-all duration-500 shadow-xl group">
                                <span x-text="isCart ? 'Submit Order Inquiry' : 'Send Message'"></span>
                                <span class="inline-block ml-2 group-hover:translate-x-2 transition-transform">→</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
