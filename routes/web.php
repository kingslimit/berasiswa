<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/applied', function () {
    return view('applied');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::get('/settings/personal', function () {
    return view('settings-personal');
});

Route::get('/settings/profile', function () {
    return view('settings-profile');
});

Route::get('/settings/social', function () {
    return view('settings-social');
});

Route::get('/settings/account', function () {
    return view('settings-account');
});

$getScholarshipData = function () {
    return [
        0 => ['id'=>0,'nama'=>'Beasiswa Bank Indonesia','sub'=>'TAHAP II TAHUN 2022','kategori'=>'Pemerintah','tipe'=>'Full Pay','lokasi'=>'Jakarta, Indonesia','deadline'=>'30 March, 2025','posted'=>'14 January, 2025','level'=>'University','color'=>'bg-gradient-to-br from-blue-800 to-blue-600','logo_text'=>'BI','founded'=>'1 July, 1953','org_type'=>'Government / State Bank','size'=>'5000+ Employees','phone'=>'+62 21 2981 4000','email'=>'info@bi.go.id','website'=>'https://www.bi.go.id','desc'=>'Beasiswa Bank Indonesia diberikan kepada mahasiswa berprestasi di seluruh Indonesia untuk mendukung pendidikan tinggi berkualitas. Program ini mencakup beasiswa penuh termasuk biaya kuliah, biaya hidup, dan tunjangan buku.','requirements'=>'IPK minimal 3.00, aktif di kegiatan kemahasiswaan, tidak sedang menerima beasiswa lain, surat rekomendasi dari universitas'],
        1 => ['id'=>1,'nama'=>'LPDP Scholarship','sub'=>'Beasiswa Dalam Negeri 2025','kategori'=>'Pemerintah','tipe'=>'Full Pay','lokasi'=>'Indonesia','deadline'=>'15 April, 2025','posted'=>'01 February, 2025','level'=>'S2/S3','color'=>'bg-gradient-to-br from-red-700 to-red-500','logo_text'=>'L','founded'=>'2011','org_type'=>'Government','size'=>'500-1000 Employees','phone'=>'+62 21 2169 1000','email'=>'cs@lpdp.kemenkeu.go.id','website'=>'https://lpdp.kemenkeu.go.id','desc'=>'Lembaga Pengelola Dana Pendidikan (LPDP) menyediakan beasiswa bagi putra-putri terbaik Indonesia untuk melanjutkan studi ke jenjang magister dan doktoral, baik di dalam maupun luar negeri.','requirements'=>'WNI, lulusan S1/S2 dengan IPK minimal 3.00, berkomitmen kembali ke Indonesia setelah studi'],
        2 => ['id'=>2,'nama'=>'Beasiswa Chevening','sub'=>'UK Government Scholarship','kategori'=>'Internasional','tipe'=>'Full Pay','lokasi'=>'United Kingdom','deadline'=>'02 November, 2024','posted'=>'01 August, 2024','level'=>'S2','color'=>'bg-gradient-to-br from-purple-700 to-purple-500','logo_text'=>'C','founded'=>'1983','org_type'=>'Government – UK','size'=>'100-300 Employees','phone'=>'+44 207 389 4880','email'=>'chevening@fcdo.gov.uk','website'=>'https://www.chevening.org','desc'=>'Beasiswa Chevening adalah program beasiswa internasional bergengsi pemerintah Inggris yang memberikan kesempatan bagi individu berprestasi dari seluruh dunia untuk belajar di universitas terbaik UK.','requirements'=>'Pengalaman kerja minimal 2 tahun, kemampuan kepemimpinan, dan perencanaan kembali ke negara asal setelah studi'],
        3 => ['id'=>3,'nama'=>'Fulbright Scholarship','sub'=>'US Government Exchange Program','kategori'=>'Internasional','tipe'=>'Full Pay','lokasi'=>'United States','deadline'=>'20 February, 2025','posted'=>'01 October, 2024','level'=>'S2/S3','color'=>'bg-gradient-to-br from-blue-600 to-indigo-700','logo_text'=>'F','founded'=>'1946','org_type'=>'Government – US','size'=>'500-1000 Employees','phone'=>'+1 202 452 9100','email'=>'fulbright@state.gov','website'=>'https://us.fulbrightonline.org','desc'=>'Program Fulbright adalah program pertukaran budaya dan pendidikan bergengsi yang disponsori pemerintah Amerika Serikat, memberikan beasiswa penuh untuk studi di universitas terkemuka AS.','requirements'=>'IPK minimal 3.0, kemampuan bahasa Inggris tinggi, proposal penelitian yang kuat'],
        4 => ['id'=>4,'nama'=>'Australia Awards','sub'=>'AAS Scholarship 2025','kategori'=>'Internasional','tipe'=>'Full Pay','lokasi'=>'Australia','deadline'=>'30 April, 2025','posted'=>'15 January, 2025','level'=>'S2/S3','color'=>'bg-gradient-to-br from-yellow-600 to-orange-500','logo_text'=>'A','founded'=>'1955','org_type'=>'Government – Australia','size'=>'200-500 Employees','phone'=>'+61 2 6261 1111','email'=>'aas@dfat.gov.au','website'=>'https://www.australiaawardsindonesia.org','desc'=>'Australia Awards adalah program beasiswa prestisius dari pemerintah Australia yang memberikan kesempatan bagi individu dari negara berkembang untuk belajar di universitas terbaik Australia.','requirements'=>'Pengalaman kerja minimal 2 tahun, komitmen berkontribusi pada pembangunan Indonesia pasca studi'],
        5 => ['id'=>5,'nama'=>'Erasmus Mundus','sub'=>'Joint Masters 2025-2026','kategori'=>'Internasional','tipe'=>'Full Pay','lokasi'=>'Eropa','deadline'=>'16 January, 2025','posted'=>'01 September, 2024','level'=>'S2','color'=>'bg-gradient-to-br from-green-700 to-teal-600','logo_text'=>'E','founded'=>'2004','org_type'=>'European Commission','size'=>'500+ Partners','phone'=>'+32 2 299 1111','email'=>'info@erasmus.eu','website'=>'https://www.eacea.ec.europa.eu','desc'=>'Erasmus Mundus adalah program beasiswa Uni Eropa bergengsi yang menawarkan program double/multiple degree di beberapa universitas Eropa terkemuka.','requirements'=>'Transkrip akademik unggul, surat motivasi kuat, proposal riset relevan, kemampuan bahasa Inggris/Eropa'],
        6 => ['id'=>6,'nama'=>'MEXT Scholarship','sub'=>'Japanese Government Scholarship','kategori'=>'Internasional','tipe'=>'Full Pay','lokasi'=>'Japan','deadline'=>'10 May, 2025','posted'=>'01 February, 2025','level'=>'S1/S2/S3','color'=>'bg-gradient-to-br from-red-600 to-pink-500','logo_text'=>'M','founded'=>'1954','org_type'=>'Government – Japan','size'=>'1000+ Employees','phone'=>'+81 3 5253 4111','email'=>'mext@mext.go.jp','website'=>'https://www.mext.go.jp','desc'=>'Monbukagakusho (MEXT) Scholarship adalah program beasiswa pemerintah Jepang yang mencakup biaya kuliah penuh, tiket pesawat, biaya hidup bulanan, dan kursus bahasa Jepang.','requirements'=>'Usia di bawah 35 tahun, kemampuan akademik unggul, sehat jasmani dan rohani, bersedia belajar bahasa Jepang'],
        7 => ['id'=>7,'nama'=>'Beasiswa Unggulan','sub'=>'Kemendikbudristek 2025','kategori'=>'Pemerintah','tipe'=>'Full Pay','lokasi'=>'Indonesia','deadline'=>'31 July, 2025','posted'=>'01 May, 2025','level'=>'S1/S2/S3','color'=>'bg-gradient-to-br from-cyan-700 to-sky-500','logo_text'=>'U','founded'=>'2006','org_type'=>'Pemerintah Indonesia','size'=>'1000+ Employees','phone'=>'+62 21 5703303','email'=>'beasiswa.unggulan@kemdikbud.go.id','website'=>'https://beasiswaunggulan.kemdikbud.go.id','desc'=>'Beasiswa Unggulan Kemendikbudristek diberikan kepada putra-putri terbaik Indonesia yang berprestasi untuk melanjutkan pendidikan tinggi di dalam maupun luar negeri.','requirements'=>'WNI berprestasi, IPK minimal 3.25, memiliki prestasi akademik maupun non-akademik yang diakui'],
        8 => ['id'=>8,'nama'=>'Djarum Scholarship','sub'=>'Djarum Beasiswa Plus 2025','kategori'=>'Swasta','tipe'=>'Partial','lokasi'=>'Indonesia','deadline'=>'15 June, 2025','posted'=>'01 March, 2025','level'=>'S1','color'=>'bg-gradient-to-br from-gray-800 to-gray-600','logo_text'=>'D','founded'=>'1951','org_type'=>'Private Company','size'=>'70,000+ Employees','phone'=>'+62 291 443000','email'=>'info@djarumbeasiswaplus.org','website'=>'https://djarumbeasiswaplus.org','desc'=>'Program Djarum Beasiswa Plus memberikan beasiswa kepada mahasiswa S1 semester 4 ke atas yang memiliki prestasi akademik dan aktif dalam kegiatan kemahasiswaan.','requirements'=>'Mahasiswa aktif semester 4-7, IPK minimal 3.20, aktif di minimal 1 organisasi, belum menikah'],
    ];
};

