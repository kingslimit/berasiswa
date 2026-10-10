<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lomba - Beasiswa</title>
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

  <!-- ===== 1. TOP NAVBAR (MENGIKUTI HALAMAN HOME) ===== -->
  <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between py-3">
        <!-- Nav Links Desktop -->
        <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
          <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
          <a href="/find-scholarship" class="nav-link hover:text-blue-700 transition-colors duration-200">Find scholarship</a>
          <a href="/lomba" class="nav-link font-semibold text-gray-900 border-b-2 border-gray-900 pb-0.5">LOMBA</a>
          <a href="/dashboard" class="nav-link hover:text-blue-700 transition-colors duration-200">Dashboard</a>
          <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
        </nav>

        <!-- Right Side: Notification & Avatar -->
        <div class="hidden sm:flex items-center gap-3">
          <button class="relative p-2 text-gray-700 hover:text-blue-700 rounded-full hover:bg-white/40 transition-colors" aria-label="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
          </button>
          <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-blue-300">
            <img src="https://i.pravatar.cc/100?img=47" alt="User Avatar" class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Mobile: Hamburger -->
        <div class="sm:hidden flex items-center justify-between w-full">
          <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Buka menu">
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
          </button>
          <span class="font-bold text-gray-800 text-sm tracking-wide">LOMBA</span>
          <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
            <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Dropdown -->
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

  <!-- ===== 2. SUB-HEADER / SEARCH BAR AREA ===== -->
  <div class="bg-white border-b border-gray-200/80 px-4 sm:px-6 py-2.5">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-3">
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

  <!-- ===== 3. GREY FILTER SEARCH HEADER ===== -->
  <section class="bg-[#EAEFF4] py-5 border-b border-gray-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex flex-wrap items-center justify-between gap-1 mb-3 text-sm">
        <h1 class="text-base sm:text-lg font-bold text-gray-800">Find lomba</h1>
        <p class="text-gray-500 text-xs">Home / <span class="text-gray-700 font-medium">Lomba</span></p>
      </div>
      <form action="/lomba" method="GET" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input name="q" value="{{ $q ?? '' }}" placeholder="Lomba, tittle, Keyword..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
          <input name="lokasi" value="{{ $lokasi ?? '' }}" placeholder="Location" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
            <option value="">Select Category</option>
            <option value="Private Company" {{ (isset($kategori) && $kategori == 'Private Company') ? 'selected' : '' }}>Private Company</option>
            <option value="Pemerintah" {{ (isset($kategori) && $kategori == 'Pemerintah') ? 'selected' : '' }}>Pemerintah</option>
            <option value="Lembaga Internasional" {{ (isset($kategori) && $kategori == 'Lembaga Internasional') ? 'selected' : '' }}>Lembaga Internasional</option>
          </select>
        </div>
        <button type="submit" class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Find</button>
      </form>
    </div>
  </section>

  <!-- ===== 4. MAIN CONTENT AREA ===== -->
  <main class="max-w-screen-xl mx-auto px-4 sm:px-6 py-6 flex-1 w-full">
    <div class="flex flex-wrap items-center justify-between gap-3 mb-5">
      <button id="btnFilter" class="lg:hidden flex items-center gap-2 bg-[#0B63C5] text-white text-xs font-semibold rounded-lg px-4 py-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M7 12h10M10 18h4"/></svg>Filter
      </button>
      <button class="hidden lg:flex items-center gap-2 bg-[#0B63C5] text-white text-xs font-semibold rounded-md px-4 py-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M7 12h10M10 18h4"/></svg>Filter
      </button>
      <div class="flex items-center gap-3 text-xs ml-auto">
        <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
          <option>Latest</option><option>Oldest</option>
        </select>
        <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
          <option>12 per page</option><option>24 per page</option>
        </select>
        <div class="flex border border-gray-200 rounded-md bg-white overflow-hidden">
          <button id="vGrid" class="p-2 text-gray-400 hover:text-blue-600 transition-colors" aria-label="Grid">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3zM13 3h8v8h-8zM3 13h8v8H3zM13 13h8v8h-8z"/></svg>
          </button>
          <button id="vList" class="p-2 text-[#0B63C5] transition-colors" aria-label="List">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h18v7H3zM3 13h18v7H3z"/></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="lg:flex gap-6 items-start">
      <!-- Sidebar Filter -->
      <aside id="side" class="hidden lg:block w-full lg:w-64 shrink-0 mb-6 lg:mb-0">
        <div class="bg-white border border-gray-200/80 rounded-xl p-4 shadow-sm space-y-5">
          <div>
            <div class="flex items-center justify-between text-xs font-semibold text-gray-800 mb-1">
              <span>Location Radius:</span>
              <span id="rv" class="text-blue-600 font-bold">32 miles</span>
            </div>
            <input id="rad" type="range" min="0" max="100" value="32" class="w-full accent-blue-600 cursor-pointer h-1.5 bg-gray-200 rounded-lg">
          </div>
          <div class="pt-4 border-t border-gray-100">
            <p class="text-xs font-semibold text-gray-800 mb-2">Organization Type</p>
            <div class="space-y-2 mt-2">
              @foreach (['Government', 'Semi Government', 'NGO', 'Private Company', 'International Agencies', 'Others'] as $o)
                <label class="flex items-center gap-2 text-xs text-gray-600 cursor-pointer hover:text-blue-600 transition-colors">
                  <input type="radio" name="org" value="{{ $o }}" class="accent-blue-600 w-3.5 h-3.5">
                  <span>{{ $o }}</span>
                </label>
              @endforeach
            </div>
          </div>
        </div>
      </aside>

      <!-- Card List -->
      <section class="flex-1">
        <div id="list" class="flex flex-col gap-3">
          @forelse ($alumni as $id => $a)
            <article class="bg-[#DCEBF8] hover:bg-[#D4E7F6] border border-blue-200/50 rounded-2xl p-3.5 sm:p-4 flex items-center justify-between gap-4 transition-all shadow-sm">
              <div class="flex items-center gap-3.5 min-w-0">
                <div class="w-11 h-11 sm:w-12 sm:h-12 shrink-0 rounded-xl bg-[#E94D74] flex items-center justify-center text-white shadow-sm">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" fill="none" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M2 12h20" stroke="currentColor" stroke-width="1.5"/>
                  </svg>
                </div>
                <div class="min-w-0">
                  <h2 class="text-sm sm:text-base font-bold text-gray-900 truncate leading-snug">{{ $a['nama'] }}</h2>
                  <div class="flex items-center gap-3 text-[11px] sm:text-xs text-gray-500 mt-0.5">
                    <span class="flex items-center gap-1">
                      <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                      {{ $a['lokasi'] }}
                    </span>
                    <span class="flex items-center gap-1 font-medium text-gray-500 uppercase text-[10px]">
                      <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                      {{ $a['mode'] ?? 'OFFLINE' }}
                    </span>
                  </div>
                </div>
              </div>
              <!-- Link ke /lomba/{id} bukan /alumni/{id} -->
              <a href="/lomba/{{ $a['id'] ?? $id }}" class="shrink-0 bg-white/95 hover:bg-white text-blue-600 font-semibold rounded-lg px-4 py-2 text-xs sm:text-sm border border-blue-100 shadow-sm transition-all hover:scale-105 flex items-center gap-1">
                Buka →
              </a>
            </article>
          @empty
            <div class="bg-white rounded-xl p-8 text-center border border-gray-200">
              <p class="text-sm text-gray-500 font-medium">Tidak ada lomba yang cocok.</p>
              <a href="/lomba" class="inline-block mt-3 text-xs text-blue-600 font-semibold underline">Reset Filter</a>
            </div>
          @endforelse
        </div>

        <!-- Pagination -->
        <nav class="flex items-center justify-center gap-2 mt-8 text-xs">
          <button class="w-8 h-8 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-50 transition-colors">←</button>
          <span class="w-8 h-8 rounded-full flex items-center justify-center bg-[#0B63C5] text-white font-semibold">01</span>
          @foreach (['02','03','04','05'] as $p)
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">{{ $p }}</button>
          @endforeach
          <button class="w-8 h-8 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-50 transition-colors">→</button>
        </nav>
      </section>
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
    const rad = document.getElementById('rad'), rv = document.getElementById('rv');
    if (rad && rv) rad.oninput = () => rv.textContent = rad.value + ' miles';
    const btnFilter = document.getElementById('btnFilter'), side = document.getElementById('side');
    if (btnFilter && side) btnFilter.onclick = () => side.classList.toggle('hidden');
    const list = document.getElementById('list'), g = document.getElementById('vGrid'), l = document.getElementById('vList');
    if (g && l && list) {
      g.onclick = () => { list.className = 'grid gap-3 sm:grid-cols-2'; g.className = g.className.replace('text-gray-400','text-[#0B63C5]'); l.className = l.className.replace('text-[#0B63C5]','text-gray-400'); };
      l.onclick = () => { list.className = 'flex flex-col gap-3'; l.className = l.className.replace('text-gray-400','text-[#0B63C5]'); g.className = g.className.replace('text-[#0B63C5]','text-gray-400'); };
    }
    const hamburger = document.getElementById('hamburger'), mobileMenu = document.getElementById('mobile-menu');
    if (hamburger && mobileMenu) hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));
  </script>
</body>
</html>
