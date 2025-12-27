    <!-- Features Section -->
    <section id="features" class="py-24 bg-bgDark relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Fitur <span class="text-primary">Unggulan</span></h2>
                <p class="text-white/70 max-w-2xl mx-auto">Pengalaman menonton yang lengkap dalam satu aplikasi.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $features = \App\Models\Feature::where('is_active', true)->orderBy('sort_order')->get();
                @endphp

                @foreach($features as $feature)
                <div class="group relative p-8 rounded-3xl glass-effect hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/0 to-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-bgDark rounded-2xl flex items-center justify-center mb-6 shadow-inner border border-white/5 group-hover:scale-110 transition-transform">
                            <i data-lucide="{{ $feature->icon ?? 'star' }}" class="text-primary w-8 h-8"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $feature->title }}</h3>
                        <p class="text-white/70 leading-relaxed">{{ $feature->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
