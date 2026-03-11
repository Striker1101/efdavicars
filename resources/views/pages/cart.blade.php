@extends('layouts.app')
@section('title', 'My Shopping Cart')

@section('content')
<section class="relative py-32 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1493238792060-6c51c3a67508?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#1A1B3F]/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-transparent"></div>
    </div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter">Your <span class="text-[#A3D133]">Cart</span></h1>
    </div>
</section>

<section class="py-20 bg-gray-50 min-h-[60vh]"
    x-data="{
        cart: [],
        allData: {{ json_encode($allProducts) }},

        /* 1. Logic to get full items with quantity */
        get items() {
            let filtered = [];
            this.allData.forEach(product => {
                let found = this.cart.find(c => c.id == product.id);
                if(found) {
                    filtered.push({
                        ...product,
                        quantity: found.quantity
                    });
                }
            });
            return filtered;
        },

        init() {
            this.cart = JSON.parse(localStorage.getItem('cart')) || [];
        },

        updateQty(id, delta) {
            let item = this.cart.find(i => i.id == id);
            if (item) {
                item.quantity = Math.max(1, item.quantity + delta);
                this.save();
            }
        },

        removeItem(id) {
            this.cart = this.cart.filter(i => i.id != id);
            this.save();
        },

        save() {
            localStorage.setItem('cart', JSON.stringify(this.cart));
            window.dispatchEvent(new CustomEvent('storage-updated'));
        },

        calculateSubtotal() {
            let total = 0;
            this.items.forEach(item => {
                total += (item.price * item.quantity);
            });
            return total;
        }
    }">

    <div class="max-w-7xl mx-auto px-6">
        <template x-if="items.length > 0">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <div class="lg:col-span-8 space-y-6">
                    <template x-for="item in items" :key="item.id">
                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col md:flex-row items-center gap-6 group">
                            <img :src="item.image" class="w-full md:w-40 h-28 object-cover rounded-2xl">

                            <div class="flex-1">
                                <h4 class="text-lg font-black text-[#1A1B3F] uppercase" x-text="item.name"></h4>
                                <p class="text-[#A3D133] text-[10px] font-black uppercase tracking-widest" x-text="item.model"></p>
                            </div>

                            <div class="flex items-center bg-gray-50 rounded-full px-4 py-2 border border-gray-100">
                                <button @click="updateQty(item.id, -1)" class="w-8 h-8 font-black text-[#1A1B3F]">-</button>
                                <span class="w-10 text-center font-black text-sm" x-text="item.quantity"></span>
                                <button @click="updateQty(item.id, 1)" class="w-8 h-8 font-black text-[#1A1B3F]">+</button>
                            </div>

                            <div class="text-right min-w-[120px]">
                                <p class="text-[10px] font-black text-gray-400 uppercase">Subtotal</p>
                                <p class="text-lg font-black text-[#1A1B3F]" x-text="'$' + Number(item.price * item.quantity).toLocaleString()"></p>
                            </div>

                            <button @click="removeItem(item.id)" class="p-2 text-gray-300 hover:text-red-500 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                    </template>
                </div>

                <div class="lg:col-span-4">
                    <div class="bg-[#1A1B3F] rounded-3xl p-8 text-white shadow-2xl sticky top-24">
                        <h3 class="text-xl font-black uppercase tracking-widest mb-8 border-b border-white/10 pb-4">Order Summary</h3>

                        <div class="flex justify-between items-end mb-10">
                            <span class="uppercase font-black text-sm tracking-widest text-gray-400">Total Amount</span>
                            <span class="text-3xl font-black text-[#A3D133]" x-text="'$' + Number(calculateSubtotal()).toLocaleString()"></span>
                        </div>

                        <button @click="window.location.href = '{{ route('contact') }}?is_cart=true'"
                                class="w-full bg-[#A3D133] text-[#1A1B3F] py-5 rounded-full font-black uppercase tracking-widest text-xs hover:bg-white transition-all">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>

            </div>
        </template>

        <template x-if="items.length === 0">
            <div class="text-center py-20 bg-white rounded-[3rem] border border-dashed border-gray-200">
                <h3 class="text-2xl font-black text-[#1A1B3F] uppercase">Your cart is empty</h3>
                <a href="{{ route('products') }}" class="mt-6 inline-block bg-[#1A1B3F] text-white px-10 py-4 rounded-full font-black uppercase text-xs">Browse Inventory</a>
            </div>
        </template>
    </div>
</section>
@endsection
