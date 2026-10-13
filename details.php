<?php
/**
 * Professional Intelligence Briefing (Details Page)
 * Theme: Dark Mode Cyberpunk/Corporate Fusion
 */
$section = isset($_GET['section']) ? $_GET['section'] : 'development';

$details = [
    'development' => [
        'title' => [
            'en' => 'Systems Architecture & Engineering',
            'ar' => 'معمارية الأنظمة وهندستها'
        ],
        'content' => [
            'en' => '
                <p class="mb-6">As a systems architect, I specialize in building resilient, high-performance digital systems. My methodology focuses on scalability and seamless AI integration.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">Technical Arsenal:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>Core Languages:</strong> PHP 8.3 (OOP), Python, Advanced JavaScript (ES6+).</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>Architecture:</strong> Modular Microservices, AI-First Logic, Zero-Trust Infrastructure.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>Frameworks & Tools:</strong> Tailwind CSS, Node.js, Git, Bash/Batch Automation.</span></li>
                </ul>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">Strategic Project:</h4>
                <div class="glass p-6 rounded-2xl border-l-4 border-accent">
                    <p class="font-bold text-white mb-2">Matrix Platform</p>
                    <p class="text-sm">A highly sophisticated, AI-integrated software environment designed for enterprise-level efficiency and autonomous logic processing.</p>
                </div>
            ',
            'ar' => '
                <p class="mb-6">بصفتي كبير مهندسي أنظمة، أتخصص في ابتكار ونشر بيئات رقمية مرنة عالية الأداء. تولي منهجيتي الأولوية للقابلية للتوسع، المعيارية، والدمج العصبي.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">الترسانة التقنية:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>اللغات الأساسية:</strong> PHP 8.3 (OOP)، بايثون، جافا سكريبت متقدمة.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>المعمارية:</strong> الخدمات المصغرة المعيارية، منطق الذكاء الاصطناعي الأول، بنية تحتية قائمة على الثقة الصفرية.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-check text-accent mt-1"></i> <span><strong>الأدوات:</strong> Tailwind CSS، Node.js، Git، أتمتة Bash/Batch.</span></li>
                </ul>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">مشروع استراتيجي:</h4>
                <div class="glass p-6 rounded-2xl border-r-4 border-accent">
                    <p class="font-bold text-white mb-2">منصة ماتريكس</p>
                    <p class="text-sm">بيئة برمجية متطورة للغاية مدمجة بالذكاء الاصطناعي، مصممة للكفاءة على مستوى المؤسسات ومعالجة المنطق المستقل.</p>
                </div>
            '
        ],
        'icon' => 'code-2'
    ],
    'security' => [
        'title' => [
            'en' => 'Cyber Security Research',
            'ar' => 'أبحاث الأمن السيبراني'
        ],
        'content' => [
            'en' => '
                <p class="mb-6">Security is the foundation of digital progress. I specialize in offensive security research and defensive strategies to protect digital assets.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">Core Disciplines:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>Specialization:</strong> Offensive Hacking, OSINT, and Digital Forensics.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>Academic Research:</strong> Discovered critical Misconfiguration vulnerabilities in major university systems, leading to significant security hardening.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>Elite Platforms:</strong> Verified Security Researcher at <a href="https://hackerone.com/d33p-x?type=user" target="_blank" class="text-accent underline">HackerOne</a>.</span></li>
                </ul>
                <div class="glass p-6 rounded-2xl bg-red-500/5 border border-red-500/20">
                    <h4 class="text-red-500 font-bold mb-2 flex items-center gap-2"><i class="fa-solid fa-biohazard"></i> Neural Security</h4>
                    <p class="text-sm">Architecting AI-driven security protocols and utilizing LLMs for automated threat intelligence and pattern recognition.</p>
                </div>
            ',
            'ar' => '
                <p class="mb-6">الأمن هو حجر الزاوية للتقدم. أقوم بنشر منهجيات بحث هجومية نخبوية مدمجة مع دفاع تكتيكي لتحصين الحدود الرقمية.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">التخصصات الأساسية:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>التخصص:</strong> الاختراق الهجومي، OSINT، والتحقيق الرقمي.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>البحث الأكاديمي:</strong> اكتشاف ثغرات حرجة ناتجة عن أخطاء في التكوين (Misconfiguration) في أنظمة جامعية كبرى، مما أدى إلى تعزيز أمنها بشكل جذري.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-accent mt-1"></i> <span><strong>منصات النخبة:</strong> باحث أمني موثق في <a href="https://hackerone.com/d33p-x?type=user" target="_blank" class="text-accent underline">HackerOne</a>.</span></li>
                </ul>
                <div class="glass p-6 rounded-2xl bg-red-500/5 border border-red-500/20">
                    <h4 class="text-red-500 font-bold mb-2 flex items-center gap-2"><i class="fa-solid fa-biohazard"></i> الأمن العصبي</h4>
                    <p class="text-sm">هندسة بروتوكولات أمنية مدفوعة بالذكاء الاصطناعي واستخدام نماذج اللغة الكبيرة لأتمتة استخبارات التهديدات وتحديد الأنماط.</p>
                </div>
            '
        ],
        'icon' => 'shield-alert'
    ],
    'leadership' => [
        'title' => [
            'en' => 'Leadership & Impact',
            'ar' => 'القيادة والتأثير'
        ],
        'content' => [
            'en' => '
                <p class="mb-6">True leadership involves a mix of technical vision and psychological understanding to drive positive change.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">Strategic Pillars:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-brain text-accent mt-1"></i> <span><strong>Behavioral Science:</strong> Leveraging psychology to engineer superior user experiences and resilient team structures.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-briefcase text-accent mt-1"></i> <span><strong>Business Evolution:</strong> Converting technological complexity into commercial market leadership.</span></li>
                </ul>
                <div class="glass p-8 rounded-3xl border border-white/10 bg-accent/5">
                    <h4 class="text-white font-black text-xl mb-4">Refqa Strategic Initiative</h4>
                    <p class="text-slate-400 leading-relaxed text-sm">A global movement dedicated to digital literacy, mental health empowerment, and the cultivation of next-generation technical leaders.</p>
                </div>
            ',
            'ar' => '
                <p class="mb-6">القيادة الحقيقية تتجاوز المهارات التقنية؛ فهي تتطلب عمقاً نفسياً ورؤية استشرافية لدفع التغيير العالمي المستدام.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">الركائز الاستراتيجية:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-brain text-accent mt-1"></i> <span><strong>العلوم السلوكية:</strong> الاستفادة من علم النفس لهندسة تجارب مستخدم فائقة وبنى فرق عمل مرنة.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-briefcase text-accent mt-1"></i> <span><strong>تطور الأعمال:</strong> تحويل التعقيد التكنولوجي إلى ريادة تجارية في السوق.</span></li>
                </ul>
                <div class="glass p-8 rounded-3xl border border-white/10 bg-accent/5">
                    <h4 class="text-white font-black text-xl mb-4">مبادرة رفقة الاستراتيجية</h4>
                    <p class="text-slate-400 leading-relaxed text-sm">حراك عالمي مخصص لمحو الأمية الرقمية، تمكين الصحة النفسية، وتنشئة الجيل القادم من القادة التقنيين.</p>
                </div>
            '
        ],
        'icon' => 'trending-up'
    ],
    'ai' => [
        'title' => [
            'en' => 'Artificial Intelligence',
            'ar' => 'الذكاء الاصطناعي'
        ],
        'content' => [
            'en' => '
                <p class="mb-6">Building the next generation of software by integrating advanced AI and neural networks into core infrastructure.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">AI Disciplines:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>Neural Integration:</strong> Gemini, GPT-4, and Custom Voice Model deployments.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>Voice Synthesis:</strong> Specialized in training neural models for realistic voice synthesis and automated response systems.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>Logic Deployment:</strong> Predictive analytics and automated intelligence for the Matrix Platform.</span></li>
                </ul>
            ',
            'ar' => '
                <p class="mb-6">هندسة الجيل القادم من الاستقلالية البرمجية من خلال دمج الشبكات العصبية المتقدمة في البنى التحتية الحيوية.</p>
                <h4 class="text-accent font-bold mt-8 mb-4 text-xl uppercase tracking-widest text-sm">تخصصات الذكاء الاصطناعي:</h4>
                <ul class="space-y-3 text-slate-400 mb-8">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>التكامل العصبي:</strong> نشر نماذج Gemini، GPT-4، ونماذج الصوت المخصصة.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>التخليق الصوتي:</strong> متخصص في تدريب النماذج العصبية للتخليق الصوتي الواقعي وأنظمة الاستجابة المؤتمتة.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-microchip text-accent mt-1"></i> <span><strong>نشر المنطق:</strong> تحليلات تنبؤية وذكاء مؤتمت لمنصة ماتريكس.</span></li>
                </ul>
            '
        ],
        'icon' => 'brain-circuit'
    ]
];

