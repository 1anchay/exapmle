<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наша команда - Сказания Херсонеса</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/heroicons@1.0.6/outline.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/comand.css') }}">
</head>
<body class="bg-gray-900 text-white font-sans">
    <div id="wrapper">
        @include('hader') <!-- Убедитесь, что у вас есть файл header.blade.php -->

        <div id="content-container" class="container mx-auto px-6 py-12">
            <h1 class="text-4xl font-semibold text-center text-indigo-400 mb-12">Наша команда</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <!-- Член 1 -->
    <div class="team-member group bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105">
        <div class="relative">
            <!-- Смешная шапка: Волшебная шляпа -->
            <svg xmlns="http://www.w3.org/2000/svg" class="magic-hat absolute top-0 left-1/2 transform -translate-x-1/2 w-16 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10 2a1 1 0 011 1v5h-2V3a1 1 0 011-1zm4 4a1 1 0 01-1 1H6a1 1 0 01-1-1V3a1 1 0 011-1h8a1 1 0 011 1v3z"/>
            </svg>
            <img src="{{ asset('images/member1.jfif') }}" alt="Иван Живоглядов" class="w-full h-64 object-cover">
        </div>
        <h3 class="text-xl font-semibold text-center mt-4">Иван Живоглядов</h3>
        <div class="member-info text-center p-4">
            <p class="text-indigo-400">Руководитель проекта</p>
            <p>Опыт: 10 лет</p>
            <p>Описание: Суровый руководитель, который всегда идет к своей цели.</p>
        </div>
        <!-- Достижения -->
        <div class="achievements flex justify-center space-x-4 mt-4">
            <div class="relative group">
                <!-- Иконка 1: Баг-иконка -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" />
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    5 лет в устранении багов в образовательных платформах
                </div>
            </div>
            <div class="relative group">
                <!-- Иконка 2: Чат-иконка -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 2.267.963 4.29 2.552 5.722l-2.306 2.306a1 1 0 001.414 1.414l2.893-2.893A7.96 7.96 0 0010 18c4.418 0 8-3.582 8-8z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    Создание интерфейсов для цифрового обучения
                </div>
            </div>
        </div>
    </div>

    <!-- Член 2 -->
    <div class="team-member group bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105">
        <div class="relative">
            <!-- Смешная шапка: Кролик -->
            <svg xmlns="http://www.w3.org/2000/svg" class="magic-hat absolute top-0 left-1/2 transform -translate-x-1/2 w-16 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M5 3a2 2 0 012 2v12a2 2 0 01-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2h2zM15 3a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V5a2 2 0 012-2h2z"/>
            </svg>
            <img src="{{ asset('images/member2.jpg') }}" alt="Евгений Белоконов" class="w-full h-64 object-cover">
        </div>
        <h3 class="text-xl font-semibold text-center mt-4">Евгений Белоконов</h3>
        <div class="member-info text-center p-4">
            <p class="text-indigo-400">Дизайнер</p>
            <p>Опыт: 5 лет</p>
            <p>Описание: Дизайн — это искусство, которое улучшает пользовательский опыт.</p>
        </div>
        <!-- Достижения -->
        <div class="achievements flex justify-center space-x-4 mt-4">
            <div class="relative group">
                <!-- Иконка 3: Компьютер -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    5 лет в создании пользовательских интерфейсов
                </div>
            </div>
            <div class="relative group">
                <!-- Иконка 4: Код -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    Создание курсов для изучения кодинга
                </div>
            </div>
        </div>
    </div>

    <!-- Член 3 -->
    <div class="team-member group bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105">
        <div class="relative">
            <!-- Смешная шапка: Шляпа программиста -->
            <svg xmlns="http://www.w3.org/2000/svg" class="magic-hat absolute top-0 left-1/2 transform -translate-x-1/2 w-16 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M7.293 5.293a1 1 0 011.414 0L10 7.586l1.293-2.293a1 1 0 111.414 1.414L10 10.414l-3.707-3.707a1 1 0 111.414-1.414L9 7.586l1.293-2.293a1 1 0 011.414 0z"/>
            </svg>
            <img src="{{ asset('images/member3.jpg') }}" alt="Богдан Демченко" class="w-full h-64 object-cover">
        </div>
        <h3 class="text-xl font-semibold text-center mt-4">Богдан Демченко</h3>
        <div class="member-info text-center p-4">
            <p class="text-indigo-400">Разработчик</p>
            <p>Опыт: 7 лет</p>
            <p>Описание: Быстро и качественно — вот девиз настоящего разработчика!</p>
        </div>
        <!-- Достижения -->
        <div class="achievements flex justify-center space-x-4 mt-4">
            <div class="relative group">
                <!-- Иконка 1: Код -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    7 лет в разработке веб-приложений
                </div>
            </div>
            <div class="relative group">
                <!-- Иконка 2: Шестерёнки -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M4.293 5.293a1 1 0 011.414 0L7 7.586l1.293-2.293a1 1 0 111.414 1.414L7 10.414l-3.707-3.707a1 1 0 111.414-1.414L6 7.586l1.293-2.293a1 1 0 011.414 0z"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    Опыт в разработке сложных проектов для IT-курсов
                </div>
            </div>
        </div>
    </div>

    <!-- Член 4 -->
    <div class="team-member group bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105">
        <div class="relative">
            <!-- Смешная шапка: Сумасшедшая шляпа -->
            <svg xmlns="http://www.w3.org/2000/svg" class="magic-hat absolute top-0 left-1/2 transform -translate-x-1/2 w-16 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" clip-rule="evenodd"/>
            </svg>
            <img src="{{ asset('images/member4.jpg') }}" alt="Имя Фамилия" class="w-full h-64 object-cover">
        </div>
        <h3 class="text-xl font-semibold text-center mt-4">Имя Фамилия</h3>
        <div class="member-info text-center p-4">
            <p class="text-indigo-400">Маркетолог</p>
            <p>Опыт: 8 лет</p>
            <p>Описание: Специалист по привлечению пользователей в образовательные продукты.</p>
        </div>
        <!-- Достижения -->
        <div class="achievements flex justify-center space-x-4 mt-4">
            <div class="relative group">
                <!-- Иконка 3: Печать -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    Увеличение продаж продуктов
                </div>
            </div>
            <div class="relative group">
                <!-- Иконка 4: Фонарь -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v12a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1h5zM15 7a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V8a1 1 0 011-1h2z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-sm text-white bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg p-4 text-center">
                    Привлечение новых пользователей
                </div>
            </div>
        </div>
    </div>

