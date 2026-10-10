<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Personal - Beasiswa</title>
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
                <nav class="hidden sm:flex items-center gap-6 md:gap-10 text-sm md:text-base font-normal text-gray-800">
                    <a href="/" class="nav-link hover:text-blue-700 transition-colors duration-200">Home</a>
                    <a href="/scholarships" class="nav-link hover:text-blue-700 transition-colors duration-200">Find scholarship</a>
                    <a href="/lomba" class="nav-link hover:text-blue-700 transition-colors duration-200">LOMBA</a>
                    <a href="/dashboard" class="nav-link font-medium text-gray-900 border-b-2 border-gray-900 pb-0.5">Dashboard</a>
                    <a href="/alumni" class="nav-link hover:text-blue-700 transition-colors duration-200">ALUMNI</a>
                </nav>

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

                <div class="sm:hidden flex items-center justify-between w-full">
                    <button id="hamburger" class="flex flex-col gap-1.5 p-1.5 rounded-md hover:bg-white/50" aria-label="Buka menu">
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                        <span class="w-5 h-0.5 bg-gray-800 rounded"></span>
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-gray-800 text-sm tracking-wide">SETTINGS</span>
                    </div>
                    <div class="w-8 h-8 rounded-full overflow-hidden border border-white">
                        <img src="https://i.pravatar.cc/100?img=47" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden sm:hidden border-t border-blue-200/60 bg-[#B9D9EB]">
            <nav class="flex flex-col px-4 py-2 gap-1 text-sm">
                <a href="/" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Home</a>
                <a href="/scholarships" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">Find scholarship</a>
                <a href="/lomba" class="py-2 border-b border-blue-200/40 text-gray-800 hover:text-blue-700">LOMBA</a>
                <a href="/dashboard" class="py-2 border-b border-blue-200/40 font-semibold text-gray-900">Dashboard</a>
                <a href="/alumni" class="py-2 text-gray-800 hover:text-blue-700">ALUMNI</a>
            </nav>
        </div>
    </header>

    <!-- 2. SUB-HEADER / SEARCH BAR AREA -->
    <div class="bg-white border-b px-4 md:px-12 py-3 flex flex-col md:flex-row items-center justify-between gap-3">
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

        <!-- 3. SIDEBAR KIRI (Responsif Mobile) -->
        <aside class="w-full md:w-64 bg-white border-b md:border-b-0 md:border-r px-4 py-4 md:py-6 flex flex-col justify-between">
            <div class="space-y-4 md:space-y-6">
                <p class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider px-3">CANDIDATE DASHBOARD</p>
                <nav class="flex md:flex-col gap-1 overflow-x-auto whitespace-nowrap pb-2 md:pb-0">
                    <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-600 hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span>Overview</span>
                    </a>
                    <a href="/applied" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-600 hover:bg-gray-50">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM9 5h6v2H9V5zm11 14H4V9h16v10z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12v3"></path>
                        </svg>
                        <span>Applied</span>
                    </a>
                    <a href="/alert" class="flex items-center justify-between gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-700 font-medium hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                            <span>Alert</span>
                        </div>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2 py-0.5 rounded">09</span>
                    </a>
                    <a href="/settings/personal" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm font-semibold bg-blue-100/60 text-blue-700 border-b-2 md:border-b-0 md:border-l-4 border-blue-600 rounded md:rounded-none">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>
        </aside>

        <!-- 4. MAIN CONTENT AREA -->
        <main class="flex-1 p-4 md:p-8 space-y-6 md:space-y-8 overflow-hidden">
            <h1 class="text-lg md:text-xl font-bold text-gray-900">Setting</h1>

            <!-- Settings Internal Navigation Tabs -->
            <div class="border-b flex gap-6 md:gap-8 text-xs md:text-sm text-gray-500 overflow-x-auto whitespace-nowrap">
                <a href="/settings/personal" class="flex items-center gap-2 pb-3 text-blue-600 border-b-2 border-blue-600 font-medium">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Personal</span>
                </a>
                <a href="/settings/profile" class="flex items-center gap-2 pb-3 hover:text-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Profile</span>
                </a>
                <a href="/settings/social" class="flex items-center gap-2 pb-3 hover:text-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    <span>Social Links</span>
                </a>
                <a href="/settings/account" class="flex items-center gap-2 pb-3 hover:text-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    <span>Account Setting</span>
                </a>
            </div>

            <!-- Basic Information Section -->
            <div class="space-y-4">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Basic Information</h2>

                <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                    <!-- Photo Upload Box -->
                    <div class="w-full md:w-48 h-44 md:h-48 border-2 border-dashed border-gray-200 rounded-lg p-4 flex flex-col items-center justify-center text-center cursor-pointer hover:border-blue-400 transition bg-white flex-shrink-0">
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="text-xs text-gray-700 font-medium"><span class="font-bold">Browse photo</span> or drop here</p>
                        <p class="text-[10px] text-gray-400 mt-1 md:mt-2 leading-tight">A photo larger than 400 pixels work best. Max photo size 5 MB.</p>
                    </div>

                    <!-- Input Fields Form -->
                    <form class="flex-1 space-y-4 max-w-2xl">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Full name -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Full name</label>
                                <input type="text" class="w-full border rounded-md px-3 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500">
                            </div>

                            <!-- Title/headline -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Title/headline</label>
                                <input type="text" class="w-full border rounded-md px-3 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Experience -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Experience</label>
                                <div class="relative">
                                    <select class="w-full border rounded-md px-3 py-2 text-xs text-gray-400 appearance-none bg-white focus:outline-none focus:border-blue-500">
                                        <option value="" disabled selected>Select...</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Educations -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Educations</label>
                                <div class="relative">
                                    <select class="w-full border rounded-md px-3 py-2 text-xs text-gray-400 appearance-none bg-white focus:outline-none focus:border-blue-500">
                                        <option value="" disabled selected>Select...</option>
                                        <option value="highschool">High School</option>
                                        <option value="bachelor">Bachelor</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personal Website -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Personal Website</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                </span>
                                <input type="text" placeholder="Website url..." class="w-full border rounded-md pl-9 pr-3 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500 placeholder-gray-400">
                            </div>
                        </div>

                        <!-- Save Changes Button -->
                        <div class="pt-2">
                            <button type="button" class="w-full sm:w-auto bg-[#0B63C6] text-white px-6 py-2.5 rounded-md font-semibold text-xs hover:bg-blue-700 transition shadow-sm">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Your CV / Resume Section -->
            <div class="space-y-4 pt-4 border-t">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Your CV</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-4xl">
                    
                    <!-- CV Card 1 -->
                    <div class="bg-gray-50 p-4 rounded-xl flex items-center justify-between border">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-900">CV</p>
                                <p class="text-[10px] text-gray-400">3.5 MB</p>
                            </div>
                        </div>
                        <button type="button" class="text-gray-400 hover:text-gray-600 font-bold px-2 py-1">•••</button>
                    </div>

                    <!-- CV Card 2 -->
                    <div class="bg-gray-50 p-4 rounded-xl flex items-center justify-between border">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-900">Student Grade</p>
                                <p class="text-[10px] text-gray-400">4.7 MB</p>
                            </div>
                        </div>
                        <button type="button" class="text-gray-400 hover:text-gray-600 font-bold px-2 py-1">•••</button>
                    </div>

                    <!-- Add CV Upload Box -->
                    <div class="border-2 border-dashed border-gray-200 rounded-xl p-4 flex items-center gap-3 cursor-pointer hover:border-blue-400 transition bg-white">
                        <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm flex-shrink-0">
                            +
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-900">Add CV / Resume</p>
                            <p class="text-[10px] text-gray-400">Browse file or drop here, only pdf</p>
                        </div>
                    </div>

                    <!-- CV Card 3 -->
                    <div class="bg-gray-50 p-4 rounded-xl flex items-center justify-between border">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-900">Visual Designer</p>
                                <p class="text-[10px] text-gray-400">1.3 MB</p>
                            </div>
                        </div>
                        <button type="button" class="text-gray-400 hover:text-gray-600 font-bold px-2 py-1">•••</button>
                    </div>

                </div>
            </div>
        </main>
    </div>

</body>
</html>
