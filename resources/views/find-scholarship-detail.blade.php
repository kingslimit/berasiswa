<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $s['nama'] }} - Apply Scholarship</title>
  <meta name="description" content="{{ $s['desc'] }}">
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
    .apply-btn { transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .apply-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(11,99,197,0.35); }
    .info-icon { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; }
    .tag { display: inline-flex; align-items: center; gap: 4px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 20px; padding: 4px 12px; font-size: 12px; font-weight: 500; color: #475569; }
    .tag .remove { color: #94a3b8; cursor: pointer; font-size: 14px; line-height: 1; }
    .tag .remove:hover { color: #ef4444; }
    .social-btn { width: 34px; height: 34px; border-radius: 8px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s; }
    .social-btn:hover { transform: scale(1.1); }
  </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen text-gray-800 flex flex-col">

  <!-- ===== TOP NAVBAR ===== -->
  <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between py-3">
        <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
          <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
          <a href="/find-scholarship" class="nav-link font-semibold text-gray-900 border-b-2 border-gray-900 pb-0.5">Find scholarship</a>
          <a href="/lomba" class="nav-link hover:text-blue-700 transition-colors duration-200">LOMBA</a>
          <a href="/dashboard" class="nav-link hover:text-blue-700 transition-colors duration-200">Dashboard</a>
          <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
        </nav>
        <div class="hidden sm:flex items-center gap-3">
          <button class="relative p-2 text-gray-700 hover:text-blue-700 rounded-full hover:bg-white/40 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
          </button>
          <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-blue-300">
            <img src="https://i.pravatar.cc/100?img=47" alt="User Avatar" class="w-full h-full object-cover">
          </div>
        </div>
        <!-- Mobile -->
        <div class="sm:hidden flex items-center justify-between w-full">
          <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50">
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
          </button>
          <span class="font-bold text-gray-800 text-sm">Find Scholarship</span>
          <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
            <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </div>
    <div id="mobile-menu" class="sm:hidden border-t border-blue-200/60 bg-[#B9D9EB]">
      <nav class="flex flex-col px-4 py-2 gap-1 text-sm">
        <a href="/" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Home</a>
        <a href="/find-scholarship" class="py-2 border-b border-blue-200/40 font-semibold text-gray-900">Find scholarship</a>
        <a href="/lomba" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">LOMBA</a>
        <a href="/dashboard" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Dashboard</a>
        <a href="/alumni" class="py-2 text-gray-800 hover:text-blue-700">ALUMNI</a>
      </nav>
    </div>
  </header>

  <!-- ===== SUB-HEADER (search bar only) ===== -->
  <div class="bg-white border-b border-gray-200/80 px-4 sm:px-6 py-2.5">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden w-full md:max-w-xl bg-white">
        <div class="flex items-center gap-1.5 px-3 py-2 border-r border-gray-200 bg-gray-50 text-xs md:text-sm text-gray-700 cursor-pointer whitespace-nowrap">
          <span>🇮🇩</span>
          <span class="font-medium">Indonesia</span>
          <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </div>
        <div class="flex items-center gap-2 px-3 py-2 w-full">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input type="text" placeholder="Job title, keyword, company" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
      </div>
    </div>
  </div>

  <!-- ===== BREADCRUMB + FILTER HEADER ===== -->
  <section class="bg-[#EAEFF4] py-5 border-b border-gray-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex flex-wrap items-center justify-between gap-1 mb-3 text-sm">
        <h1 class="text-base sm:text-lg font-bold text-gray-800">Find scholarship</h1>
        <p class="text-gray-500 text-xs">Home / <a href="/find-scholarship" class="text-gray-700 font-medium hover:text-blue-600">Find scholarship</a> / <span class="text-gray-700 font-medium">{{ $s['nama'] }}</span></p>
      </div>
      <!-- Filter bar (same as list page) -->
      <form action="/find-scholarship" method="GET" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input name="q" placeholder="scholarship title, Keyword..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
          <input name="lokasi" placeholder="Location" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
            <option value="">Select Category</option>
            <option value="Pemerintah">Pemerintah</option>
            <option value="Internasional">Internasional</option>
            <option value="Universitas">Universitas</option>
            <option value="Swasta">Swasta</option>
          </select>
        </div>
        <button type="submit" class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Find</button>
      </form>
    </div>
  </section>

  <!-- ===== MAIN DETAIL CONTENT ===== -->
  <main class="max-w-screen-xl mx-auto px-4 sm:px-6 py-6 flex-1 w-full">

    <!-- Active Filter Tags + Sort -->
    <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
      <div class="flex flex-wrap gap-2">
        <span class="tag">{{ $s['kategori'] }} <span class="remove" onclick="this.parentElement.remove()">×</span></span>
        <span class="tag">{{ $s['lokasi'] }} <span class="remove" onclick="this.parentElement.remove()">×</span></span>
      </div>
      <div class="flex items-center gap-3 text-xs ml-auto">
        <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
          <option>Latest</option><option>Oldest</option>
        </select>
        <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
          <option>12 per page</option><option>24 per page</option>
        </select>
        <div class="flex border border-gray-200 rounded-md bg-white overflow-hidden">
          <button class="p-2 text-[#0B63C5]">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3zM13 3h8v8h-8zM3 13h8v8H3zM13 13h8v8h-8z"/></svg>
          </button>
          <button class="p-2 text-gray-400 hover:text-blue-600">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h18v7H3zM3 13h18v7H3z"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Scholarship Header Card -->
    <div class="bg-white border border-gray-200/80 rounded-2xl p-5 sm:p-6 shadow-sm mb-6">
      <div class="flex flex-col sm:flex-row sm:items-start gap-4 justify-between">
        <div class="flex items-start gap-4">
          <!-- Logo -->
          <div class="{{ $s['color'] }} w-14 h-14 rounded-2xl flex items-center justify-center text-white font-black text-xl shrink-0 shadow-sm">
            {{ $s['logo_text'] }}
          </div>
          <div>
            <div class="flex flex-wrap items-center gap-2 mb-1">
              <h2 class="text-lg sm:text-xl font-bold text-gray-900">{{ $s['nama'] }}</h2>
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-orange-100 text-orange-700">Featured</span>
              @if($s['tipe'] === 'Full Pay')
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">Full Pay</span>
              @else
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-600">Partial</span>
              @endif
            </div>
            <div class="flex flex-wrap gap-x-4 gap-y-1 text-xs text-gray-500 mt-1">
              <a href="{{ $s['website'] }}" target="_blank" class="flex items-center gap-1 hover:text-blue-600 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                {{ $s['website'] }}
              </a>
              <a href="tel:{{ $s['phone'] }}" class="flex items-center gap-1 hover:text-blue-600 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                {{ $s['phone'] }}
              </a>
              <a href="mailto:{{ $s['email'] }}" class="flex items-center gap-1 hover:text-blue-600 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                {{ $s['email'] }}
              </a>
            </div>
          </div>
        </div>
        <!-- Apply Buttons -->
        <div class="flex items-center gap-3 shrink-0">
          <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-blue-600 hover:border-blue-300 transition-all" aria-label="Save">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
          </button>
          <button id="applyBtn" class="apply-btn bg-[#0B63C5] hover:bg-blue-700 text-white font-semibold text-sm rounded-xl px-6 py-2.5 flex items-center gap-2 shadow-sm">
            Apply Now
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Main Two-Column Layout -->
    <div class="grid lg:grid-cols-3 gap-6">

      <!-- LEFT: Description + Requirements + Share -->
      <div class="lg:col-span-2 space-y-6">

        <!-- Description -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 sm:p-6 shadow-sm">
          <h3 class="text-base font-bold text-gray-900 mb-3">Description</h3>
          <p class="text-sm text-gray-600 leading-relaxed">{{ $s['desc'] }}</p>
        </div>

        <!-- Requirements -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 sm:p-6 shadow-sm">
          <h3 class="text-base font-bold text-gray-900 mb-3">Requirements</h3>
          <ul class="space-y-2">
            @foreach (explode(', ', $s['requirements']) as $req)
              <li class="flex items-start gap-2.5 text-sm text-gray-600">
                <span class="w-5 h-5 rounded-full bg-blue-50 border border-blue-200 flex items-center justify-center shrink-0 mt-0.5">
                  <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                </span>
                {{ trim($req) }}
              </li>
            @endforeach
          </ul>
        </div>

        <!-- Share this scholarship -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 sm:p-6 shadow-sm">
          <h3 class="text-sm font-semibold text-gray-800 mb-3">Share this scholarship:</h3>
          <div class="flex items-center gap-2">
            <a href="#" class="social-btn bg-[#1877F2] text-white">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="#" class="social-btn bg-[#1DA1F2] text-white">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            </a>
            <a href="#" class="social-btn bg-[#E60023] text-white">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- RIGHT: Job Overview + Organization Info -->
      <div class="space-y-5">

        <!-- Job Overview -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm">
          <h3 class="text-base font-bold text-gray-900 mb-4">Scholarship Overview</h3>
          <div class="grid grid-cols-2 gap-4">
            <!-- Posted -->
            <div class="flex items-start gap-3">
              <div class="info-icon bg-blue-50">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Posted</p>
                <p class="text-xs font-semibold text-gray-800 mt-0.5">{{ $s['posted'] }}</p>
              </div>
            </div>
            <!-- Expire In -->
            <div class="flex items-start gap-3">
              <div class="info-icon bg-orange-50">
                <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Expire In</p>
                <p class="text-xs font-semibold text-gray-800 mt-0.5">{{ $s['deadline'] }}</p>
              </div>
            </div>
            <!-- Level -->
            <div class="flex items-start gap-3">
              <div class="info-icon bg-purple-50">
                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Level</p>
                <p class="text-xs font-semibold text-gray-800 mt-0.5">{{ $s['level'] }}</p>
              </div>
            </div>
            <!-- Location -->
            <div class="flex items-start gap-3">
              <div class="info-icon bg-green-50">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Location</p>
                <p class="text-xs font-semibold text-gray-800 mt-0.5">{{ $s['lokasi'] }}</p>
              </div>
            </div>
            <!-- Type -->
            <div class="flex items-start gap-3 col-span-2">
              <div class="info-icon bg-blue-50">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Type</p>
                <p class="text-xs font-semibold text-gray-800 mt-0.5">{{ $s['tipe'] }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Organization Info -->
        <div class="bg-white border border-gray-200/80 rounded-2xl p-5 shadow-sm">
          <div class="flex items-center gap-3 mb-4 pb-4 border-b border-gray-100">
            <div class="{{ $s['color'] }} w-11 h-11 rounded-xl flex items-center justify-center text-white font-black text-base shrink-0">
              {{ $s['logo_text'] }}
            </div>
            <div>
              <p class="text-sm font-bold text-gray-900">{{ $s['nama'] }}</p>
              <p class="text-xs text-gray-500">{{ $s['org_type'] }}</p>
            </div>
          </div>
          <div class="space-y-2.5 text-xs">
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Founded in:</span>
              <span class="font-medium text-gray-800">{{ $s['founded'] }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Organization type:</span>
              <span class="font-medium text-gray-800">{{ $s['org_type'] }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Organization size:</span>
              <span class="font-medium text-gray-800">{{ $s['size'] }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Phone:</span>
              <span class="font-medium text-gray-800">{{ $s['phone'] }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Email:</span>
              <span class="font-medium text-gray-800">{{ $s['email'] }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">Website:</span>
              <a href="{{ $s['website'] }}" target="_blank" class="font-medium text-blue-600 hover:underline">{{ $s['website'] }}</a>
            </div>
          </div>

          <!-- Social icons -->
          <div class="flex gap-2 mt-4 pt-3 border-t border-gray-100">
            <a href="#" class="social-btn bg-[#1877F2] text-white w-8 h-8 rounded-lg flex items-center justify-center">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="#" class="social-btn bg-[#1DA1F2] text-white w-8 h-8 rounded-lg flex items-center justify-center">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            </a>
            <a href="#" class="social-btn bg-gradient-to-br from-purple-600 to-pink-500 text-white w-8 h-8 rounded-lg flex items-center justify-center">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="#" class="social-btn bg-red-600 text-white w-8 h-8 rounded-lg flex items-center justify-center">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </div>
        </div>

        <!-- Apply CTA Bottom -->
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-5 text-white text-center shadow-sm">
          <p class="text-sm font-semibold mb-1">Ready to apply?</p>
          <p class="text-xs text-blue-200 mb-4">Deadline: {{ $s['deadline'] }}</p>
          <a href="{{ $s['website'] }}" target="_blank" class="block w-full bg-white text-blue-700 font-bold text-sm rounded-xl py-2.5 hover:bg-blue-50 transition-colors shadow-sm">
            Apply Now →
          </a>
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

  <!-- Apply Modal -->
  <div id="applyModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 hidden">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" id="modalOverlay"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 z-10">
      <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
      <div class="{{ $s['color'] }} w-12 h-12 rounded-xl flex items-center justify-center text-white font-black text-lg mb-4">
        {{ $s['logo_text'] }}
      </div>
      <h3 class="text-lg font-bold text-gray-900 mb-1">Apply for {{ $s['nama'] }}</h3>
      <p class="text-xs text-gray-500 mb-5">{{ $s['sub'] }}</p>
      <form class="space-y-3">
        <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name</label>
          <input type="text" placeholder="Your full name" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all">
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">Email Address</label>
          <input type="email" placeholder="your.email@example.com" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all">
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">University / Institution</label>
          <input type="text" placeholder="Your current university" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all">
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">GPA / IPK</label>
          <input type="text" placeholder="e.g. 3.75" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all">
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">Upload CV / Document</label>
          <div class="border-2 border-dashed border-gray-200 rounded-lg px-4 py-4 text-center cursor-pointer hover:border-blue-400 transition-colors group">
            <svg class="w-6 h-6 text-gray-300 group-hover:text-blue-400 mx-auto mb-1 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
            <p class="text-xs text-gray-400">Click to upload or drag & drop</p>
            <p class="text-[10px] text-gray-300 mt-0.5">PDF, DOC up to 10MB</p>
            <input type="file" class="hidden">
          </div>
        </div>
        <button type="submit" class="w-full bg-[#0B63C5] hover:bg-blue-700 text-white font-bold text-sm rounded-xl py-3 transition-all shadow-sm mt-2">
          Submit Application
        </button>
      </form>
    </div>
  </div>

  <script>
    const hamburger = document.getElementById('hamburger'), mobileMenu = document.getElementById('mobile-menu');
    if (hamburger && mobileMenu) hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));

    const applyBtn = document.getElementById('applyBtn');
    const applyModal = document.getElementById('applyModal');
    const closeModal = document.getElementById('closeModal');
    const modalOverlay = document.getElementById('modalOverlay');

    if (applyBtn && applyModal) {
      applyBtn.onclick = () => applyModal.classList.remove('hidden');
      closeModal.onclick = () => applyModal.classList.add('hidden');
      modalOverlay.onclick = () => applyModal.classList.add('hidden');
    }
  </script>
</body>
</html>