$current_data = isset($details[$section]) ? $details[$section] : $details['development'];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $current_data['title']['en']; ?> | Gouda Nasralla</title>
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
                    colors: { primary: '#0a0a0a', accent: '#007bff', 'accent-hover': '#0056b3' },
                    fontFamily: { sans: ['Inter', 'Cairo', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0a0a0a; color: #f8fafc; }
        .bg-grid {
            background-image: linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glass { background: rgba(10, 10, 10, 0.7); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.08); }
        [dir="rtl"] { font-family: 'Cairo', sans-serif; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: #007bff; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-grid min-h-screen">

    <!-- Navigation -->
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
        <div class="max-w-4xl mx-auto">
            <div class="glass p-10 md:p-16 rounded-[3rem] border border-white/5">
                <div class="w-20 h-20 bg-accent/10 rounded-3xl flex items-center justify-center mb-10">
                    <i data-lucide="<?php echo $current_data['icon']; ?>" class="text-accent w-10 h-10"></i>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-black mb-8 tracking-tight" id="section-title">
                    <?php echo $current_data['title']['en']; ?>
                </h1>
                
                <div class="prose prose-invert max-w-none text-slate-300 leading-relaxed text-lg" id="section-content">
                    <?php echo $current_data['content']['en']; ?>
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
            <a href="https://hackerone.com/d33p-x?type=user" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-xl flex items-center justify-center hover:text-red-500 transition-all shadow-xl"><i class="fa-solid fa-terminal text-lg"></i></a>
            <a href="https://github.com/GoudaWolfDev" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-xl flex items-center justify-center hover:text-white transition-all shadow-xl"><i class="fa-brands fa-github text-lg"></i></a>
            <a href="https://www.linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-xl flex items-center justify-center hover:text-accent transition-all shadow-xl"><i class="fa-brands fa-linkedin text-lg"></i></a>
            <a href="https://www.facebook.com/goda.nasralla" target="_blank" class="w-12 h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-xl flex items-center justify-center hover:text-blue-500 transition-all shadow-xl"><i class="fa-brands fa-facebook text-lg"></i></a>
        </div>
    </div>

    <script>
        lucide.createIcons();
        let lang = 'en';
        const data = <?php echo json_encode($current_data); ?>;
        
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
            document.documentElement.dir = l === 'ar' ? 'rtl' : 'ltr';
            document.getElementById('lang-text').innerText = l === 'en' ? 'AR' : 'EN';
            document.getElementById('nav-back').innerText = l === 'en' ? 'Return' : 'رجوع';
            document.getElementById('section-title').innerText = data.title[l];
            document.getElementById('section-content').innerHTML = data.content[l];
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
