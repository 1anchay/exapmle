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
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <!-- Изображения с иконками Heroicons -->
                    <div class="p-4 bg-dark-bg rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-100 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="mt-3 text-gray-100">Кодинг без боли</p>
                    </div>
                    <div class="p-4 bg-dark-bg rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-100 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="mt-3 text-gray-100">Хакатоны и вызовы</p>
                    </div>
                </div>

                <p class="mt-6 text-xl font-bold text-gray-100">Что вас ждёт:</p>
                <ul class="list-disc list-inside mt-4 space-y-2 text-lg text-muted">
                    <li class="text-green-400 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Курсы, которые не вызывают сонливость
                    </li>
                    <li class="text-green-400 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Практика, от которой не хочется плакать
                    </li>
                    <li class="text-green-400 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Менторы, которые поддержат, а не скажут "Гугли"
                    </li>
                </ul>
                
                <p class="mt-6 text-lg font-medium text-dark">Присоединяйтесь к нам, и, возможно, через год вы будете говорить "Простая задачка на два часа" (и делать её две недели, как положено). 🚀</p>
            </section>
        </div>
    </div>
    
    @include('footer')

</body>
</html>
