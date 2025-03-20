<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Онлайн-курсы и IT-обучение</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключаем Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Ваши дополнительные стили -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/filter.css">
    <script src="script.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Кнопка переключения темы -->
    <button id="theme-toggle" class="absolute top-6 right-6 p-2 bg-gray-800 text-white rounded-full">
        <i class="fas fa-moon"></i>
    </button>

    <div id="wrapper" class="flex flex-col min-h-screen">

        <!-- Шапка сайта -->
        @include('hader')

    <!-- Подключаем иконки FontAwesome для кнопок -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        /* Анимация для карточек */
        .course-card {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .course-card:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* Анимация для фильтров */
        .filter-category,
        .filter-level {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .filter-category:hover,
        .filter-level:hover {
            transform: scale(1.05);
            background-color: #6b46c1; /* Тот же цвет, что и у hover эффектов */
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Кнопка переключения темы -->
    <button id="theme-toggle" class="absolute top-6 right-6 p-2 bg-gray-800 text-white rounded-full">
        <i class="fas fa-moon"></i>
    </button>

    <div id="wrapper" class="flex flex-col min-h-screen">

        <!-- Шапка сайта -->
        

        <div class="container mx-auto p-8">
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Фильтры</h3>

                <!-- Категория -->
                <div class="mb-4">
                    <span class="block text-gray-700 font-medium mb-2">Категория</span>
                    <div class="flex flex-wrap gap-4">
                        <div class="filter-category bg-indigo-100 px-4 py-2 rounded-lg text-indigo-700 cursor-pointer hover:bg-indigo-200" data-filter="development">Разработка</div>
                        <div class="filter-category bg-indigo-100 px-4 py-2 rounded-lg text-indigo-700 cursor-pointer hover:bg-indigo-200" data-filter="analytics">Аналитика</div>
                        <div class="filter-category bg-indigo-100 px-4 py-2 rounded-lg text-indigo-700 cursor-pointer hover:bg-indigo-200" data-filter="cybersecurity">Кибербезопасность</div>
                        <div class="filter-category bg-indigo-100 px-4 py-2 rounded-lg text-indigo-700 cursor-pointer hover:bg-indigo-200" data-filter="marketing">Маркетинг</div>
                    </div>
                </div>

                <!-- Уровень сложности -->
                <div class="mb-4">
                    <span class="block text-gray-700 font-medium mb-2">Уровень сложности</span>
                    <div class="flex flex-wrap gap-4">
                        <div class="filter-level bg-gray-100 px-4 py-2 rounded-lg text-gray-700 cursor-pointer hover:bg-gray-200" data-level="beginner">Новичок</div>
                        <div class="filter-level bg-gray-100 px-4 py-2 rounded-lg text-gray-700 cursor-pointer hover:bg-gray-200" data-level="intermediate">Средний</div>
                        <div class="filter-level bg-gray-100 px-4 py-2 rounded-lg text-gray-700 cursor-pointer hover:bg-gray-200" data-level="advanced">Продвинутый</div>
                    </div>
                </div>

                <!-- Фильтр "С трудоустройством" -->
                <div class="flex items-center justify-between">
                    <label class="text-gray-700 font-medium">С трудоустройством</label>
                    <label class="switch">
                        <input type="checkbox" id="employment-filter">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

            <!-- Карточки курсов -->
            <h1 class="text-4xl font-bold text-center text-indigo-400 mb-10">🚀 Наши Курсы</h1>
            <div id="courses-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Курсы будут добавляться динамически -->
            </div>
        </div>

    <script>
        // Данные курсов
        const courses = [
            {
                name: 'Python-разработчик',
                category: 'development',
                level: 'beginner',
                duration: '10 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                popular: true
            },
            {
                name: 'Data Scientist',
                category: 'analytics',
                level: 'intermediate',
                duration: '12 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg',
                popular: false
            },
            {
                name: 'Фронтенд-разработчик',
                category: 'development',
                level: 'beginner',
                duration: '9 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
                popular: false
            },
            {
                name: 'Инженер по тестированию',
                category: 'development',
                level: 'intermediate',
                duration: '10 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cucumber/cucumber-plain.svg',
                popular: true
            },
            {
                name: 'Java-разработчик',
                category: 'development',
                level: 'advanced',
                duration: '8 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg',
                popular: false
            },
            {
                name: 'Специалист по кибербезопасности',
                category: 'cybersecurity',
                level: 'advanced',
                duration: '12 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                popular: false
            },
            {
                name: 'Аналитик 1С',
                category: 'analytics',
                level: 'beginner',
                duration: '8 месяцев',
                image: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
                popular: false
            }
        ];

        // Функция для отображения карточек курсов
const renderCourses = (filteredCourses) => {
    const container = document.getElementById('courses-container');
    container.innerHTML = ''; // Очищаем контейнер перед добавлением новых карточек
    filteredCourses.forEach(course => {
        const courseCard = document.createElement('div');
        courseCard.classList.add('course-card', 'bg-gray-800', 'p-6', 'rounded-lg', 'shadow-lg', 'relative');
        
        // Структура карточки
        courseCard.innerHTML = `
            <!-- Если курс популярен, добавляем иконку "🔥" -->
            ${course.popular ? '<span class="bg-indigo-600 text-white py-1 px-4 rounded-lg text-sm absolute top-4 right-4">🔥 Популярное</span>' : ''}
            
            <div class="flex justify-center mb-4">
                <img src="${course.image}" class="w-16 h-16 object-contain" alt="${course.name}">
            </div>
            
            <h2 class="text-xl font-semibold text-indigo-400">${course.name}</h2>
            <p class="text-gray-400">⏳ ${course.duration}</p>
        `;
        
        // Добавляем карточку в контейнер
        container.appendChild(courseCard);
    });
};


        // Изначально отображаем все курсы
        renderCourses(courses);

        // Фильтрация по категориям
        const filterCategories = document.querySelectorAll('.filter-category');
        filterCategories.forEach(filter => {
            filter.addEventListener('click', () => {
                const category = filter.getAttribute('data-filter');
                const filteredCourses = courses.filter(course => course.category === category);
                renderCourses(filteredCourses);
            });
        });

        // Фильтрация по уровню сложности
        const filterLevels = document.querySelectorAll('.filter-level');
        filterLevels.forEach(filter => {
            filter.addEventListener('click', () => {
                const level = filter.getAttribute('data-level');
                const filteredCourses = courses.filter(course => course.level === level);
                renderCourses(filteredCourses);
            });
        });

        // Фильтрация по трудоустройству
        const employmentFilter = document.getElementById('employment-filter');
        employmentFilter.addEventListener('change', () => {
            if (employmentFilter.checked) {
                const filteredCourses = courses.filter(course => course.popular);
                renderCourses(filteredCourses);
            } else {
                renderCourses(courses);
            }
        });

        // Переключение темы
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('bg-gray-900');
            document.body.classList.toggle('text-white');
            document.body.classList.toggle('bg-gray-50');
            document.body.classList.toggle('text-gray-900');
        });
    </script>
</body>
</head>
<body class="bg-gray-50 text-gray-900">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-8">Онлайн-курсы IT</h1>
        
        <!-- Секция новых курсов -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Blockchain-разработчик -->
<div class="bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
    <div class="flex justify-center mb-4">
        <!-- Heroicons - иконка "Lock Closed" (символизирует безопасность блокчейна) -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11V7a4 4 0 00-8 0v4m8 0h4m-4 0H4m8 0v4m0-4v-4m0 4h4" />
        </svg>
    </div>
    <h2 class="text-xl font-semibold text-green-400">Blockchain-разработчик</h2>
    <p class="text-gray-400">⏳ 10 месяцев</p>
</div>


    <!-- GameDev-разработчик -->
    <div class="bg-gray-700 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-center mb-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unity/unity-original.svg" class="w-16 h-16" alt="GameDev">
        </div>
        <h2 class="text-xl font-semibold text-purple-400">GameDev-разработчик</h2>
        <p class="text-gray-400">⏳ 12 месяцев</p>
    </div>

    <!-- AI-разработчик -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-center mb-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pytorch/pytorch-original.svg" class="w-16 h-16" alt="AI">
        </div>
        <h2 class="text-xl font-semibold text-blue-400">AI-разработчик</h2>
        <p class="text-gray-400">⏳ 9 месяцев</p>
    </div>
</div>

        
        <!-- Преподаватели -->
<h2 class="text-3xl font-bold text-center text-indigo-400 mt-16">✨ Наши преподаватели ✨</h2>
<p class="text-gray-400 text-center mb-8">Профессионалы с реальным опытом работы</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
    <!-- Анна Иванова -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-center transform hover:scale-105 transition-all duration-300">
        <div class="relative w-24 h-24 mx-auto mb-4">
            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="w-full h-full rounded-full border-4 border-indigo-400 shadow-lg">
        </div>
        <h3 class="text-xl font-semibold text-white">Анна Иванова</h3>
        <p class="text-indigo-300 mb-3">Senior Blockchain Developer</p>
        <!-- Иконка блокчейна -->
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3.75h4.5m-4.5 16.5h4.5M3 9.75h18M3 14.25h18m-9-9v12" />
            </svg>
        </div>
    </div>

    <!-- Иван Петров -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-center transform hover:scale-105 transition-all duration-300">
        <div class="relative w-24 h-24 mx-auto mb-4">
            <img src="https://randomuser.me/api/portraits/men/46.jpg" class="w-full h-full rounded-full border-4 border-green-400 shadow-lg">
        </div>
        <h3 class="text-xl font-semibold text-white">Иван Петров</h3>
        <p class="text-green-300 mb-3">AI Researcher, PhD</p>
        <!-- Иконка AI -->
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m-5 4h5m6-4h-1m-6 8h1m0 0h1m-1 0v1m0-1v-1m0-8h1m-5 8h5m-5-4h5m6 4h-1m0-8h1m-5 4h5m-5 0V6m-2 8v1m-4 0v1m2-1h-1m1 0v-1m4-8h-1m0 0h-1m1 0V3m0 1h1m-1 0h-1m1 0v1m0 0V3" />
            </svg>
        </div>
    </div>

    <!-- Елена Смирнова -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-center transform hover:scale-105 transition-all duration-300">
        <div class="relative w-24 h-24 mx-auto mb-4">
            <img src="https://randomuser.me/api/portraits/women/47.jpg" class="w-full h-full rounded-full border-4 border-pink-400 shadow-lg">
        </div>
        <h3 class="text-xl font-semibold text-white">Елена Смирнова</h3>
        <p class="text-pink-300 mb-3">Game Developer at Ubisoft</p>
        <!-- Иконка геймдева -->
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l-2 2m0 0l-2-2m2 2V4m6 8h.01M12 20h.01M18 12l-2 2m0 0l-2-2m2 2V4m6 8h.01M6 20h.01" />
            </svg>
        </div>
    </div>
</div>

        
        <!-- Награды -->
<h2 class="text-3xl font-bold text-center text-yellow-400 mt-16">🏆 Система наград 🏆</h2>
<p class="text-gray-400 text-center mb-8">Проходи курсы, набирай очки и получай награды!</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6 text-center">
    <!-- Сертификат -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg border-2 border-yellow-400 transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8m-4 4v-8m6 12h2m-2 0a2 2 0 01-2-2m-10 2H4m2 0a2 2 0 002-2m12-6V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2z" />
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-yellow-300">Сертификат</h3>
        <p class="text-gray-400">📜 После завершения курса</p>
    </div>

    <!-- Бейджи -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg border-2 border-blue-400 transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553 1.518a2 2 0 011.448 2.38l-.678 3.39a2 2 0 01-1.89 1.615L12 20.25l-6.433 1.152a2 2 0 01-1.89-1.615l-.678-3.39a2 2 0 011.448-2.38L9 10V7a3 3 0 013-3h0a3 3 0 013 3v3z" />
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-blue-300">Бейджи</h3>
        <p class="text-gray-400">🏅 За активное участие</p>
    </div>

    <!-- Рейтинг -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg border-2 border-green-400 transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4 4 4m0-6l-4-4-4 4m-6 6h16" />
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-green-300">Рейтинг</h3>
        <p class="text-gray-400">⭐ Лидеры получают бонусы</p>
    </div>
</div>

        
        <!-- Отзывы -->
<h2 class="text-3xl font-bold text-center text-indigo-400 mt-16">Отзывы выпускников</h2>
<p class="text-gray-400 text-center mb-8">Что говорят наши выпускники о курсах</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
    <!-- Отзыв 1 -->
    <div class="bg-gradient-to-r from-indigo-700 to-indigo-500 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v12m0 0l-3-3m3 3l3-3m9-9v6a9 9 0 01-9 9H4a9 9 0 01-9-9V6a9 9 0 019-9h12a9 9 0 019 9z" />
            </svg>
            <h4 class="font-semibold text-white">Александр К.</h4>
        </div>
        <p class="text-gray-200">"Курс помог мне найти работу в крупной IT-компании!"</p>
    </div>

    <!-- Отзыв 2 -->
    <div class="bg-gradient-to-r from-green-600 to-green-400 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v12m0 0l-3-3m3 3l3-3m9-9v6a9 9 0 01-9 9H4a9 9 0 01-9-9V6a9 9 0 019-9h12a9 9 0 019 9z" />
            </svg>
            <h4 class="font-semibold text-white">Марина С.</h4>
        </div>
        <p class="text-gray-200">"Очень качественные материалы и сильные преподаватели."</p>
    </div>
</div>

<!-- Таймер скидки -->
<h2 class="text-3xl font-bold text-center text-purple-600 mt-16">⏳ Скидка действует:</h2>
<div id="countdown" class="text-5xl font-extrabold text-center text-white mt-4 py-6 px-8 rounded-lg bg-gradient-to-r from-purple-600 to-indigo-600 shadow-2xl transform hover:scale-105 transition-all duration-300">
    00:00:00
</div>  
</div>
    
    <script>
        function countdown() {
            const countDownDate = new Date().getTime() + (24 * 60 * 60 * 1000);
            const timer = setInterval(function () {
                const now = new Date().getTime();
                const distance = countDownDate - now;
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("countdown").innerHTML = `${hours}ч ${minutes}м ${seconds}с`;
                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById("countdown").innerHTML = "Скидка завершена";
                }
            }, 1000);
        }
        countdown();
    </script>
