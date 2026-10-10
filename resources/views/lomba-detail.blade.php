<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $a['nama'] }} - Detail Lomba</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; }
    .nav-link { position: relative; }
    .nav-link::after { content: ""; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #2563eb; transition: width 0.3s ease; }
    .nav-link:hover::after { width: 100%; }
    #mobile-menu { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
    #mobile-menu.open { max-height: 320px; }
  </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen text-gray-800 flex flex-col justify-between">

  <!-- ===== 1. TOP NAVBAR (MENGIKUTI HALAMAN HOME, LOMBA AKTIF) ===== -->
  <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between py-3">
        <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
          <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
          <a href="/find-scholarship" class="nav-link hover:text-blue-700 transition-colors duration-200">Find scholarship</a>
          <a href="/lomba" class="nav-link font-semibold text-gray-900 border-b-2 border-gray-900 pb-0.5">LOMBA</a>
          <a href="/dashboard" class="nav-link hover:text-blue-700 transition-colors duration-200">Dashboard</a>
          <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
        </nav>
        <div class="hidden sm:flex items-center gap-3">
          <button class="relative p-2 text-gray-700 hover:text-blue-700 rounded-full hover:bg-white/40 transition-colors" aria-label="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
          </button>
          <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-blue-300">
            <img src="https://i.pravatar.cc/100?img=47" alt="User Avatar" class="w-full h-full object-cover">
          </div>
        </div>
        <div class="sm:hidden flex items-center justify-between w-full">
          <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Buka menu">
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
          </button>
          <span class="font-bold text-gray-800 text-sm tracking-wide">DETAIL LOMBA</span>
          <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
            <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </div>
    <div id="mobile-menu" class="sm:hidden border-t border-blue-200/60 bg-[#B9D9EB]">
      <nav class="flex flex-col px-4 py-2 gap-1 text-sm">
        <a href="/" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Home</a>
        <a href="/find-scholarship" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Find scholarship</a>
        <a href="/lomba" class="py-2 border-b border-blue-200/40 font-semibold text-gray-900">LOMBA</a>
        <a href="/dashboard" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Dashboard</a>
        <a href="/alumni" class="py-2 text-gray-800 hover:text-blue-700">ALUMNI</a>
      </nav>
    </div>
  </header>

  <!-- ===== 2. SUB-HEADER / SEARCH BAR ===== -->
  <div class="bg-white border-b border-gray-200/80 px-4 sm:px-6 py-2.5">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-3">
      <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden w-full md:max-w-xl bg-white">
        <div class="flex items-center gap-1.5 px-3 py-2 border-r border-gray-200 bg-gray-50 text-xs md:text-sm text-gray-700 cursor-pointer whitespace-nowrap">
          <span>🇮🇳</span><span class="font-medium">India</span>
          <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </div>
        <div class="flex items-center gap-2 px-3 py-2 w-full">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input type="text" placeholder="Job title, keyword, company" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
      </div>
    </div>
  </div>

  <!-- ===== 3. GREY TITLE BAR ===== -->
  <section class="bg-[#EAEFF4] py-5 border-b border-gray-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex flex-wrap items-center justify-between gap-1 mb-3 text-sm">
        <h1 class="text-base sm:text-lg font-bold text-gray-800">Find {{ $a['nama'] }}</h1>
        <p class="text-gray-500 text-xs">Home / <a href="/lomba" class="hover:underline">Find scholarship</a> / <span class="text-gray-700 font-medium">Detail</span></p>
      </div>
      <form action="/lomba" method="GET" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input name="q" placeholder="Lomba, tittle, Keyword..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
          <input name="lokasi" placeholder="Location" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
            <option value="">Select Category</option>
            <option>Private Company</option><option>Pemerintah</option><option>Lembaga Internasional</option>
          </select>
        </div>
        <button type="submit" class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Find</button>
      </form>
    </div>
  </section>

  <!-- ===== 4. MAIN DETAIL CONTENT ===== -->
  <main class="max-w-screen-xl mx-auto px-4 sm:px-6 py-6 flex-1 w-full">

    <!-- Hero Wave Banner -->
    <div class="relative w-full rounded-2xl overflow-hidden h-44 sm:h-56 bg-gradient-to-r from-sky-400 via-blue-500 to-indigo-600 shadow-sm flex items-end">
      <svg class="absolute inset-0 w-full h-full object-cover opacity-80" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path fill="rgba(255, 255, 255, 0.2)" d="M0,192L48,176C96,160,192,128,288,138.7C384,149,480,203,576,213.3C672,224,768,192,864,165.3C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        <path fill="rgba(255, 255, 255, 0.35)" d="M0,64L48,96C96,128,192,192,288,208C384,224,480,192,576,160C672,128,768,96,864,106.7C960,117,1056,171,1152,181.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>

    <!-- Floating Profile Card -->
    <div class="relative z-10 -mt-14 sm:-mt-16 bg-white border border-gray-200/80 rounded-2xl p-4 sm:p-6 shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
      <div class="flex items-center gap-4 min-w-0">
        <div class="w-14 h-14 sm:w-16 sm:h-16 shrink-0 rounded-2xl bg-[#E94D74] flex items-center justify-center text-white shadow-md">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" fill="none" stroke="currentColor" stroke-width="1.5"/>
            <path d="M2 12h20" stroke="currentColor" stroke-width="1.5"/>
          </svg>
        </div>
        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-gray-900 tracking-tight">{{ $a['nama'] }}</h2>
          <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
            <span class="flex items-center gap-1">
              <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
              {{ $a['lokasi'] }}
            </span>
            <span class="flex items-center gap-1 font-medium uppercase text-[11px]">
              <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              {{ $a['mode'] ?? 'OFFLINE' }}
            </span>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-auto flex sm:justify-end">
        <a href="#contact" class="w-full sm:w-auto text-center bg-[#0B63C5] hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl shadow-sm text-xs sm:text-sm flex items-center justify-center gap-2 transition-all hover:scale-105">
          APPLY →
        </a>
      </div>
    </div>

    <!-- 2-Column Detail Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

      <!-- Left Column -->
      <div class="lg:col-span-2 space-y-6">
        <div class="bg-white border border-gray-200/80 rounded-2xl p-6 shadow-sm">
          <h3 class="text-base font-bold text-gray-900 mb-3">Description</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-justify">
            {{ $a['description'] ?? 'Dribbble Competition adalah ajang pencarian bakat kreatif global bagi desainer produk, UI/UX, dan ilustrator untuk memamerkan karya terbaik mereka kepada perusahaan teknologi terkemuka di dunia.' }}
          </p>
        </div>

        <div class="bg-white border border-gray-200/80 rounded-2xl p-6 shadow-sm">
          <h3 class="text-base font-bold text-gray-900 mb-3">Benefits</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-justify">
            {{ $a['benefits'] ?? 'Pemenang dan peserta terpilih akan mendapatkan mentoring intensif, jaringan koneksi internasional, serta peluang pendanaan dan karir eksklusif.' }}
          </p>
        </div>

        <!-- Share Profile Buttons -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm flex flex-wrap items-center gap-3">
          <span class="text-xs font-semibold text-gray-500">Share profile:</span>
          <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-blue-200 bg-blue-50 text-blue-600 text-xs font-medium hover:bg-blue-100 transition-colors">
            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Facebook
          </a>
          <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-sky-200 bg-sky-50 text-sky-600 text-xs font-medium hover:bg-sky-100 transition-colors">
            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg>
            Twitter
          </a>
          <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 text-xs font-medium hover:bg-red-100 transition-colors">
            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 0 1 .083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/></svg>
            Pinterest
          </a>
        </div>

        <!-- Back Button -->
        <div>
          <a href="/lomba" class="inline-flex items-center gap-2 text-xs font-semibold text-[#0B63C5] hover:underline">
            ← Kembali ke daftar lomba
          </a>
        </div>
      </div>

      <!-- Right Column: Contact Info -->
      <div id="contact" class="space-y-5">

        <!-- Card 1: Overview Specs -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm space-y-4">
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-1">
              <div class="flex items-center gap-1.5 text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">FOUNDED IN</span>
              </div>
              <p class="text-xs font-bold text-gray-800">{{ $a['founded'] ?? '14 June, 2023' }}</p>
            </div>
            <div class="space-y-1">
              <div class="flex items-center gap-1.5 text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">ORGANIZATION TYPE</span>
              </div>
              <p class="text-xs font-bold text-gray-800">{{ $a['kategori'] ?? 'Private Company' }}</p>
            </div>
          </div>
          <div class="pt-3 border-t border-gray-100 space-y-1">
            <div class="flex items-center gap-1.5 text-blue-600">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
              <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">BIAYA</span>
            </div>
            <p class="text-xs font-bold text-gray-800">{{ $a['biaya'] ?? 'gratis' }}</p>
          </div>
        </div>

        <!-- Card 2: Contact Information -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm space-y-4">
          <h4 class="text-sm font-bold text-gray-900 border-b border-gray-100 pb-3">Contact Information</h4>
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
            </div>
            <div class="min-w-0">
              <p class="text-[10px] uppercase font-bold text-gray-400">WEBSITE</p>
              <a href="https://{{ $a['website'] ?? 'www.estherhoward.com' }}" target="_blank" class="text-xs font-semibold text-gray-800 hover:text-blue-600 truncate block">{{ $a['website'] ?? 'www.estherhoward.com' }}</a>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div class="min-w-0">
              <p class="text-[10px] uppercase font-bold text-gray-400">PHONE</p>
              <p class="text-xs font-semibold text-gray-800">{{ $a['phone'] ?? '+1-202-555-0141' }}</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="min-w-0">
              <p class="text-[10px] uppercase font-bold text-gray-400">EMAIL ADDRESS</p>
              <a href="mailto:{{ $a['email'] ?? 'esther.howard@gmail.com' }}" class="text-xs font-semibold text-gray-800 hover:text-blue-600 truncate block">{{ $a['email'] ?? 'esther.howard@gmail.com' }}</a>
            </div>
          </div>
        </div>

        <!-- Card 3: Follow us on -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm space-y-3">
          <h4 class="text-sm font-bold text-gray-900">Follow us on:</h4>
          <div class="flex items-center gap-2">
            <a href="#" class="w-8 h-8 rounded-lg bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-[#0B63C5] hover:bg-blue-700 text-white flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-blue-50 hover:bg-pink-600 text-blue-600 hover:text-white flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-blue-50 hover:bg-red-600 text-blue-600 hover:text-white flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="bg-blue-100 pt-8 pb-4 px-4 sm:px-6 border-t border-blue-200/60 mt-12">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex flex-col sm:flex-row sm:justify-end gap-8 sm:gap-12 mb-6">
        <div>
          <h4 class="text-xs font-bold text-gray-700 mb-3 uppercase tracking-wider">About</h4>
          <ul class="space-y-2 text-xs">
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">About Us</a></li>
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Career Guide</a></li>
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Blogs</a></li>
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Contact Us</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-xs font-bold text-gray-700 mb-3 uppercase tracking-wider">Helpful Resources</h4>
          <ul class="space-y-2 text-xs">
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Sitemap</a></li>
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Privacy Center</a></li>
            <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Terms of Use</a></li>
          </ul>
        </div>
      </div>
      <div class="border-t border-blue-200/80 pt-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
        <a href="mailto:welloption@gmail.com" class="text-blue-600 hover:underline">welloption@gmail.com</a>
        <p class="text-gray-500">© 2026 ScholarPath. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    const hamburger = document.getElementById('hamburger'), mobileMenu = document.getElementById('mobile-menu');
    if (hamburger && mobileMenu) hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));
  </script>
</body>
</html>
