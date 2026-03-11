@extends('layouts.app')
@section('title', $product['name'])

@section('content')
<section class="relative py-32 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ $product['image'] }}" class="w-full h-full object-cover transform scale-105 blur-[2px]">
        <div class="absolute inset-0 bg-[#1A1B3F]/85 mix-blend-multiply"></div>
    </div>
    <div class="relative z-10 text-center px-6">
        <nav class="flex justify-center gap-3 mb-6 text-[10px] font-black uppercase tracking-[0.3em]">
            <a href="/" class="text-gray-400 hover:text-[#A3D133]">Home</a>
            <span class="text-gray-600">/</span>
            <a href="{{ route('products') }}" class="text-gray-400 hover:text-[#A3D133]">Inventory</a>
            <span class="text-gray-600">/</span>
            <span class="text-[#A3D133]">{{ $product['name'] }}</span>
        </nav>
        <h1 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter">{{ $product['name'] }}</h1>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <div class="space-y-6">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-gray-100 group cursor-crosshair h-[550px]">
                    <img src="{{ $product['image'] }}"
                         id="mainImage"
                         class="w-full h-full object-cover transition-transform duration-200 ease-out origin-center group-hover:scale-[2.5]"
                         onmousemove="zoom(event)">
                </div>

                <div class="grid grid-cols-5 gap-4">
                    <div class="rounded-xl overflow-hidden cursor-pointer ring-2 ring-[#A3D133]">
                        <img src="{{ $product['image'] }}" onclick="switchImage(this)" class="w-full h-20 object-cover opacity-100 hover:opacity-80 transition-opacity">
                    </div>
                    @foreach($product['featured_images'] as $img)
                        <div class="rounded-xl overflow-hidden cursor-pointer hover:ring-2 hover:ring-[#A3D133] transition-all">
                            <img src="{{ $img }}" onclick="switchImage(this)" class="w-full h-20 object-cover opacity-70 hover:opacity-100">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col">
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-4">
                        @for($i=0; $i < $product['star']; $i++)
                            <i class="fas fa-star text-[#A3D133] text-xs"></i>
                        @endfor
                    </div>
                    <h2 class="text-4xl font-black text-[#1A1B3F] uppercase mb-2">{{ $product['name'] }}</h2>
                    <p class="text-[#A3D133] font-black uppercase tracking-widest text-sm mb-6">{{ $product['model'] }}</p>

                    <div class="prose prose-sm text-gray-500 max-w-none">
                        <p class="mb-4 font-bold text-[#1A1B3F]">{{ $product['content1'] }}</p>
                        <p>{{ $product['content2'] }}</p>
                    </div>
                </div>

                <div class="mb-10">
                    <h4 class="text-xs font-black uppercase tracking-widest text-[#1A1B3F] mb-4">Core Features</h4>
                    <div class="grid grid-cols-2 gap-y-3">
                        @foreach($product['features_detail'] as $feature)
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-[#A3D133] text-[10px]"></i>
                                <span class="text-[11px] font-bold text-gray-600 uppercase">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-3xl mt-auto shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Total Price</p>
                            <span class="text-3xl font-black text-[#1A1B3F]">${{ number_format($product['discount_price'] ?? $product['price']) }}</span>
                        </div>
                        <div class="flex items-center bg-white rounded-full px-4 py-2 border border-gray-200">
                            <button onclick="updateQty(-1)" class="w-8 h-8 font-black text-[#1A1B3F]">-</button>
                            <input type="number" id="quantity" value="1" min="1" class="w-10 text-center border-none focus:ring-0 font-black text-sm" readonly>
                            <button onclick="updateQty(1)" class="w-8 h-8 font-black text-[#1A1B3F]">+</button>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button onclick="addToStorage('cart')" class="flex-1 bg-[#1A1B3F] text-white py-5 rounded-full font-black uppercase tracking-widest text-xs hover:bg-[#A3D133] transition-all shadow-lg active:scale-95">
                            Buy Now
                        </button>
                        <button onclick="addToStorage('wishlist')" class="w-16 h-16 flex items-center justify-center rounded-full border-2 border-gray-200 hover:border-[#A3D133] hover:text-[#A3D133] transition-all group">
                            <i class="far fa-heart font-bold group-active:scale-125 transition-transform"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="toast" class="fixed bottom-10 right-10 z-[100] transform translate-y-20 opacity-0 transition-all duration-500 pointer-events-none">
    <div class="bg-[#1A1B3F] border-l-4 border-[#A3D133] text-white px-8 py-5 rounded-xl shadow-2xl flex items-center gap-4">
        <div class="bg-[#A3D133] text-[#1A1B3F] w-8 h-8 rounded-full flex items-center justify-center">
            <i class="fas fa-check text-sm"></i>
        </div>
        <div>
            <p class="text-[10px] font-black uppercase tracking-widest text-[#A3D133]">Success</p>
            <p id="toastMsg" class="text-xs font-bold uppercase"></p>
        </div>
    </div>
</div>

<script>
    // 1. Zoom Logic
    function zoom(e) {
        const img = e.currentTarget.querySelector('img');
        const x = e.offsetX / e.currentTarget.offsetWidth;
        const y = e.offsetY / e.currentTarget.offsetHeight;
        img.style.transformOrigin = `${x * 100}% ${y * 100}%`;
    }

    // 2. Switch Main Image
    function switchImage(el) {
        const main = document.getElementById('mainImage');
        main.src = el.src;
        // Update Ring styling
        document.querySelectorAll('.grid-cols-5 div').forEach(div => div.classList.remove('ring-2', 'ring-[#A3D133]'));
        el.parentElement.classList.add('ring-2', 'ring-[#A3D133]');
    }

    // 3. Storage & Toast Logic
    function showToast(msg) {
        const toast = document.getElementById('toast');
        document.getElementById('toastMsg').innerText = msg;
        toast.classList.remove('translate-y-20', 'opacity-0');
        setTimeout(() => toast.classList.add('translate-y-20', 'opacity-0'), 3000);
    }

    function addToStorage(key) {
        const id = {{ $product['id'] }};
        const quantity = parseInt(document.getElementById('quantity').value);
        let storageData = JSON.parse(localStorage.getItem(key)) || [];
        const index = storageData.findIndex(item => item.id === id);

        if (index > -1) {
            storageData[index].quantity += quantity;
        } else {
            storageData.push({ id, quantity });
        }

        localStorage.setItem(key, JSON.stringify(storageData));
        showToast(`${key === 'cart' ? 'Added to Cart' : 'Saved to Wishlist'}`);
    }

    function updateQty(val) {
        const input = document.getElementById('quantity');
        let current = parseInt(input.value);
        if (current + val >= 1) input.value = current + val;
    }
</script>
@endsection
