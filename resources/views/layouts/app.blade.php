<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFlix - Nonton Bareng Virtual</title>
    
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
                        primary: '#6555F5',
                        darkPurple: '#5243C7',
                        accent: '#FF6B35',
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
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    
    @livewireStyles
</head>
<body class="bg-[#0A0A0A] text-white font-sans overflow-x-hidden selection:bg-primary selection:text-white">

    <!-- Background Gradients -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-primary rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-darkPurple rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>
    </div>

    {{ $slot }}

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
