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
        agents: {{ json_encode($agents) }},

        get filteredAgents() {
            if (!this.search) return this.agents;
            return this.agents.filter(a =>
                a.name.toLowerCase().includes(this.search.toLowerCase()) ||
                a.state.toLowerCase().includes(this.search.toLowerCase())
            );
        },

        payWithPaystack(agent) {
            let customerEmail = prompt('Please enter your email to proceed with the vote:', 'user@example.com');

            if (!customerEmail || !customerEmail.includes('@')) {
                alert('A valid email is required to vote.');
                return;
            }

            // Ensure Paystack is loaded
            if (typeof PaystackPop === 'undefined') {
                alert('Payment gateway is loading, please try again in a moment.');
                return;
            }

            const handler = PaystackPop.setup({
                key: '{{ env('PAYSTACK_PUBLIC_KEY') }}',
                email: customerEmail,
                amount: agent.amount * 100, // Conversion to Kobo
                currency: 'NGN',
                metadata: {
                    custom_fields: [
                        { display_name: 'Agent Name', variable_name: 'agent_name', value: agent.name },
                        { display_name: 'Agent ID', variable_name: 'agent_id', value: agent.id }
                    ]
                },
                callback: (response) => {
                    // Success logic
                    window.location.href = '{{ route('vote') }}?success=true&ref=' + response.reference;
                },
                onClose: () => {
                    alert('Transaction cancelled.');
                }
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

            @if (request()->has('success'))
                <div class="mb-10 p-6 bg-[#A3D133] text-[#1A1B3F] rounded-3xl font-black uppercase text-center tracking-widest animate-pulse border-2 border-[#1A1B3F]/10">
                    ✅ Vote Cast Successfully! Thank you for supporting your agent.
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="agent in filteredAgents" :key="agent.id">
                    <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 group">

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

                            <p class="text-gray-500 text-sm leading-relaxed mb-8 h-12 overflow-hidden" x-text="agent.desc"></p>

                            <div class="pt-6 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] font-black text-gray-400 uppercase block">Price</span>
                                    <span class="text-2xl font-black text-[#1A1B3F]" x-text="'₦' + Number(agent.amount).toLocaleString()"></span>
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

            <div x-show="filteredAgents.length === 0" x-cloak class="text-center py-20 bg-white rounded-[3rem] border border-dashed border-gray-200 mt-8">
                <h3 class="text-2xl font-black text-[#1A1B3F] uppercase">No Agents Found</h3>
                <p class="text-gray-500 mt-2">Try searching for a different name or location.</p>
            </div>
        </div>
    </section>

    <script src="https://js.paystack.co/v1/inline.js"></script>
@endsection
