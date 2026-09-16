<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPPM Universitas Subang</title>

    <!-- Meta SEO -->
    <meta name="description" content="Lembaga Penelitian dan Pengabdian Kepada Masyarakat (LPPM) Universitas Subang.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-slate-50 selection:bg-blue-500 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img class="h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo Universitas Subang">
                    <div class="flex flex-col">
                        <span class="font-bold text-xl text-blue-900 leading-tight">LPPM</span>
                        <span class="text-xs font-semibold text-slate-500 tracking-wider">Universitas Subang</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="#tentang" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Tentang Kami</a>
                    <a href="#penelitian" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Penelitian</a>
                    <a href="#pengabdian" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Pengabdian</a>
                    <a href="#kontak" class="px-5 py-2.5 rounded-full bg-blue-600 text-white font-medium hover:bg-blue-700 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Kontak</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#beranda" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
                <a href="#tentang" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Tentang Kami</a>
                <a href="#penelitian" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Penelitian</a>
                <a href="#pengabdian" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Pengabdian</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-100 via-white to-white"></div>
        <div class="absolute top-0 right-0 -translate-y-12 translate-x-1/3">
            <div class="w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
        </div>
        <div class="absolute bottom-0 left-0 translate-y-1/3 -translate-x-1/3">
            <div class="w-[30rem] h-[30rem] bg-indigo-300/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-medium text-sm mb-6 border border-blue-100 shadow-sm">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    Portal Resmi LPPM Universitas Subang
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                    Membangun Masa Depan Melalui <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Penelitian & Pengabdian</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-600 mb-10 leading-relaxed">
                    Lembaga Penelitian dan Pengabdian Kepada Masyarakat (LPPM) Universitas Subang berkomitmen untuk mendorong inovasi, riset berkualitas, dan pemberdayaan masyarakat yang berdampak nyata.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#penelitian" class="px-8 py-3.5 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition-all shadow-lg hover:shadow-blue-500/30 transform hover:-translate-y-1">
                        Jelajahi Penelitian
                    </a>
                    <a href="#tentang" class="px-8 py-3.5 rounded-full bg-white text-slate-700 border border-slate-200 font-semibold hover:bg-slate-50 hover:border-slate-300 transition-all shadow-sm">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            
            <!-- Dashboard Preview / Mockup -->
            <div class="mt-20 relative mx-auto max-w-5xl">
                <div class="rounded-2xl bg-white/50 backdrop-blur-xl border border-white/60 shadow-2xl p-4 lg:p-6 transform -rotate-1 hover:rotate-0 transition-transform duration-500">
                    <div class="rounded-xl overflow-hidden border border-slate-100 bg-slate-50 aspect-video flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-50"></div>
                        <div class="relative z-10 text-center space-y-4">
                            <div class="w-20 h-20 mx-auto bg-white rounded-2xl shadow-sm flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800">Inovasi Berkelanjutan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-indigo-400 opacity-90"></div>
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kampus" class="object-cover w-full h-full mix-blend-overlay">
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-2xl shadow-xl max-w-xs border border-slate-100 hidden md:block animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Terakreditasi</h4>
                                <p class="text-sm text-slate-500">Lembaga Riset Unggulan</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-3">Tentang Kami</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">Sinergi Mewujudkan Tridharma Perguruan Tinggi</h3>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        LPPM Universitas Subang merupakan wadah utama bagi sivitas akademika dalam melaksanakan kegiatan penelitian dan pengabdian kepada masyarakat. Kami memfasilitasi pengembangan ilmu pengetahuan, teknologi, dan seni yang bermanfaat bagi masyarakat luas.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-slate-700">Meningkatkan kuantitas dan kualitas penelitian dan publikasi ilmiah.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-slate-700">Mendorong hilirisasi hasil riset untuk kesejahteraan masyarakat.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-slate-700">Menjalin kemitraan strategis dengan pemerintah dan industri.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Fokus Area Section -->
    <section class="py-24 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-3">Pilar Utama</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Program Kerja LPPM</h3>
                <p class="text-slate-600 text-lg">Fokus utama kami dalam mengembangkan potensi sumber daya manusia dan memberikan kontribusi nyata bagi masyarakat.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Penelitian Card -->
                <div id="penelitian" class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-blue-900/5 border border-slate-100 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full -z-10 transition-transform group-hover:scale-150 duration-500"></div>
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 text-blue-600">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">Penelitian</h4>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Mendukung sivitas akademika dalam menghasilkan riset inovatif yang terpublikasi di jurnal nasional dan internasional bereputasi.
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700">
                        Lihat Panduan
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Pengabdian Card -->
                <div id="pengabdian" class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-indigo-900/5 border border-slate-100 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-full -z-10 transition-transform group-hover:scale-150 duration-500"></div>
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 text-indigo-600">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">Pengabdian Masyarakat</h4>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Menerapkan hasil riset dan teknologi untuk menyelesaikan permasalahan di masyarakat, meningkatkan kemandirian dan kesejahteraan.
                    </p>
                    <a href="#" class="inline-flex items-center text-indigo-600 font-semibold group-hover:text-indigo-700">
                        Lihat Program
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-slate-900 pt-20 pb-10 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-1 rounded-lg inline-block">
                            <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo Universitas Subang">
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-xl text-white leading-tight">LPPM</span>
                            <span class="text-xs font-semibold text-slate-400 tracking-wider">Universitas Subang</span>
                        </div>
                    </div>
                    <p class="text-slate-400 max-w-sm">
                        Lembaga Penelitian dan Pengabdian Kepada Masyarakat Universitas Subang. Berinovasi untuk kemajuan bangsa.
                    </p>
                </div>
                
                <!-- Tautan -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Tautan Cepat</h4>
                    <ul class="space-y-4">
                        <li><a href="#beranda" class="text-slate-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#tentang" class="text-slate-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#penelitian" class="text-slate-400 hover:text-white transition-colors">Penelitian</a></li>
                        <li><a href="#pengabdian" class="text-slate-400 hover:text-white transition-colors">Pengabdian</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Kontak Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-slate-400">Jl. RA. Kartini No.KM. 3, Pasirkareumbi, Kec. Subang, Kabupaten Subang, Jawa Barat 41285</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-slate-400">lppm@unsub.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} LPPM Universitas Subang. Hak cipta dilindungi undang-undang.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="text-slate-500 hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-slate-500 hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Navbar styling on scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md');
                navbar.classList.replace('bg-white/80', 'bg-white/95');
            } else {
                navbar.classList.remove('shadow-md');
                navbar.classList.replace('bg-white/95', 'bg-white/80');
            }
        });
    </script>
</body>
</html>
