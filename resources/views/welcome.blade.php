<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ยินดีต้อนรับ | Kitsanaphong</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter & Kanit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', 'Kanit', sans-serif;
            background: radial-gradient(circle at 50% 50%, #1a102f 0%, #0b0616 100%);
        }
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px rgba(255, 255, 255, 0.08) solid;
        }
        .glow-button {
            position: relative;
            transition: all 0.3s ease;
        }
        .glow-button::after {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #a855f7, #ec4899);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
            filter: blur(8px);
        }
        .glow-button:hover::after {
            opacity: 1;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="text-slate-100 min-h-screen flex flex-col justify-between overflow-x-hidden selection:bg-purple-500 selection:text-white">

    <!-- Glowing background blobs -->
    <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] rounded-full bg-purple-900/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] rounded-full bg-pink-900/20 blur-[120px] pointer-events-none"></div>

    <!-- Header Navigation -->
    <header class="w-full max-w-6xl mx-auto px-6 py-5 flex justify-between items-center z-10">
        <a href="/" class="text-xl font-bold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400 hover:scale-105 transition-transform duration-200">
            KITSANAPHONG.KU
        </a>
        <nav class="flex items-center gap-6 glass px-6 py-2 rounded-full">
            <a href="/welcome" class="text-sm font-medium text-purple-300 hover:text-purple-200 transition-colors">หน้าแรก</a>
            <a href="/blog" class="text-sm font-medium text-slate-300 hover:text-purple-300 transition-colors">บทความ</a>
            <a href="/about" class="text-sm font-medium text-slate-300 hover:text-purple-300 transition-colors">เกี่ยวกับฉัน</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="w-full max-w-4xl mx-auto px-6 py-12 flex flex-col items-center text-center my-auto z-10">
        <!-- Badge -->
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-purple-500/10 text-purple-300 border border-purple-500/20 mb-6 animate-pulse">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Laravel 12 & TailWind Web Design
        </span>

        <!-- Hero Title -->
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight mb-6">
            ยินดีต้อนรับเข้าสู่ <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-amber-300">
                พื้นที่สร้างสรรค์ของท็อปฟี่
            </span>
        </h1>

        <!-- Hero Subtitle -->
        <p class="text-slate-400 text-lg max-w-xl mb-10 leading-relaxed">
            ยินดีต้อนรับเข้าสู่เว็บไซต์ส่วนตัวของผมครับ ที่นี่ใช้สำหรับการลงบทความ แลกเปลี่ยนความรู้ และบอกเล่าเรื่องราวการเขียนโปรแกรมและการพัฒนาเว็บไซต์
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="/blog" class="glow-button px-8 py-3.5 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-medium text-white shadow-lg hover:shadow-purple-500/20 hover:scale-[1.02] active:scale-95 transition-all w-48 text-center">
                อ่านบทความทั้งหมด
            </a>
            <a href="/about" class="px-8 py-3.5 rounded-xl glass hover:bg-white/5 font-medium text-slate-200 hover:text-white transition-all w-48 text-center">
                ทำความรู้จักฉัน
            </a>
        </div>

        <!-- Float Decoration -->
        <div class="mt-16 animate-float opacity-30">
            <svg class="w-12 h-12 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full text-center py-8 text-slate-500 text-sm border-t border-slate-900 mt-12 z-10">
        <p>&copy; 2026 Kitsanaphong. All rights reserved.</p>
    </footer>

</body>
</html>
