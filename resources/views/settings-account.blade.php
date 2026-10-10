<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setting - Beasiswa</title>
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

        <!-- 3. SIDEBAR KIRI -->
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
            
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-xs md:text-sm text-gray-500 hover:text-red-500 hover:bg-red-50 md:hover:bg-transparent rounded transition">
                <svg class="w-5 h-5 text-gray-400 hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span>Log-out</span>
            </a>
        </aside>

        <!-- 4. MAIN CONTENT AREA -->
        <main class="flex-1 p-4 md:p-8 space-y-6 md:space-y-8 max-w-4xl overflow-hidden">
            <h1 class="text-lg md:text-xl font-bold text-gray-900">Settings</h1>

            <!-- Settings Internal Navigation Tabs -->
            <div class="border-b flex gap-6 md:gap-8 text-xs md:text-sm text-gray-500 overflow-x-auto whitespace-nowrap">
                <a href="/settings/personal" class="flex items-center gap-2 pb-3 hover:text-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
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
                <a href="/settings/account" class="flex items-center gap-2 pb-3 text-blue-600 border-b-2 border-blue-600 font-medium">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    <span>Account Setting</span>
                </a>
            </div>

            <!-- 1. Contact Info -->
            <div class="space-y-4">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Contact Info</h2>
                <form class="space-y-4">
                    <!-- Map Location -->
                    <div>
                        <label class="block text-xs font-medium text-gray-700 mb-1">Map Location</label>
                        <input type="text" class="w-full border rounded-md px-3 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-xs font-medium text-gray-700 mb-1">Phone</label>
                        <div class="flex items-center border rounded-md overflow-hidden bg-white w-full md:max-w-lg">
                            <div class="flex items-center gap-2 px-3 py-2 border-r bg-gray-50 text-xs font-medium text-gray-700 cursor-pointer whitespace-nowrap">
                                <span>🇧🇩</span>
                                <span>+880</span>
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                            <input type="text" placeholder="Phone number.." class="w-full px-3 py-2 text-xs outline-none placeholder-gray-400">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-xs font-medium text-gray-700 mb-1">Email</label>
                        <div class="relative w-full md:max-w-lg">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                            <input type="email" placeholder="Email address" class="w-full border rounded-md pl-9 pr-3 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500 placeholder-gray-400">
                        </div>
                    </div>

                    <div class="pt-1">
                        <button type="button" class="w-full sm:w-auto bg-[#0B63C6] text-white px-6 py-2.5 rounded-md font-semibold text-xs hover:bg-blue-700 transition shadow-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- 2. Notification -->
            <div class="space-y-3 pt-6 border-t">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Notification</h2>
                <div class="space-y-2.5 text-xs text-gray-600">
                    <label class="flex items-center gap-2.5 cursor-pointer">
                        <input type="checkbox" checked class="w-4 h-4 rounded text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span>Notify me when shortlisted me</span>
                    </label>
                    <label class="flex items-center gap-2.5 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span>Notify me when my applied are expire</span>
                    </label>
                    <label class="flex items-center gap-2.5 cursor-pointer">
                        <input type="checkbox" checked class="w-4 h-4 rounded text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span>Notify me when I have up to 5 alerts</span>
                    </label>
                </div>
            </div>

            <!-- 3. Profile Privacy -->
            <div class="space-y-3 pt-6 border-t">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Profile Privacy</h2>
                <div class="flex items-center border rounded-md p-2 bg-white w-full sm:max-w-sm gap-3">
                    <label class="relative inline-flex items-center cursor-pointer flex-shrink-0">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ml-2 text-xs font-bold text-blue-600 uppercase">YES</span>
                    </label>
                    <span class="text-xs text-gray-500">Your profile is public now</span>
                </div>
            </div>

            <!-- 4. Change Password -->
            <div class="space-y-4 pt-6 border-t">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Change Password</h2>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Current Password -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Current Password</label>
                            <div class="relative">
                                <input type="password" id="current_password" placeholder="Password" class="w-full border rounded-md pl-3 pr-10 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500 placeholder-gray-400">
                                <button type="button" onclick="togglePasswordVisibility('current_password', 'eye_icon_current')" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <svg id="eye_icon_current" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24M1 1l22 22"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- New Password -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">New Password</label>
                            <div class="relative">
                                <input type="password" id="new_password" placeholder="Password" class="w-full border rounded-md pl-3 pr-10 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500 placeholder-gray-400">
                                <button type="button" onclick="togglePasswordVisibility('new_password', 'eye_icon_new')" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <svg id="eye_icon_new" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24M1 1l22 22"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="confirm_password" placeholder="Password" class="w-full border rounded-md pl-3 pr-10 py-2 text-xs text-gray-700 focus:outline-none focus:border-blue-500 placeholder-gray-400">
                                <button type="button" onclick="togglePasswordVisibility('confirm_password', 'eye_icon_confirm')" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <svg id="eye_icon_confirm" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24M1 1l22 22"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="pt-1">
                        <button type="button" class="w-full sm:w-auto bg-[#0B63C6] text-white px-6 py-2.5 rounded-md font-semibold text-xs hover:bg-blue-700 transition shadow-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- 5. Delete Your Account -->
            <div class="space-y-3 pt-6 border-t pb-8">
                <h2 class="text-xs md:text-sm font-semibold text-gray-900">Delete Your Account</h2>
                <p class="text-xs text-gray-400 leading-relaxed max-w-2xl">
                    If you delete your Jobpilot account, you will no longer be able to get information about the matched jobs, following employers, and job alert, shortlisted jobs and more. You will be abandoned from all the services of Jobpilot.com.
                </p>
                <button type="button" class="text-xs font-semibold text-red-500 flex items-center gap-1.5 hover:underline">
                    <span>✕</span> Close Account
                </button>
            </div>

        </main>
    </div>

    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24M1 1l22 22"></path>
                `;
            }
        }
    </script>
</body>
</html>
