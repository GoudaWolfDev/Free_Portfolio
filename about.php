<?php
/**
 * About Page for Gouda Nasralla
 */
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Gouda Nasralla</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23007bff'><path d='M12 2L4.5 20.29L5.21 21L12 18L18.79 21L19.5 20.29L12 2Z'/></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
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
        [dir="rtl"] { font-family: 'Cairo', sans-serif; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: #007bff; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
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
        <div class="max-w-4xl mx-auto space-y-20">
            <!-- Hero Info -->
            <section class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full max-w-sm rounded-[3rem] overflow-hidden border-2 border-accent/20 shadow-2xl shadow-accent/10">
                    <img src="me.png" alt="Gouda Nasralla" class="w-full h-auto object-contain grayscale hover:grayscale-0 transition-all duration-700">
                </div>
                <div class="flex-1 text-center md:text-left space-y-4 animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-black tracking-tight" id="about-name">Gouda Nasralla</h1>
                    <p class="text-accent font-bold uppercase tracking-[0.2em] text-sm" id="about-title">Senior Tech Entrepreneur & Security Researcher</p>
                    <p class="text-slate-400 leading-relaxed text-lg" id="about-vision">Engineering the digital future by merging industrial-grade construction with elite-level security protocols.</p>
                </div>
            </section>

            <!-- Vision Cards -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass p-10 rounded-[2.5rem] border border-white/5 space-y-6">
                    <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center">
                        <i data-lucide="eye" class="text-accent"></i>
                    </div>
                    <h2 class="text-2xl font-bold" id="title-vision">Strategic Vision</h2>
                    <p class="text-slate-400 leading-relaxed" id="desc-vision">Focusing on high-impact technological growth while ensuring the highest standards of digital integrity and defense.</p>
                </div>
                <div class="glass p-10 rounded-[2.5rem] border border-white/5 space-y-6">
                    <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center">
                        <i data-lucide="target" class="text-accent"></i>
                    </div>
                    <h2 class="text-2xl font-bold" id="title-mission">Mission</h2>
                    <p class="text-slate-400 leading-relaxed" id="desc-mission">Empowering businesses and individuals through modular AI-driven systems and expert security consultation.</p>
                </div>
            </section>

            <!-- Detailed Stats -->
            <section class="glass p-10 md:p-16 rounded-[3rem] border border-white/5">
                <h2 class="text-3xl font-black mb-12 text-center" id="title-background">Professional Trajectory</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                    <div class="space-y-2">
                        <div class="text-4xl font-black text-accent">5+</div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-500" id="stat-years">Years of Engineering</p>
                    </div>
                    <div class="space-y-2">
                        <div class="text-4xl font-black text-accent">Critical</div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-500" id="stat-vulns">University Misconfig Discovery</p>
                    </div>
                    <div class="space-y-2">
                        <div class="text-4xl font-black text-accent">AI Voice</div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-500" id="stat-projects">Neural Model Training</p>
                    </div>
                </div>
            </section>
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
                aboutName: 'Gouda Nasralla',
                aboutTitle: 'Tech Entrepreneur & Security Researcher',
                aboutVision: 'Engineering the digital future by merging advanced systems with elite security protocols.',
                titleVision: 'Strategic Vision',
                descVision: 'Focusing on technological growth while ensuring the highest standards of digital integrity.',
                titleMission: 'Mission',
                descMission: 'Empowering businesses through scalable AI-driven systems and expert security consultation.',
                titleBackground: 'Background',
                statYears: 'Years Experience',
                statVulns: 'Security Discoveries',
                statProjects: 'AI Implementations',
                langText: 'AR'
            },
            ar: {
                navBack: 'رجوع',
                aboutName: 'جودة نصر الله',
                aboutTitle: 'رائد أعمال تقني وباحث أمني',
                aboutVision: 'هندسة المستقبل الرقمي من خلال الدمج بين الأنظمة المتقدمة وبروتوكولات الأمن النخبوية.',
                titleVision: 'الرؤية الاستراتيجية',
                descVision: 'التركيز على النمو التكنولوجي مع الحفاظ على أعلى معايير النزاهة الرقمية.',
                titleMission: 'المهمة',
                descMission: 'تمكين الشركات من خلال أنظمة ذكاء اصطناعي قابلة للتوسع واستشارات أمنية متخصصة.',
                titleBackground: 'المسار المهني',
                statYears: 'سنوات الخبرة',
                statVulns: 'اكتشافات أمنية',
                statProjects: 'تطبيقات الذكاء الاصطناعي',
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
            document.getElementById('about-name').innerText = t.aboutName;
            document.getElementById('about-title').innerText = t.aboutTitle;
            document.getElementById('about-vision').innerText = t.aboutVision;
            document.getElementById('title-vision').innerText = t.titleVision;
            document.getElementById('desc-vision').innerText = t.descVision;
            document.getElementById('title-mission').innerText = t.titleMission;
            document.getElementById('desc-mission').innerText = t.descMission;
            document.getElementById('title-background').innerText = t.titleBackground;
            document.getElementById('stat-years').innerText = t.statYears;
            document.getElementById('stat-vulns').innerText = t.statVulns;
            document.getElementById('stat-projects').innerText = t.statProjects;
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
