<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Онлайн-курсы и IT-обучение</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключаем Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Подключаем Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Глобальные стили */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            transition: all 0.3s ease;
        }
        
        .dark body {
            background-color: #0f172a;
            color: #f8fafc;
        }
        
        /* Анимации */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        /* Стили для карточек */
        .course-card {
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #ffffff, #f1f5f9);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .dark .course-card {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .dark .course-card:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
        }
        
        /* Стили для преподавателей */
        .teacher-card {
            transition: all 0.3s ease;
        }
        
        .teacher-card:hover {
            transform: scale(1.03);
        }
        
        /* Стили для наград */
        .award-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .award-card:hover {
            border-color: rgba(167, 139, 250, 0.5);
        }
        
        /* Градиентный текст */
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        
        /* Анимированный фон */
        .animated-bg {
            position: relative;
            overflow: hidden;
        }
        
        .animated-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
            z-index: 0;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Кнопка переключения темы -->
    <button id="theme-toggle" class="fixed top-6 right-6 z-50 p-3 bg-indigo-600 text-white rounded-full shadow-lg hover:bg-indigo-700 transition-colors">
        <i class="fas fa-moon dark:hidden"></i>
        <i class="fas fa-sun hidden dark:block"></i>
    </button>

    <div id="wrapper" class="flex flex-col min-h-screen">

        <!-- Шапка сайта -->
        @include('hader')

        <!-- Герой секция -->
        <section class="relative py-20 overflow-hidden animated-bg">
            <div class="container mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-12 lg:mb-0">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            <span class="gradient-text bg-gradient-to-r from-indigo-500 to-purple-600">IT-образование</span><br>
                            <span class="text-gray-800 dark:text-gray-200">нового поколения</span>
                        </h1>
                        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg">
                            Освойте востребованные IT-профессии с нуля до трудоустройства под руководством экспертов из ведущих компаний.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#courses" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-colors shadow-lg hover:shadow-xl text-center">
                                Выбрать курс
                            </a>
                            <a href="#teachers" class="px-8 py-3 border-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 rounded-lg font-medium hover:bg-indigo-50 dark:hover:bg-gray-800 transition-colors text-center">
                                Наши преподаватели
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3242/3242257.png" alt="IT Learning" class="w-full max-w-md animate-float" style="animation: float 6s ease-in-out infinite;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция курсов -->
        <section id="courses" class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="gradient-text bg-gradient-to-r from-indigo-500 to-purple-600">Наши курсы</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Выберите направление, которое соответствует вашим интересам и карьерным целям
                    </p>
                </div>

                <!-- Фильтры -->
                <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md p-6 mb-12">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Фильтры</h3>
                    
                    <!-- Категория -->
                    <div class="mb-6">
                        <span class="block text-gray-700 dark:text-gray-300 font-medium mb-3">Категория</span>
                        <div class="flex flex-wrap gap-3">
                            <button class="filter-btn px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors" data-filter="development">
                                <i class="fas fa-code mr-2"></i> Разработка
                            </button>
                            <button class="filter-btn px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors" data-filter="analytics">
                                <i class="fas fa-chart-line mr-2"></i> Аналитика
                            </button>
                            <button class="filter-btn px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors" data-filter="cybersecurity">
                                <i class="fas fa-shield-alt mr-2"></i> Кибербезопасность
                            </button>
                            <button class="filter-btn px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors" data-filter="marketing">
                                <i class="fas fa-bullhorn mr-2"></i> Маркетинг
                            </button>
                        </div>
                    </div>
                    
                    <!-- Уровень сложности -->
                    <div class="mb-6">
                        <span class="block text-gray-700 dark:text-gray-300 font-medium mb-3">Уровень сложности</span>
                        <div class="flex flex-wrap gap-3">
                            <button class="level-btn px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors" data-level="beginner">
                                <i class="fas fa-seedling mr-2"></i> Новичок
                            </button>
                            <button class="level-btn px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors" data-level="intermediate">
                                <i class="fas fa-user-graduate mr-2"></i> Средний
                            </button>
                            <button class="level-btn px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors" data-level="advanced">
                                <i class="fas fa-rocket mr-2"></i> Продвинутый
                            </button>
                        </div>
                    </div>
                    
                    <!-- Трудоустройство -->
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700 dark:text-gray-300 font-medium">Только курсы с трудоустройством</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="employment-filter" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-500 peer-checked:bg-indigo-600"></div>
                        </label>
                    </div>
                </div>

                <!-- Карточки курсов -->
                <div id="courses-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Курсы будут добавляться динамически -->
                </div>
            </div>
        </section>

        <!-- Секция преподавателей -->
        <section id="teachers" class="py-16 bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="gradient-text bg-gradient-to-r from-indigo-500 to-purple-600">Наши преподаватели</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Профессионалы с реальным опытом работы в ведущих IT-компаниях
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Преподаватель 1 -->
                    <div class="teacher-card bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                        <div class="relative h-48 bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Преподаватель" class="h-32 w-32 object-contain">
                            <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Анна Иванова" class="h-12 w-12 rounded-full border-4 border-white shadow-lg">
                            </div>
                        </div>
                        <div class="p-6 pt-10 text-center">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Анна Иванова</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 mb-4">Senior Blockchain Developer</p>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">10+ лет опыта в разработке блокчейн-решений</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="text-gray-500 hover:text-indigo-500 dark:hover:text-indigo-400 transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-indigo-500 dark:hover:text-indigo-400 transition-colors">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-indigo-500 dark:hover:text-indigo-400 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Преподаватель 2 -->
                    <div class="teacher-card bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                        <div class="relative h-48 bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/2103/2103633.png" alt="Преподаватель" class="h-32 w-32 object-contain">
                            <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Иван Петров" class="h-12 w-12 rounded-full border-4 border-white shadow-lg">
                            </div>
                        </div>
                        <div class="p-6 pt-10 text-center">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Иван Петров</h3>
                            <p class="text-blue-600 dark:text-blue-400 mb-4">AI Researcher, PhD</p>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Эксперт в области машинного обучения и нейросетей</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Преподаватель 3 -->
                    <div class="teacher-card bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                        <div class="relative h-48 bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3612/3612569.png" alt="Преподаватель" class="h-32 w-32 object-contain">
                            <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Елена Смирнова" class="h-12 w-12 rounded-full border-4 border-white shadow-lg">
                            </div>
                        </div>
                        <div class="p-6 pt-10 text-center">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Елена Смирнова</h3>
                            <p class="text-purple-600 dark:text-purple-400 mb-4">Game Developer at Ubisoft</p>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">8+ лет опыта в геймдеве, участник AAA-проектов</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="text-gray-500 hover:text-purple-500 dark:hover:text-purple-400 transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-500 dark:hover:text-purple-400 transition-colors">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-500 dark:hover:text-purple-400 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция наград -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="gradient-text bg-gradient-to-r from-indigo-500 to-purple-600">Система наград</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Проходи курсы, набирай очки и получай награды за свои достижения
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Награда 1 -->
                    <div class="award-card bg-white dark:bg-gray-700 rounded-xl shadow-md p-8 text-center">
                        <div class="flex justify-center mb-6">
                            <div class="h-20 w-20 bg-indigo-100 dark:bg-indigo-900/30 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Сертификат</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Получите официальный сертификат после успешного завершения курса
                        </p>
                    </div>

                    <!-- Награда 2 -->
                    <div class="award-card bg-white dark:bg-gray-700 rounded-xl shadow-md p-8 text-center">
                        <div class="flex justify-center mb-6">
                            <div class="h-20 w-20 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Бейджи</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Собирайте уникальные бейджи за прохождение модулей и выполнение заданий
                        </p>
                    </div>

                    <!-- Награда 3 -->
                    <div class="award-card bg-white dark:bg-gray-700 rounded-xl shadow-md p-8 text-center">
                        <div class="flex justify-center mb-6">
                            <div class="h-20 w-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Призы</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Лучшие студенты получают ценные призы и возможность стажировки
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция отзывов -->
        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="gradient-text bg-gradient-to-r from-indigo-500 to-purple-600">Отзывы выпускников</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Что говорят наши студенты о курсах и процессе обучения
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Отзыв 1 -->
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl shadow-lg p-8 text-white transform hover:scale-[1.02] transition-transform">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Александр К." class="h-12 w-12 rounded-full border-2 border-white mr-4">
                            <div>
                                <h4 class="font-bold">Александр К.</h4>
                                <p class="text-indigo-200">Выпускник курса "Python-разработчик"</p>
                            </div>
                        </div>
                        <p class="text-indigo-100">
                            "Курс помог мне систематизировать знания и найти первую работу в IT. Преподаватели - настоящие профессионалы, которые всегда готовы помочь."
                        </p>
                        <div class="flex mt-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <!-- Отзыв 2 -->
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-8 text-white transform hover:scale-[1.02] transition-transform">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Марина С." class="h-12 w-12 rounded-full border-2 border-white mr-4">
                            <div>
                                <h4 class="font-bold">Марина С.</h4>
                                <p class="text-blue-200">Выпускница курса "Data Science"</p>
                            </div>
                        </div>
                        <p class="text-blue-100">
                            "Очень качественные материалы и сильные преподаватели. После курса получила оффер от крупной компании с зарплатой выше рынка."
                        </p>
                        <div class="flex mt-4 text-yellow-300">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция CTA -->
        <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Готовы начать обучение?</h2>
                <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                    Присоединяйтесь к тысячам студентов, которые уже изменили свою карьеру с нами
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#courses" class="px-8 py-3 bg-white text-indigo-600 rounded-lg font-bold hover:bg-gray-100 transition-colors shadow-lg hover:shadow-xl">
                        Выбрать курс
                    </a>
                    <a href="#" class="px-8 py-3 border-2 border-white text-white rounded-lg font-bold hover:bg-indigo-700 transition-colors">
                        Бесплатная консультация
                    </a>
                </div>
            </div>
        </section>

        <!-- Таймер скидки -->
        <div class="bg-gray-900 text-white py-8">
            <div class="container mx-auto px-6 text-center">
                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    <span class="text-yellow-400">⏳ Скидка 30%</span> действует:
                </h3>
                <div id="countdown" class="text-3xl md:text-4xl font-bold font-mono mb-4">
                    23:59:59
                </div>
                <p class="text-gray-400 max-w-lg mx-auto">
                    Успейте записаться на любой курс по выгодной цене! Скидка закончится через:
                </p>
            </div>
        </div>

        @include('footer')
    </div>

    <script>
        // Инициализация темы
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        if (localStorage.getItem('theme') === 'dark' || 
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });

        // Данные курсов
        const courses = [
            {
                name: 'Python-разработчик',
                category: 'development',
                level: 'beginner',
                duration: '10 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                popular: true,
                employment: true
            },
            {
                name: 'Data Scientist',
                category: 'analytics',
                level: 'intermediate',
                duration: '12 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg',
                popular: false,
                employment: true
            },
            {
                name: 'Фронтенд-разработчик',
                category: 'development',
                level: 'beginner',
                duration: '9 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
                popular: false,
                employment: false
            },
            {
                name: 'Инженер по тестированию',
                category: 'development',
                level: 'intermediate',
                duration: '10 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cucumber/cucumber-plain.svg',
                popular: true,
                employment: true
            },
            {
                name: 'Java-разработчик',
                category: 'development',
                level: 'advanced',
                duration: '8 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg',
                popular: false,
                employment: false
            },
            {
                name: 'Специалист по кибербезопасности',
                category: 'cybersecurity',
                level: 'advanced',
                duration: '12 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                popular: false,
                employment: true
            },
            {
                name: 'Аналитик 1С',
                category: 'analytics',
                level: 'beginner',
                duration: '8 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
                popular: false,
                employment: false
            },
            {
                name: 'Blockchain Developer',
                category: 'development',
                level: 'intermediate',
                duration: '11 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ethereum/ethereum-original.svg',
                popular: true,
                employment: true
            },
            {
                name: 'AI Engineer',
                category: 'analytics',
                level: 'advanced',
                duration: '14 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pytorch/pytorch-original.svg',
                popular: true,
                employment: true
            }
        ];

        // Функция для отображения карточек курсов
        const renderCourses = (filteredCourses) => {
            const container = document.getElementById('courses-container');
            container.innerHTML = '';
            
            filteredCourses.forEach(course => {
                const courseCard = document.createElement('div');
                courseCard.className = 'course-card rounded-xl overflow-hidden';
                
                // Определяем цвет в зависимости от категории
                let categoryColor = 'indigo';
                let categoryIcon = 'fa-code';
                
                if (course.category === 'analytics') {
                    categoryColor = 'blue';
                    categoryIcon = 'fa-chart-line';
                } else if (course.category === 'cybersecurity') {
                    categoryColor = 'green';
                    categoryIcon = 'fa-shield-alt';
                } else if (course.category === 'marketing') {
                    categoryColor = 'pink';
                    categoryIcon = 'fa-bullhorn';
                }
                
                // Определяем цвет для уровня
                let levelColor = 'green';
                if (course.level === 'intermediate') levelColor = 'yellow';
                if (course.level === 'advanced') levelColor = 'red';
                
                courseCard.innerHTML = `
                    <div class="relative h-48 bg-gradient-to-r from-${categoryColor}-500 to-${categoryColor}-600 flex items-center justify-center">
                        <img src="${course.image}" class="h-24 w-24 object-contain" alt="${course.name}">
                        ${course.popular ? `
                            <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                <i class="fas fa-fire mr-1"></i> Популярный
                            </div>
                        ` : ''}
                        ${course.employment ? `
                            <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                <i class="fas fa-briefcase mr-1"></i> Трудоустройство
                            </div>
                        ` : ''}
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">${course.name}</h3>
                            <span class="text-xs px-2 py-1 bg-${levelColor}-100 dark:bg-${levelColor}-900/30 text-${levelColor}-800 dark:text-${levelColor}-300 rounded-full">
                                ${course.level === 'beginner' ? 'Новичок' : course.level === 'intermediate' ? 'Средний' : 'Продвинутый'}
                            </span>
                        </div>
                        <div class="flex items-center text-gray-600 dark:text-gray-300 mb-4">
                            <i class="fas ${categoryIcon} mr-2 text-${categoryColor}-500"></i>
                            <span class="text-sm">
                                ${course.category === 'development' ? 'Разработка' : 
                                  course.category === 'analytics' ? 'Аналитика' : 
                                  course.category === 'cybersecurity' ? 'Кибербезопасность' : 'Маркетинг'}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                <i class="far fa-clock mr-1"></i> ${course.duration}
                            </span>
                            <button class="px-4 py-2 bg-${categoryColor}-500 hover:bg-${categoryColor}-600 text-white rounded-lg text-sm font-medium transition-colors">
                                Подробнее
                            </button>
                        </div>
                    </div>
                `;
                
                container.appendChild(courseCard);
            });
        };

        // Изначально отображаем все курсы
        renderCourses(courses);

        // Фильтрация
        let activeCategory = null;
        let activeLevel = null;
        let employmentOnly = false;

        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.classList.contains('bg-indigo-200') {
                    btn.classList.remove('bg-indigo-200', 'dark:bg-indigo-800');
                    activeCategory = null;
                } else {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('bg-indigo-200', 'dark:bg-indigo-800'));
                    btn.classList.add('bg-indigo-200', 'dark:bg-indigo-800');
                    activeCategory = btn.dataset.filter;
                }
                filterCourses();
            });
        });

        document.querySelectorAll('.level-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.classList.contains('bg-gray-200')) {
                    btn.classList.remove('bg-gray-200', 'dark:bg-gray-500');
                    activeLevel = null;
                } else {
                    document.querySelectorAll('.level-btn').forEach(b => b.classList.remove('bg-gray-200', 'dark:bg-gray-500'));
                    btn.classList.add('bg-gray-200', 'dark:bg-gray-500');
                    activeLevel = btn.dataset.level;
                }
                filterCourses();
            });
        });

        document.getElementById('employment-filter').addEventListener('change', (e) => {
            employmentOnly = e.target.checked;
            filterCourses();
        });

        function filterCourses() {
            let filtered = courses;
            
            if (activeCategory) {
                filtered = filtered.filter(course => course.category === activeCategory);
            }
            
            if (activeLevel) {
                filtered = filtered.filter(course => course.level === activeLevel);
            }
            
            if (employmentOnly) {
                filtered = filtered.filter(course => course.employment);
            }
            
            renderCourses(filtered);
        }

        // Таймер скидки
        function updateCountdown() {
            const now = new Date();
            const endOfDay = new Date();
            endOfDay.setHours(23, 59, 59, 999);
            
            const diff = endOfDay - now;
            
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            document.getElementById('countdown').textContent = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>