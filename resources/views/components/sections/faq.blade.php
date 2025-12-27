    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-bgDark">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-12">F.A.Q</h2>
            <div class="space-y-4" id="faq-container">
                @foreach(\App\Models\Faq::where('is_active', true)->orderBy('sort_order')->get() as $faq)
                <div class="border border-white/10 rounded-2xl bg-cardDark/50 overflow-hidden transition-all faq-item">
                    <button class="w-full p-6 flex justify-between items-center text-left hover:bg-white/5 transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <h3 class="font-bold text-lg">{{ $faq->question }}</h3>
                        <i data-lucide="chevron-down" class="transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white/5">
                        <div class="px-6 pb-6 text-white/70 pt-2 border-t border-white/5">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
