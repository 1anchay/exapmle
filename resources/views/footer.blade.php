<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Your Website') }}</title>

    <!-- Подключаем TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Другие стили или теги -->
    <style>
        /* Стили для чата */
        .chatbox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: #fff;
            border-radius: 8px;
            display: none;
            flex-direction: column;
        }
        .chat-header {
            background-color: #4C51BF;
            padding: 10px;
            color: white;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .close-chat {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        .chat-body {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
        }
        .message-container {
            margin-bottom: 10px;
        }
        .chat-input {
            width: 100%;
            padding: 10px;
            border: none;
            border-top: 1px solid #ddd;
            font-size: 14px;
        }
        .send-chat {
            background-color: #4C51BF;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .open-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4C51BF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">
    
    <!-- Основной контент сайта -->
    @yield('content')

    <!-- Чат -->
    <div id="chatbox" class="chatbox">
        <div id="chat-header" class="chat-header">
            <span>Чат с поддержкой</span>
            <button id="close-chat" class="close-chat">×</button>
        </div>
        <div id="chat-body" class="chat-body">
            <div class="message-container">
                <!-- Здесь будут отображаться сообщения -->
            </div>
        </div>
        <input id="chat-input" class="chat-input" type="text" placeholder="Напишите сообщение..." />
        <button id="send-chat" class="send-chat">Отправить</button>
    </div>

    <!-- Кнопка для открытия чата -->
    <button id="open-chat" class="open-chat">💬</button>

    <!-- Ваш футер -->
    <footer class="bg-gradient-to-r from-indigo-800 via-indigo-600 to-indigo-500 text-white py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- О проекте -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">О проекте</h4>
                    <ul>
                        <li><a href="{{ route('first.steps') }}" class="hover:text-gray-300 transition-colors">Первые шаги в IT</a></li>
                        <a href="{{ route('team') }}" class="text-blue-500 hover:underline">Наша команда</a>
                        <li><a href="mission.php" class="hover:text-gray-300 transition-colors">Миссия и ценности</a></li>
                    </ul>
                </div>

                <!-- Цифровые экскурсии -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Цифровые экскурсии</h4>
                    <ul>
                        <li><a href="routes.html" class="hover:text-gray-300 transition-colors">Интерактивные маршруты</a></li>
                        <li><a href="vr-tours.html" class="hover:text-gray-300 transition-colors">VR и AR-туры</a></li>
                        <li><a href="feedback.html" class="hover:text-gray-300 transition-colors">Отзывы участников</a></li>
                    </ul>
                </div>

                <!-- Обучение и развитие -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Обучение и развитие</h4>
                    <ul>
                        <li><a href="for-organizers.html" class="hover:text-gray-300 transition-colors">Для экскурсоводов</a></li>
                        <li><a href="partnership.html" class="hover:text-gray-300 transition-colors">Партнёрство в IT</a></li>
                        <li><a href="training.html" class="hover:text-gray-300 transition-colors">Курсы цифровых профессий</a></li>
                    </ul>
                </div>

                <!-- Свяжитесь с нами -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Свяжитесь с нами</h4>
                    <p><strong>Телефон:</strong> +7 (978) 346-19-85</p>
                    <p><strong>Email:</strong> <a href="mailto:vtar4a@gmail.com" class="hover:text-gray-300 transition-colors">vtar4a@gmail.com</a></p>
                    <p><strong>Адрес:</strong> ул. Экскурсионная, д. 5, Севастополь</p>
                </div>
            </div>

            <!-- Нижняя часть футера -->
            <div class="mt-8 border-t border-gray-600 pt-6 text-center">
                <p class="text-sm">&copy; 2025 — Цифровые путешествия. Все права защищены.</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <a href="https://vk.com/1anchay" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="images/vk.png" alt="VK" class="h-8 w-8">
                    </a>
                    <a href="https://t.me/nostars007" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="images/telegram.png" alt="Telegram" class="h-8 w-8">
                    </a>
                    <a href="https://instagram.com/your_profile" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="images/insta.jfif" alt="Instagram" class="h-8 w-8">
                    </a>
                </div>

                <!-- Графический элемент, например, стилизованный фон или абстрактный элемент -->
                <div class="mt-8 relative">
                    <img src="images/abstract-pattern.svg" alt="Графика" class="absolute inset-0 w-full h-full opacity-10 object-cover">
                </div>
            </div>
        </div>
    </footer>

    <!-- Скрипт для чата -->
    <script>
        const chatbox = document.getElementById('chatbox');
        const openChat = document.getElementById('open-chat');
        const closeChat = document.getElementById('close-chat');
        const chatInput = document.getElementById('chat-input');
        const sendChat = document.getElementById('send-chat');

        openChat.addEventListener('click', () => {
            chatbox.style.display = 'flex';
        });

        closeChat.addEventListener('click', () => {
            chatbox.style.display = 'none';
        });

        sendChat.addEventListener('click', () => {
            const message = chatInput.value;
            if (message.trim()) {
                const messageContainer = document.createElement('div');
                messageContainer.textContent = message;
                document.querySelector('.message-container').appendChild(messageContainer);
                chatInput.value = '';
            }
        });
    </script>
</body>
</html>
