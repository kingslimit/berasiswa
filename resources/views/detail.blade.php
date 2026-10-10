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
    <title>{{ $a['nama'] }} - Beasiswa</title>
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

    <!-- 2. SUB-HEADER / SEARCH BAR AREA -->
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

  <section class="bg-[#EAEFF4] py-5 border-b border-gray-200/60">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <div class="flex flex-wrap items-center justify-between gap-1 mb-3 text-sm">
        <h1 class="text-base sm:text-lg font-bold text-gray-800">Cari alumni</h1>
        <p class="text-gray-500 text-xs">Home / <a href="/alumni" class="text-gray-700 font-medium hover:text-blue-600">Alumni</a> / <span class="text-gray-700 font-medium">{{ $a['nama'] }}</span></p>
      </div>
      <form action="/alumni" class="bg-white rounded-xl p-2.5 shadow-sm border border-gray-200/80 flex flex-col md:flex-row gap-2 sm:items-center">
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input name="q" value="{{ $q ?? '' }}" placeholder="Nama alumni, beasiswa, kata kunci..." class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2 md:border-r border-gray-200">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
          <input name="lokasi" placeholder="Lokasi" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
        </div>
        <div class="flex-1 flex items-center gap-2 px-3 py-2">
          <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <select name="kategori" class="w-full text-xs md:text-sm text-gray-600 outline-none bg-transparent cursor-pointer">
            <option value="">Pilih kategori</option>
            <option>Beasiswa pemerintah</option>
            <option>Beasiswa swasta</option>
            <option>Luar negeri</option>
          </select>
        </div>
        <button class="bg-[#0B63C5] hover:bg-blue-700 text-white text-xs md:text-sm font-semibold rounded-lg px-8 py-2.5 transition-all shadow-sm">Cari</button>
      </form>
    </div>
  </section>

  <main class="max-w-screen-xl mx-auto px-4 py-5"><a href="/alumni" class="text-sm text-[#3B82F6] hover:underline">← Kembali ke daftar alumni</a>

<div class="mt-4 max-w-3xl mx-auto bg-pink-200 p-2 rounded-2xl">
  <div id="yt" data-id="{{ $a['youtube'] }}" class="relative aspect-video rounded-xl overflow-hidden bg-pink-100 flex items-center justify-center">
    <button id="ytPlay" class="flex flex-col items-center gap-2 text-pink-700" aria-label="Putar video biografi">
      <span class="w-16 h-16 rounded-full bg-white/80 flex items-center justify-center text-2xl">▶</span>
      <span class="text-xs font-medium">Video biografi {{ $a['nama'] }}</span>
    </button>
  </div>
  <p id="ytNote" hidden class="text-xs text-pink-800 text-center py-2">Ini video contoh. i.</p>
</div>

<article class="mt-6 max-w-4xl mx-auto bg-[#FDF3F4] rounded-2xl p-4 sm:p-8 grid md:grid-cols-[1fr_1.5fr] gap-6">
  <div class="bg-[#F0D2CB] rounded-3xl p-5 space-y-6">
    <div class="w-40 h-40 mx-auto rounded-full bg-pink-300 flex items-center justify-center text-5xl font-bold text-white">{{ strtoupper(substr($a['nama'], 0, 1)) }}</div>
    <div>
      <h3 class="bg-pink-100 rounded-full px-4 py-1.5 font-extrabold text-lg">KONTAK</h3>
      <ul class="mt-3 space-y-2 text-sm"><li>Nomor telepon (contoh)</li><li>Email (contoh)</li><li>{{ $a['lokasi'] }}</li></ul>
    </div>
    <div>
      <h3 class="bg-pink-100 rounded-full px-4 py-1.5 font-extrabold text-lg">KEAHLIAN</h3>
      <ul class="mt-3 space-y-2 text-sm list-disc pl-5"><li>Keahlian 1 (contoh)</li><li>Keahlian 2 (contoh)</li><li>Keahlian 3 (contoh)</li></ul>
    </div>
  </div>

  <div>
    <h2 class="text-3xl sm:text-4xl font-extrabold text-pink-400 leading-tight">{{ $a['nama'] }}</h2>
    <p class="mt-2 tracking-[0.25em] text-sm uppercase">Penerima {{ $a['beasiswa'] }}</p>
    <hr class="my-4 border-gray-700">
    <p class="text-sm text-gray-600 text-justify">.</p>

    <h3 class="mt-6 bg-pink-100 rounded-full px-5 py-2 font-extrabold text-lg">PENDIDIKAN</h3>
    <div class="mt-3 text-sm"><p class="font-bold">Nama sekolah  <span class="float-right font-normal">Tahun</span></p><p class="text-gray-600">Jurusan atau program (contoh)</p></div>

    <h3 class="mt-6 bg-pink-100 rounded-full px-5 py-2 font-extrabold text-lg">PENGALAMAN</h3>
    <div class="mt-3 text-sm space-y-3">
      <div><p class="font-bold">Organisasi / kegiatan 1 | Tahun</p><p class="text-gray-600">Peran </p></div>
      <div><p class="font-bold">Organisasi / kegiatan 2 | Tahun</p><p class="text-gray-600">Peran </p></div>
    </div>
  </div>
</article>
<p class="text-center text-xs text-gray-500 mt-3">a.</p>

<script>
  const ytP = document.getElementById('ytPlay');
  if (ytP) {
    ytP.onclick = function () {
      var box = document.getElementById('yt'), id = box.dataset.id;
      if (!id) { document.getElementById('ytNote').hidden = false; return; }
      box.innerHTML = '<iframe class="absolute inset-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/' + id + '?autoplay=1" allow="autoplay; encrypted-media" allowfullscreen loading="lazy"></iframe>';
    };
  }
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
