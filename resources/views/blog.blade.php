<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บทความทั้งหมด | Kitsanaphong</title>
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
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px -10px rgba(168, 85, 247, 0.2);
            border-color: rgba(168, 85, 247, 0.3);
            background: rgba(255, 255, 255, 0.05);
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
            <a href="/welcome" class="text-sm font-medium text-slate-300 hover:text-purple-300 transition-colors">หน้าแรก</a>
            <a href="/blog" class="text-sm font-medium text-purple-300 hover:text-purple-200 transition-colors">บทความ</a>
            <a href="/about" class="text-sm font-medium text-slate-300 hover:text-purple-300 transition-colors">เกี่ยวกับฉัน</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="w-full max-w-6xl mx-auto px-6 py-12 z-10 flex-grow">
        <!-- Title Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">บทความทั้งหมด</h1>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">
                ติดตามเทคนิคการพัฒนาเว็บไซต์ การอัปเดต และคู่มือต่างๆ สำหรับนักพัฒนา
            </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <article class="glass rounded-2xl p-6 flex flex-col justify-between card-hover transition-all duration-300">
                <div>
                    <!-- Meta -->
                    <div class="flex items-center gap-3 mb-4 text-xs text-slate-400">
                        <span class="px-2.5 py-1 rounded-md bg-purple-500/10 text-purple-300 font-semibold border border-purple-500/20">Laravel</span>
                        <span>29 มิ.ย. 2026</span>
                    </div>
                    <!-- Title -->
                    <h2 class="text-xl font-bold text-white mb-3 hover:text-purple-300 transition-colors duration-200">
                        เริ่มต้นใช้งาน Laravel 12 กับ SQLite
                    </h2>
                    <!-- Preview -->
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        เรียนรู้วิธีการกำหนดค่าและเปิดใช้งาน SQLite ใน Laravel 12 เพื่อให้โปรเจกต์ของคุณพร้อมใช้งานทันทีโดยไม่ต้องตั้งค่าฐานข้อมูลให้ยุ่งยาก...
                    </p>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between text-xs text-slate-500 border-t border-white/5 pt-4">
                    <span>ใช้เวลาอ่าน 5 นาที</span>
                    <a href="#" class="text-purple-400 hover:text-purple-300 font-medium inline-flex items-center gap-1 group">
                        อ่านเพิ่มเติม 
                        <span class="group-hover:translate-x-1 transition-transform duration-200">&rarr;</span>
                    </a>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="glass rounded-2xl p-6 flex flex-col justify-between card-hover transition-all duration-300">
                <div>
                    <!-- Meta -->
                    <div class="flex items-center gap-3 mb-4 text-xs text-slate-400">
                        <span class="px-2.5 py-1 rounded-md bg-pink-500/10 text-pink-300 font-semibold border border-pink-500/20">Design</span>
                        <span>28 มิ.ย. 2026</span>
                    </div>
                    <!-- Title -->
                    <h2 class="text-xl font-bold text-white mb-3 hover:text-pink-300 transition-colors duration-200">
                        ออกแบบเว็บให้พรีเมียมด้วย Glassmorphism
                    </h2>
                    <!-- Preview -->
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        แนะนำวิธีออกแบบ UI ให้ดูสวยงามทันสมัยด้วยเทคนิคความโปร่งแสง (Blur Backdrop) และการจัดองค์ประกอบร่วมกับไล่เฉดสีที่กำลังเป็นที่นิยม...
                    </p>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between text-xs text-slate-500 border-t border-white/5 pt-4">
                    <span>ใช้เวลาอ่าน 4 นาที</span>
                    <a href="#" class="text-pink-400 hover:text-pink-300 font-medium inline-flex items-center gap-1 group">
                        อ่านเพิ่มเติม 
                        <span class="group-hover:translate-x-1 transition-transform duration-200">&rarr;</span>
                    </a>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="glass rounded-2xl p-6 flex flex-col justify-between card-hover transition-all duration-300">
                <div>
                    <!-- Meta -->
                    <div class="flex items-center gap-3 mb-4 text-xs text-slate-400">
                        <span class="px-2.5 py-1 rounded-md bg-amber-500/10 text-amber-300 font-semibold border border-amber-500/20">Routing</span>
                        <span>25 มิ.ย. 2026</span>
                    </div>
                    <!-- Title -->
                    <h2 class="text-xl font-bold text-white mb-3 hover:text-amber-300 transition-colors duration-200">
                        การจัดการระบบ Routing และ URL
                    </h2>
                    <!-- Preview -->
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        ทำความเข้าใจพื้นฐานของการกำหนดเส้นทาง (Routing) ใน Laravel 12 และการใช้ Named Routes เพื่อช่วยให้การจัดการ URL เป็นไปอย่างมีระเบียบ...
                    </p>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between text-xs text-slate-500 border-t border-white/5 pt-4">
                    <span>ใช้เวลาอ่าน 6 นาที</span>
                    <a href="#" class="text-amber-400 hover:text-amber-300 font-medium inline-flex items-center gap-1 group">
                        อ่านเพิ่มเติม 
                        <span class="group-hover:translate-x-1 transition-transform duration-200">&rarr;</span>
                    </a>
                </div>
            </article>

        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full text-center py-8 text-slate-500 text-sm border-t border-slate-900 mt-12 z-10">
        <p>&copy; 2026 Kitsanaphong. All rights reserved.</p>
    </footer>

</body>
</html>