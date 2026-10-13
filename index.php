<?php
/**
 * Professional Landing Page for Tech Entrepreneur & Security Researcher
 * Theme: Dark Mode Cyberpunk/Corporate Fusion
 * Built with Tailwind CSS & Lucide Icons
 */
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Gouda Nasralla | Tech Entrepreneur & Security Researcher</title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23007bff'><path d='M12 2L4.5 20.29L5.21 21L12 18L18.79 21L19.5 20.29L12 2Z'/></svg>">
    <meta name="title" content="Gouda Nasralla | Tech Entrepreneur & Security Researcher">
    <meta name="description"
        content="Building Intelligent Systems, Securing the Future, Leading Impact. Professional portfolio of Gouda Nasralla, specializing in PHP OOP, Matrix Platform, Ethical Hacking, and Strategic Leadership.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Cairo:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Three.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Lucide Icons -->
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
        :root {
            --accent-glow: rgba(0, 123, 255, 0.4);
        }

        body {
            background-color: #0a0a0a;
            color: #f8fafc;
            overflow-x: hidden;
        }

        .bg-grid {
            background-image:
                linear-gradient(to right, rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .glass {
            background: rgba(10, 10, 10, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .text-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #007bff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            border-color: #007bff;
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -20px var(--accent-glow);
        }

        [dir="rtl"] {
            font-family: 'Cairo', sans-serif;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #007bff;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }

        .stagger-3 {
            animation-delay: 0.3s;
        }
    </style>
</head>

<body class="bg-grid">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Brand -->
            <a href="index.php" class="flex items-center gap-3 group">
                <div
                    class="w-10 h-10 bg-accent/10 border border-accent/20 rounded-xl flex items-center justify-center group-hover:bg-accent transition-all duration-300">
                    <i class="fa-brands fa-wolf-pack-battalion text-accent group-hover:text-white text-lg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-[15px] leading-tight">Gouda Nasralla</span>
                    <span class="text-[10px] text-slate-400">Systems & Security</span>
                </div>
            </a>

            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center">
                <div class="flex items-center gap-8 text-[15px] font-medium text-slate-300 me-8">
                    <a href="#home" id="nav-home" class="nav-link hover:text-white transition-colors">Home</a>
                    <a href="about.php" id="nav-about" class="nav-link hover:text-white transition-colors">About</a>
                    <a href="#core" id="nav-expertise" class="nav-link hover:text-white transition-colors">Expertise</a>
                    <a href="portfolio.php" id="nav-hub"
                        class="nav-link hover:text-white transition-colors">Portfolio</a>
                    <a href="#contact" id="nav-contact" class="nav-link hover:text-white transition-colors">Contact</a>
                </div>

                <!-- Social & Language -->
                <div class="flex items-center gap-6 border-s border-white/10 ps-8">
                    <div class="flex items-center gap-5">
                        <a href="https://www.linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank"
                            class="text-slate-400 hover:text-accent transition-colors"><i
                                class="fa-brands fa-linkedin text-lg"></i></a>
                        <a href="https://github.com/GoudaWolfDev" target="_blank"
                            class="text-slate-400 hover:text-accent transition-colors"><i
                                class="fa-brands fa-github text-lg"></i></a>
                        <a href="https://hackerone.com/d33p-x?type=user" target="_blank"
                            class="text-slate-400 hover:text-accent transition-colors"><i
                                class="fa-solid fa-terminal text-lg"></i></a>
                    </div>
                    <button onclick="toggleLanguage()"
                        class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-white/10 hover:bg-white/10 transition-all group">
                        <i data-lucide="globe"
                            class="w-4 h-4 text-accent group-hover:rotate-12 transition-transform"></i>
                        <span id="lang-text" class="text-[11px] font-semibold uppercase">AR</span>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <button onclick="toggleMobileMenu()"
                class="lg:hidden w-10 h-10 flex items-center justify-center border border-white/10 rounded-xl hover:bg-white/5 transition-all">
                <i data-lucide="menu" id="menu-icon" class="w-5 h-5 text-slate-300"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden lg:hidden glass border-t border-white/5 absolute w-full left-0 py-8 px-6 space-y-6 shadow-2xl">
            <div class="flex flex-col gap-6">
                <a href="#home" id="mob-home" onclick="toggleMobileMenu()"
                    class="text-lg font-medium text-slate-300 hover:text-white transition-colors">Home</a>
                <a href="about.php" id="mob-about" onclick="toggleMobileMenu()"
                    class="text-lg font-medium text-slate-300 hover:text-white transition-colors">About</a>
                <a href="#core" id="mob-expertise" onclick="toggleMobileMenu()"
                    class="text-lg font-medium text-slate-300 hover:text-white transition-colors">Expertise</a>
                <a href="portfolio.php" id="mob-hub" onclick="toggleMobileMenu()"
                    class="text-lg font-medium text-slate-300 hover:text-white transition-colors">Portfolio</a>
                <a href="#contact" id="mob-contact" onclick="toggleMobileMenu()"
                    class="text-lg font-medium text-accent hover:text-white transition-colors">Contact</a>
            </div>
            <div class="pt-6 border-t border-white/5">
                <button onclick="toggleLanguage(); toggleMobileMenu();"
                    class="w-full flex items-center justify-center gap-3 px-6 py-4 rounded-2xl bg-white/5 border border-white/10 text-white font-bold transition-all active:scale-95">
                    <i data-lucide="globe" class="w-5 h-5 text-accent"></i>
                    <span id="mob-lang-text" class="uppercase">AR</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="relative min-h-screen flex items-center pt-24 lg:pt-20">
        <div class="max-w-7xl mx-auto px-6 w-full py-12 md:py-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                <div class="flex-1 space-y-8 text-center lg:text-start order-2 lg:order-1">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 border border-accent/20 text-accent text-[10px] md:text-[11px] font-bold uppercase tracking-[0.2em]">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                        </span>
                        <span>Securing the Digital Frontier</span>
                    </div>
                    <h1 id="hero-title"
                        class="text-4xl md:text-7xl xl:text-8xl font-black tracking-tight leading-[1.1] animate-fade-in-up stagger-1">
                        <span class="text-gradient">Architecting</span> the Future. <br class="hidden md:block">
                        <span class="text-accent underline decoration-accent/30 underline-offset-8">Fortified.</span>
                    </h1>
                    <p id="hero-sub"
                        class="text-slate-400 text-base md:text-xl max-w-2xl leading-relaxed mx-auto lg:mx-0 animate-fade-in-up stagger-2">
                        Senior Tech Entrepreneur & Security Researcher. Engineering high-performance systems and
                        deploying unbreakable digital defense strategies for global scale.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 md:gap-6">
                        <a href="portfolio.php"
                            class="w-full sm:w-auto px-8 md:px-10 py-4 md:py-5 bg-accent text-white font-bold rounded-2xl hover:bg-accent-hover transition-all flex items-center justify-center gap-3 shadow-2xl shadow-accent/40 group">
                            <span id="btn-explore">Explore My Lab</span>
                            <i data-lucide="flask-conical"
                                class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                        </a>
                        <a href="#contact"
                            class="w-full sm:w-auto px-8 md:px-10 py-4 md:py-5 bg-white/5 border border-white/10 text-white font-bold rounded-2xl hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                            <span id="btn-contact">Direct Channel</span>
                            <i data-lucide="zap" class="w-5 h-5 text-yellow-500"></i>
                        </a>
                    </div>
                </div>
                <div class="flex-1 relative order-1 lg:order-2 w-full max-w-sm lg:max-w-none">
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl shadow-blue-900/20 max-w-[280px] md:max-w-md mx-auto border-2 border-accent/20">
                        <img src="me.png" alt="Gouda Nasralla"
                            class="w-full h-auto object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Tri-Core Section -->
    <section id="core" class="py-24 md:py-40 bg-slate-950/80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 md:mb-24 space-y-4">
                <h2 id="core-title" class="text-3xl md:text-5xl font-black">Strategic Specializations</h2>
                <p id="core-subtitle" class="text-slate-500 text-sm md:text-base max-w-xl mx-auto font-medium">Combining
                    technical depth with visionary leadership to build the future of secure technology.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <!-- Card 1 -->
                <div class="glass p-8 md:p-10 rounded-[2rem] card-hover group">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="code-2" class="text-accent group-hover:text-white w-7 h-7"></i>
                    </div>
                    <h3 id="core1-title" class="text-xl md:text-2xl font-extrabold mb-4">Core 1: Systems Architecture
                    </h3>
                    <p id="core1-desc" class="text-slate-400 leading-relaxed text-sm">Comprehensive Full-Stack
                        Development. Crafting high-performance, AI-driven modular ecosystems using PHP OOP.</p>
                    <a href="details.php?section=development"
                        class="inline-flex items-center gap-2 text-accent text-[10px] font-bold uppercase tracking-widest mt-6 group/link">
                        <span id="read-more-1">Read Intelligence Brief</span>
                        <i data-lucide="arrow-right"
                            class="w-3 h-3 group-hover/link:translate-x-1 rtl:rotate-180 transition-transform"></i>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="glass p-8 md:p-10 rounded-[2rem] card-hover group">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="shield-alert" class="text-accent group-hover:text-white w-7 h-7"></i>
                    </div>
                    <h3 id="core2-title" class="text-xl md:text-2xl font-extrabold mb-4">Core 2: Cyber Security</h3>
                    <p id="core2-desc" class="text-slate-400 leading-relaxed text-sm">Advanced vulnerability research
                        and offensive hacking. Delivering military-grade security audits.</p>
                    <a href="details.php?section=security"
                        class="inline-flex items-center gap-2 text-accent text-[10px] font-bold uppercase tracking-widest mt-6 group/link">
                        <span id="read-more-2">Read Intelligence Brief</span>
                        <i data-lucide="arrow-right"
                            class="w-3 h-3 group-hover/link:translate-x-1 rtl:rotate-180 transition-transform"></i>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="glass p-8 md:p-10 rounded-[2rem] card-hover group">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="trending-up" class="text-accent group-hover:text-white w-7 h-7"></i>
                    </div>
                    <h3 id="core3-title" class="text-xl md:text-2xl font-extrabold mb-4">Core 3: Strategic Leadership
                    </h3>
                    <p id="core3-desc" class="text-slate-400 leading-relaxed text-sm">Fusing behavioral psychology with
                        business strategy to drive sustainable growth and lead global initiatives.</p>
                    <a href="details.php?section=leadership"
                        class="inline-flex items-center gap-2 text-accent text-[10px] font-bold uppercase tracking-widest mt-6 group/link">
                        <span id="read-more-3">Read Intelligence Brief</span>
                        <i data-lucide="arrow-right"
                            class="w-3 h-3 group-hover/link:translate-x-1 rtl:rotate-180 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Arsenal -->
    <section id="skills" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 text-center lg:text-start">
            <h2 id="skills-title" class="text-3xl md:text-5xl font-black mb-12">Technical Arsenal</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                <a href="details.php?section=development"
                    class="glass p-6 rounded-3xl border border-white/5 hover:border-accent/20 transition-all group">
                    <i data-lucide="code-2" class="text-accent mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 id="skill-1-title" class="font-bold mb-1">Development</h4>
                    <p id="skill-1-desc" class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">PHP
                        (OOP), Python, JS</p>
                </a>
                <a href="details.php?section=security"
                    class="glass p-6 rounded-3xl border border-white/5 hover:border-accent/20 transition-all group">
                    <i data-lucide="shield" class="text-accent mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 id="skill-2-title" class="font-bold mb-1">Cyber Security</h4>
                    <p id="skill-2-desc" class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">
                        Offensive, Forensics</p>
                </a>
                <a href="details.php?section=ai"
                    class="glass p-6 rounded-3xl border border-white/5 hover:border-accent/20 transition-all group">
                    <i data-lucide="brain-circuit"
                        class="text-accent mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 id="skill-3-title" class="font-bold mb-1">AI</h4>
                    <p id="skill-3-desc" class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">API,
                        Model Training</p>
                </a>
                <a href="details.php?section=leadership"
                    class="glass p-6 rounded-3xl border border-white/5 hover:border-accent/20 transition-all group">
                    <i data-lucide="user-check" class="text-accent mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 id="skill-4-title" class="font-bold mb-1">Psychology</h4>
                    <p id="skill-4-desc" class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">Social
                        Engineering</p>
                </a>
            </div>
        </div>
    </section>

    <!-- AI Neural Nexus Section -->
    <section id="ai-nexus" class="py-24 relative overflow-hidden bg-black/60">
        <!-- Three.js Canvas Container -->
        <div id="ai-canvas-container" class="absolute inset-0 z-0 opacity-40 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center lg:text-start mb-16 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 border border-accent/20 text-accent text-[10px] font-bold uppercase tracking-[0.2em] animate-fade-in">
                    <i data-lucide="sparkles" class="w-3 h-3"></i>
                    <span>Advanced AI Expert</span>
                </div>
                <h2 id="ai-title" class="text-4xl md:text-7xl font-black text-gradient tracking-tight leading-tight md:leading-[1.1] pb-2">Neural Systems Expert</h2>
                <p id="ai-subtitle" class="text-slate-400 text-base md:text-xl max-w-2xl font-medium leading-relaxed">Architecting the next generation of cognitive systems through specialized machine learning and neural engineering.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <!-- AI Card 1 -->
                <div class="glass p-8 rounded-[2rem] border border-white/5 hover:border-accent/40 transition-all duration-500 group animate-fade-in-up stagger-1">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="mic-2" class="text-accent group-hover:text-white"></i>
                    </div>
                    <h4 id="ai-card1-title" class="text-xl font-bold mb-3">Voice Training</h4>
                    <p id="ai-card1-desc" class="text-slate-400 text-sm leading-relaxed">Specialized training for custom voice models and synthetic speech synthesis architectures.</p>
                </div>

                <!-- AI Card 2 -->
                <div class="glass p-8 rounded-[2rem] border border-white/5 hover:border-accent/40 transition-all duration-500 group animate-fade-in-up stagger-2">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="brain-circuit" class="text-accent group-hover:text-white"></i>
                    </div>
                    <h4 id="ai-card2-title" class="text-xl font-bold mb-3">LLM Tuning</h4>
                    <p id="ai-card2-desc" class="text-slate-400 text-sm leading-relaxed">Fine-tuning and deploying specialized Large Language Models for domain-specific intelligence.</p>
                </div>

                <!-- AI Card 3 -->
                <div class="glass p-8 rounded-[2rem] border border-white/5 hover:border-accent/40 transition-all duration-500 group animate-fade-in-up stagger-3">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="eye" class="text-accent group-hover:text-white"></i>
                    </div>
                    <h4 id="ai-card3-title" class="text-xl font-bold mb-3">Vision Systems</h4>
                    <p id="ai-card3-desc" class="text-slate-400 text-sm leading-relaxed">Integrating advanced computer vision libraries for pattern recognition and visual analytics.</p>
                </div>

                <!-- AI Card 4 -->
                <div class="glass p-8 rounded-[2rem] border border-white/5 hover:border-accent/40 transition-all duration-500 group animate-fade-in-up stagger-3">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent transition-all">
                        <i data-lucide="audio-lines" class="text-accent group-hover:text-white"></i>
                    </div>
                    <h4 id="ai-card4-title" class="text-xl font-bold mb-3">STT Analysis</h4>
                    <p id="ai-card4-desc" class="text-slate-400 text-sm leading-relaxed">High-precision speech-to-text conversion and complex vocal data analysis pipelines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-slate-950/40">
        <div class="max-w-7xl mx-auto px-6">
            <h2 id="portfolio-title" class="text-3xl md:text-6xl font-black mb-16 text-center md:text-left">The
                Innovation Hub</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Matrix -->
                <div class="glass rounded-[2.5rem] overflow-hidden card-hover">
                    <div class="aspect-video bg-accent/5 flex items-center justify-center p-12 border-b border-white/5">
                        <i data-lucide="layout-grid" class="w-20 h-20 text-accent/30"></i>
                    </div>
                    <div class="p-8 space-y-4">
                        <h4 class="text-2xl font-bold">Matrix Platform</h4>
                        <p class="text-slate-400 text-sm leading-relaxed">A modular, AI-first ecosystem designed for
                            extreme scalability and military-grade security.</p>
                        <div class="flex gap-3 pt-2">
                            <span
                                class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">PHP
                                8.3</span>
                            <span
                                class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">Zero
                                Trust</span>
                        </div>
                    </div>
                </div>
                <!-- Refqa -->
                <div class="glass rounded-[2.5rem] overflow-hidden card-hover">
                    <div
                        class="aspect-video bg-blue-900/5 flex items-center justify-center p-12 border-b border-white/5">
                        <i data-lucide="heart-handshake" class="w-20 h-20 text-blue-400/20"></i>
                    </div>
                    <div class="p-8 space-y-4">
                        <h4 id="port2-title" class="text-2xl font-bold">Refqa Project</h4>
                        <p id="port2-desc" class="text-slate-400 text-sm leading-relaxed">Global initiative for digital literacy, mental health, and technical leadership empowerment.</p>
                        <div class="flex gap-3 pt-2">
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">Impact</span>
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">Global</span>
                        </div>
                    </div>
                </div>

                <!-- Academic Security -->
                <div class="glass rounded-[2.5rem] overflow-hidden card-hover">
                    <div class="aspect-video bg-red-900/5 flex items-center justify-center p-12 border-b border-white/5">
                        <i data-lucide="shield-check" class="w-20 h-20 text-red-400/20"></i>
                    </div>
                    <div class="p-8 space-y-4">
                        <h4 id="port3-title" class="text-2xl font-bold">Security Disclosure</h4>
                        <p id="port3-desc" class="text-slate-400 text-sm leading-relaxed">Identified and ethically disclosed a critical vulnerability in university academic systems.</p>
                        <div class="flex gap-3 pt-2">
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase text-red-400">Critical</span>
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Freelance Ecosystem -->
                <div class="glass rounded-[2.5rem] overflow-hidden card-hover">
                    <div class="aspect-video bg-emerald-900/5 flex items-center justify-center p-12 border-b border-white/5">
                        <i data-lucide="briefcase" class="w-20 h-20 text-emerald-400/20"></i>
                    </div>
                    <div class="p-8 space-y-4">
                        <h4 id="port4-title" class="text-2xl font-bold">Freelance Hub</h4>
                        <p id="port4-desc" class="text-slate-400 text-sm leading-relaxed">Delivered 50+ professional projects for global clients across various tech stacks.</p>
                        <div class="flex gap-3 pt-2">
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase text-emerald-400">50+ Projects</span>
                            <span class="px-3 py-1 bg-black/40 border border-white/5 rounded-lg text-[10px] font-bold text-slate-300 uppercase">Professional</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer & Contact -->
    <footer id="contact" class="py-24 border-t border-white/5 bg-black/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="glass p-8 md:p-20 rounded-[3rem] grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div class="space-y-10 text-center lg:text-left">
                    <h2 id="footer-title" class="text-3xl md:text-6xl font-black leading-tight">Let's Secure and <br>
                        Build Together.</h2>
                    <p id="footer-sub" class="text-slate-400 text-lg font-medium">Available for consulting, security
                        audits, and visionary leadership.</p>
                    <div class="space-y-6">
                        <a href="mailto:goudawolfdev@gmail.com"
                            class="flex items-center justify-center lg:justify-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-white/5 rounded-xl flex items-center justify-center group-hover:bg-accent transition-all">
                                <i data-lucide="mail" class="w-5 h-5 text-accent group-hover:text-white"></i>
                            </div>
                            <span class="text-xl font-bold tracking-tight">goudawolfdev@gmail.com</span>
                        </a>
                    </div>
                </div>


                <form id="contact-form" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" name="name" placeholder="Full Name" required
                            class="w-full bg-black border border-white/10 rounded-2xl px-6 py-4 focus:border-accent outline-none font-medium">
                        <input type="email" name="email" placeholder="Secure Email" required
                            class="w-full bg-black border border-white/10 rounded-2xl px-6 py-4 focus:border-accent outline-none font-medium">
                    </div>
                    <textarea name="message" placeholder="Describe your objective..." rows="4" required
                        class="w-full bg-black border border-white/10 rounded-2xl px-6 py-4 focus:border-accent outline-none font-medium"></textarea>
                    <button type="submit" id="form-submit"
                        class="w-full py-5 bg-accent text-white font-black rounded-2xl hover:bg-accent-hover transition-all uppercase tracking-[0.2em] shadow-xl shadow-accent/20">Initialize
                        Contact</button>
                    <div id="form-status" class="hidden text-center text-xs font-bold uppercase tracking-widest mt-4">
                    </div>
                </form>
            </div>

            <div
                class="mt-20 pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8 text-slate-500 text-[10px] font-bold uppercase tracking-widest">
                <div class="flex items-center gap-4">
                    <p>&copy; 2024 Gouda Nasralla. All Rights Reserved.</p>
                </div>
                <div class="flex gap-4">
                    <a href="https://linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank"
                        class="w-10 h-10 rounded-xl border border-white/5 flex items-center justify-center hover:text-accent transition-all"><i
                            class="fa-brands fa-linkedin text-base"></i></a>
                    <a href="https://github.com/GoudaWolfDev" target="_blank"
                        class="w-10 h-10 rounded-xl border border-white/5 flex items-center justify-center hover:text-white transition-all"><i
                            class="fa-brands fa-github text-base"></i></a>
                    <a href="https://www.facebook.com/goda.nasralla" target="_blank"
                        class="w-10 h-10 rounded-xl border border-white/5 flex items-center justify-center hover:text-blue-500 transition-all"><i
                            class="fa-brands fa-facebook text-base"></i></a>
                    <a href="https://hackerone.com/d33p-x?type=user" target="_blank"
                        class="w-10 h-10 rounded-xl border border-white/5 flex items-center justify-center hover:text-red-500 transition-all"><i
                            class="fa-solid fa-terminal text-base"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top & Social Widget -->
    <div class="fixed bottom-6 left-6 md:bottom-8 md:left-8 z-[60] opacity-0 translate-y-10 transition-all duration-500 pointer-events-none"
        id="back-to-top-container">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="w-12 h-12 md:w-14 md:h-14 bg-white/5 backdrop-blur-xl border border-white/10 text-white rounded-xl md:rounded-2xl flex items-center justify-center shadow-2xl hover:bg-accent hover:border-accent transition-all group">
            <i class="fa-solid fa-arrow-up group-hover:-translate-y-1 transition-transform"></i>
        </button>
    </div>

    <div class="fixed bottom-6 right-6 md:bottom-8 md:right-8 z-[60] flex flex-col-reverse items-center gap-3 md:gap-4">
        <button onclick="toggleSocialHub()" id="social-hub-btn"
            class="w-12 h-12 md:w-14 md:h-14 bg-accent text-white rounded-xl md:rounded-2xl flex items-center justify-center shadow-2xl shadow-accent/40 hover:scale-110 transition-all duration-300 z-50">
            <i class="fa-solid fa-share-nodes text-lg md:text-xl transition-transform duration-300" id="share-icon"></i>
        </button>
        <div id="social-hub-items"
            class="flex flex-col items-center gap-2 md:gap-3 opacity-0 translate-y-10 pointer-events-none transition-all duration-500">
            <a href="https://hackerone.com/d33p-x?type=user" target="_blank"
                class="w-10 h-10 md:w-12 md:h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-lg md:rounded-xl flex items-center justify-center text-slate-400 hover:text-red-500 hover:scale-110 hover:border-red-500/30 transition-all shadow-xl">
                <i class="fa-solid fa-terminal text-base md:text-lg"></i>
            </a>
            <a href="https://github.com/GoudaWolfDev" target="_blank"
                class="w-10 h-10 md:w-12 md:h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-lg md:rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:scale-110 hover:border-white/30 transition-all shadow-xl">
                <i class="fa-brands fa-github text-base md:text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/in/gouda-nasralla-28a77a339/" target="_blank"
                class="w-10 h-10 md:w-12 md:h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-lg md:rounded-xl flex items-center justify-center text-slate-400 hover:text-accent hover:scale-110 hover:border-accent/30 transition-all shadow-xl">
                <i class="fa-brands fa-linkedin text-base md:text-lg"></i>
            </a>
            <a href="https://www.facebook.com/goda.nasralla" target="_blank"
                class="w-10 h-10 md:w-12 md:h-12 bg-black/80 backdrop-blur-md border border-white/10 rounded-lg md:rounded-xl flex items-center justify-center text-slate-400 hover:text-blue-500 hover:scale-110 hover:border-blue-500/30 transition-all shadow-xl">
                <i class="fa-brands fa-facebook text-base md:text-lg"></i>
            </a>
        </div>
    </div>
    </div>

    <script>
        lucide.createIcons();
        let currentLang = 'en';

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) { menu.classList.remove('hidden'); icon.setAttribute('data-lucide', 'x'); }
            else { menu.classList.add('hidden'); icon.setAttribute('data-lucide', 'menu'); }
            lucide.createIcons();
        }

        function toggleSocialHub() {
            const items = document.getElementById('social-hub-items');
            const icon = document.getElementById('share-icon');
            const isOpen = !items.classList.contains('opacity-0');
            
            if (!isOpen) {
                items.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                items.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
                icon.classList.add('rotate-45');
            } else {
                items.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                items.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
                icon.classList.remove('rotate-45');
            }
        }

        const translations = {
            en: {
                navHome: 'Home', navAbout: 'About', navExpertise: 'Expertise', navArsenal: 'Skills', navHub: 'Portfolio', navContact: 'Contact',
                heroTitle: '<span class="text-gradient">Engineering</span> the Future. <br class="hidden md:block"> <span class="text-accent underline decoration-accent/30 underline-offset-8">Secured.</span>',
                heroSub: 'Senior Tech Entrepreneur & Security Researcher. Building high-performance systems and deploying robust digital defense strategies.',
                btnExplore: 'View Portfolio', btnContact: 'Contact Me',
                coreTitle: 'Core Expertise', coreSubtitle: 'Merging advanced software engineering with offensive security research to build a safer digital world.',
                core1Title: 'Systems Engineering', core1Desc: 'Full-stack development specializing in PHP 8.3 OOP and scalable AI-integrated architectures.',
                core2Title: 'Cyber Security', core2Desc: 'Expertise in offensive security research, vulnerability discovery, and tactical digital defense.',
                core3Title: 'Strategic Leadership', core3Desc: 'Leading technical teams and high-impact digital initiatives with a focus on psychological behavioral science.',
                readMore: 'Read More',
                skillsTitle: 'Technical Skills', skill1Title: 'Software Engineering', skill2Title: 'Cyber Security', skill3Title: 'AI Development', skill4Title: 'Strategic Psychology',
                portfolioTitle: 'Project Portfolio',
                footerTitle: 'Let\'s Build and <br> Secure the Future.', footerSub: 'Open for strategic consulting, security audits, and technical partnerships.',
                formSubmit: 'Send Message', formSending: 'Sending...',
                langText: 'AR', dir: 'ltr',
                aiTitle: 'Neural Systems Expert',
                aiSubtitle: 'Architecting the next generation of cognitive systems through specialized machine learning and neural engineering.',
                aiCard1Title: 'Voice Training', aiCard1Desc: 'Specialized training for custom voice models and synthetic speech synthesis architectures.',
                aiCard2Title: 'LLM Tuning', aiCard2Desc: 'Fine-tuning and deploying specialized Large Language Models for domain-specific intelligence.',
                aiCard3Title: 'Vision Systems', aiCard3Desc: 'Integrating advanced computer vision libraries for pattern recognition and visual analytics.',
                aiCard4Title: 'STT Analysis', aiCard4Desc: 'High-precision speech-to-text conversion and complex vocal data analysis pipelines.',
                port2Title: 'Refqa AI: Human Mode', port2Desc: 'An advanced AI system developed entirely by me to enhance human potential through emotional intelligence and specialized CBT/ACT psychological support.',
                port3Title: 'University Security Disclosure', port3Desc: 'Identified and ethically disclosed a critical vulnerability in university academic systems, securing thousands of records.',
                port4Title: 'Freelance Ecosystem', port4Desc: 'Successfully delivered 50+ high-impact technical projects for a diverse range of international freelance clients.'
            },
            ar: {
                navHome: 'الرئيسية', navAbout: 'من أنا', navExpertise: 'خبراتي', navArsenal: 'مهاراتي', navHub: 'أعمالي', navContact: 'اتصل بي',
                heroTitle: '<span class="text-gradient">هندسة</span> المستقبل. <br class="hidden md:block"> <span class="text-accent underline decoration-accent/30 underline-offset-8">بأمان تام.</span>',
                heroSub: 'رائد أعمال تقني وباحث أمني. متخصص في بناء الأنظمة عالية الأداء وتطوير استراتيجيات الدفاع الرقمي القوية.',
                btnExplore: 'مشاهدة أعمالي', btnContact: 'تواصل معي',
                coreTitle: 'الخبرات الأساسية', coreSubtitle: 'الدمج بين الهندسة البرمجية المتقدمة والأبحاث الأمنية لبناء عالم رقمي أكثر أماناً.',
                core1Title: 'هندسة الأنظمة', core1Desc: 'تطوير شامل متخصص في PHP 8.3 OOP ومعماريات الأنظمة القابلة للتوسع المدمجة بالذكاء الاصطناعي.',
                core2Title: 'الأمن السيبراني', core2Desc: 'خبرة في الأبحاث الأمنية الهجومية، اكتشاف الثغرات، والدفاع الرقمي التكتيكي.',
                core3Title: 'القيادة الاستراتيجية', core3Desc: 'قيادة الفرق التقنية والمبادرات الرقمية عالية التأثير مع التركيز على العلوم السلوكية الاستراتيجية.',
                readMore: 'اقرأ المزيد',
                skillsTitle: 'المهارات التقنية', skill1Title: 'هندسة البرمجيات', skill2Title: 'الأمن السيبراني', skill3Title: 'الذكاء الاصطناعي', skill4Title: 'علم النفس الاستراتيجي',
                portfolioTitle: 'معرض الأعمال',
                footerTitle: 'لنقم ببناء <br> وتأمين المستقبل معاً.', footerSub: 'متاح للاستشارات الاستراتيجية، التدقيق الأمني، والشراكات التقنية.',
                formSubmit: 'إرسال الرسالة', formSending: 'جاري الإرسال...',
                langText: 'EN', dir: 'rtl',
                aiTitle: 'خبير الشبكات العصبية',
                aiSubtitle: 'هندسة الجيل القادم من الأنظمة الإدراكية من خلال التعلم الآلي المتخصص والهندسة العصبية المتقدمة.',
                aiCard1Title: 'تدريب النماذج الصوتية', aiCard1Desc: 'تدريب متخصص لنماذج الصوت المخصصة ومعماريات توليد الكلام الاصطناعي الاحترافية.',
                aiCard2Title: 'تخصيص نماذج LLM', aiCard2Desc: 'ضبط وتخصيص النماذج اللغوية الكبيرة (LLM) للعمل في مجالات ذكاء اصطناعي تخصصية.',
                aiCard3Title: 'أنظمة الرؤية', aiCard3Desc: 'دمج مكتبات الرؤية الحاسوبية المتقدمة للتعرف على الأنماط والتحليلات البصرية المتقدمة.',
                aiCard4Title: 'تحليل الصوت (STT)', aiCard4Desc: 'تحويل الصوت إلى نصوص بدقة عالية مع معالجة سلاسل البيانات الصوتية المعقدة.',
                port2Title: 'نظام رفقة: الوضع البشري', port2Desc: 'نظام ذكاء اصطناعي متكامل من صنعي، يطور الذكاء العاطفي ويقدم دعماً نفسياً تخصصياً يعتمد على منهجيات CBT و ACT.',
                port3Title: 'كشف ثغرة جامعية', port3Desc: 'اكتشاف وإبلاغ قانوني عن ثغرة أمنية حرجة في أنظمة الجامعة، مما أمّن بيانات آلاف الطلاب.',
                port4Title: 'منظومة الفري لانس', port4Desc: 'تنفيذ أكثر من 50 مشروعاً تقنياً عالياً لعملاء دوليين في مختلف المجالات التكنولوجية.'
            }
        };

        // Scroll Logic for Back to Top
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('back-to-top-container');
            if (window.scrollY > 500) {
                btn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                btn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
            } else {
                btn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                btn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
            }
        });

        function toggleLanguage() {
            currentLang = currentLang === 'en' ? 'ar' : 'en';
            localStorage.setItem('preferredLang', currentLang);
            applyLanguage(currentLang);
        }

        function applyLanguage(lang) {
            const t = translations[lang];
            document.documentElement.dir = t.dir;
            document.getElementById('lang-text').innerText = t.langText;
            document.getElementById('nav-home').innerText = t.navHome;
            document.getElementById('nav-about').innerText = t.navAbout;
            document.getElementById('nav-expertise').innerText = t.navExpertise;
            document.getElementById('nav-hub').innerText = t.navHub;
            document.getElementById('nav-contact').innerText = t.navContact;
            document.getElementById('mob-lang-text').innerText = t.langText;

            // Mobile Menu
            document.getElementById('mob-home').innerText = t.navHome;
            document.getElementById('mob-about').innerText = t.navAbout;
            document.getElementById('mob-expertise').innerText = t.navExpertise;
            document.getElementById('mob-hub').innerText = t.navHub;
            document.getElementById('mob-contact').innerText = t.navContact;

            document.getElementById('hero-title').innerHTML = t.heroTitle;
            document.getElementById('hero-sub').innerText = t.heroSub;
            document.getElementById('btn-explore').innerText = t.btnExplore;
            document.getElementById('btn-contact').innerText = t.btnContact;
            document.getElementById('core-title').innerText = t.coreTitle;
            document.getElementById('core1-title').innerText = t.core1Title;
            document.getElementById('core1-desc').innerText = t.core1Desc;
            document.getElementById('core2-title').innerText = t.core2Title;
            document.getElementById('core2-desc').innerText = t.core2Desc;
            document.getElementById('core3-title').innerText = t.core3Title;
            document.getElementById('core3-desc').innerText = t.core3Desc;
            document.getElementById('skills-title').innerText = t.skillsTitle;
            document.getElementById('skill-1-title').innerText = t.skill1Title;
            document.getElementById('skill-2-title').innerText = t.skill2Title;
            document.getElementById('skill-3-title').innerText = t.skill3Title;
            document.getElementById('skill-4-title').innerText = t.skill4Title;
            document.getElementById('portfolio-title').innerText = t.portfolioTitle;
            document.getElementById('footer-title').innerHTML = t.footerTitle;
            document.getElementById('footer-sub').innerText = t.footerSub;
            document.getElementById('read-more-1').innerText = t.readMore;
            document.getElementById('read-more-2').innerText = t.readMore;
            document.getElementById('read-more-3').innerText = t.readMore;
            document.getElementById('form-submit').innerText = t.formSubmit;

            document.getElementById('ai-title').innerText = t.aiTitle;
            document.getElementById('ai-subtitle').innerText = t.aiSubtitle;
            document.getElementById('ai-card1-title').innerText = t.aiCard1Title;
            document.getElementById('ai-card1-desc').innerText = t.aiCard1Desc;
            document.getElementById('ai-card2-title').innerText = t.aiCard2Title;
            document.getElementById('ai-card2-desc').innerText = t.aiCard2Desc;
            document.getElementById('ai-card3-title').innerText = t.aiCard3Title;
            document.getElementById('ai-card3-desc').innerText = t.aiCard3Desc;
            document.getElementById('ai-card4-title').innerText = t.aiCard4Title;
            document.getElementById('ai-card4-desc').innerText = t.aiCard4Desc;

            document.getElementById('port2-title').innerText = t.port2Title;
            document.getElementById('port2-desc').innerText = t.port2Desc;
            document.getElementById('port3-title').innerText = t.port3Title;
            document.getElementById('port3-desc').innerText = t.port3Desc;
            document.getElementById('port4-title').innerText = t.port4Title;
            document.getElementById('port4-desc').innerText = t.port4Desc;

            lucide.createIcons();
        }

        // Initialize from storage
        const savedLang = localStorage.getItem('preferredLang');
        if (savedLang && savedLang !== currentLang) {
            currentLang = savedLang;
            applyLanguage(currentLang);
        }

        document.getElementById('contact-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = document.getElementById('form-submit');
            const status = document.getElementById('form-status');
            const t = translations[currentLang];
            btn.disabled = true; btn.innerText = t.formSending; status.classList.add('hidden');
            try {
                const response = await fetch('contact_handler.php', { method: 'POST', body: new FormData(e.target) });
                const result = await response.json();
                status.innerText = result.message; status.classList.remove('hidden');
                status.className = `text-center text-xs font-bold uppercase tracking-widest mt-4 ${result.status === 'success' ? 'text-green-500' : 'text-red-500'}`;
                if (result.status === 'success') e.target.reset();
            } catch (error) {
                status.innerText = 'Connection Error. Please try again.'; status.classList.remove('hidden'); status.className = 'text-center text-xs font-bold uppercase tracking-widest mt-4 text-red-500';
            } finally { btn.disabled = false; btn.innerText = t.formSubmit; }
        });
        // Advanced Three.js Neural Plexus Implementation
        const initAIBackground = () => {
            const container = document.getElementById('ai-canvas-container');
            if (!container) return;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(container.offsetWidth, container.offsetHeight);
            container.appendChild(renderer.domElement);

            // Group to hold everything
            const group = new THREE.Group();
            scene.add(group);

            // 1. Central AI Core (Glowing Wireframe)
            const coreGeometry = new THREE.IcosahedronGeometry(2, 2);
            const coreMaterial = new THREE.MeshBasicMaterial({
                color: '#007bff',
                wireframe: true,
                transparent: true,
                opacity: 0.2
            });
            const coreMesh = new THREE.Mesh(coreGeometry, coreMaterial);
            group.add(coreMesh);

            // 2. Neural Plexus (Particles & Lines)
            const count = 150;
            const points = [];
            const velocities = [];
            const radius = 5;

            const particlesGeometry = new THREE.BufferGeometry();
            const positions = new Float32Array(count * 3);

            for (let i = 0; i < count; i++) {
                const x = (Math.random() - 0.5) * 15;
                const y = (Math.random() - 0.5) * 15;
                const z = (Math.random() - 0.5) * 15;
                
                positions[i * 3] = x;
                positions[i * 3 + 1] = y;
                positions[i * 3 + 2] = z;

                points.push(new THREE.Vector3(x, y, z));
                velocities.push(new THREE.Vector3(
                    (Math.random() - 0.5) * 0.02,
                    (Math.random() - 0.5) * 0.02,
                    (Math.random() - 0.5) * 0.02
                ));
            }

            particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            const particlesMaterial = new THREE.PointsMaterial({
                size: 0.05,
                color: '#007bff',
                transparent: true,
                opacity: 0.8,
                blending: THREE.AdditiveBlending
            });
            const particles = new THREE.Points(particlesGeometry, particlesMaterial);
            group.add(particles);

            // 3. Lines connecting the points
            const lineMaterial = new THREE.LineBasicMaterial({
                color: '#007bff',
                transparent: true,
                opacity: 0.1,
                blending: THREE.AdditiveBlending
            });
            let lineMesh;

            camera.position.z = 8;

            // Mouse Interaction
            let mouseX = 0, mouseY = 0;
            document.addEventListener('mousemove', (e) => {
                mouseX = (e.clientX - window.innerWidth / 2) * 0.001;
                mouseY = (e.clientY - window.innerHeight / 2) * 0.001;
            });

            // Animation Loop
            const animate = () => {
                requestAnimationFrame(animate);

                // Update particles
                const posAttr = particlesGeometry.attributes.position;
                const linePositions = [];

                for (let i = 0; i < count; i++) {
                    points[i].add(velocities[i]);

                    // Bounce off boundaries
                    if (Math.abs(points[i].x) > 7) velocities[i].x *= -1;
                    if (Math.abs(points[i].y) > 7) velocities[i].y *= -1;
                    if (Math.abs(points[i].z) > 7) velocities[i].z *= -1;

                    posAttr.setXYZ(i, points[i].x, points[i].y, points[i].z);

                    // Check distance for lines
                    for (let j = i + 1; j < count; j++) {
                        const dist = points[i].distanceTo(points[j]);
                        if (dist < 3) {
                            linePositions.push(points[i].x, points[i].y, points[i].z);
                            linePositions.push(points[j].x, points[j].y, points[j].z);
                        }
                    }
                }
                posAttr.needsUpdate = true;

                // Update Lines
                if (lineMesh) group.remove(lineMesh);
                const lineGeometry = new THREE.BufferGeometry();
                lineGeometry.setAttribute('position', new THREE.Float32BufferAttribute(linePositions, 3));
                lineMesh = new THREE.LineSegments(lineGeometry, lineMaterial);
                group.add(lineMesh);

                // Rotations
                coreMesh.rotation.y += 0.005;
                coreMesh.rotation.x += 0.002;
                particles.rotation.y += 0.001;

                // Parallax effect
                group.rotation.y += (mouseX - group.rotation.y) * 0.05;
                group.rotation.x += (-mouseY - group.rotation.x) * 0.05;

                renderer.render(scene, camera);
            };

            window.addEventListener('resize', () => {
                camera.aspect = container.offsetWidth / container.offsetHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.offsetWidth, container.offsetHeight);
            });

            animate();
        };

        initAIBackground();
    </script>
</body>

</html>