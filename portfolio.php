<?php
/**
 * Portfolio Page for Gouda Nasralla
 */
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hub | Gouda Nasralla</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23007bff'><path d='M12 2L4.5 20.29L5.21 21L12 18L18.79 21L19.5 20.29L12 2Z'/></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#0a0a0a',
                        accent: '#007bff',
                        'accent-hover': '#0056b3',
                    },
                    fontFamily: {
                        sans: ['Inter', 'Cairo', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0a0a0a; color: #f8fafc; overflow-x: hidden; }
        .bg-grid {
            background-image: 
                linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glass {
            background: rgba(10, 10, 10, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .card-hover:hover {
            border-color: #007bff;
            transform: translateY(-8px);
        }
        [dir="rtl"] { font-family: 'Cairo', sans-serif; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: #007bff; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-grid min-h-screen">
    <nav class="fixed top-0 w-full z-50 glass border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-accent/10 border border-accent/20 rounded-xl flex items-center justify-center group-hover:bg-accent transition-all duration-300">
                    <i data-lucide="arrow-left" class="text-accent group-hover:text-white transition-colors w-5 h-5 rtl:rotate-180"></i>
                </div>
                <span class="font-bold text-[15px]" id="nav-back">Return</span>
            </a>
            
            <div class="flex items-center gap-6">
                <div class="hidden md:flex items-center gap-5 border-s border-white/10 ps-6 me-2">
                    <a href="https://www.linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank" class="text-slate-400 hover:text-accent transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                    <a href="https://github.com/GoudaWolfDev" target="_blank" class="text-slate-400 hover:text-accent transition-colors"><i class="fa-brands fa-github text-lg"></i></a>
                    <a href="https://hackerone.com/d33p-x?type=user" target="_blank" class="text-slate-400 hover:text-accent transition-colors"><i class="fa-solid fa-terminal text-lg"></i></a>
                </div>
                <button onclick="toggleLanguage()" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-white/10 hover:bg-white/10 transition-all group">
                     <i data-lucide="globe" class="w-4 h-4 text-accent group-hover:rotate-12 transition-transform"></i>
                     <span id="lang-text" class="text-[11px] font-semibold uppercase">AR</span>
                </button>
            </div>
        </div>
    </nav>

    <main class="pt-32 pb-24 px-6">
        <div class="max-w-7xl mx-auto space-y-20 animate-fade-in-up">
            <header class="text-center space-y-4">
                <h1 class="text-4xl md:text-7xl font-black tracking-tight" id="title-main">Innovation Ecosystem</h1>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto" id="subtitle-main">A curated selection of engineering masterworks and strategic initiatives designed for global scalability.</p>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Project 1 -->
                <div class="glass p-10 rounded-[3rem] border border-white/5 space-y-8 card-hover transition-all group">
                    <div class="w-20 h-20 bg-accent/10 rounded-3xl flex items-center justify-center group-hover:bg-accent group-hover:rotate-6 transition-all duration-500">
                        <i data-lucide="layout-grid" class="text-accent group-hover:text-white w-10 h-10"></i>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-3xl font-black" id="p1-title">Matrix Platform</h2>
                        <p class="text-slate-400 leading-relaxed" id="p1-desc">A modular, AI-first ecosystem built for extreme scalability. Matrix leverages high-performance PHP 8.3 architectures and zero-trust security protocols to deliver intelligent infrastructure solutions.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">PHP OOP</span>
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">AI Logic</span>
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">Modular</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="glass p-10 rounded-[3rem] border border-white/5 space-y-8 card-hover transition-all group">
                    <div class="w-20 h-20 bg-accent/10 rounded-3xl flex items-center justify-center group-hover:bg-accent group-hover:-rotate-6 transition-all duration-500">
                        <i data-lucide="heart-handshake" class="text-accent group-hover:text-white w-10 h-10"></i>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-3xl font-black" id="p2-title">Refqa Project</h2>
                        <p class="text-slate-400 leading-relaxed" id="p2-desc">A global philanthropic initiative focused on digital literacy, mental health awareness, and empowering technical leaders. Refqa combines technology with human-centric social engineering.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">Philanthropy</span>
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">Social Impact</span>
                        <span class="px-4 py-2 bg-black/40 border border-white/5 rounded-xl text-xs font-bold text-slate-300">Leadership</span>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Back to Top & Social Widget -->
    <div class="fixed bottom-8 left-8 z-[60] opacity-0 translate-y-10 transition-all duration-500 pointer-events-none" id="back-to-top-container">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-14 h-14 bg-white/5 backdrop-blur-xl border border-white/10 text-white rounded-2xl flex items-center justify-center shadow-2xl hover:bg-accent hover:border-accent transition-all group">
            <i class="fa-solid fa-arrow-up group-hover:-translate-y-1 transition-transform"></i>
        </button>
    </div>

    <div class="fixed bottom-8 right-8 z-[60] flex flex-col-reverse items-center gap-4 group">
        <button class="w-14 h-14 bg-accent text-white rounded-2xl flex items-center justify-center shadow-2xl shadow-accent/40 hover:scale-110 transition-all duration-300 relative z-20">
            <i class="fa-solid fa-share-nodes text-xl"></i>
        </button>
        <div class="flex flex-col items-center gap-3 opacity-0 translate-y-10 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-500 delay-75">
            <a href="https://hackerone.com/d33p-x?type=user" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 text-slate-400 hover:text-red-500 hover:border-red-500/50 rounded-xl flex items-center justify-center transition-all shadow-xl">
                <i class="fa-solid fa-terminal text-lg"></i>
            </a>
            <a href="https://github.com/GoudaWolfDev" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 text-slate-400 hover:text-white hover:border-white/50 rounded-xl flex items-center justify-center transition-all shadow-xl">
                <i class="fa-brands fa-github text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 text-slate-400 hover:text-accent hover:border-accent/50 rounded-xl flex items-center justify-center transition-all shadow-xl">
                <i class="fa-brands fa-linkedin text-lg"></i>
            </a>
            <a href="https://www.facebook.com/goda.nasralla" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 text-slate-400 hover:text-blue-500 hover:border-blue-500/50 rounded-xl flex items-center justify-center transition-all shadow-xl">
                <i class="fa-brands fa-facebook text-lg"></i>
            </a>
        </div>
    </div>

    <script>
        lucide.createIcons();
        let lang = 'en';
        
        const content = {
            en: {
                navBack: 'Return',
                titleMain: 'Portfolio',
                subtitleMain: 'A collection of software engineering projects and security research.',
                p1Title: 'Matrix Platform',
                p1Desc: 'A modular, AI-first ecosystem built for extreme scalability. Matrix leverages high-performance PHP 8.3 architectures and zero-trust security protocols to deliver intelligent infrastructure solutions.',
                p2Title: 'Refqa Project',
                p2Desc: 'A global philanthropic initiative focused on digital literacy, mental health awareness, and empowering technical leaders. Refqa combines technology with human-centric social engineering.',
                langText: 'AR'
            },
            ar: {
                navBack: 'رجوع',
                titleMain: 'أعمالي',
                subtitleMain: 'مجموعة مختارة من مشاريع هندسة البرمجيات والأبحاث الأمنية.',
                p1Title: 'منصة ماتريكس',
                p1Desc: 'نظام بيئي معياري يعتمد على الذكاء الاصطناعي، تم هندسته للتوسع الفائق. تستخدم ماتريكس بنى PHP 8.3 عالية الأداء وبروتوكولات أمنية قائمة على الثقة الصفرية.',
                p2Title: 'مبادرة رفقة الاستراتيجية',
                p2Desc: 'حراك خير عالمي يركز على محو الأمية الرقمية، الصحة النفسية، وتمكين القيادات التقنية. يجمع مشروع رفقة بين التكنولوجيا والهندسة الاستراتيجية التي تركز على الإنسان.',
                langText: 'EN'
            }
        };

        // Scroll Logic for Back to Top
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('back-to-top-container');
            if (window.scrollY > 300) {
                btn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                btn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
            } else {
                btn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                btn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
            }
        });

        function toggleLanguage() {
            lang = lang === 'en' ? 'ar' : 'en';
            localStorage.setItem('preferredLang', lang);
            applyLanguage(lang);
        }

        function applyLanguage(l) {
            const t = content[l];
            document.documentElement.dir = l === 'ar' ? 'rtl' : 'ltr';
            document.getElementById('lang-text').innerText = l === 'en' ? 'AR' : 'EN';
            document.getElementById('nav-back').innerText = t.navBack;
            document.getElementById('title-main').innerText = t.titleMain;
            document.getElementById('subtitle-main').innerText = t.subtitleMain;
            document.getElementById('p1-title').innerText = t.p1Title;
            document.getElementById('p1-desc').innerText = t.p1Desc;
            document.getElementById('p2-title').innerText = t.p2Title;
            document.getElementById('p2-desc').innerText = t.p2Desc;
            lucide.createIcons();
        }

        // Initialize from storage
        const savedLang = localStorage.getItem('preferredLang');
        if (savedLang && savedLang !== lang) {
            lang = savedLang;
            applyLanguage(lang);
        }
    </script>
</body>
</html>
