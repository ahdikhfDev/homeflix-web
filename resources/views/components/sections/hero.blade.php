    <!-- Hero Section -->
    <section id="hero" class="relative pt-32 pb-20 min-h-screen flex items-center justify-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="space-y-8 z-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/30 text-primary text-sm font-semibold">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Nonton Bareng Kini Lebih Seru
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                    Sinema Virtual <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">
                        Tanpa Batas Jarak.
                    </span>
                </h1>
                
                <p class="text-xl text-white/70 max-w-lg leading-relaxed">
                    Import video dari YouTube atau pilih dari ribuan koleksi film kami. Undang teman, chat real-time, dan rasakan sensasi nobar tanpa jarak.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('download') }}" class="flex items-center justify-center gap-3 bg-accent hover:bg-primary text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-accent/25 transition-all transform hover:-translate-y-1">
                        <i data-lucide="smartphone" class="w-6 h-6"></i>
                        <div class="text-left">
                            <div class="text-xs opacity-80 font-normal">Download for</div>
                            <div class="leading-none">Android</div>
                        </div>
                    </a>
                    
                    <button class="flex items-center justify-center gap-3 bg-cardDark border border-white/10 text-white/50 px-8 py-4 rounded-2xl font-bold cursor-not-allowed group relative overflow-hidden">
                        <div class="absolute inset-0 bg-white/5 skew-x-12 translate-x-[-100%] group-hover:translate-x-[200%] transition-transform duration-1000"></div>
                        <i data-lucide="apple" class="w-6 h-6"></i>
                        <div class="text-left">
                            <div class="text-xs opacity-80 font-normal">Coming Soon</div>
                            <div class="leading-none">iOS Store</div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Right Content - 3D Phone Mockup -->
            <div class="relative perspective-1000 h-[600px] flex items-center justify-center">
                <div id="phone-mockup" 
                     class="relative w-[300px] h-[600px] bg-cardDark rounded-[3rem] border-8 border-[#2a2a2a] shadow-2xl transition-transform duration-100 ease-out"
                     style="transform-style: preserve-3d;">
                    
                    <!-- Phone Notch -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-[#2a2a2a] rounded-b-xl z-20"></div>
                    
                    <!-- Screen Content -->
                    <div class="w-full h-full rounded-[2.5rem] overflow-hidden bg-bgDark relative flex flex-col">
                        
                        <!-- Video Player Area -->
                        <div class="h-[45%] bg-gradient-to-b from-gray-900 to-black relative group">
                            <img src="https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?q=80&w=2070&auto=format&fit=crop" 
                                 alt="Movie" 
                                 class="w-full h-full object-cover opacity-60">
                            
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center pl-1 cursor-pointer hover:scale-110 transition-transform">
                                   <i data-lucide="play" class="fill-white w-7 h-7 text-white"></i>
                                </div>
                            </div>
                            
                            <div class="absolute bottom-4 left-4 right-4">
                                <div class="w-full h-1 bg-white/20 rounded-full mb-2">
                                   <div class="w-1/3 h-full bg-accent rounded-full relative">
                                     <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full shadow"></div>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <!-- App Interface Body -->
                        <div class="flex-1 bg-[#121212] p-4 flex flex-col relative overflow-hidden">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="font-bold text-lg">Cyber Future 2077</h3>
                                    <div class="flex items-center gap-1 text-xs text-gray-400">
                                        <i data-lucide="youtube" class="text-red-500 w-3 h-3"></i>
                                        <span>Imported from YouTube</span>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-8 h-8 rounded-full border-2 border-[#121212] bg-gradient-to-br from-primary to-accent flex items-center justify-center text-xs font-bold">1</div>
                                    <div class="w-8 h-8 rounded-full border-2 border-[#121212] bg-gradient-to-br from-primary to-accent flex items-center justify-center text-xs font-bold">2</div>
                                    <div class="w-8 h-8 rounded-full border-2 border-[#121212] bg-gradient-to-br from-primary to-accent flex items-center justify-center text-xs font-bold">3</div>
                                </div>
                            </div>

                            <!-- Live Chat Floating Area -->
                            <div class="flex-1 relative overflow-hidden mask-gradient">
                                <div id="chat-container" class="absolute bottom-0 left-0 w-full space-y-3 pb-2">
                                    <!-- Chat items will be injected by JS -->
                                </div>
                            </div>

                            <!-- Input Field -->
                            <div class="mt-4 pt-3 border-t border-white/10 flex gap-2">
                                <input type="text" placeholder="Ketik pesan..." class="bg-cardDark text-xs w-full rounded-full px-4 py-2 focus:outline-none border border-white/5 focus:border-primary text-white" />
                                <button class="bg-primary p-2 rounded-full text-white">
                                    <i data-lucide="send" class="w-3.5 h-3.5"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -right-12 top-20 bg-cardDark/80 backdrop-blur-md p-3 rounded-2xl border border-white/10 shadow-xl animate-bounce-slow">
                        <i data-lucide="heart" class="text-accent fill-accent w-6 h-6"></i>
                    </div>
                    <div class="absolute -left-8 bottom-32 bg-cardDark/80 backdrop-blur-md p-3 rounded-2xl border border-white/10 shadow-xl animate-bounce-slow" style="animation-delay: 0.7s;">
                        <i data-lucide="message-circle" class="text-primary w-6 h-6"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
