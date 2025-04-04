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
        body {
            background: linear-gradient(to bottom, #f3f4f6, #dbeafe);
        }
    </style>
</head>

<body class="bg-gradient-to-b from-blue-50 to-blue-100 font-sans text-gray-800">
    <!-- Контейнер с отступами -->
    <div class="max-w-3xl mx-auto p-6 mt-10">
        <!-- Заголовок -->
        <h1 class="text-3xl font-semibold text-center text-blue-900 mb-6">Комментарии пользователей</h1>

        <!-- Форма для отправки комментария -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-xl font-medium text-gray-700 mb-4">Добавить комментарий</h2>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-3 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Оставьте ваш комментарий"></textarea>
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">Отправить</button>
            </form>
        </div>

        <!-- Комментарии других пользователей -->
        <div class="space-y-6">
            <h2 class="text-xl font-medium text-gray-700">Комментарии:</h2>
            <!-- Выводим комментарии с использованием пагинации -->
            @foreach ($comments as $comment)
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4">
                        <!-- Картинка пользователя -->
                        <img src="{{ $comment->user->avatar ?? 'https://via.placeholder.com/50' }}" alt="user avatar" class="w-12 h-12 rounded-full">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $comment->user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $comment->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-700">{{ $comment->content }}</p>
                </div>
            @endforeach

            <!-- Пагинация -->
            <div class="mt-6">
                {{ $comments->links() }}
            </div>
        </div>
    </div>

    <!-- Подключаем footer -->
    @include('footer')
</body>

</html>
