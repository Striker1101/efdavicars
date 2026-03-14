@extends('layouts.app')
@section('title', 'Vote for your Agent')

@section('content')
    <section class="relative py-32 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&q=80&w=1920"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#1A1B3F]/85 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-6">
            <h4 class="text-[#A3D133] font-black uppercase tracking-[0.5em] text-[10px] mb-4">Support Your Team</h4>
            <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none">
                Vote for <span class="text-[#A3D133]">Agents</span>
            </h1>
        </div>
    </section>

    <section class="py-20 bg-gray-50" x-data="{
        search: '',
        agents: {{ json_encode(array_values($agents)) }}.map(a => ({ ...a, qty: 1 })),

        get filteredAgents() {
            if (!this.search) return this.agents;
            return this.agents.filter(a =>
                (a.name && a.name.toLowerCase().includes(this.search.toLowerCase())) ||
                (a.state && a.state.toLowerCase().includes(this.search.toLowerCase()))
            );
        },

        payWithPaystack(agent) {
            let customerEmail = prompt('Please enter your email to proceed with the vote:', 'user@example.com');
            if (!customerEmail || !customerEmail.includes('@')) {
                alert('A valid email is required to vote.');
                return;
            }

            if (typeof PaystackPop === 'undefined') {
                alert('Payment gateway is loading...');
                return;
            }

            const totalAmount = agent.amount * agent.qty;

            const handler = PaystackPop.setup({
                key: '{{ env('PAYSTACK_PUBLIC_KEY') }}',
                email: customerEmail,
                amount: totalAmount * 100,
                currency: 'NGN',
                metadata: {
                    custom_fields: [
                        { display_name: 'Agent Name', variable_name: 'agent_name', value: agent.name },
                        { display_name: 'Quantity', variable_name: 'quantity', value: agent.qty }
                    ]
                },
                callback: (response) => {
                    window.location.href = '{{ route('vote') }}?success=true&ref=' + response.reference;
                },
                onClose: () => { alert('Transaction cancelled.'); }
            });
            handler.openIframe();
        }
    }">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-16 -mt-32 relative z-30">
                <div class="max-w-2xl mx-auto bg-white p-4 rounded-full shadow-2xl flex items-center px-8 border border-gray-100">
                    <i class="fas fa-search text-gray-400 mr-4"></i>
                    <input type="text" x-model="search" placeholder="Search agent name or state..."
                        class="w-full border-none outline-none focus:ring-0 text-gray-700 font-bold bg-transparent">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="agent in filteredAgents" :key="agent.id">
                    <div x-show="agent && agent.name"
                         class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 group">

                        <div class="relative h-64 overflow-hidden">
                            <img :src="agent.profile_pic" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute top-6 right-6 bg-[#A3D133] text-[#1A1B3F] px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest"
                                x-text="agent.state"></div>
                        </div>

                        <div class="p-8">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-2xl font-black text-[#1A1B3F] uppercase tracking-tighter" x-text="agent.name"></h3>
                                    <p class="text-[#A3D133] font-bold text-xs uppercase flex items-center mt-1">
                                        <i class="fas fa-map-marker-alt mr-2"></i> <span x-text="agent.location"></span>
                                    </p>
                                </div>
                                <div class="text-right">
                                    <span class="block text-[10px] font-black text-gray-400 uppercase">Votes</span>
                                    <span class="text-xl font-black text-[#1A1B3F]" x-text="Number(agent.votes).toLocaleString()"></span>
                                </div>
                            </div>

                            <p class="text-gray-500 text-sm leading-relaxed mb-6 h-12 overflow-hidden" x-text="agent.desc"></p>

                            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-2xl mb-6 border border-gray-100">
                                <span class="text-[10px] font-black text-[#1A1B3F] uppercase">Number of Votes</span>
                                <div class="flex items-center space-x-4">
                                    <button @click="if(agent.qty > 1) agent.qty--" class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-red-50 text-[#1A1B3F] transition-colors">-</button>
                                    <span class="font-black text-lg text-[#1A1B3F] w-6 text-center" x-text="agent.qty"></span>
                                    <button @click="agent.qty++" class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-green-50 text-[#1A1B3F] transition-colors">+</button>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] font-black text-gray-400 uppercase block">Total</span>
                                    <span class="text-2xl font-black text-[#1A1B3F]" x-text="'₦' + Number(agent.amount * agent.qty).toLocaleString()"></span>
                                </div>
                                <button @click="payWithPaystack(agent)"
                                    class="bg-[#1A1B3F] text-white px-8 py-4 rounded-2xl font-black uppercase text-xs tracking-widest hover:bg-[#A3D133] hover:text-[#1A1B3F] transition-all shadow-lg shadow-[#1A1B3F]/20 active:scale-95">
                                    Vote Now
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <script src="https://js.paystack.co/v1/inline.js"></script>
@endsection
