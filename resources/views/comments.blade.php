<!DOCTYPE html>
<html lang="ru">

@include('hader') <!-- Подключение header -->

<head>
    <meta charset="UTF-8">
    <title>Комментарии — IT Курсы</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])

    <!-- Tailwind CSS + кастомный стиль -->
    <style>
        body {
            background: url('https://cdn.jsdelivr.net/npm/tailwindcss-hero-patterns@0.0.4/assets/hexagons.svg'), #f0f4f8;
            font-family: 'Inter', sans-serif;
            background-position: center;
            background-repeat: repeat;
            background-size: 300px;
        }

        .comments-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 20px;
            padding: 20px 0;
        }

        .comments-wrapper::-webkit-scrollbar {
            height: 8px;
        }

        .comments-wrapper::-webkit-scrollbar-thumb {
            background: #2563eb;
            border-radius: 10px;
        }

        .comments-wrapper::-webkit-scrollbar-track {
            background: #f0f4f8;
        }

        .comment-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            width: 280px;
            flex-shrink: 0;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: 2px solid #dbeafe;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .comment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .comment-button {
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 8px;
            padding: 10px 20px;
            background-color: #1D4ED8;
            color: white;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .comment-button:hover {
            background-color: #2563eb;
            transform: scale(1.05);
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 20px;
        }

        .pagination a {
            padding: 0.5rem 1rem;
            background-color: #f0f4f8;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #2563eb;
            color: white;
        }

        .intro-text {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .game-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            border: 2px solid #dbeafe;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .game-container input,
        .game-container button {
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .game-container button {
            background-color: #2563eb;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .game-container button:hover {
            background-color: #1D4ED8;
        }
    </style>
</head>

<body class="font-sans text-gray-800">

    <div class="max-w-5xl mx-auto p-6 mt-10">
        <!-- Интро -->
        <div class="intro-text">
            <h2 class="text-2xl font-medium text-blue-900 mb-4">Почему ваши комментарии важны?</h2>
            <p class="text-lg text-gray-700">Ваши комментарии помогают нам улучшать контент, развивать новые курсы и слушать ваше мнение. Оставьте свой комментарий, и мы обязательно его учтем!</p>
        </div>

        <!-- Заголовок -->
        <h1 class="text-4xl font-semibold text-center text-blue-900 mb-8">Комментарии пользователей</h1>

        <!-- Форма добавления комментария -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-medium text-blue-900 mb-4">Добавить комментарий</h2>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-3 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Оставьте ваш комментарий"></textarea>
                <button type="submit" class="comment-button">Отправить</button>
            </form>
        </div>

        <!-- Комментарии -->
        <div class="space-y-6">
            <h2 class="text-2xl font-medium text-blue-900 mb-4 flex items-center gap-2">
                <!-- 💬 Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8a9 9 0 100-18 9 9 0 000 18z" />
                </svg>
                Комментарии:
            </h2>

            <div class="comments-wrapper overflow-x-auto flex gap-4 py-4">
    @foreach ($comments as $comment)
        <div class="comment-card w-80 flex-shrink-0">
            <div class="flex items-center space-x-4">
                <!-- Картинка пользователя -->
                <img src="{{ $comment->user && $comment->user->avatar ? asset('storage/' . $comment->user->avatar) : 'https://via.placeholder.com/60' }}" alt="user avatar" class="avatar">

                <div>
                    <p class="font-semibold text-gray-800 flex items-center gap-1">
                        <!-- 👤 Иконка пользователя -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $comment->user ? $comment->user->name : 'Аноним' }}
                    </p>
                    <p class="text-sm text-gray-500 flex items-center gap-1">
                        <!-- 📅 Иконка даты -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M3 11h18M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                        </svg>
                        {{ $comment->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            <p class="mt-4 text-gray-700">{{ $comment->content }}</p>
        </div>
    @endforeach
</div>


            <!-- Пагинация -->
            <div class="pagination">
                {{ $comments->links() }}
            </div>
        </div>

        <!-- Мини-игра -->
        <div class="game-container">
            <h2 class="text-2xl text-blue-800 font-semibold text-center mb-4">Мини-игра: Угадай число!</h2>
            <p class="text-lg text-gray-600 mb-4 text-center">Попробуйте угадать число от 1 до 100. У вас есть 10 попыток!</p>
            <div class="flex items-center gap-4 justify-center">
                <input id="guessInput" type="number" min="1" max="100" placeholder="Введите число" />
                <button id="guessButton">Проверить</button>
            </div>
            <p id="gameMessage" class="mt-4 text-center"></p>
        </div>
    </div>

    @include('footer')

    <script>
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
</html>
