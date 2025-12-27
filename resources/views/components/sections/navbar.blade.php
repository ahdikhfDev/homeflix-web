    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-effect border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2 cursor-pointer" onclick="window.scrollTo(0,0)">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center shadow-lg shadow-primary/30">
                   <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <span class="text-2xl font-bold tracking-tight">Home<span class="text-primary">Flix</span></span>
            </div>
            
            <div class="hidden md:flex items-center gap-8 text-white/70">
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#features" class="hover:text-white transition-colors">Fitur</a>
                <a href="#gallery" class="hover:text-white transition-colors">Galeri</a>
                <a href="#feedback" class="hover:text-white transition-colors">Feedback</a>
                <a href="#faq" class="hover:text-white transition-colors">FAQ</a>
            </div>

            <a href="{{ route('download') }}" class="bg-cardDark hover:bg-[#2A2A2A] text-white font-bold  px-6 py-2.5 rounded-full border border-white/10 transition-all text-sm">
                Let's Watch
            </a>
        </div>
    </nav>
