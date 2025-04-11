<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комментарии | IT-Сообщество</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yandex+Sans:wght@400;500;700&display=swap');
        
        body {
            font-family: 'Yandex Sans', sans-serif;
            background-color: #f9fafb;
        }
        
        .yandex-btn {
            background: linear-gradient(90deg, #FFCC00, #FF9900);
            transition: all 0.3s;
        }
        
        .yandex-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 204, 0, 0.3);
        }
        
        .code-bg {
            background-color: #1e293b;
            background-image: radial-gradient(circle at 10% 20%, rgba(100, 217, 254, 0.1) 0%, rgba(100, 217, 254, 0.05) 90%);
        }
        
        .robot-avatar {
            transition: all 0.5s;
        }
        
        .robot-avatar:hover {
            transform: rotate(10deg) scale(1.05);
        }
        
        .comment-card {
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        
        .comment-card:hover {
            transform: translateX(5px);
            border-left-color: #FFCC00;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .typing-dots {
            display: inline-flex;
            align-items: center;
        }
        
        .typing-dots span {
            width: 8px;
            height: 8px;
            margin: 0 2px;
            background-color: #6b7280;
            border-radius: 50%;
            display: inline-block;
            animation: typing 1.4s infinite both;
        }
        
        .typing-dots span:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .typing-dots span:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes typing {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Анимированный фон с элементами кода -->
    <div class="fixed inset-0 overflow-hidden opacity-10 -z-10 code-bg">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-gray-700 text-opacity-10 font-mono text-2xl md:text-4xl lg:text-6xl whitespace-pre">
                &lt;div&gt;Hello World!&lt;/div&gt;
                &lt;script&gt;console.log('IT rocks!')&lt;/script&gt;
                #include &lt;iostream&gt;
                System.out.println("Java");
                print("Python")
            </div>
        </div>
    </div>

    <!-- Контейнер страницы -->
    <div class="container mx-auto px-4 py-8 max-w-4xl">

        <!-- Приветствие с роботом -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-white rounded-xl p-6 shadow-lg animate__animated animate__fadeIn">
            <div class="flex items-center mb-4 md:mb-0">
                <div class="robot-avatar mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#FFCC00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v4M8 4v2M16 4v2M12 6v2M8 8v8M16 8v8M12 10v8M6 16v2M18 16v2M10 22h4"/>
                        <rect x="4" y="8" width="16" height="10" rx="2"/>
                        <circle cx="9" cy="13" r="1"/>
                        <circle cx="15" cy="13" r="1"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">IT-Сообщество</h1>
                    <p class="text-gray-600">Делитесь идеями и задавайте вопросы</p>
                </div>
            </div>
            <div class="bg-yellow-50 border border-yellow-100 rounded-lg px-4 py-3 animate__animated animate__pulse animate__infinite">
                <div class="flex items-center">
                    <div class="typing-dots mr-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Уведомление об успешном добавлении комментария -->
        <div id="success-message" class="hidden bg-gradient-to-r from-green-400 to-green-500 text-white p-4 rounded-lg mb-6 shadow-md flex items-center justify-between animate__animated animate__bounceIn">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Ваш комментарий успешно добавлен!</span>
            </div>
            <button onclick="document.getElementById('success-message').classList.add('hidden')" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Форма для добавления комментария -->
        <div class="bg-white p-6 rounded-xl shadow-lg mb-10 border border-gray-100 animate__animated animate__fadeInUp">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                Добавить комментарий
            </h2>
            
            <form id="comment-form" class="space-y-4">
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Ваш комментарий</label>
                    <textarea id="comment" name="content" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all" placeholder="Напишите свой комментарий..."></textarea>
                    <p class="mt-1 text-sm text-gray-500">Максимум 500 символов</p>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <button type="button" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                        </button>
                        <button type="button" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </button>
                        <button type="button" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit" class="yandex-btn px-6 py-2 rounded-lg font-medium text-gray-800 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                        Отправить
                    </button>
                </div>
            </form>
        </div>

        <!-- Список комментариев -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                Комментарии
                <span id="comments-count" class="ml-2 bg-yellow-100 text-yellow-800 text-sm font-semibold px-2.5 py-0.5 rounded-full">0</span>
            </h2>

            <div id="comments-list" class="space-y-4">
                <!-- Пример комментария -->
                <div class="comment-card bg-white p-5 rounded-lg shadow-sm">
                    <div class="flex items-start">
                        <div class="mr-4">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center text-white font-bold">AI</div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h3 class="font-bold text-gray-800">IT-Робот</h3>
                                <span class="text-xs text-gray-500">Только что</span>
                            </div>
                            <p class="text-gray-700 mt-1">Привет! Я первый комментатор в этом IT-сообществе. Оставьте свой комментарий и давайте общаться о технологиях!</p>
                            <div class="mt-3 flex space-x-3">
                                <button class="text-gray-500 hover:text-yellow-500 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                    12
                                </button>
                                <button class="text-gray-500 hover:text-yellow-500 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Ответить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- IT-статистика -->
        <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 border border-yellow-200 rounded-xl p-6 shadow-sm mb-10">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                IT-статистика сообщества
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-yellow-600">1,248</div>
                    <div class="text-sm text-gray-600">участников</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-yellow-600">5,763</div>
                    <div class="text-sm text-gray-600">комментариев</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-yellow-600">892</div>
                    <div class="text-sm text-gray-600">вопросов</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-yellow-600">24/7</div>
                    <div class="text-sm text-gray-600">онлайн поддержка</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Футер -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                        <span class="text-xl font-bold">IT-Сообщество</span>
                    </div>
                    <p class="text-gray-400 text-sm mt-2">Место для обсуждения технологий и программирования</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-6 pt-6 text-sm text-gray-400 text-center">
                © 2023 IT-Сообщество. Все права защищены.
            </div>
        </div>
    </footer>

    <!-- Скрипт для обработки формы -->
    <script>
        // Инициализация конфетти
        const confettiSettings = { target: 'confetti-canvas', max: 150, size: 1.5, animate: true };
        const confetti = new ConfettiGenerator(confettiSettings);
        
        document.addEventListener('DOMContentLoaded', function() {
            // Обновляем счетчик комментариев
            updateCommentsCount();
            
            // Добавляем анимацию для робота
            const robot = document.querySelector('.robot-avatar');
            setTimeout(() => {
                robot.classList.add('animate__animated', 'animate__swing');
                setTimeout(() => robot.classList.remove('animate__swing'), 1000);
            }, 1500);
        });

        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Получаем значение комментария
            const commentContent = document.getElementById('comment').value.trim();

            // Если комментарий пустой, то не отправляем
            if (!commentContent) {
                showError('Комментарий не может быть пустым.');
                return;
            }
            
            if (commentContent.length > 500) {
                showError('Комментарий слишком длинный (максимум 500 символов).');
                return;
            }

            // Создаем новый комментарий
            const newComment = document.createElement('div');
            newComment.classList.add('comment-card', 'bg-white', 'p-5', 'rounded-lg', 'shadow-sm', 'animate__animated', 'animate__fadeIn');
            newComment.innerHTML = `
                <div class="flex items-start">
                    <div class="mr-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold">U</div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-gray-800">Анонимный пользователь</h3>
                            <span class="text-xs text-gray-500">Только что</span>
                        </div>
                        <p class="text-gray-700 mt-1">${commentContent}</p>
                        <div class="mt-3 flex space-x-3">
                            <button class="text-gray-500 hover:text-yellow-500 text-sm flex items-center like-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                0
                            </button>
                            <button class="text-gray-500 hover:text-yellow-500 text-sm flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Ответить
                            </button>
                        </div>
                    </div>
                </div>
            `;

            // Добавляем новый комментарий в начало списка
            const commentsList = document.getElementById('comments-list');
            commentsList.insertBefore(newComment, commentsList.firstChild);
            
            // Добавляем обработчик для кнопки лайка
            newComment.querySelector('.like-btn').addEventListener('click', function() {
                const likeCount = this.querySelector('svg').nextSibling;
                likeCount.nodeValue = ' ' + (parseInt(likeCount.nodeValue.trim()) + 1);
                this.classList.add('text-yellow-500');
            });

            // Показываем уведомление об успешном добавлении
            const successMessage = document.getElementById('success-message');
            successMessage.classList.remove('hidden');
            successMessage.classList.add('animate__bounceIn');
            
            // Запускаем конфетти
            confetti.render();
            setTimeout(() => confetti.clear(), 3000);

            // Обновляем счетчик комментариев
            updateCommentsCount();

            // Очищаем форму и скрываем уведомление через 3 секунды
            document.getElementById('comment-form').reset();
            setTimeout(() => {
                successMessage.classList.remove('animate__bounceIn');
                successMessage.classList.add('animate__fadeOut');
                setTimeout(() => successMessage.classList.add('hidden'), 500);
            }, 3000);
        });
        
        function updateCommentsCount() {
            const count = document.getElementById('comments-list').children.length;
            document.getElementById('comments-count').textContent = count;
        }
        
        function showError(message) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 animate__animated animate__headShake';
            errorDiv.setAttribute('role', 'alert');
            errorDiv.innerHTML = `
                <strong class="font-bold">Ошибка!</strong>
                <span class="block sm:inline">${message}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove()">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            `;
            
            const form = document.getElementById('comment-form');
            form.insertBefore(errorDiv, form.firstChild);
            
            setTimeout(() => {
                errorDiv.classList.remove('animate__headShake');
                errorDiv.classList.add('animate__fadeOut');
                setTimeout(() => errorDiv.remove(), 500);
            }, 3000);
        }
    </script>

    <!-- Canvas для конфетти -->
    <canvas id="confetti-canvas" class="fixed top-0 left-0 w-full h-full pointer-events-none z-50" style="display: none;"></canvas>

</body>
</html> 