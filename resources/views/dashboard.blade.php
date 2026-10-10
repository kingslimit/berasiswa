<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Beasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
      * { box-sizing: border-box; }
      body { font-family: 'Inter', sans-serif; }
      .nav-link { position: relative; }
      .nav-link::after { content: ""; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #3b82f6; transition: width 0.3s ease; }
      .nav-link:hover::after { width: 100%; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen text-gray-800">

    <!-- 1. NAVBAR (MENGIKUTI HALAMAN HOME) -->
    <header class="sticky top-0 z-50 bg-[#B9D9EB] border-b border-blue-200/60 shadow-sm">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between py-3">
                <!-- Nav Links Desktop -->
                <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
                    <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
                    <a href="/find-scholarship" class="nav-link hover:text-blue-700 transition-colors duration-200">Find scholarship</a>
                    <a href="/lomba" class="nav-link hover:text-blue-700 transition-colors duration-200">LOMBA</a>
                    <a href="/dashboard" class="nav-link font-medium text-gray-900 border-b-2 border-gray-900 pb-0.5">Dashboard</a>
                    <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
                </nav>

                <!-- Right Side: User Avatar & Notification -->
                <div class="hidden sm:flex items-center gap-3">
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

                <!-- Mobile: Hamburger & Profile -->
                <div class="sm:hidden flex items-center justify-between w-full">
                    <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Buka menu">
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-gray-800 text-sm tracking-wide">DASHBOARD</span>
                    </div>
                    <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
                        <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden sm:hidden border-t border-blue-200/60 bg-[#B9D9EB]">
            <nav class="flex flex-col px-4 py-2 gap-1 text-sm">
                <a href="/" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Home</a>
                <a href="/find-scholarship" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Find scholarship</a>
                <a href="/lomba" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">LOMBA</a>
                <a href="/dashboard" class="py-2 border-b border-blue-200/40 font-semibold text-gray-900">Dashboard</a>
                <a href="/alumni" class="py-2 text-gray-800 hover:text-blue-700">ALUMNI</a>
            </nav>
        </div>
    </header>

    <!-- 2. SUB-HEADER / SEARCH BAR AREA -->
    <div class="bg-white border-b px-4 md:px-12 py-3 flex flex-col md:flex-row items-center justify-between gap-3">
        <!-- Country Picker & Search Input -->
        <div class="flex items-center border rounded-md overflow-hidden w-full md:max-w-lg">
            <div class="flex items-center gap-2 px-3 py-2 border-r bg-gray-50 text-xs md:text-sm text-gray-700 cursor-pointer whitespace-nowrap">
                <span>🇮🇳</span>
                <span>India</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div class="flex items-center gap-2 px-3 py-2 w-full">
                <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="Job title, keyword, company" class="w-full text-xs md:text-sm outline-none bg-transparent placeholder-gray-400">
            </div>
        </div>
    </div>

    <!-- CONTAINER UTAMA -->
    <div class="flex flex-col md:flex-row min-h-[calc(100vh-140px)]">

        <!-- 3. SIDEBAR KIRI -->
        <aside class="w-full md:w-64 bg-white border-b md:border-b-0 md:border-r px-4 py-4 md:py-6 flex flex-col justify-between md:min-h-[calc(100vh-140px)]">
            <div class="space-y-4 md:space-y-6">
                <p class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider px-3">CANDIDATE DASHBOARD</p>
                <nav class="flex md:flex-col gap-1 overflow-x-auto whitespace-nowrap pb-2 md:pb-0">
                    <!-- Overview -->
                    <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm font-semibold bg-blue-100/60 text-blue-700 border-b-2 md:border-b-0 md:border-l-4 border-blue-600 rounded md:rounded-none">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span>Overview</span>
                    </a>

                    <!-- Applied -->
                    <a href="/applied" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-600 hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM9 5h6v2H9V5zm11 14H4V9h16v10z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12v3"></path>
                        </svg>
                        <span>Applied</span>
                    </a>

                    <!-- Alert -->
                    <a href="/alert" class="flex items-center justify-between gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-700 font-medium hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                            <span>Alert</span>
                        </div>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2 py-0.5 rounded">09</span>
                    </a>

                    <!-- Settings -->
                    <a href="/settings/profile" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-600 hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>
        </aside>

        <!-- 4. MAIN CONTENT AREA -->
        <main class="flex-1 p-4 md:p-8 space-y-6 overflow-hidden">
            
            <!-- Greeting Header -->
            <div>
                <h1 class="text-lg md:text-xl font-bold text-gray-900">Hello, Esther Howard</h1>
                <p class="text-xs text-gray-500 mt-0.5">Here is your daily activities and SCHOLARSHIP alerts</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <!-- Card 1 -->
                <div class="bg-[#EBF3FA] p-4 md:p-5 rounded-lg flex items-center justify-between border border-blue-50">
                    <div>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">589</p>
                        <p class="text-xs text-gray-600 mt-1">Applied scholarship</p>
                    </div>
                    <div class="w-10 h-10 bg-white rounded flex items-center justify-center text-blue-500 shadow-sm">
                        💼
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-[#EAF5EA] p-4 md:p-5 rounded-lg flex items-center justify-between border border-green-50">
                    <div>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">574</p>
                        <p class="text-xs text-gray-600 mt-1">alert</p>
                    </div>
                    <div class="w-10 h-10 bg-white rounded flex items-center justify-center text-green-500 shadow-sm">
                        🔔
                    </div>
                </div>
            </div>

            <!-- Banner Red Alert -->
            <div class="bg-[#E55353] text-white p-4 md:p-5 rounded-xl flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="flex items-center gap-3 md:gap-4">
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full overflow-hidden border-2 border-white flex-shrink-0">
                        <img src="https://i.pravatar.cc/100?img=47" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h2 class="font-semibold text-sm md:text-base">Your profile editing is not completed.</h2>
                        <p class="text-[11px] md:text-xs text-red-100 mt-0.5">Complete your profile editing & build your custom Resume</p>
                    </div>
                </div>
                <button class="w-full md:w-auto bg-white text-red-600 px-4 md:px-5 py-2 rounded-md font-semibold text-xs flex items-center justify-center gap-2 hover:bg-gray-100 transition">
                    Edit Profile <span>&rarr;</span>
                </button>
            </div>

            <!-- Recently Applied Table -->
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-sm text-gray-900">Recently Applied</h3>
                    <a href="#" class="text-xs text-gray-500 hover:text-blue-600 flex items-center gap-1">View all &rarr;</a>
                </div>
                
                <div class="bg-white border rounded-lg overflow-x-auto">
                    <div class="min-w-[600px]">
                        <!-- Table Header -->
                        <div class="bg-[#D1E5F5] px-6 py-2.5 grid grid-cols-12 text-xs font-medium text-gray-700">
                            <div class="col-span-5">Job</div>
                            <div class="col-span-3 text-center">Date Applied</div>
                            <div class="col-span-2 text-center">Status</div>
                            <div class="col-span-2 text-center">Action</div>
                        </div>

                        <!-- Table Row -->
                        <div class="px-6 py-4 grid grid-cols-12 items-center text-xs border-b">
                            <div class="col-span-5 flex items-center gap-3">
                                <div class="w-9 h-9 bg-green-500 text-white font-bold text-sm flex items-center justify-center rounded">
                                    Up
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-gray-900">Networking Engineer</span>
                                    <span class="bg-blue-100 text-blue-600 text-[10px] font-semibold px-2 py-0.5 rounded-full">FULL PAID</span>
                                </div>
                            </div>
                            <div class="col-span-3 text-center text-gray-500">Feb 2, 2024 19:28</div>
                            <div class="col-span-2 text-center">
                                <span class="inline-flex items-center gap-1 text-yellow-600 font-medium">
                                    ✓ Progress
                                </span>
                            </div>
                            <div class="col-span-2 text-center">
                                <button class="bg-[#E8EEF5] text-blue-700 px-3 py-1.5 rounded font-medium hover:bg-blue-100 transition">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        if (hamburger && mobileMenu) {
            hamburger.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