</div>


<div class="relative mt-16 bg-gray-900 text-white p-10 rounded-2xl shadow-xl overflow-hidden">
    <!-- Робот-декорация (слева) -->
    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-32 opacity-50">
        <img src="https://cdn-icons-png.flaticon.com/512/4712/4712139.png" alt="Робот" class="w-full">
    </div>

    <!-- Заголовок -->
    <h2 class="text-4xl font-bold text-indigo-300 text-center flex justify-center items-center space-x-2">
        <span>Как попасть в команду?</span>
        <svg class="w-8 h-8 text-yellow-300 animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </h2>

    <p class="text-lg text-gray-300 text-center mt-4">
        Хотите стать частью команды? Следуйте этим шагам!
    </p>

    <!-- Список шагов -->
    <div class="space-y-6 text-lg text-gray-100 max-w-3xl mx-auto mt-6">
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l7 7-7 7" />
            </svg>
            <span><span class="font-semibold text-indigo-400">🔍 Подготовьте своё резюме.</span> Покажите свои уникальные навыки и опыт.</span>
        </p>
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7v10l7-5-7-5z" />
            </svg>
            <span><span class="font-semibold text-indigo-400">📩 Отправьте резюме.</span> Не забудьте прикрепить портфолио!</span>
        </p>
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7 7 7-7" />
            </svg>
            <span><span class="font-semibold text-indigo-400">⏳ Подготовьтесь к интервью.</span> Покажите свои сильные стороны и идеи.</span>
        </p>
    </div>

    <!-- Нижний отступ -->
    <div class="pb-20"></div>
</div>

<!-- Блок с планами -->
<div class="relative mt-16 bg-gray-800 text-white p-10 rounded-2xl shadow-xl overflow-hidden">
    <!-- Иллюстрация справа -->
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-32 opacity-50">
        <img src="https://cdn-icons-png.flaticon.com/512/4712/4712139.png" alt="Робот" class="w-full">
    </div>

    <h2 class="text-4xl font-bold text-green-300 text-center flex justify-center items-center space-x-2">
        <span>Наши планы на будущее</span>
        <svg class="w-8 h-8 text-yellow-300 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </h2>

    <p class="text-lg text-gray-300 text-center mt-4">
        Мы стремимся к развитию цифрового образования.
    </p>

    <div class="space-y-6 text-lg text-gray-100 max-w-3xl mx-auto mt-6">
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l7 7-7 7" />
            </svg>
            <span><span class="font-semibold text-green-400">🌍 Расширение платформы.</span> Охват большего числа студентов.</span>
        </p>
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7v10l7-5-7-5z" />
            </svg>
            <span><span class="font-semibold text-green-400">📚 Разработка новых курсов.</span> Улучшение образовательных программ.</span>
        </p>
        <p class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7 7 7-7" />
            </svg>
            <span><span class="font-semibold text-green-400">🤝 Партнёрства с компаниями.</span> Реальные проекты и стажировки.</span>
        </p>
    </div>

    <div class="pb-20"></div>
</div>
</div>

        @include('footer') <!-- Убедитесь, что у вас есть файл footer.blade.php -->
    </div>
</body>
</html>
