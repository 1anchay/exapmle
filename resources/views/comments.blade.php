<!DOCTYPE html>
<html lang="ru">

@include('hader') <!-- Подключение header -->

<head>
    <meta charset="UTF-8">
    <title>Комментарии — IT Курсы</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])
    <!-- Tailwind CSS + дополнительные стили -->
    <style>
        /* Фон страницы */
        body {
            background: linear-gradient(to bottom, #f0f4f8, #dbeafe);
            font-family: 'Inter', sans-serif;
        }

        /* Добавляем фоны Hero Patterns */
        .hero-pattern {
            background-image: url('https://www.heropatterns.com/static/patterns/hexagons.svg');
            background-color: #f0f4f8;
        }

        /* Стиль карточки комментария */
        .comment-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 300px;
            margin-right: 1rem;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
        }

        /* Эффект при наведении на карточку */
        .comment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Кнопка отправки с плавной анимацией */
        .comment-button {
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 8px;
            padding: 10px 20px;
            background-color: #1D4ED8;
            color: white;
        }

        .comment-button:hover {
            background-color: #1D4ED8;
            transform: scale(1.05);
            background-color: #2563eb;
        }

        /* Стиль для textarea */
        .textarea:focus {
            border-color: #1D4ED8;
            box-shadow: 0 0 0 2px rgba(29, 78, 216, 0.2);
        }

        /* Стиль для аватаров пользователей */
        .avatar {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        /* Для контейнера с горизонтальной прокруткой */
        .comments-wrapper {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
            gap: 10px;
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

        /* Пагинация */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
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
    </style>
</head>

<body class="font-sans text-gray-800">

    <!-- Контейнер с отступами -->
    <div class="max-w-3xl mx-auto p-6 mt-10">
        <!-- Заголовок -->
        <h1 class="text-4xl font-semibold text-center text-blue-900 mb-8">Комментарии пользователей</h1>

        <!-- Форма для отправки комментария -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 hero-pattern">
            <h2 class="text-2xl font-medium text-gray-700 mb-4">Добавить комментарий</h2>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-3 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500 textarea" placeholder="Оставьте ваш комментарий"></textarea>
                <button type="submit" class="comment-button">Отправить</button>
            </form>
        </div>

        <!-- Комментарии других пользователей -->
        <div class="space-y-6">
            <h2 class="text-2xl font-medium text-gray-700 mb-4">Комментарии:</h2>
            <!-- Контейнер с прокруткой комментариев -->
            <div class="comments-wrapper">
                @foreach ($comments as $comment)
                    <div class="comment-card">
                        <div class="flex items-center space-x-4">
                            <!-- Картинка пользователя -->
                            <img src="{{ $comment->user->avatar ?? 'https://via.placeholder.com/50' }}" alt="user avatar" class="avatar">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $comment->user->name }}</p>
                                <p class="text-sm text-gray-500">{{ $comment->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Пагинация -->
            <div class="pagination mt-6">
                {{ $comments->links() }}
            </div>
        </div>
    </div>

    <!-- Подключаем footer -->
    @include('footer')

</body>

</html>
