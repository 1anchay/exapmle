<!DOCTYPE html>
<html lang="ru">
@include('hader')
<head>
    <meta charset="UTF-8">
    <title>Комментарии — IT Сообщество</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение стилей -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yandex+Sans:wght@400;500;700&display=swap');
        
        body {
            font-family: 'Yandex Sans', sans-serif;
            background-color: #f9fafb;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyMzAsMjMwLDIzMCwwLjEpIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIi8+PC9zdmc+');
        }
        
        .yandex-btn {
            background: linear-gradient(90deg, #1D4ED8, #2563eb);
            transition: all 0.3s;
        }
        
        .yandex-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.3);
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
            border-left-color: #1D4ED8;
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
        
        .comments-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 20px;
            padding: 20px 0;
            scrollbar-width: thin;
            scrollbar-color: #1D4ED8 #f0f4f8;
        }
        
        .comments-wrapper::-webkit-scrollbar {
            height: 8px;
        }
        
        .comments-wrapper::-webkit-scrollbar-thumb {
            background: #1D4ED8;
            border-radius: 10px;
        }
        
        .comments-wrapper::-webkit-scrollbar-track {
            background: #f0f4f8;
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
    <div class="container mx-auto px-4 py-8 max-w-5xl">

        <!-- Приветствие с роботом -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-white rounded-xl p-6 shadow-lg animate__animated animate__fadeIn">
            <div class="flex items-center mb-4 md:mb-0">
                <div class="robot-avatar mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            <div class="bg-blue-50 border border-blue-100 rounded-lg px-4 py-3 animate__animated animate__pulse animate__infinite">
                <div class="flex items-center">
                    <div class="typing-dots mr-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span class="text-sm text-blue-800">Готов к общению!</span>
                </div>
            </div>
        </div>

        <!-- Интро -->
        <div class="bg-white p-6 rounded-xl shadow-md mb-8 animate__animated animate__fadeInUp">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Почему ваши комментарии важны?
            </h2>
            <p class="text-gray-700">Ваши комментарии помогают нам улучшать контент, развивать новые курсы и слушать ваше мнение. Оставьте свой комментарий, и мы обязательно его учтем!</p>
        </div>

        <!-- Форма для добавления комментария -->
        <div class="bg-white p-6 rounded-xl shadow-lg mb-10 border border-gray-100 animate__animated animate__fadeInUp">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                Добавить комментарий
            </h2>
            
            <form id="comment-form" class="space-y-4">
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Ваш комментарий</label>
                    <textarea id="comment" name="content" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Напишите свой комментарий..."></textarea>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </button>
                        <button type="button" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit" class="yandex-btn px-6 py-2 rounded-lg font-medium text-white flex items-center">
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                Комментарии
                <span id="comments-count" class="ml-2 bg-blue-100 text-blue-800 text-sm font-semibold px-2.5 py-0.5 rounded-full">1</span>
            </h2>

            <div id="comments-list" class="comments-wrapper">
                <!-- Пример комментария -->
                <div class="comment-card bg-white p-5 rounded-lg shadow-sm w-80 flex-shrink-0">
                    <div class="flex items-start">
                        <div class="mr-4">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">AI</div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h3 class="font-bold text-gray-800">IT-Робот</h3>
                                <span class="text-xs text-gray-500">Только что</span>
                            </div>
                            <p class="text-gray-700 mt-1">Привет! Я первый комментатор в этом IT-сообществе. Оставьте свой комментарий и давайте общаться о технологиях!</p>
                            <div class="mt-3 flex space-x-3">
                                <button class="text-gray-500 hover:text-blue-500 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                    12
                                </button>
                                <button class="text-gray-500 hover:text-blue-500 text-sm flex items-center">
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
        <div class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 rounded-xl p-6 shadow-sm mb-10">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                IT-статистика сообщества
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-blue-600">1,248</div>
                    <div class="text-sm text-gray-600">участников</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-blue-600">5,763</div>
                    <div class="text-sm text-gray-600">комментариев</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-blue-600">892</div>
                    <div class="text-sm text-gray-600">вопросов</div>
                </div>
                <div class="bg-white p-3 rounded-lg text-center shadow-sm">
                    <div class="text-2xl font-bold text-blue-600">24/7</div>
                    <div class="text-sm text-gray-600">онлайн поддержка</div>
                </div>
            </div>
        </div>

        <!-- Мини-игра -->
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 mb-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Мини-игра: Угадай число!
            </h2>
            <p class="text-gray-700 mb-4">Попробуйте угадать число от 1 до 100. У вас есть 10 попыток!</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <input id="guessInput" type="number" min="1" max="100" placeholder="Введите число" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button id="guessButton" class="yandex-btn px-6 py-2 rounded-lg font-medium text-white">Проверить</button>
            </div>
            <p id="gameMessage" class="mt-4 text-center font-medium"></p>
        </div>

    </div>

    <!-- Скрипт для обработки формы -->
    <script>
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
            newComment.classList.add('comment-card', 'bg-white', 'p-5', 'rounded-lg', 'shadow-sm', 'w-80', 'flex-shrink-0', 'animate__animated', 'animate__fadeIn');
            newComment.innerHTML = `
                <div class="flex items-start">
                    <div class="mr-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">U</div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-gray-800">Анонимный пользователь</h3>
                            <span class="text-xs text-gray-500">Только что</span>
                        </div>
                        <p class="text-gray-700 mt-1">${commentContent}</p>
                        <div class="mt-3 flex space-x-3">
                            <button class="text-gray-500 hover:text-blue-500 text-sm flex items-center like-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                0
                            </button>
                            <button class="text-gray-500 hover:text-blue-500 text-sm flex items-center">
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
                this.classList.add('text-blue-500');
            });

            // Обновляем счетчик комментариев
            updateCommentsCount();

            // Очищаем форму
            document.getElementById('comment-form').reset();
        });
        
        // Мини-игра: Угадай число
            let randomNumber = Math.floor(Math.random() * 100) + 1;
            let attempts = 0;

            document.getElementById('guessButton').addEventListener('click', function () {
                let userGuess = parseInt(document.getElementById('guessInput').value);
                attempts++;

                const msg = document.getElementById('gameMessage');

                if (userGuess === randomNumber) {
                    msg.textContent = `Поздравляю! Вы угадали число за ${attempts} попыток!`;
                    msg.style.color = 'green';
                } else if (userGuess < randomNumber) {
                    msg.textContent = 'Слишком мало! Попробуйте снова.';
                    msg.style.color = 'red';
                } else {
                    msg.textContent = 'Слишком много! Попробуйте снова.';
                    msg.style.color = 'red';
                }

                if (attempts >= 10) {
                    msg.textContent = `Вы не угадали число! Загаданное число было ${randomNumber}.`;
                    msg.style.color = 'orange';
                }
            });
        </script>

    </body>
    @include('footer')
    </html>
