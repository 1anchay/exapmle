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

        /* Эффект для Иконки ИИ */
        .ai-icon {
            width: 60px;
            height: 60px;
            background-color: #6EE7B7;
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

        /* Добавим эффект свечения для текста в хедере */
        .header-text {
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.6), 0 0 15px rgba(0, 255, 255, 0.5);
        }

        /* Стили для логотипа */
        .logo img {
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        /* Стили для навигационных ссылок */
        .nav-link {
            position: relative;
            padding: 5px 10px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #00D1D1;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #00D1D1;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-all">

    <!-- Хедер -->
    <header id="header" class="header-bg p-6 sm:p-8 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">

            <!-- Логотип -->
            <div class="logo">
    <img src="{{ asset('images/logotyp.jpg') }}" alt="Логотип EdTech" class="h-12 rounded-lg transition-all glow-effect">
</div>


            <!-- Навигация -->
            <!-- Навигация -->
<nav>
    <ul class="flex space-x-6 sm:space-x-8">
        <li><a href="{{ route('main') }}" class="nav-link text-white hover:text-teal-300 transition-all">Главная</a></li>
        <li><a href="article.php" class="nav-link text-white hover:text-teal-300 transition-all">Курсы</a></li>
        <li><a href="{{ route('comments.index') }}" class="nav-link text-white hover:text-teal-300 transition-all">Сообщество</a></li>
        <li><a href="{{ route('register') }}" class="nav-link text-white hover:text-teal-300 transition-all">Регистрация</a></li>
        <!-- Добавляем ссылку на редактирование профиля с изображением -->

</nav>

            <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet"></script>

    <style>
        /* Стили для иконки ИИ с эффектами */
        .ai-icon {
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }

        .ai-icon:hover {
            transform: scale(1.1) rotate(15deg);
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
        }

        .ai-icon .fas {
            color: white;
            font-size: 2.5rem;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Текст сверху */
        #ai-text {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            color: white;
            font-weight: bold;
            z-index: 10;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        /* Модальное окно */
        #ai-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        #ai-modal .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 60%;
        }

        /* Кнопка закрытия модального окна */
        .close-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .close-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body class="bg-gray-800 text-white flex justify-center items-center min-h-screen">

    <!-- Текст сверху, который будет показываться при говорении -->
    <div id="ai-text">Я говорю, ожидайте...</div>

    <!-- Интерактивная иконка ИИ -->
    <div id="ai-icon" class="ai-icon glow-effect p-4 bg-gradient-to-r from-blue-500 to-green-500 rounded-full hover:scale-110 transform transition-all duration-300">
        <i class="fas fa-brain text-white text-3xl"></i>
    </div>

    <!-- Модальное окно -->
    <div id="ai-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded-lg w-1/3 text-center">
            <h2 class="text-2xl font-semibold mb-4">Интерактивный ИИ</h2>
            <p class="mb-4">Здесь может быть информация о вашем ИИ, инструкции или интерактивные элементы.</p>
            <button id="close-modal" class="close-btn">Закрыть</button>
        </div>
    </div>

    <!-- Подключаем иконки Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
        // Получаем элементы
        const aiIcon = document.getElementById('ai-icon');
        const aiText = document.getElementById('ai-text');
        const aiModal = document.getElementById('ai-modal');
        const closeModal = document.getElementById('close-modal');

        // Фразы для озвучивания
        const phrases = [
            "Привет! Я ваш виртуальный ассистент. Готов помочь!",
            "Я здесь, чтобы помочь вам с любыми задачами!",
            "Генерирую случайное число… Оно: " + getRandomNumber(),
            "Я тоже люблю шутки! Что-то вроде этого… Ожидайте!",
            "Нужно больше данных… Пожалуйста, подождите. :)"
        ];

        // Функция для генерации случайных чисел
        function getRandomNumber() {
            return Math.floor(Math.random() * 100) + 1;
        }

        // Функция для произнесения фраз с кастомным голосом
        function speakPhrase(phrase) {
            const synth = window.speechSynthesis;
            const utterance = new SpeechSynthesisUtterance(phrase);

            // Настроим голос на "женский" или любой другой с интересной интонацией
            const voices = synth.getVoices();
            const chosenVoice = voices.find(voice => voice.name === "Google UK English Female"); // Здесь можно выбрать свой голос
            if (chosenVoice) {
                utterance.voice = chosenVoice;
            }

            utterance.rate = 1; // Устанавливаем скорость речи
            utterance.pitch = 1.2; // Устанавливаем высоту голоса

            synth.speak(utterance);
        }

        // Обработчик события при клике на иконку
        aiIcon.addEventListener('click', () => {
            const randomPhrase = phrases[Math.floor(Math.random() * phrases.length)];
            aiText.innerText = randomPhrase;  // Показываем текст сверху

            // Показываем текст на экране
            aiText.style.opacity = '1';

            // Скрываем текст через 3 секунды
            setTimeout(() => {
                aiText.style.opacity = '0';
            }, 3000);

            // Говорим фразу
            speakPhrase(randomPhrase);
        });

        // Открыть модальное окно при клике на иконку ИИ
        aiIcon.addEventListener('click', () => {
            aiModal.classList.remove('hidden');
        });

        // Закрыть модальное окно при клике на кнопку закрытия
        closeModal.addEventListener('click', () => {
            aiModal.classList.add('hidden');
        });

        // Закрыть модальное окно при клике вне его
        window.addEventListener('click', (event) => {
            if (event.target === aiModal) {
                aiModal.classList.add('hidden');
            }
        });
    </script>

            <!-- Блок авторизации -->
            <div class="auth-theme-container flex items-center space-x-4">
                @guest
                    <!-- Если пользователь не авторизован -->
                    <a href="{{ route('login') }}" class="text-white hover:text-teal-300 transition-all glow-effect">Войти</a>
                    <a href="{{ route('register') }}" class="text-white hover:text-teal-300 transition-all glow-effect">Регистрация</a>
                @else
                    <!-- Если пользователь авторизован -->
                    <p class="text-white">Добро пожаловать, {{ Auth::user()->name }}!</p>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="btn-auth px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-800 dark:hover:bg-indigo-700 transition-all glow-effect">
                            Выйти
                        </button>
                    </form>
                @endguest
            </div>
            <li>
    <a href="{{ route('profile.edit') }}">
        <img 
            src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://via.placeholder.com/50' }}" 
            alt="Profile Image" 
            class="w-12 h-12 rounded-full object-cover"
        >
    </a>
</li>

            <!-- Кнопка переключения темы -->
            <button id="theme-toggle"
                class="theme-btn p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-all duration-300 glow-effect">
                <span class="sr-only">Переключить тему</span>
                <i class="fas fa-sun text-yellow-400 dark:text-gray-400"></i>
                <i class="fas fa-moon text-gray-800 dark:text-yellow-400"></i> <!-- Иконки для светлой и темной темы -->
            </button>
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
