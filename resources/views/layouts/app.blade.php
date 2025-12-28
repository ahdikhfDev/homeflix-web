<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="IiVa5P9A_T2Fikpz3htrQ_nDt_-LeCSE1kEWW2mxbcw" />
    
    <!-- SEO Meta Tags -->
    <title>HomeFlix - Nonton Film Online Bareng Teman | Streaming Film Gratis</title>
    <meta name="description" content="HomeFlix adalah platform streaming film online terbaik untuk nonton bareng virtual dengan teman. Nikmati ribuan film gratis, import video YouTube, dan chat real-time. Download aplikasi Android sekarang!">
    <meta name="keywords" content="nonton film online, streaming film gratis, nonton bareng virtual, watch party, film indonesia, film hollywood, download film, aplikasi nonton film, streaming movie, cinema online, bioskop online, nonton film bareng teman">
    <meta name="author" content="HomeFlix">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://homeflix.biz.id">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="HomeFlix - Nonton Film Online Bareng Teman">
    <meta property="og:description" content="Platform streaming film online terbaik untuk nonton bareng virtual. Ribuan film gratis, import YouTube, chat real-time. Download sekarang!">
    <meta property="og:url" content="https://homeflix.biz.id">
    <meta property="og:site_name" content="HomeFlix">
    <meta property="og:image" content="https://homeflix.biz.id/images/og-image.jpg">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HomeFlix - Nonton Film Online Bareng Teman">
    <meta name="twitter:description" content="Platform streaming film online terbaik untuk nonton bareng virtual. Download aplikasi Android sekarang!">
    <meta name="twitter:image" content="https://homeflix.biz.id/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    
    <!-- DNS Prefetch & Preconnect for Performance -->
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="//unpkg.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Custom Config & Styles -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                        colors: {
                        primary: '#4F46E5', // Darker Indigo (Passes AA with white)
                        darkPurple: '#4338CA',
                        accent: '#7C3AED', // Darker Violet (Passes AA with white)
                        bgDark: '#0A0A0A',
                        cardDark: '#1E1E1E',
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                    }
                }
            }
        }
    </script>

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        
        .glass-effect {
            background: rgba(30, 30, 30, 0.4);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .mask-gradient {
            mask-image: linear-gradient(to top, black 80%, transparent 100%);
            -webkit-mask-image: linear-gradient(to top, black 80%, transparent 100%);
        }

        /* 3D Perspective Container */
        .perspective-1000 {
            perspective: 1000px;
        }
        
        /* Chat Animation Classes */
        .chat-enter {
            animation: slideIn 0.3s ease-out forwards;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "WebSite",
                "@@id": "https://homeflix.biz.id/#website",
                "url": "https://homeflix.biz.id",
                "name": "HomeFlix",
                "description": "Platform streaming film online terbaik untuk nonton bareng virtual dengan teman",
                "publisher": {
                    "@@id": "https://homeflix.biz.id/#organization"
                },
                "potentialAction": {
                    "@@type": "SearchAction",
                    "target": {
                        "@@type": "EntryPoint",
                        "urlTemplate": "https://homeflix.biz.id/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }
            },
            {
                "@@type": "Organization",
                "@@id": "https://homeflix.biz.id/#organization",
                "name": "HomeFlix",
                "url": "https://homeflix.biz.id",
                "logo": {
                    "@@type": "ImageObject",
                    "url": "https://homeflix.biz.id/images/logo.png"
                },
                "description": "Platform streaming film online dan nonton bareng virtual terbaik di Indonesia",
                "sameAs": []
            },
            {
                "@@type": "MobileApplication",
                "name": "HomeFlix",
                "operatingSystem": "Android",
                "applicationCategory": "Entertainment",
                "offers": {
                    "@@type": "Offer",
                    "price": "0",
                    "priceCurrency": "IDR"
                },
                "aggregateRating": {
                    "@@type": "AggregateRating",
                    "ratingValue": "4.8",
                    "ratingCount": "1250"
                }
            }
        ]
    }
    </script>
    
    @livewireStyles
</head>
<body class="bg-[#0A0A0A] text-white font-sans overflow-x-hidden selection:bg-primary selection:text-white">

    <!-- Background Gradients -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-primary rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-darkPurple rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>
    </div>

    <main role="main">
        {{ $slot }}
    </main>

    @livewireScripts

    <!-- JavaScript Logic -->
    <script>
        // 1. Initialize Icons
        lucide.createIcons();

        // 2. Parallax 3D Effect for Phone
        const heroSection = document.getElementById('hero');
        const phoneMockup = document.getElementById('phone-mockup');

        if (heroSection && phoneMockup) {
            heroSection.addEventListener('mousemove', (e) => {
                const { left, top, width, height } = heroSection.getBoundingClientRect();
                // Calculate mouse position relative to center (-0.5 to 0.5)
                const x = (e.clientX - left) / width - 0.5;
                const y = (e.clientY - top) / height - 0.5;

                // Update CSS transform
                phoneMockup.style.transform = `
                    rotateY(${x * 20}deg) 
                    rotateX(${y * -20}deg) 
                    translateZ(50px)
                `;
                phoneMockup.style.boxShadow = `
                    ${-x * 20}px ${y * 20}px 50px rgba(101, 85, 245, 0.3),
                    0 0 0 2px rgba(255, 255, 255, 0.1)
                `;
            });

            heroSection.addEventListener('mouseleave', () => {
                phoneMockup.style.transform = `rotateY(0) rotateX(0) translateZ(0)`;
                phoneMockup.style.boxShadow = `0 25px 50px -12px rgba(0, 0, 0, 0.25)`;
            });
        }

        // 3. Simulated Chat Logic
        const chatContainer = document.getElementById('chat-container');
        
        if (chatContainer) {
            const chats = [
                { user: "Dina", text: "Wah scene ini gila banget! 😱", color: "text-pink-400" },
                { user: "Raka", text: "Plot twist-nya dapet bgt", color: "text-blue-400" },
                { user: "Budi", text: "Jangan spoiler woy! 😂", color: "text-yellow-400" },
                { user: "Sinta", text: "Keren grafiknya 🔥", color: "text-green-400" }
            ];
            
            let chatIndex = 0;

            function addChat() {
                const chat = chats[chatIndex];
                
                // Create chat element
                const chatEl = document.createElement('div');
                chatEl.className = 'chat-enter flex gap-2 items-end mb-3 px-3';
                chatEl.innerHTML = `
                    <div class="text-xs font-bold ${chat.color}">${chat.user}</div>
                    <div class="bg-[#1E1E1E] text-sm px-3 py-2 rounded-2xl rounded-bl-none border border-white/5 text-white/90 shadow-sm">
                        ${chat.text}
                    </div>
                `;
                
                chatContainer.appendChild(chatEl);

                // Keep only last 3 messages to prevent overflow
                if (chatContainer.children.length > 3) {
                    chatContainer.removeChild(chatContainer.firstChild);
                }

                // Loop index
                chatIndex = (chatIndex + 1) % chats.length;
            }

            // Add a chat message every 2 seconds
            setInterval(addChat, 2000);
            addChat(); // Add initial chat immediately
        }

        // 4. FAQ Toggle Logic
        function toggleFaq(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Toggle Content Max-Height
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                // Close other open FAQs (optional, but good UX)
                document.querySelectorAll('.faq-item .max-h-0').forEach(el => {
                    if (el !== content && el.style.maxHeight) {
                        el.style.maxHeight = null;
                        el.previousElementSibling.querySelector('i').style.transform = 'rotate(0deg)';
                    }
                });

                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
</body>
</html>