Route::get('/find-scholarship', function (\Illuminate\Http\Request $request) use ($getScholarshipData) {
    $q = $request->query('q', '');
    $lokasi = $request->query('lokasi', '');
    $kategori = $request->query('kategori', '');
    $all = $getScholarshipData();

    if ($q) {
        $all = array_filter($all, function ($s) use ($q) {
            return stripos($s['nama'], $q) !== false
                || stripos($s['sub'], $q) !== false
                || stripos($s['lokasi'], $q) !== false;
        });
    }
    if ($lokasi) {
        $all = array_filter($all, function ($s) use ($lokasi) {
            return stripos($s['lokasi'], $lokasi) !== false;
        });
    }
    if ($kategori) {
        $all = array_filter($all, function ($s) use ($kategori) {
            return stripos($s['kategori'], $kategori) !== false;
        });
    }

    return view('find-scholarship', [
        'scholarships' => $all,
        'q' => $q,
        'lokasi' => $lokasi,
        'kategori' => $kategori,
    ]);
});

Route::get('/find-scholarship/{id}', function ($id) use ($getScholarshipData) {
    $all = $getScholarshipData();
    $s = $all[$id] ?? $all[0];
    return view('find-scholarship-detail', ['s' => $s]);
});

$getAlumniData = function () {
    return [
        0 => [
            'id' => 0,
            'nama' => 'Dribbble',
            'tipe' => 'Lomba Desain UI/UX & Portofolio',
            'lokasi' => 'United States',
            'mode' => 'OFFLINE',
            'beasiswa' => 'International Design Grant 2024',
            'kategori' => 'Private Company',
            'founded' => '14 June, 2023',
            'biaya' => 'Gratis',
            'website' => 'www.estherhoward.com',
            'phone' => '+1-202-555-0141',
            'email' => 'esther.howard@gmail.com',
            'description' => 'Dribbble Competition adalah ajang pencarian bakat kreatif global bagi desainer produk, UI/UX, dan ilustrator untuk memamerkan karya terbaik mereka kepada perusahaan teknologi terkemuka di dunia.',
            'benefits' => 'Pemenang mendapatkan pendanaan proyek hingga $10,000, kontrak kerja eksklusif dengan perusahaan mitra global, dan mentorship intensif dari desainer kelas dunia.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        1 => [
            'id' => 1,
            'nama' => 'Andi Pratama',
            'tipe' => 'Alumni LPDP - Harvard University',
            'lokasi' => 'Jakarta, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'LPDP 2022',
            'kategori' => 'Pemerintah',
            'founded' => '20 August, 2022',
            'biaya' => 'Didanai Penuh',
            'website' => 'www.andipratama.id',
            'phone' => '+62-812-3456-7890',
            'email' => 'andi.pratama@alumni.harvard.edu',
            'description' => 'Andi Pratama adalah penerima beasiswa LPDP di Harvard University jurusan Kebijakan Publik. Saat ini aktif sebagai konsultan kebijakan energi terbarukan di Indonesia.',
            'benefits' => 'Berbagi tips lolos essay LPDP, strategi wawancara, dan mentoring persiapan studi S2 luar negeri secara gratis untuk mahasiswa berprestasi.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        2 => [
            'id' => 2,
            'nama' => 'Siti Rahayu',
            'tipe' => 'Alumni Beasiswa Unggulan - UGM',
            'lokasi' => 'Yogyakarta, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'Beasiswa Unggulan 2021',
            'kategori' => 'Pemerintah',
            'founded' => '10 Mei, 2021',
            'biaya' => 'Gratis',
            'website' => 'www.sitirahayu.dev',
            'phone' => '+62-813-9876-5432',
            'email' => 'siti.rahayu@ugm.ac.id',
            'description' => 'Siti Rahayu menempuh pendidikan S1 Ilmu Komputer UGM melalui Beasiswa Unggulan Kemendikbud. Saat ini menjadi Software Engineer di perusahaan rintisan edukasi.',
            'benefits' => 'Mentoring coding untuk pemula, panduan menyusun portofolio beasiswa, dan bimbingan persiapan kompetisi teknologi.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        3 => [
            'id' => 3,
            'nama' => 'Budi Santoso',
            'tipe' => 'Alumni Fulbright - MIT',
            'lokasi' => 'Bandung, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'Fulbright 2023',
            'kategori' => 'Lembaga Internasional',
            'founded' => '15 Januari, 2023',
            'biaya' => 'Gratis',
            'website' => 'www.budisantoso.org',
            'phone' => '+62-821-1122-3344',
            'email' => 'budi@mit.edu',
            'description' => 'Budi adalah peneliti AI dan robotika yang menyelesaikan studi masternya di MIT melalui beasiswa prestisius Fulbright.',
            'benefits' => 'Akses webinar eksklusif tentang beasiswa Amerika Serikat dan bimbingan proposal riset sains dan teknologi.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        4 => [
            'id' => 4,
            'nama' => 'Dewi Lestari',
            'tipe' => 'Alumni Chevening - Oxford University',
            'lokasi' => 'Surabaya, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'Chevening 2022',
            'kategori' => 'Lembaga Internasional',
            'founded' => '12 Juli, 2022',
            'biaya' => 'Didanai Penuh',
            'website' => 'www.dewilestari.co',
            'phone' => '+62-857-4455-6677',
            'email' => 'dewi.lestari@chevening.org',
            'description' => 'Lulusan Master of Science in Environmental Change di University of Oxford dengan fokus pada diplomasi iklim dan pembangunan berkelanjutan.',
            'benefits' => 'Bedah esai Chevening gratis, latihan interview kelompok, dan jaringan koneksi alumni UK di Indonesia.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        5 => [
            'id' => 5,
            'nama' => 'Rizky Firmansyah',
            'tipe' => 'Alumni AAS - University of Melbourne',
            'lokasi' => 'Medan, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'AAS 2021',
            'kategori' => 'Lembaga Internasional',
            'founded' => '05 Maret, 2021',
            'biaya' => 'Didanai Penuh',
            'website' => 'www.rizkyfirmansyah.com',
            'phone' => '+62-819-2233-4455',
            'email' => 'rizky@alumni.unimelb.edu.au',
            'description' => 'Penerima Australia Awards Scholarship di bidang Sistem Informasi Kesehatan, aktif mendorong digitalisasi layanan medis daerah terpencil.',
            'benefits' => 'Konsultasi pemilihan jurusan studi di Australia dan pendampingan tes IELTS dengan target skor 7.5+.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        6 => [
            'id' => 6,
            'nama' => 'Nadia Putri',
            'tipe' => 'Alumni LPDP - NTU Singapore',
            'lokasi' => 'Makassar, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'LPDP 2023',
            'kategori' => 'Pemerintah',
            'founded' => '18 September, 2023',
            'biaya' => 'Gratis',
            'website' => 'www.nadiaputri.id',
            'phone' => '+62-812-7788-9900',
            'email' => 'nadia.putri@ntu.edu.sg',
            'description' => 'Spesialis Nanoteknologi dan Material Baru lulusan NTU Singapore, aktif membina peneliti muda di kawasan Indonesia Timur.',
            'benefits' => 'Bimbingan pembuatan jurnal ilmiah, tips lolos Letter of Acceptance (LoA) universitas top Asia.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        7 => [
            'id' => 7,
            'nama' => 'Fajar Nugroho',
            'tipe' => 'Alumni Erasmus Mundus - TU Delft & NTNU',
            'lokasi' => 'Semarang, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'Erasmus Mundus 2022',
            'kategori' => 'Lembaga Internasional',
            'founded' => '22 Oktober, 2022',
            'biaya' => 'Didanai Penuh',
            'website' => 'www.fajarnugroho.tech',
            'phone' => '+62-852-6677-8899',
            'email' => 'fajar.nugroho@erasmus.eu',
            'description' => 'Menyelesaikan double degree di Belanda dan Norwegia dalam bidang Rekayasa Perkapalan dan Energi Terbarukan Laut.',
            'benefits' => 'Panduan lengkap melamar Erasmus Mundus Joint Masters, tips adaptasi kuliah di multi-negara Eropa.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ],
        8 => [
            'id' => 8,
            'nama' => 'Hendra Wijaya',
            'tipe' => 'Alumni Monbukagakusho (MEXT) - Kyoto University',
            'lokasi' => 'Denpasar, Indonesia',
            'mode' => 'OFFLINE',
            'beasiswa' => 'Monbukagakusho 2023',
            'kategori' => 'Lembaga Internasional',
            'founded' => '08 April, 2023',
            'biaya' => 'Gratis',
            'website' => 'www.hendrawijaya.jp',
            'phone' => '+62-878-3344-5566',
            'email' => 'hendra.w@kyodai.jp',
            'description' => 'Peneliti Bioteknologi Pertanian di Kyoto University melalui beasiswa Kementerian Pendidikan Jepang (MEXT).',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ]
    ];
};

$getLombaData = function () {
    $lomba = [];
    for ($i = 0; $i <= 8; $i++) {
        $lomba[$i] = [
            'id' => $i,
            'nama' => 'Dribbble',
            'tipe' => 'Lomba Desain UI/UX & Portofolio',
            'lokasi' => 'United States',
            'mode' => 'OFFLINE',
            'beasiswa' => 'International Design Grant 2024',
            'kategori' => 'Private Company',
            'founded' => '14 June, 2023',
            'biaya' => 'Gratis',
            'website' => 'www.estherhoward.com',
            'phone' => '+1-202-555-0141',
            'email' => 'esther.howard@gmail.com',
            'description' => 'Dribbble Competition adalah ajang pencarian bakat kreatif global bagi desainer produk, UI/UX, dan ilustrator untuk memamerkan karya terbaik mereka kepada perusahaan teknologi terkemuka di dunia.',
            'benefits' => 'Pemenang mendapatkan pendanaan proyek hingga $10,000, kontrak kerja eksklusif dengan perusahaan mitra global, dan mentorship intensif dari desainer kelas dunia.',
            'avatar_color' => 'bg-[#E94D74]',
            'youtube' => 'dQw4w9WgXcQ'
        ];
    }
    return $lomba;
};

Route::get('/alumni', function (\Illuminate\Http\Request $request) use ($getAlumniData) {
    $q = $request->query('q', '');
    $lokasi = $request->query('lokasi', '');
    $kategori = $request->query('kategori', '');
    $allAlumni = $getAlumniData();

    if ($q) {
        $allAlumni = array_filter($allAlumni, function ($a) use ($q) {
            return stripos($a['nama'], $q) !== false
                || stripos($a['lokasi'], $q) !== false
                || stripos($a['beasiswa'], $q) !== false
                || stripos($a['tipe'], $q) !== false;
        });
    }

    if ($lokasi) {
        $allAlumni = array_filter($allAlumni, function ($a) use ($lokasi) {
            return stripos($a['lokasi'], $lokasi) !== false;
        });
    }

    if ($kategori) {
        $allAlumni = array_filter($allAlumni, function ($a) use ($kategori) {
            return stripos($a['kategori'], $kategori) !== false;
        });
    }

    return view('alumni', [
        'alumni' => $allAlumni,
        'q' => $q,
        'lokasi' => $lokasi,
        'kategori' => $kategori
    ]);
});

Route::get('/lomba', function (\Illuminate\Http\Request $request) use ($getLombaData) {
    $q = $request->query('q', '');
    $lokasi = $request->query('lokasi', '');
    $kategori = $request->query('kategori', '');
    $allLomba = $getLombaData();

    if ($q) {
        $allLomba = array_filter($allLomba, function ($a) use ($q) {
            return stripos($a['nama'], $q) !== false
                || stripos($a['lokasi'], $q) !== false
                || stripos($a['tipe'], $q) !== false;
        });
    }

    if ($lokasi) {
        $allLomba = array_filter($allLomba, function ($a) use ($lokasi) {
            return stripos($a['lokasi'], $lokasi) !== false;
        });
    }

    if ($kategori) {
        $allLomba = array_filter($allLomba, function ($a) use ($kategori) {
            return stripos($a['kategori'], $kategori) !== false;
        });
    }

    return view('lomba', [
        'alumni'   => $allLomba,
        'q'        => $q,
        'lokasi'   => $lokasi,
        'kategori' => $kategori
    ]);
});

Route::get('/lomba/{id}', function ($id) use ($getLombaData) {
    $allLomba = $getLombaData();
    $a = $allLomba[$id] ?? $allLomba[0];

    return view('lomba-detail', ['a' => $a]);
});

Route::get('/alumni/{id}', function ($id) use ($getAlumniData) {
    $allAlumni = $getAlumniData();
    $a = $allAlumni[$id] ?? abort(404);

    return view('detail', ['a' => $a]);
});