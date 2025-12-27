    <!-- Gallery Section (Phone Mockup Style) -->
    <section id="gallery" class="py-24 bg-[#050505] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 mb-16 text-center">
            <h2 class="text-3xl md:text-5xl font-bold">Intip <span class="text-primary">Dalamnya</span></h2>
            <p class="text-white/70 mt-4 max-w-2xl mx-auto">
                Tampilan antarmuka yang clean, modern, dan user-friendly. Geser untuk melihat lebih banyak.
            </p>
        </div>
        
        <!-- Carousel Strip with Phone Mockups -->
        <!-- Added 'no-scrollbar' class to hide scrollbar but allow scrolling -->
        <div class="flex gap-8 overflow-x-auto pb-12 px-6 no-scrollbar snap-x items-center justify-start md:justify-center touch-pan-x">
            
            @foreach(\App\Models\Gallery::where('is_active', true)->orderBy('sort_order')->get() as $item)
            <div class="snap-center shrink-0">
                <div class="relative w-[280px] h-[580px] bg-[#121212] rounded-[3rem] border-[8px] border-[#2a2a2a] shadow-2xl overflow-hidden flex flex-col group transition-transform duration-300 hover:-translate-y-4">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-28 h-6 bg-[#2a2a2a] rounded-b-xl z-20"></div>
                    <div class="w-full h-full relative">
                        <img src="{{ Str::startsWith($item->image_path, ['http://', 'https://']) ? $item->image_path : \Illuminate\Support\Facades\Storage::url($item->image_path) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                            <div>
                                <h4 class="font-bold text-lg mb-1">{{ $item->title }}</h4>
                                <p class="text-xs text-gray-300">{{ $item->caption }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
