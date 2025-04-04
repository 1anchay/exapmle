<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Цифровые путешествия') }}</title>

    <!-- Подключаем TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Другие стили -->
    <style>
        /* Стили для чата */
        .chatbox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 320px;
            height: 420px;
            background: linear-gradient(145deg, #4C51BF, #1D2A6E);
            border-radius: 12px;
            display: none;
            flex-direction: column;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
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
            background-color: #1D2A6E;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .send-chat:hover {
            background-color: #4C51BF;
        }

        .open-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4C51BF;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .open-chat:hover {
            transform: scale(1.1);
        }

        /* Стиль для карточек профиля */
        .profile-card {
            background-color: #2D3748;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            font-size: 24px;
            font-weight: 600;
            color: white;
        }

        .profile-card p {
            color: #cbd5e0;
        }

        .profile-card a {
            background-color: #4C51BF;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-align: center;
            display: inline-block;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .profile-card a:hover {
            background-color: #2b3883;
        }

        /* Стиль для футера */
        .footer-card {
            background: linear-gradient(145deg, #4C51BF, #1D2A6E);
            padding: 40px 20px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .footer-card a:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .footer-card img {
            transition: transform 0.3s ease;
        }

        .footer-card img:hover {
            transform: scale(1.2);
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
            <div class="message-container"></div>
        </div>
        <input id="chat-input" class="chat-input" type="text" placeholder="Напишите сообщение..." />
        <button id="send-chat" class="send-chat">Отправить</button>
    </div>

    <!-- Кнопка для открытия чата -->
    <button id="open-chat" class="open-chat">💬</button>

    <!-- Футер -->
    <footer class="bg-gradient-to-r from-indigo-800 via-indigo-600 to-indigo-500 text-white py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="footer-card p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-4">О проекте</h4>
                    <ul>
                        <li><a href="{{ route('first.steps') }}" class="hover:text-gray-300 transition-colors">Первые шаги в IT</a></li>
                        <a href="{{ route('team') }}" class="text-blue-500 hover:underline">Наша команда</a>
                        <li><a href="mission.php" class="hover:text-gray-300 transition-colors">Миссия и ценности</a></li>
                    </ul>
                </div>

                <div class="footer-card p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-4">Цифровые экскурсии</h4>
                    <ul>
                        <li><a href="routes.html" class="hover:text-gray-300 transition-colors">Интерактивные маршруты</a></li>
                        <li><a href="vr-tours.html" class="hover:text-gray-300 transition-colors">VR и AR-туры</a></li>
                        <li><a href="feedback.html" class="hover:text-gray-300 transition-colors">Отзывы участников</a></li>
                    </ul>
                </div>

                <div class="footer-card p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-4">Обучение и развитие</h4>
                    <ul>
                        <li><a href="for-organizers.html" class="hover:text-gray-300 transition-colors">Для экскурсоводов</a></li>
                        <li><a href="partnership.html" class="hover:text-gray-300 transition-colors">Партнёрство в IT</a></li>
                        <li><a href="training.html" class="hover:text-gray-300 transition-colors">Курсы цифровых профессий</a></li>
                    </ul>
                </div>

                <div class="footer-card p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-4">Свяжитесь с нами</h4>
                    <p><strong>Телефон:</strong> +7 (978) 346-19-85</p>
                    <p><strong>Email:</strong> <a href="mailto:vtar4a@gmail.com" class="hover:text-gray-300 transition-colors">vtar4a@gmail.com</a></p>
                    <p><strong>Адрес:</strong> ул. Экскурсионная, д. 5, Севастополь</p>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-600 pt-6 text-center">
                <p class="text-sm">&copy; 2025 — Цифровые путешествия. Все права защищены.</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <a href="https://vk.com/1anchay" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="{{ asset('images/vk.png') }}" alt="VK" class="h-8 w-8">
                    </a>
                    <a href="https://t.me/nostars007" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="{{ asset('images/telegram.png') }}" alt="Telegram" class="h-8 w-8">
                    </a>
                    <a href="https://instagram.com/your_profile" target="_blank" class="hover:scale-125 transform transition-all duration-300">
                        <img src="{{ asset('images/insta.jfif') }}" alt="Instagram" class="h-8 w-8">
                    </a>
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