</body>
</div>
</html>

        @include('footer')

    </div>

    <script>
        // Функция для фильтрации
        const categoryFilters = document.querySelectorAll('.filter-category');
        const levelFilters = document.querySelectorAll('.filter-level');
        const employmentFilter = document.getElementById('employment-filter');
        const courseCards = document.querySelectorAll('.course-card');

        categoryFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                filterCards();
            });
        });

        levelFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                filterCards();
            });
        });

        employmentFilter.addEventListener('change', () => {
            filterCards();
        });

        function filterCards() {
            const selectedCategories = Array.from(document.querySelectorAll('.filter-category.bg-indigo-200')).map(item => item.innerText.toLowerCase());
            const selectedLevels = Array.from(document.querySelectorAll('.filter-level.bg-gray-200')).map(item => item.innerText.toLowerCase());
            const isEmploymentChecked = employmentFilter.checked;

            courseCards.forEach(card => {
                const cardCategories = Array.from(card.classList).filter(className => className.includes('development') || className.includes('analytics') || className.includes('cybersecurity') || className.includes('marketing'));
                const cardLevels = Array.from(card.classList).filter(className => className.includes('beginner') || className.includes('intermediate') || className.includes('advanced'));
                const isEmploymentAvailable = card.classList.contains('employment');

                const matchesCategory = selectedCategories.length === 0 || selectedCategories.some(category => cardCategories.includes(category));
                const matchesLevel = selectedLevels.length === 0 || selectedLevels.some(level => cardLevels.includes(level));
                const matchesEmployment = !isEmploymentChecked || isEmploymentAvailable;

                if (matchesCategory && matchesLevel && matchesEmployment) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
