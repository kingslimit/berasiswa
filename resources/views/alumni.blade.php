@php
  
    $q = trim((string) request('q'));
    $alumni = [];
    for ($i = 1; $i <= 6; $i++) {
        $alumni[$i] = [
            'nama'     => "Nama Alumni $i (contoh)",
            'lokasi'   => 'Kediri (contoh)',
            'beasiswa' => 'Nama beasiswa (contoh)',
        ];
    }
    $alumni = array_filter($alumni, fn ($a) => $q === '' || stripos($a['nama'].$a['beasiswa'], $q) !== false);
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni - Beasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
      * { box-sizing: border-box; } 
      body { font-family: 'Inter', sans-serif; }
      .nav-link { position: relative; }
      .nav-link::after { content: ""; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #3b82f6; transition: width 0.3s ease; }
      .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-800">

    <!-- ===== NAVBAR (MENGIKUTI HALAMAN HOME) ===== -->
    <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
      <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
        <div class="hidden sm:flex items-center justify-between py-3">
          <nav class="flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
            <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
            <a href="/find-scholarship" class="nav-link hover:text-blue-700 transition-colors duration-200">Find scholarship</a>
            <a href="/lomba" class="nav-link hover:text-blue-700 transition-colors duration-200">LOMBA</a>
            <a href="/dashboard" class="nav-link hover:text-blue-700 transition-colors duration-200">Dashboard</a>
            <a href="/alumni" class="nav-link font-medium text-gray-900 border-b-2 border-gray-900 pb-0.5">ALUMNI</a>
          </nav>
          <!-- Right Side: Notification & Avatar -->
          <div class="flex items-center gap-3">
            <button class="relative p-2 text-gray-700 hover:text-blue-700 rounded-full hover:bg-white/40 transition-colors" aria-label="Notifikasi">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
              <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
            </button>
            <a href="/settings/profile" class="flex items-center gap-2 group">
              <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-blue-300">
                <img src="https://i.pravatar.cc/100?img=47" alt="User Avatar" class="w-full h-full object-cover">
              </div>
            </a>
          </div>
        </div>
        <div class="sm:hidden flex items-center justify-between py-2.5">
          <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Open menu">
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
            <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
          </button>
          <span class="font-bold text-gray-800 text-sm tracking-wide">ALUMNI</span>
          <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
            <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
      <div id="mobile-menu" class="hidden sm:hidden border-t border-blue-200/60 bg-[#B9D9EB]">
        <nav class="flex flex-col px-4 py-2 gap-1">
          <a href="/" class="text-sm text-gray-800 py-2 border-b border-blue-200/40 hover:text-blue-700">Home</a>
          <a href="/find-scholarship" class="text-sm text-gray-800 py-2 border-b border-blue-200/40 hover:text-blue-700">Find scholarship</a>
          <a href="/lomba" class="text-sm text-gray-800 py-2 border-b border-blue-200/40 hover:text-blue-700">LOMBA</a>
          <a href="/dashboard" class="text-sm text-gray-800 py-2 border-b border-blue-200/40 hover:text-blue-700">Dashboard</a>
          <a href="/alumni" class="text-sm font-semibold text-gray-900 py-2">ALUMNI</a>
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
          <h1 class="text-base sm:text-lg font-bold text-gray-800">Cari alumni</h1>
          <p class="text-gray-500 text-xs">Home / <span class="text-gray-700 font-medium">Alumni</span></p>
        </div>
        <form action="/alumni" method="GET" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
          <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
            <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <input name="q" value="{{ $q ?? '' }}" placeholder="Nama alumni, beasiswa, kata kunci..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
          </div>
          <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
            <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            <input name="lokasi" value="{{ $lokasi ?? '' }}" placeholder="Lokasi" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
          </div>
          <div class="flex-1 flex items-center gap-2 px-3 py-2">
            <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
              <option value="">Pilih kategori</option>
              <option value="Pemerintah" {{ (isset($kategori) && $kategori == 'Pemerintah') ? 'selected' : '' }}>Beasiswa pemerintah</option>
              <option value="Private Company" {{ (isset($kategori) && $kategori == 'Private Company') ? 'selected' : '' }}>Beasiswa swasta</option>
              <option value="Lembaga Internasional" {{ (isset($kategori) && $kategori == 'Lembaga Internasional') ? 'selected' : '' }}>Luar negeri</option>
            </select>
          </div>
          <button type="submit" class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Cari</button>
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
          <option>Terbaru</option><option>Terlama</option>
        </select>
        <select class="border border-gray-200 rounded-md px-3 py-1.5 bg-white text-gray-700 outline-none text-xs cursor-pointer">
          <option>12 per halaman</option><option>24 per halaman</option>
        </select>
        <div class="flex border border-gray-200 rounded-md bg-white overflow-hidden">
          <button id="vGrid" class="p-2 text-[#0B63C5] transition-colors" aria-label="Tampilan grid">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3zM13 3h8v8h-8zM3 13h8v8H3zM13 13h8v8h-8z"/></svg>
          </button>
          <button id="vList" class="p-2 text-gray-400 hover:text-blue-600 transition-colors" aria-label="Tampilan daftar">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h18v7H3zM3 13h18v7H3z"/></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="lg:flex gap-6 items-start">
      <aside id="side" class="hidden lg:block w-full lg:w-64 shrink-0 mb-6 lg:mb-0">
    <div class="bg-white border border-gray-200 rounded-xl">
      <div class="p-4 border-b border-gray-100">
        <p class="text-sm font-medium">Radius Lokasi: <span id="rv" class="text-[#3B82F6]">32 km</span></p>
        <input id="rad" type="range" min="0" max="100" value="32" class="w-full mt-3 accent-[#3B82F6]">
      </div>
      <div class="p-4">
        <p class="text-sm font-medium mb-3">Jenis Organisasi</p>
        @foreach (['Pemerintah','Semi Pemerintah','LSM','Perusahaan Swasta','Lembaga Internasional','Lainnya'] as $o)
          <label class="flex items-center gap-2 text-xs text-gray-600 py-1.5"><input type="radio" name="org" class="accent-[#3B82F6]"> {{ $o }}</label>
        @endforeach
      </div>
    </div>
  </aside>

  <section class="flex-1">
    <div id="list" class="grid gap-3 sm:grid-cols-2 xl:grid-cols-3">
      @forelse ($alumni as $id => $a)
        <article class="bg-blue-100 rounded-xl p-4 flex items-center gap-3 justify-between">
          <div class="flex items-center gap-3 min-w-0">
            <span class="w-12 h-12 shrink-0 rounded-full bg-pink-200 flex items-center justify-center font-bold text-pink-700">{{ strtoupper(substr($a['nama'], 0, 1)) }}</span>
            <div class="min-w-0">
              <h2 class="text-sm font-semibold truncate">{{ $a['nama'] }}</h2>
              <p class="text-[11px] text-gray-500 mt-1">{{ $a['lokasi'] }}</p>
              <p class="text-[11px] text-gray-500 uppercase truncate">{{ $a['beasiswa'] }}</p>
            </div>
          </div>
          <a href="/alumni/{{ $id }}" class="shrink-0 bg-blue-50 text-[#3B82F6] text-xs font-semibold rounded-lg px-3 py-2 hover:bg-white">Buka →</a>
        </article>
      @empty
        <p class="text-sm text-gray-500">Belum ada alumni yang cocok. Coba kata kunci lain ya.</p>
      @endforelse
    </div>

    <nav class="flex items-center justify-center gap-2 mt-10 text-xs">
      <span class="w-9 h-9 rounded-full flex items-center justify-center text-blue-300">←</span>
      <span class="w-9 h-9 rounded-full flex items-center justify-center bg-[#3B82F6] text-white font-semibold">01</span>
      @foreach (['02','03','04','05'] as $p)<span class="w-9 h-9 rounded-full flex items-center justify-center text-gray-600">{{ $p }}</span>@endforeach
      <span class="w-9 h-9 rounded-full flex items-center justify-center bg-blue-100 text-[#3B82F6]">→</span>
    </nav>
  </section>
</div>

<script>
  const rad = document.getElementById('rad'), rv = document.getElementById('rv'), list = document.getElementById('list');
  if (rad) rad.oninput = () => rv.textContent = rad.value + ' km';
  const btnF = document.getElementById('btnFilter');
  if (btnF) btnF.onclick = () => document.getElementById('side').classList.toggle('hidden');
  const g = document.getElementById('vGrid'), l = document.getElementById('vList');
  if (g) g.onclick = () => { list.className = 'grid gap-3 sm:grid-cols-2 xl:grid-cols-3'; g.classList.replace('text-gray-400','text-[#3B82F6]'); l.classList.replace('text-[#3B82F6]','text-gray-400'); };
  if (l) l.onclick = () => { list.className = 'flex flex-col gap-3'; l.classList.replace('text-gray-400','text-[#3B82F6]'); g.classList.replace('text-[#3B82F6]','text-gray-400'); };
  const hb = document.getElementById('hamburger'), mm = document.getElementById('mobile-menu');
  if (hb && mm) hb.onclick = () => mm.classList.toggle('hidden');
</script></main>

  <!-- ===== FOOTER ===== -->
  <footer class="bg-blue-100 pt-8 pb-4 px-4 sm:px-6">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex flex-col sm:flex-row sm:justify-end gap-8 sm:gap-12 mb-6">
        <div>
          <h4 class="text-xs font-bold text-gray-700 mb-3">About</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">About Us</a></li>
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Career Guide</a></li>
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Blogs</a></li>
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Contact Us</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-xs font-bold text-gray-700 mb-3">Helpful Resources</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Sitemap</a></li>
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Privacy Center</a></li>
            <li><a href="#" class="text-xs text-gray-500 hover:text-blue-600 transition-colors">Terms of Use</a></li>
          </ul>
        </div>
      </div>
      <div class="border-t border-blue-200 pt-4 flex flex-col sm:flex-row items-center justify-between gap-3">
        <a href="mailto:welloption@gmail.com" class="text-xs text-blue-600 hover:underline">welloption@gmail.com</a>
        <div class="flex items-center gap-3">
          <a href="#" id="social-instagram" class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-blue-50 shadow-sm transition-colors">
            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
          </a>
          <a href="#" id="social-facebook" class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-blue-50 shadow-sm transition-colors">
            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" id="social-twitter" class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-blue-50 shadow-sm transition-colors">
            <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
