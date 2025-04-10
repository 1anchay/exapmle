<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdTech | AI Education Platform</title>
    
    <!-- Подключаем Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        :root {
            --primary: #2C7DFA;
            --primary-dark: #1a6ce8;
            --tech-gradient: linear-gradient(135deg, #6EE7B7, #3B82F6);
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8fafc;
        }
        
        .code-font {
            font-family: 'JetBrains Mono', monospace;
        }
        
        /* Анимированный хедер с частицами */
        .header-container {
            position: relative;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            height: 80px;
            overflow: hidden;
            z-index: 10;
        }
        
        .header-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(110, 231, 183, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.1) 0%, transparent 40%);
            z-index: -1;
        }
        
        /* Анимация частиц */
        .particle {
            position: absolute;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); }
        }
        
        /* Стили для логотипа с анимацией */
        .logo-text {
            font-size: 26px;
            font-weight: 700;
            background: var(--tech-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            padding-right: 10px;
        }
        
        .logo-text::after {
            content: ">";
            position: absolute;
            right: 0;
            color: #3B82F6;
            animation: blink 1s step-end infinite;
        }
        
        @keyframes blink {
            50% { opacity: 0; }
        }
        
        /* Навигация с ховер-эффектами */
        .nav-link {
            position: relative;
            color: #1e293b;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--tech-gradient);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link:hover::before {
            width: 60%;
        }
        
        /* Кнопки с неоновым эффектом */
        .auth-btn {
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .login-btn {
            color: #1e293b;
            border: 1px solid #e2e8f0;
        }
        
        .login-btn:hover {
            background: #f8fafc;
            box-shadow: 0 0 15px rgba(44, 125, 250, 0.2);
        }
        
        .register-btn {
            background: var(--tech-gradient);
            color: white;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }
        
        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }
        
        /* Аватар с градиентной обводкой */
        .profile-img-container {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 2px;
            background: var(--tech-gradient);
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }
        
        /* Иконка темы с анимацией */
        .theme-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
            background: #f1f5f9;
        }
        
        .theme-btn:hover {
            transform: rotate(30deg);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
        }
        
        /* Микро-интерактивность для IT-стиля */
        .tech-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #6EE7B7;
            position: absolute;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .nav-item:hover .tech-dot {
            opacity: 1;
            transform: translateY(5px);
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Хедер с анимированным фоном -->
    <header class="header-container dark:bg-gray-800">
        <div class="header-bg"></div>
        
        <!-- Генерация частиц -->
        <div id="particles"></div>
        
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">
            <!-- Логотип с IT-стилем -->
            <div class="flex items-center space-x-2">
                <span class="logo-text code-font">EdTech</span>
                <div class="h-3 w-3 rounded-full bg-green-400 animate-pulse"></div>
            </div>

            <!-- Навигация с точками-индикаторами -->
            <nav class="hidden md:flex items-center space-x-1">
                <div class="nav-item relative">
                    <div class="tech-dot"></div>
                    <a href="{{ route('main') }}" class="nav-link dark:text-gray-200">Главная</a>
                </div>
                <div class="nav-item relative">
                    <div class="tech-dot"></div>
                    <a href="article.php" class="nav-link dark:text-gray-200">Курсы</a>
                </div>
                <div class="nav-item relative">
                    <div class="tech-dot"></div>
                    <a href="{{ route('comments.index') }}" class="nav-link dark:text-gray-200">Сообщество</a>
                </div>
                <div class="nav-item relative">
                    <div class="tech-dot"></div>
                    <a href="{{ route('register') }}" class="nav-link dark:text-gray-200">Для преподавателей</a>
                </div>
            </nav>

            <!-- Блок авторизации -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="login-btn dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600">Войти</a>
                    <a href="{{ route('register') }}" class="register-btn">Регистрация</a>
                @else
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-2 group">
                            <div class="profile-img-container group-hover:animate-pulse">
                                <img src="{{ optional(Auth::user())->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://via.placeholder.com/40' }}" 
                                     alt="Profile" class="profile-img">
                            </div>
                            <span class="text-sm font-medium dark:text-gray-200">{{ Auth::user()->name }}</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                Выйти
                            </button>
                        </form>
                    </div>
                @endguest
                
                <!-- Кнопка темы с иконками -->
                <button id="theme-toggle" class="theme-btn dark:bg-gray-700">
                    <i class="fas fa-sun text-yellow-400 dark:hidden"></i>
                    <i class="fas fa-moon text-gray-600 hidden dark:block dark:text-blue-300"></i>
                </button>
            </div>
        </div>
    </header>

    <script>
        // Генерация частиц
        function createParticles() {
            const container = document.getElementById('particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Случайные параметры
                const size = Math.random() * 8 + 2;
                const posX = Math.random() * 100;
                const delay = Math.random() * 15;
                const duration = 15 + Math.random() * 10;
                const color = `hsl(${Math.random() * 60 + 190}, 80%, 60%)`;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.bottom = `-${size}px`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                particle.style.background = color;
                
                container.appendChild(particle);
            }
        }
        
        // Инициализация темы
        function initTheme() {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const html = document.documentElement;
            
            if (localStorage.getItem('theme') === 'dark' || 
                (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
            
            themeToggleBtn.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
            });
        }
        
        // Микро-интерактивность для навигации
        function setupNavHover() {
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                const dot = item.querySelector('.tech-dot');
                const link = item.querySelector('.nav-link');
                
                item.addEventListener('mouseenter', () => {
                    const linkRect = link.getBoundingClientRect();
                    dot.style.left = `${linkRect.width / 2 - 4}px`;
                });
            });
        }
        
        // Инициализация
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            initTheme();
            setupNavHover();
        });
    </script>
</body>
</html>