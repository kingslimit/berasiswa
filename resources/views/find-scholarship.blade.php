<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Scholarship - ScholarPath</title>
  <meta name="description" content="Temukan beasiswa terbaik yang sesuai dengan impian dan kebutuhanmu. Jelajahi ratusan beasiswa terverifikasi dari berbagai institusi.">
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
    .card-hover { transition: transform 0.25s ease, box-shadow 0.25s ease; }
    .card-hover:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(11,99,197,0.15); }
    .badge { display: inline-flex; align-items: center; padding: 2px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
  </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen text-gray-800 flex flex-col">

  <!-- ===== TOP NAVBAR ===== -->
  <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between py-3">
        <!-- Nav Links Desktop -->
        <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
          <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
          <a href="/find-scholarship" class="nav-link font-semibold text-gray-900 border-b-2 border-gray-900 pb-0.5">Find scholarship</a>
          <a href="/lomba" class="nav-link hover:text-blue-700 transition-colors duration-200">LOMBA</a>
          <a href="/dashboard" class="nav-link hover:text-blue-700 transition-colors duration-200">Dashboard</a>
          <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
        </nav>

        <!-- Right: Notification & Avatar -->
        <div class="hidden sm:flex items-center gap-3">
          <button class="relative p-2 text-gray-700 hover:text-blue-700 rounded-full hover:bg-white/40 transition-colors" aria-label="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
          </button>
          <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-blue-300">
            <img src="https://i.pravatar.cc/100?img=47" alt="User Avatar" class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Mobile Hamburger -->
        <div class="sm:hidden flex items-center justify-between w-full">
          <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Buka menu">
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
          </button>
          <span class="font-bold text-gray-800 text-sm tracking-wide">Find Scholarship</span>
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

  <!-- ===== FILTER SEARCH HEADER ===== -->
  <section class="bg-[#EAEFF4] py-5 border-b border-gray-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex flex-wrap items-center justify-between gap-1 mb-3 text-sm">
        <h1 class="text-base sm:text-lg font-bold text-gray-800">Find scholarship</h1>
        <p class="text-gray-500 text-xs">Home / <span class="text-gray-700 font-medium">Find scholarship</span></p>
      </div>
      <form action="/find-scholarship" method="GET" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input name="q" value="{{ $q ?? '' }}" placeholder="scholarship title, Keyword..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
          <input name="lokasi" value="{{ $lokasi ?? '' }}" placeholder="Location" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
            <option value="">Select Category</option>
            <option value="Pemerintah" {{ (isset($kategori) && $kategori == 'Pemerintah') ? 'selected' : '' }}>Pemerintah</option>
            <option value="Internasional" {{ (isset($kategori) && $kategori == 'Internasional') ? 'selected' : '' }}>Internasional</option>
            <option value="Universitas" {{ (isset($kategori) && $kategori == 'Universitas') ? 'selected' : '' }}>Universitas</option>
            <option value="Swasta" {{ (isset($kategori) && $kategori == 'Swasta') ? 'selected' : '' }}>Swasta</option>
          </select>
        </div>
        <button type="submit" class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Find</button>
      </form>
    </div>
  </section>

  <!-- ===== MAIN CONTENT ===== -->
  <main class="max-w-screen-xl mx-auto px-4 sm:px-6 py-6 flex-1 w-full">

    <!-- Sort + View controls -->
    <div class="flex flex-wrap items-center justify-end gap-3 mb-5 text-xs">
      <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
        <option>Latest</option><option>Oldest</option><option>Deadline Soon</option>
      </select>
      <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
        <option>12 per page</option><option>24 per page</option>
      </select>
      <div class="flex border border-gray-200 rounded-md bg-white overflow-hidden">
        <button id="vGrid" class="p-2 text-[#0B63C5] transition-colors" aria-label="Grid">
          <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3zM13 3h8v8h-8zM3 13h8v8H3zM13 13h8v8h-8z"/></svg>
        </button>
        <button id="vList" class="p-2 text-gray-400 hover:text-blue-600 transition-colors" aria-label="List">
          <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h18v7H3zM3 13h18v7H3z"/></svg>
        </button>
      </div>
    </div>

    <!-- Scholarship Grid -->
    <div id="cardGrid" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

      @forelse ($scholarships as $s)
      <a href="/find-scholarship/{{ $s['id'] }}" class="card-hover bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm group block">
        <!-- Card Header with gradient color -->
        <div class="{{ $s['color'] }} p-5 relative min-h-[120px] flex flex-col justify-between">
          <!-- Logo circle -->
          <div class="w-11 h-11 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white font-black text-lg border border-white/30">
            {{ $s['logo_text'] }}
          </div>
          <!-- Badges -->
          <div class="flex items-center gap-2 mt-3">
            @if($s['tipe'] === 'Full Pay')
              <span class="badge bg-white/20 text-white border border-white/30">Full Pay</span>
            @else
              <span class="badge bg-white/20 text-white border border-white/30">Partial</span>
            @endif
            <span class="badge bg-white/20 text-white border border-white/30">{{ $s['kategori'] }}</span>
          </div>
        </div>

        <!-- Card Body -->
        <div class="p-4">
          <h2 class="font-bold text-gray-900 text-sm leading-snug mb-0.5 group-hover:text-blue-700 transition-colors">{{ $s['nama'] }}</h2>
          <p class="text-[11px] text-gray-500 mb-3">{{ $s['sub'] }}</p>

          <div class="flex flex-wrap gap-x-3 gap-y-1.5 text-[11px] text-gray-500 mb-4">
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
              {{ $s['lokasi'] }}
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              Deadline: {{ $s['deadline'] }}
            </span>
          </div>

          <div class="flex items-center justify-between pt-3 border-t border-gray-100">
            <span class="text-[11px] text-gray-400">{{ $s['level'] }}</span>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
              Apply Now
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </div>
        </div>
      </a>
      @empty
        <div class="col-span-3 bg-white rounded-xl p-8 text-center border border-gray-200">
          <p class="text-sm text-gray-500 font-medium">Tidak ada beasiswa yang cocok dengan pencarian Anda.</p>
          <a href="/find-scholarship" class="inline-block mt-3 text-xs text-blue-600 font-semibold underline">Reset Filter</a>
        </div>
      @endforelse
    </div>

    <!-- Pagination -->
    <nav class="flex items-center justify-center gap-2 mt-10 text-xs">
      <button class="w-8 h-8 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-50 transition-colors">←</button>
      <span class="w-8 h-8 rounded-full flex items-center justify-center bg-[#0B63C5] text-white font-semibold">01</span>
      @foreach (['02','03','04','05'] as $p)
        <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">{{ $p }}</button>
      @endforeach
      <button class="w-8 h-8 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-50 transition-colors">→</button>
    </nav>
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

    const grid = document.getElementById('cardGrid');
    const vGrid = document.getElementById('vGrid'), vList = document.getElementById('vList');
    if (vGrid && vList && grid) {
      vGrid.onclick = () => {
        grid.className = 'grid gap-4 sm:grid-cols-2 lg:grid-cols-3';
        vGrid.classList.add('text-[#0B63C5]'); vGrid.classList.remove('text-gray-400');
        vList.classList.add('text-gray-400'); vList.classList.remove('text-[#0B63C5]');
      };
      vList.onclick = () => {
        grid.className = 'flex flex-col gap-3';
        vList.classList.add('text-[#0B63C5]'); vList.classList.remove('text-gray-400');
        vGrid.classList.add('text-gray-400'); vGrid.classList.remove('text-[#0B63C5]');
      };
    }
  </script>
</body>
</html>
