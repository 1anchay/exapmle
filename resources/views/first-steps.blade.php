<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как стать IT-гением и не сойти с ума</title>
    @include('hader')
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
<!-- Блоки для изображений по бокам -->
<div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-20 opacity-40 lg:opacity-50">
    <img src="{{ asset('images/left-image.png') }}" alt="Left Side Image" class="w-80 lg:w-96">
</div>

<div class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-20 opacity-40 lg:opacity-50">
    <img src="{{ asset('images/right-image.png') }}" alt="Right Side Image" class="w-80 lg:w-96">
</div>


<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    <!-- Контейнер с увеличенной шириной -->
    <div class="container mx-auto px-8 py-10 flex-grow max-w-7xl space-y-12">
        
        <div class="max-w-4xl mx-auto p-8 bg-dark-bg rounded-lg shadow-lg relative">
            <header class="text-center py-8 fade-in">
                <h1 class="text-5xl font-extrabold text-gray-100">Как войти в IT и не пожалеть об этом</h1>
                <p class="text-xl text-muted mt-4">Твой путь в мир технологий начинается здесь!</p>
            </header>
        </div>

        <!-- Основной контент -->
        <section class="p-8 rounded-lg dark:bg-gray-800 shadow-lg mt-10">
            <h2 class="text-4xl font-semibold text-gray-100 flex items-center mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 118 0v2m-4 5a5 5 0 01-5-5h10a5 5 0 01-5 5zm-4-5h8"></path>
                </svg>
                Добро пожаловать в мир кода, багов и кофе!
            </h2>
            <p class="mt-4 text-xl text-muted">Когда-то давно люди строили пирамиды, открывали новые земли и создавали произведения искусства. Сегодня же они... чинят баги в три часа ночи. 🧑‍💻☕</p>
            <p class="mt-4 text-lg text-dark">Наш проект создан для того, чтобы помочь вам плавно войти в мир IT и не убежать обратно в лес.</p>
        </section>

        <!-- Карточки -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-10">
            <div class="p-8 bg-gray-900 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                <img src="https://img.freepik.com/premium-photo/robot-hand-holding-glowing-crystal-advanced-futuristic-technology-ai-concept_691560-6615.jpg" 
                     alt="AI Robot Hand with Crystal" class="rounded-lg mx-auto mb-6 shadow-md w-full h-60 object-cover">
                <p class="text-gray-100 text-2xl font-semibold">Кодинг без боли</p>
                <p class="mt-4 text-gray-400 text-lg">Разработка проектов без стресса и хаоса.</p>
            </div>

            <div class="p-8 bg-gray-800 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1545987796-200677ee1011?q=80&w=1280" 
                     alt="Hackathon" class="rounded-lg mx-auto mb-6 shadow-md w-full h-60 object-cover">
                <p class="text-gray-100 text-2xl font-semibold">Хакатоны и вызовы</p>
                <p class="mt-4 text-gray-400 text-lg">Прими участие в соревнованиях и прокачай навыки.</p>
            </div>
        </div>

        <!-- Раздел "Что вас ждёт" -->
        <section class="relative bg-gray-900 py-14 px-10 rounded-lg shadow-lg overflow-hidden mt-10">
            <!-- Летающая бабочка -->
            <div class="absolute top-0 left-0 animate-fly">
                <img src="{{ asset('images/buterfly.png') }}" alt="Cyber Butterfly" class="w-28 opacity-80 filter drop-shadow-lg">
            </div>

            <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 text-center">
                Что вас ждёт:
            </h2>

            <ul class="mt-10 space-y-10">
                @foreach([
                    ['icon' => 'academic-cap', 'text' => 'Курсы, которые держат в тонусе', 'desc' => 'Обучение с актуальными и полезными знаниями.', 'image' => asset('images/ai-learning.jpg')],
                    ['icon' => 'code', 'text' => 'Практика, которая вдохновляет', 'desc' => 'Решай реальные задачи и прокачивай навыки.', 'image' => asset('images/programming.jpg')],
                    ['icon' => 'light-bulb', 'text' => 'Открытие новых технологий', 'desc' => 'Будь в курсе передовых решений и трендов.', 'image' => asset('images/technology-innovation.jpg')],
                    ['icon' => 'chart-bar', 'text' => 'Рост и развитие', 'desc' => 'Продвижение в карьере и новые возможности.', 'image' => asset('images/business-growth.jpg')],
                    ['icon' => 'globe-alt', 'text' => 'Будущее ИИ уже здесь', 'desc' => 'Стань частью цифровой революции.', 'image' => asset('images/future-ai.jpg')]
                ] as $item)
                    <li class="relative group overflow-hidden rounded-lg shadow-lg transition transform hover:scale-105">
                        <img src="{{ $item['image'] }}" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110" alt="Background">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-75 group-hover:opacity-90 transition duration-500"></div>
                        <div class="absolute bottom-0 p-8">
                            <div class="flex items-center">
                                <svg class="h-10 w-10 text-green-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <use href="#{{ $item['icon'] }}"></use>
                                </svg>
                                <h3 class="text-2xl font-bold text-white">{{ $item['text'] }}</h3>
                            </div>
                            <p class="text-gray-300 text-lg mt-2">{{ $item['desc'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</body>


<!-- Tailwind Animation -->
<style>
@keyframes fly {
    0%, 100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-20px) translateX(10px); }
}
.animate-fly {
    animation: fly 4s ease-in-out infinite;
}
</style>



        </div>
    </div>

    <!-- Футер -->
    <footer class="w-full bg-gray-900 py-6 text-center text-white mt-auto">
    @include('footer')
            
    </footer>
</body>
</html>
