<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdTech Платформа | Искусственный Интеллект</title>

    <!-- Подключаем Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="sun.js" defer></script>
    <style>
        /* Кастомные анимации */
        .glow-effect {
            transition: all 0.3s ease;
        }
        .glow-effect:hover {
            box-shadow: 0 0 15px 5px rgba(0, 255, 255, 0.7);
            transform: scale(1.05);
        }

        /* Эффект загрузки ИИ */
        .ai-icon {
            width: 60px;
            height: 60px;
            background-color: #6EE7B7; /* зеленоватый оттенок */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }
        .ai-icon:hover {
            transform: rotate(360deg);
            background-color: #3B82F6;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
        }

        /* Кнопка для смены темы */
        .theme-btn {
            border-radius: 50%;
            padding: 12px;
            background: #fff;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
            transition: 0.3s;
        }

        .theme-btn:hover {
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);
        }

        .header-bg {
            background: linear-gradient(135deg, #5E4AE3, #6A5ACD);
        }

        .dark .header-bg {
            background: linear-gradient(135deg, #2B3D6F, #2F2F4F);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-all">

    <!-- Хедер -->
    <header id="header" class="header-bg p-6 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 py-6 flex items-center justify-between">

            <!-- Логотип -->
            <div class="logo">
                <img src="images/logotyp.jpg" alt="Логотип EdTech" class="h-12 rounded-lg transition-all glow-effect">
            </div>

            <!-- Навигация -->
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="{{ route('main') }}" class="text-white hover:text-yellow-300 transition-all glow-effect">Главная</a></li>
                    <li><a href="article.php" class="text-white hover:text-yellow-300 transition-all glow-effect">Курсы</a></li>
                    <li><a href="guestbook.php" class="text-white hover:text-yellow-300 transition-all glow-effect">Сообщество</a></li>
                    <li><a href="reg.php" class="text-white hover:text-yellow-300 transition-all glow-effect">Регистрация</a></li>
                </ul>
            </nav>

            <!-- Интерактивная иконка ИИ -->
            <div class="ai-icon glow-effect cursor-pointer">
                <i class="fas fa-brain text-white text-xl"></i>
            </div>

            <!-- Блок авторизации -->
            <div class="auth-theme-container flex items-center space-x-4">
                <?php
                session_start(); 

                if (isset($_SESSION["email"]) && isset($_SESSION["password"]) && checkUser($_SESSION["email"], $_SESSION["password"])) {
                    require_once "blocks/user_panel.php";  
                } else {
                ?>
                    <form action="auth.php" name="auth" method="post" class="auth-form flex items-center space-x-2">
                        <input type="text" name="email" placeholder="E-mail" required class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 transition-all glow-effect">
                        <input type="password" name="password" placeholder="Пароль" required class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 transition-all glow-effect">
                        <button type="submit" name="button_auth" class="btn-auth px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-800 dark:hover:bg-indigo-700 transition-all glow-effect">Войти</button>
                    </form>
                <?php
                }
                ?>

                <!-- Кнопка переключения темы -->
                <button id="theme-toggle" class="theme-btn p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-all duration-300 glow-effect">
                    <span class="sr-only">Переключить тему</span>
                    <i class="fas fa-sun text-yellow-400 dark:text-gray-400"></i>
                    <i class="fas fa-moon text-gray-800 dark:text-yellow-400"></i> <!-- Иконки для светлой и темной темы -->
                </button>
            </div>
        </div>
    </header>

    <!-- Основной контент -->

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const sunIcon = themeToggleBtn.querySelector('.fa-sun');
        const moonIcon = themeToggleBtn.querySelector('.fa-moon');
        const currentTheme = localStorage.getItem('theme');

        // Проверяем, какая тема активна при загрузке страницы
        if (currentTheme === 'dark') {
            document.body.classList.add('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        } else {
            document.body.classList.remove('dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }

        // Слушаем изменения на кнопке для смены темы
        themeToggleBtn.addEventListener('click', () => {
            const isDarkMode = document.body.classList.toggle('dark');
            if (isDarkMode) {
                localStorage.setItem('theme', 'dark');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            } else {
                localStorage.setItem('theme', 'light');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            }
        });
    </script>

</body>
</html>
