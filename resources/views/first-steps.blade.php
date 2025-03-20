<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как стать IT-гением и не сойти с ума</title>

    <!-- Подключаем TailwindCSS через CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Вставка стилей для фонов и эффектов -->
    <style>
        body {
            background-color: #1e293b; /* Темный синий фон */
            background-image: url('https://www.transparenttextures.com/patterns/asfalt-dark.png'); /* текстура для фона */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Анимация для заголовков */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Стили для изображений роботов по бокам */
        .robot-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.15;
        }

        .robot-left {
            left: 0;
        }

        .robot-right {
            right: 0;
        }

        .text-muted {
            color: #6b7280;
        }

        .text-dark {
            color: #e5e7eb;
        }

        .dark-bg {
            background-color: #2b3e50;
        }

        .hover-zoom:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    <!-- Роботы по бокам -->
    <div class="robot-icon robot-left">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C9.243 2 7 4.243 7 7v10c0 2.757 2.243 5 5 5s5-2.243 5-5V7c0-2.757-2.243-5-5-5zM10 12h4v2h-4zm0-4h4v2h-4z"></path>
        </svg>
    </div>

    <div class="robot-icon robot-right">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C9.243 2 7 4.243 7 7v10c0 2.757 2.243 5 5 5s5-2.243 5-5V7c0-2.757-2.243-5-5-5zM10 12h4v2h-4zm0-4h4v2h-4z"></path>
        </svg>
    </div>

    @include('hader')

    <div class="container mx-auto px-4 py-10 flex-grow">
        <div class="max-w-3xl mx-auto p-6 bg-dark-bg rounded-lg shadow-lg relative">
            <header class="text-center py-6 fade-in">
                <h1 class="text-4xl font-extrabold text-gray-100">Как войти в IT и не пожалеть об этом</h1>
                <p class="text-lg text-muted mt-2">Твой путь в мир технологий начинается здесь!</p>
            </header>
            
            <section class="p-6 rounded-lg dark:bg-gray-800">
                <!-- Заголовок с иконкой -->
                <h2 class="text-3xl font-semibold text-gray-100 flex items-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 118 0v2m-4 5a5 5 0 01-5-5h10a5 5 0 01-5 5zm-4-5h8"></path>
                    </svg>
                    Добро пожаловать в мир кода, багов и кофе!
                </h2>
                <p class="mt-4 text-lg text-muted">Когда-то давно люди строили пирамиды, открывали новые земли и создавали произведения искусства. Сегодня же они... чинят баги в три часа ночи. 🧑‍💻☕</p>
                <p class="mt-2 text-lg text-dark">Наш проект создан для того, чтобы помочь вам плавно войти в мир IT и не убежать обратно в лес.</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Первая карточка -->
                    <div class="p-6 bg-gray-900 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                        <img src="https://img.freepik.com/premium-photo/robot-hand-holding-glowing-crystal-advanced-futuristic-technology-ai-concept_691560-6615.jpg" 
                             alt="AI Robot Hand with Crystal" class="rounded-lg mx-auto mb-4 shadow-md w-full h-48 object-cover">
                        <div class="flex justify-center items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-gray-100 text-xl font-semibold">Кодинг без боли</p>
                        </div>
                        <p class="mt-2 text-gray-400 text-sm">Разработка проектов без стресса и хаоса.</p>
                    </div>

                    <!-- Вторая карточка -->
                    <div class="p-6 bg-gray-800 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1545987796-200677ee1011?q=80&w=1280" 
                             alt="Hackathon" class="rounded-lg mx-auto mb-4 shadow-md w-full h-48 object-cover">
                        <div class="flex justify-center items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path>
                            </svg>
                            <p class="text-gray-100 text-xl font-semibold">Хакатоны и вызовы</p>
                        </div>
                        <p class="mt-2 text-gray-400 text-sm">Прими участие в соревнованиях и прокачай навыки.</p>
                    </div>
                </div>

                <section class="relative bg-gray-900 py-12 px-6 rounded-lg shadow-lg overflow-hidden">
    <!-- Летающая бабочка -->
    <div class="absolute top-0 left-0 animate-fly">
        <img src="https://pngimg.com/uploads/butterfly/butterfly_PNG1065.png" alt="Flying Butterfly" class="w-20 opacity-75">
    </div>

    <h2 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 text-center">
        Что вас ждёт:
    </h2>

    <ul class="mt-6 space-y-6 text-lg">
        <!-- Первая карточка -->
        <li class="flex items-center bg-gray-800 p-6 rounded-lg shadow-md hover:scale-105 transition duration-300">
            <img src="https://cdn.pixabay.com/photo/2022/01/06/16/45/robot-6915510_1280.jpg" alt="AI Learning" 
                class="rounded-lg w-20 h-20 object-cover shadow-lg mr-4">
            <p class="text-white flex items-center">
                <svg class="h-6 w-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Курсы, которые **держат в тонусе**, а не в коме
            </p>
        </li>

        <!-- Вторая карточка -->
        <li class="flex items-center bg-gray-800 p-6 rounded-lg shadow-md hover:scale-105 transition duration-300">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/09/46/robot-6629827_1280.jpg" alt="Practice Coding" 
                class="rounded-lg w-20 h-20 object-cover shadow-lg mr-4">
            <p class="text-white flex items-center">
                <svg class="h-6 w-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Практика, которая **вдохновляет**, а не ломает
            </p>
        </li>

        <!-- Третья карточка -->
        <li class="flex items-center bg-gray-800 p-6 rounded-lg shadow-md hover:scale-105 transition duration-300">
            <img src="https://cdn.pixabay.com/photo/2021/04/02/19/09/ai-6121872_1280.jpg" alt="AI Technology" 
                class="rounded-lg w-20 h-20 object-cover shadow-lg mr-4">
            <p class="text-white flex items-center">
                <svg class="h-6 w-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Открытие новых технологий **каждый день**
            </p>
        </li>

        <!-- Четвертая карточка -->
        <li class="flex items-center bg-gray-800 p-6 rounded-lg shadow-md hover:scale-105 transition duration-300">
            <img src="https://cdn.pixabay.com/photo/2020/07/10/22/56/artificial-intelligence-5393314_1280.jpg" alt="AI Growth" 
                class="rounded-lg w-20 h-20 object-cover shadow-lg mr-4">
            <p class="text-white flex items-center">
                <svg class="h-6 w-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                **Рост** и развитие технологий на каждом шагу
            </p>
        </li>

        <!-- Пятая карточка -->
        <li class="flex items-center bg-gray-800 p-6 rounded-lg shadow-md hover:scale-105 transition duration-300">
            <img src="https://cdn.pixabay.com/photo/2021/11/25/15/55/robot-6843357_1280.jpg" alt="Future AI" 
                class="rounded-lg w-20 h-20 object-cover shadow-lg mr-4">
            <p class="text-white flex items-center">
                <svg class="h-6 w-6 text-green-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                **Будущее** искусственного интеллекта уже здесь!
            </p>
        </li>
    </ul>  
</section>


        </div>
    </div>

    <!-- Футер -->
    <footer class="w-full bg-gray-900 py-6 text-center text-white mt-auto">
    @include('footer')
            
    </footer>
</body>
</html>
