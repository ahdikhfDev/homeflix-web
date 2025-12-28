    <!-- Feedback Section -->
    <section id="feedback" class="py-24 bg-[#050505] border-t border-white/5 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full filter blur-[150px] opacity-10 pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-6 relative z-10">
            <div class="glass-effect rounded-3xl p-8 md:p-12 border border-white/10 flex flex-col md:flex-row gap-12 items-center">
                
                <div class="flex-1 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 text-accent text-xs font-bold uppercase tracking-wider">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Feedback
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold">Bantu Kami <br /><span class="text-primary">Berkembang</span></h2>
                    <p class="text-white/70 text-lg">
                        Punya ide fitur gila? Atau nemu bug yang ngeselin? Kasih tau kami langsung! Masukanmu sangat berharga buat bikin HomeFlix makin keren kedepannya.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="bg-bgDark p-4 rounded-xl border border-white/5">
                            <i data-lucide="sparkles" class="text-accent mb-2 w-6 h-6"></i>
                            <h4 class="font-bold">Request Fitur</h4>
                            <p class="text-xs text-gray-400 mt-1">Pengen fitur apa?</p>
                        </div>
                        <div class="bg-bgDark p-4 rounded-xl border border-white/5">
                            <i data-lucide="bug" class="text-primary mb-2 w-6 h-6"></i>
                            <h4 class="font-bold">Lapor Bug</h4>
                            <p class="text-xs text-gray-400 mt-1">Ada yang error?</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('feedback.store') }}" method="POST" class="flex-1 w-full space-y-4 bg-bgDark p-6 rounded-2xl border border-white/5 shadow-2xl">
                    @csrf
                    
                    @if(session('success'))
                        <div class="bg-primary/20 border border-primary/50 text-white p-3 rounded-lg text-sm mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-400 uppercase">Nama</label>
                            <input type="text" name="name" required placeholder="Dilan" class="w-full bg-cardDark border border-white/10 rounded-lg p-3 focus:border-primary outline-none text-sm text-white focus:ring-1 focus:ring-primary transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-400 uppercase">Tipe</label>
                            <select name="type" aria-label="Tipe Masukan" class="w-full bg-cardDark border border-white/10 rounded-lg p-3 focus:border-primary outline-none text-sm appearance-none text-white focus:ring-1 focus:ring-primary transition-all">
                                <option>Saran Fitur</option>
                                <option>Laporan Bug</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase">Pesan</label>
                        <textarea name="message" required rows="4" placeholder="Ceritain detailnya disini..." class="w-full bg-cardDark border border-white/10 rounded-lg p-3 focus:border-primary outline-none text-sm resize-none text-white focus:ring-1 focus:ring-primary transition-all"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-primary to-darkPurple hover:from-darkPurple hover:to-[#4032a8] text-white py-3 rounded-lg font-bold shadow-lg shadow-primary/25 transition-all">
                        Kirim Masukan
                    </button>
                </form>

            </div>
        </div>
    </section>
