<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ config('app.name', 'ScholarPath') }} - Start Your Dream University</title>
  <meta name="description" content="Find the best scholarships for your dream university. Explore verified scholarships, career tips, and trusted opportunities." />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; }

    /* ===== HERO CAROUSEL ===== */
    .hero-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 0.8s ease-in-out; }
    .hero-slide.active { opacity: 1; }
    .hero-slide img { width: 100%; height: 100%; object-fit: cover; }
    .hero-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.42); backdrop-filter: blur(1.5px); }
    .slide-dot { transition: all 0.3s ease; cursor: pointer; }
    .slide-dot.active { width: 1.5rem; background: white; }

    /* ===== CATEGORY ===== */
    .category-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .category-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(59,130,246,0.2); }
    .category-card.active-cat { background: #dbeafe; border-color: #3b82f6; }

    /* ===== CARDS ===== */
    .scholarship-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .scholarship-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
    .why-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .why-card:hover { transform: translateY(-5px); box-shadow: 0 10px 28px rgba(59,130,246,0.18); }
    .blog-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .blog-card:hover { transform: translateY(-4px); box-shadow: 0 10px 28px rgba(0,0,0,0.12); }
    .location-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .location-card:hover { transform: translateY(-5px); box-shadow: 0 10px 28px rgba(59,130,246,0.2); }

    /* ===== STEP ===== */
    .step-active { background: #1d4ed8; box-shadow: 0 4px 20px rgba(29,78,216,0.4); }

    /* ===== NAV ===== */
    .nav-link { position: relative; }
    .nav-link::after { content: ""; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #3b82f6; transition: width 0.3s ease; }
    .nav-link:hover::after { width: 100%; }
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }

    /* ===== MOBILE NAV ===== */
    #mobile-menu { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
    #mobile-menu.open { max-height: 300px; }
  </style>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

  <!-- ===== NAVBAR ===== -->
  <header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
      <!-- Single row: nav links + auth buttons -->
      <div class="hidden sm:flex items-center justify-between py-3">
        <!-- Nav links -->
        <nav class="flex items-center gap-5 md:gap-7">
          <a href="#" class="nav-link text-sm font-semibold text-blue-600 border-b-2 border-blue-600 pb-0.5">Home</a>
          <a href="#" class="nav-link text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">Find Scholarship</a>
          <a href="#" class="nav-link text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">LOMBA</a>
          <a href="#" class="nav-link text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">Dashboard</a>
          <a href="#" class="nav-link text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">ALUMNI</a>
        </nav>
        <!-- Auth buttons -->
        <div class="flex items-center gap-2">
          <button id="btn-signup" class="flex items-center gap-1.5 text-sm text-gray-700 border border-gray-300 px-3 py-1.5 rounded-md hover:bg-gray-50 transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            Sign up
          </button>
          <button id="btn-login" class="flex items-center gap-1.5 text-sm text-white bg-blue-600 px-3 py-1.5 rounded-md hover:bg-blue-700 transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3"/></svg>
            Log In
          </button>
        </div>
      </div>
      <!-- Mobile row: hamburger + auth -->
      <div class="sm:hidden flex items-center justify-between py-2">
        <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-gray-50" aria-label="Open menu">
          <span class="w-5 h-0.5 bg-gray-600 rounded" id="hb-line1"></span>
          <span class="w-5 h-0.5 bg-gray-600 rounded" id="hb-line2"></span>
          <span class="w-5 h-0.5 bg-gray-600 rounded" id="hb-line3"></span>
        </button>
        <div class="flex items-center gap-2">
          <button class="text-xs text-gray-700 border border-gray-300 px-2.5 py-1.5 rounded-md hover:bg-gray-50">Sign up</button>
          <button class="text-xs text-white bg-blue-600 px-2.5 py-1.5 rounded-md hover:bg-blue-700">Log In</button>
        </div>
      </div>
    </div>
    <!-- Mobile dropdown -->
    <div id="mobile-menu" class="sm:hidden border-t border-gray-100 bg-white">
      <nav class="flex flex-col px-4 py-2 gap-1">
        <a href="#" class="text-sm font-semibold text-blue-600 py-2 border-b border-gray-50">Home</a>
        <a href="#" class="text-sm text-gray-600 py-2 border-b border-gray-50 hover:text-blue-600">Find Scholarship</a>
        <a href="#" class="text-sm text-gray-600 py-2 border-b border-gray-50 hover:text-blue-600">LOMBA</a>
        <a href="#" class="text-sm text-gray-600 py-2 border-b border-gray-50 hover:text-blue-600">Dashboard</a>
        <a href="#" class="text-sm text-gray-600 py-2 hover:text-blue-600">ALUMNI</a>
      </nav>
    </div>
  </header>

  <!-- ===== HERO CAROUSEL ===== -->
  <section class="relative w-full overflow-hidden" style="height: clamp(220px, 45vw, 420px);">

    <!-- Slide 1 -->
    <div class="hero-slide active" id="slide-0">
      <img src="{{ asset('images/hero.jpg') }}" alt="University students studying" />
      <div class="hero-overlay"></div>
      <div class="absolute inset-0 flex flex-col justify-center px-5 sm:px-12 md:px-16">
        <div class="bg-white/15 backdrop-blur-sm rounded-xl px-3 py-1.5 w-fit mb-3 flex items-center gap-2">
          <span class="text-white font-bold text-lg sm:text-2xl">2k</span>
          <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
          <span class="text-white/80 text-xs">Students</span>
        </div>
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight max-w-xs sm:max-w-lg">
          Start Your Dream <span class="text-blue-400">University</span>
        </h1>
        <p class="text-white/75 text-xs sm:text-sm mt-2 max-w-xs sm:max-w-md">Find the perfect scholarship and build your future today.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide" id="slide-1">
      <img src="{{ asset('images/delhi.jpg') }}" alt="Delhi India campus" />
      <div class="hero-overlay"></div>
      <div class="absolute inset-0 flex flex-col justify-center px-5 sm:px-12 md:px-16">
        <p class="text-blue-300 font-semibold text-xs sm:text-sm mb-2 tracking-widest uppercase">Dream Location</p>
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight max-w-xs sm:max-w-lg">
          Study in Your <span class="text-blue-400">Dream City</span>
        </h1>
        <p class="text-white/75 text-xs sm:text-sm mt-2 max-w-xs sm:max-w-md">Opportunities await in the world's greatest universities.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide" id="slide-2">
      <img src="{{ asset('images/pune.jpg') }}" alt="Pune India scholarship" />
      <div class="hero-overlay"></div>
      <div class="absolute inset-0 flex flex-col justify-center px-5 sm:px-12 md:px-16">
        <p class="text-yellow-300 font-semibold text-xs sm:text-sm mb-2 tracking-widest uppercase">Scholarship Awaits</p>
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight max-w-xs sm:max-w-lg">
          Apply for Top <span class="text-yellow-400">Scholarships</span>
        </h1>
        <p class="text-white/75 text-xs sm:text-sm mt-2 max-w-xs sm:max-w-md">Thousands of verified scholarships ready for your application.</p>
      </div>
    </div>

    <!-- Arrow Prev -->
    <button id="hero-prev" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 bg-white/25 hover:bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-200">
      <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
    </button>
    <!-- Arrow Next -->
    <button id="hero-next" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 bg-white/25 hover:bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-200">
      <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20">
      <span class="slide-dot active w-6 h-2 rounded-full bg-white" data-index="0" onclick="goToSlide(0)"></span>
      <span class="slide-dot w-2 h-2 rounded-full bg-white/50" data-index="1" onclick="goToSlide(1)"></span>
      <span class="slide-dot w-2 h-2 rounded-full bg-white/50" data-index="2" onclick="goToSlide(2)"></span>
    </div>
  </section>

  <!-- ===== SCHOLARSHIP CATEGORY ===== -->
  <section class="py-8 px-4 sm:px-6">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between mb-1">
        <h2 class="text-base sm:text-lg font-bold text-blue-600 underline decoration-blue-600">Scholarship Category</h2>
        <a href="#" class="text-xs text-blue-500 hover:underline flex items-center gap-1">Show more <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></a>
      </div>
      <p class="text-xs text-gray-500 mb-6">Explore the Most Scholarship - Trending Opportunities Await!</p>
      <!-- Category cards — grid 2 kolom mobile, 4 kolom desktop, rata tengah -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="category-card active-cat bg-blue-50 border border-blue-100 rounded-2xl p-4 sm:p-5 flex flex-col items-center gap-3 cursor-pointer">
          <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-8 h-8 sm:w-9 sm:h-9 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17M1 9v6"/><path d="M5 13.18v4L12 21l7-3.82v-4"/></svg>
          </div>
          <div class="text-center">
            <p class="text-xs sm:text-sm font-bold text-gray-700">UNIVersitsy</p>
            <p class="text-[10px] text-gray-400 mt-0.5 leading-tight">Perguruan Tinggi Negeri</p>
          </div>
        </div>
        <div class="category-card bg-blue-50 border border-blue-100 rounded-2xl p-4 sm:p-5 flex flex-col items-center gap-3 cursor-pointer">
          <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-8 h-8 sm:w-9 sm:h-9 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
          </div>
          <div class="text-center">
            <p class="text-xs sm:text-sm font-bold text-gray-700">Swasta</p>
            <p class="text-[10px] text-gray-400 mt-0.5 leading-tight">Universitas Swasta Terpilih</p>
          </div>
        </div>
        <div class="category-card bg-blue-50 border border-blue-100 rounded-2xl p-4 sm:p-5 flex flex-col items-center gap-3 cursor-pointer">
          <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-8 h-8 sm:w-9 sm:h-9 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M3 15h18M9 3v18M15 3v18"/></svg>
          </div>
          <div class="text-center">
            <p class="text-xs sm:text-sm font-bold text-gray-700">Pemerintah</p>
            <p class="text-[10px] text-gray-400 mt-0.5 leading-tight">Beasiswa dari Pemerintah</p>
          </div>
        </div>
        <div class="category-card bg-blue-50 border border-blue-100 rounded-2xl p-4 sm:p-5 flex flex-col items-center gap-3 cursor-pointer">
          <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-8 h-8 sm:w-9 sm:h-9 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <div class="text-center">
            <p class="text-xs sm:text-sm font-bold text-gray-700">Internasional</p>
            <p class="text-[10px] text-gray-400 mt-0.5 leading-tight">Beasiswa Luar Negeri</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== HOW SCHOLARSHIP WORK ===== -->
  <section class="bg-blue-50 py-8 px-4 sm:px-6">
    <div class="max-w-screen-xl mx-auto">
      <h2 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-7 underline">How scholarship work</h2>
      <!-- Mobile: 2x2 grid / Desktop: 4 cols row -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-4 relative">
        <!-- Dashed line desktop only -->
        <div class="hidden sm:block absolute top-5 left-[12%] right-[12%] border-t-2 border-dashed border-blue-300 z-0"></div>
        <div class="flex flex-col items-center z-10 text-center">
          <div class="w-10 h-10 rounded-full bg-white border-2 border-blue-200 flex items-center justify-center mb-3 shadow-sm">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
          </div>
          <p class="text-xs font-semibold text-gray-700">Create account</p>
          <p class="text-[10px] text-gray-400 mt-1 leading-tight">Sign up in just a few clicks and unlock endless opportunities.</p>
        </div>
        <div class="flex flex-col items-center z-10 text-center">
          <div class="w-12 h-12 rounded-full step-active flex items-center justify-center mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
          </div>
          <p class="text-xs font-bold text-blue-700">Upload CV/Resume</p>
          <p class="text-[10px] text-gray-400 mt-1 leading-tight">Upload your resume to let employers discover you faster.</p>
        </div>
        <div class="flex flex-col items-center z-10 text-center">
          <div class="w-10 h-10 rounded-full bg-white border-2 border-blue-200 flex items-center justify-center mb-3 shadow-sm">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <p class="text-xs font-semibold text-gray-700">Find suitable scholarship</p>
          <p class="text-[10px] text-gray-400 mt-1 leading-tight">Browse and filter to find the perfect match for you.</p>
        </div>
        <div class="flex flex-col items-center z-10 text-center">
          <div class="w-10 h-10 rounded-full bg-white border-2 border-blue-200 flex items-center justify-center mb-3 shadow-sm">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <p class="text-xs font-semibold text-gray-700">Apply scholarship</p>
          <p class="text-[10px] text-gray-400 mt-1 leading-tight">Easily apply with one click and take the next step.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== LATEST HIGHLIGHTED SCHOLARSHIP ===== -->
  <section class="px-4 sm:px-6 py-6 bg-gray-100">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between mb-1">
        <h2 class="text-sm sm:text-base font-bold text-gray-800">Latest <span class="text-yellow-500">Highlighted</span> Scholarship</h2>
        <a href="#" class="text-xs text-blue-500 hover:underline flex items-center gap-1">Show more <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></a>
      </div>
      <p class="text-xs text-gray-500 mb-4">Don't Miss Out! Check Out the Latest Highlighted Job Opportunities!!</p>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200">
          <div class="p-4 h-36 flex flex-col justify-between">
            <div class="flex items-center gap-2">
              <div class="w-9 h-9 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7h20L12 2zM2 10h20v2H2zM4 14h16v6H4z"/></svg>
              </div>
              <div>
                <p class="text-[10px] font-bold text-yellow-600 leading-none">Beasiswa</p>
                <p class="text-sm font-extrabold text-gray-800 leading-tight">Bank Indonesia</p>
              </div>
            </div>
            <p class="text-[9px] text-gray-500 font-medium tracking-wide">TAHAP II TAHUN 2022</p>
          </div>
        </div>
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200"></div>
        </div>
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200"></div>
        </div>
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200"></div>
        </div>
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200"></div>
        </div>
        <div class="scholarship-card bg-white rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY CHOOSE US ===== -->
  <section class="px-4 sm:px-6 py-8 bg-gray-100">
    <div class="max-w-screen-xl mx-auto">
      <h2 class="text-lg sm:text-xl font-extrabold text-gray-800 text-center mb-6 underline">Why <span class="text-blue-500">Choose</span> Us?</h2>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">
        <div class="why-card bg-blue-50 border border-blue-100 rounded-xl p-3 sm:p-4 flex flex-col items-center gap-2 cursor-pointer text-center">
          <div class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 3a9 9 0 1 0 0 18A9 9 0 0 0 12 3z"/></svg>
          </div>
          <p class="text-[10px] sm:text-xs font-bold text-gray-700">Verified Scholarship</p>
          <p class="text-[9px] sm:text-[10px] text-gray-400 leading-tight">Browse with confidence—every posting is verified for authenticity.</p>
        </div>
        <div class="why-card bg-blue-50 border border-blue-100 rounded-xl p-3 sm:p-4 flex flex-col items-center gap-2 cursor-pointer text-center">
          <div class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          </div>
          <p class="text-[10px] sm:text-xs font-bold text-gray-700">Easily Apply</p>
          <p class="text-[9px] sm:text-[10px] text-gray-400 leading-tight">Apply in just one click—quick and hassle-free!</p>
        </div>
        <div class="why-card bg-blue-50 border border-blue-100 rounded-xl p-3 sm:p-4 flex flex-col items-center gap-2 cursor-pointer text-center">
          <div class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <p class="text-[10px] sm:text-xs font-bold text-gray-700">Career Advice</p>
          <p class="text-[9px] sm:text-[10px] text-gray-400 leading-tight">Get expert tips to level up your professional journey.</p>
        </div>
        <div class="why-card bg-blue-50 border border-blue-100 rounded-xl p-3 sm:p-4 flex flex-col items-center gap-2 cursor-pointer text-center">
          <div class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
          </div>
          <p class="text-[10px] sm:text-xs font-bold text-gray-700">Trusted Alumni</p>
          <p class="text-[9px] sm:text-[10px] text-gray-400 leading-tight">Connect with reputable companies offering real opportunities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== GET DREAM LOCATION ===== -->
  <section class="px-4 sm:px-6 py-6 bg-white">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between mb-1">
        <h2 class="text-sm sm:text-base font-bold text-gray-800">Get Dream <span class="text-blue-500">Location</span></h2>
        <a href="#" class="text-xs text-blue-500 hover:underline flex items-center gap-1">Show more <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></a>
      </div>
      <p class="text-xs text-gray-500 mb-4">Find Your Dream Job in Your Dream Location - Opportunities Await Everywhere!</p>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <div class="location-card rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden">
            <img src="{{ asset('images/delhi.jpg') }}" alt="Delhi India" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
          <div class="py-2 px-3 bg-white flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <p class="text-xs font-semibold text-gray-700">Delhi, India</p>
          </div>
        </div>
        <div class="location-card rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden">
            <img src="{{ asset('images/pune.jpg') }}" alt="Pune India" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
          <div class="py-2 px-3 bg-white flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <p class="text-xs font-semibold text-gray-700">Pune, India</p>
          </div>
        </div>
        <div class="location-card rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden">
            <img src="{{ asset('images/chennai.jpg') }}" alt="Chennai India" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
          <div class="py-2 px-3 bg-white flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <p class="text-xs font-semibold text-gray-700">Chennai, India</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== COOL PLACE SCHOLARSHIP ===== -->
  <section class="px-4 sm:px-6 py-6 bg-white">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between mb-1">
        <h2 class="text-sm sm:text-base font-bold text-gray-800 underline">Cool place schorlaship</h2>
        <a href="#" class="text-xs text-blue-500 hover:underline flex items-center gap-1">Show more <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></a>
      </div>
      <p class="text-xs text-gray-500 mb-4">Discover a Workplace Where Passion Meets Growth - Find Your Cool Place to Work!</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="scholarship-card rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-200 to-blue-300 flex items-end p-3">
            <div class="h-5 w-20 bg-gray-200 rounded opacity-60"></div>
          </div>
        </div>
        <div class="scholarship-card rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-36">
          <div class="w-full h-full bg-gradient-to-br from-blue-200 to-blue-300 flex items-end p-3">
            <div class="h-5 w-20 bg-gray-200 rounded opacity-60"></div>
          </div>
        </div>
        <div class="scholarship-card rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-44">
          <div class="w-full h-full bg-gradient-to-br from-blue-200 to-blue-300 flex items-end p-3">
            <div class="h-5 w-20 bg-gray-200 rounded opacity-60"></div>
          </div>
        </div>
        <div class="scholarship-card rounded-xl overflow-hidden cursor-pointer border border-gray-200 h-44">
          <div class="w-full h-full bg-gradient-to-br from-blue-200 to-blue-300 flex items-end p-3">
            <div class="h-5 w-20 bg-gray-200 rounded opacity-60"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== TRUSTED USER REVIEWS ===== -->
  <section class="px-4 sm:px-6 py-8 bg-white">
    <div class="max-w-screen-xl mx-auto">
      <h2 class="text-lg sm:text-xl font-extrabold text-gray-800 text-center mb-1 underline">Trusted User <span class="text-blue-500">Reviews</span></h2>
      <p class="text-xs text-gray-500 text-center mb-12">Hear from Real Users - Genuine Reviews You Can Trust!!</p>
      <div class="bg-blue-50 border border-blue-100 rounded-2xl pt-12 pb-6 px-5 sm:px-8 max-w-md mx-auto text-center relative">
        <div class="absolute -top-9 left-1/2 -translate-x-1/2">
          <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full border-4 border-white shadow-md overflow-hidden bg-blue-200">
            <img src="{{ asset('images/blog1.jpg') }}" alt="Reviewer" class="w-full h-full object-cover object-top" />
          </div>
        </div>
        <p class="text-xs sm:text-sm text-gray-600 italic leading-relaxed underline mb-4">
          "Well Option made my job search so easy!! I found my dream job within days. The platform is user-friendly, and the verified job listings gave me complete confidence. Highly recommended!"
        </p>
        <p class="text-sm font-bold text-gray-800">Jhon Haward</p>
        <p class="text-xs text-gray-500 underline mt-0.5">UI/UX Designer</p>
      </div>
    </div>
  </section>

  <!-- ===== QUICK CAREER TIPS ===== -->
  <section class="px-4 sm:px-6 py-6 bg-white">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between mb-1">
        <h2 class="text-sm sm:text-base font-bold text-gray-800 underline">Quick <span class="text-blue-500">Career</span> Tips</h2>
        <a href="#" class="text-xs text-blue-500 hover:underline flex items-center gap-1">Show more <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></a>
      </div>
      <p class="text-xs text-gray-500 mb-5">Boost Your Career with Quick and Smart Tips - Stay Ahead in the Job Market!</p>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <!-- Blog 1 -->
        <div class="blog-card bg-white rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden">
            <img src="{{ asset('images/blog1.jpg') }}" alt="Resume Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
          <div class="p-3">
            <div class="flex flex-wrap items-center gap-2 mb-2">
              <div class="bg-white border border-gray-200 rounded px-1.5 py-0.5 flex items-center gap-1">
                <div class="w-4 h-4 rounded-sm bg-red-600 flex items-center justify-center"><span class="text-white text-[6px] font-bold">TCS</span></div>
                <span class="text-[9px] font-bold text-gray-600">TCS</span>
              </div>
              <span class="text-[9px] text-gray-400">📅 15 March, 2025</span>
              <span class="text-[9px] text-gray-400">⏱ 5 min read</span>
            </div>
            <h3 class="text-xs font-bold text-gray-800 leading-tight mb-2">Resume Tips for Landing Your Dream Job</h3>
            <a href="#" class="text-[10px] text-blue-500 hover:underline">Show More →</a>
          </div>
        </div>
        <!-- Blog 2 -->
        <div class="blog-card bg-white rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden">
            <img src="{{ asset('images/blog2.jpg') }}" alt="Networking" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
          <div class="p-3">
            <div class="flex flex-wrap items-center gap-2 mb-2">
              <div class="bg-white border border-gray-200 rounded px-1.5 py-0.5 flex items-center gap-1">
                <div class="w-4 h-4 rounded-sm bg-purple-600 flex items-center justify-center"><span class="text-white text-[5px] font-bold">ACC</span></div>
                <span class="text-[9px] font-bold text-gray-600">accenture</span>
              </div>
              <span class="text-[9px] text-gray-400">📅 10 March, 2025</span>
              <span class="text-[9px] text-gray-400">⏱ 8 min read</span>
            </div>
            <h3 class="text-xs font-bold text-gray-800 leading-tight mb-2">The Power of Networking in Career Growth</h3>
            <a href="#" class="text-[10px] text-blue-500 hover:underline">Show More →</a>
          </div>
        </div>
        <!-- Blog 3 -->
        <div class="blog-card bg-white rounded-xl overflow-hidden border border-gray-200 cursor-pointer">
          <div class="h-36 sm:h-28 overflow-hidden bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
            <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
          </div>
          <div class="p-3">
            <div class="flex flex-wrap items-center gap-2 mb-2">
              <div class="bg-white border border-gray-200 rounded px-1.5 py-0.5 flex items-center gap-1">
                <div class="w-4 h-4 rounded-sm bg-blue-700 flex items-center justify-center"><span class="text-white text-[5px] font-bold">INF</span></div>
                <span class="text-[9px] font-bold text-gray-600">Infosys</span>
              </div>
              <span class="text-[9px] text-gray-400">📅 5 March, 2025</span>
              <span class="text-[9px] text-gray-400">⏱ 4 min read</span>
            </div>
            <h3 class="text-xs font-bold text-gray-800 leading-tight mb-2">Work-Life Balance: Strategies for Professionals</h3>
            <a href="#" class="text-[10px] text-blue-500 hover:underline">Show More →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    // ---- HERO CAROUSEL ----
    const totalSlides = 3;
    let currentSlide = 0;
    let autoplayTimer;

    function goToSlide(index) {
      // Remove active from current
      document.getElementById('slide-' + currentSlide).classList.remove('active');
      document.querySelectorAll('.slide-dot')[currentSlide].classList.remove('active', 'w-6');
      document.querySelectorAll('.slide-dot')[currentSlide].classList.add('w-2', 'bg-white/50');
      document.querySelectorAll('.slide-dot')[currentSlide].style.background = '';

      // Set new
      currentSlide = (index + totalSlides) % totalSlides;
      document.getElementById('slide-' + currentSlide).classList.add('active');
      const dots = document.querySelectorAll('.slide-dot');
      dots.forEach((d, i) => {
        d.classList.remove('active', 'w-6');
        d.classList.add('w-2');
        d.style.background = 'rgba(255,255,255,0.5)';
      });
      dots[currentSlide].classList.add('active', 'w-6');
      dots[currentSlide].classList.remove('w-2');
      dots[currentSlide].style.background = 'white';

      resetAutoplay();
    }

    function nextSlide() { goToSlide(currentSlide + 1); }
    function prevSlide() { goToSlide(currentSlide - 1); }

    function resetAutoplay() {
      clearInterval(autoplayTimer);
      autoplayTimer = setInterval(nextSlide, 4500);
    }

    document.getElementById('hero-next').addEventListener('click', nextSlide);
    document.getElementById('hero-prev').addEventListener('click', prevSlide);

    // Initialize dots state
    document.querySelectorAll('.slide-dot').forEach((d, i) => {
      if (i === 0) {
        d.style.background = 'white';
        d.style.width = '1.5rem';
      } else {
        d.style.background = 'rgba(255,255,255,0.5)';
        d.style.width = '0.5rem';
      }
    });

    // Start autoplay
    autoplayTimer = setInterval(nextSlide, 4500);

    // ---- MOBILE HAMBURGER ----
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
    });

    // ---- CATEGORY CARD CLICK ----
    document.querySelectorAll('.category-card').forEach(card => {
      card.addEventListener('click', function() {
        document.querySelectorAll('.category-card').forEach(c => {
          c.classList.remove('active-cat');
          c.style.background = '';
          c.style.borderColor = '';
        });
        this.classList.add('active-cat');
      });
    });
  </script>
</body>
</html>
