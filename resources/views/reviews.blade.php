<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить комментарий</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Контейнер страницы -->
    <div class="container mx-auto p-6">

        <!-- Заголовок страницы -->
        <h1 class="text-3xl font-semibold mb-6">Добавить комментарий</h1>

        <!-- Уведомление об успешном добавлении комментария -->
        <div id="success-message" class="hidden bg-green-500 text-white p-4 rounded mb-6">
            Ваш комментарий успешно добавлен!
        </div>

        <!-- Форма для добавления комментария -->
        <div class="bg-white p-6 rounded shadow-md">
            <form id="comment-form">
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-semibold text-gray-700">Ваш комментарий:</label>
                    <textarea id="comment" name="content" rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="Напишите свой комментарий..." required></textarea>
                </div>

                <div class="mb-4">
                    <button type="submit" class="px-4 py-2 bg-teal-500 text-white rounded-md hover:bg-teal-600 transition-all">Отправить</button>
                </div>
            </form>
        </div>

        <!-- Список комментариев -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold mb-4">Комментарии</h2>

            <div id="comments-list" class="space-y-4">
                <!-- Здесь будут отображаться комментарии -->
            </div>
        </div>

    </div>

    <!-- Скрипт для обработки формы -->
    <script>
        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Получаем значение комментария
            const commentContent = document.getElementById('comment').value;

            // Если комментарий пустой, то не отправляем
            if (!commentContent.trim()) {
                alert('Комментарий не может быть пустым.');
                return;
            }

            // Отправляем новый комментарий
            const newComment = document.createElement('div');
            newComment.classList.add('bg-white', 'p-4', 'border', 'rounded-lg', 'shadow-sm');
            newComment.innerHTML = `
                <h3 class="text-xl font-semibold">Пользователь</h3>
                <p class="text-gray-700 mt-2">${commentContent}</p>
                <div class="mt-2 text-sm text-gray-500">Только что</div>
            `;

            // Добавляем новый комментарий в список
            document.getElementById('comments-list').appendChild(newComment);

            // Показываем уведомление об успешном добавлении
            document.getElementById('success-message').classList.remove('hidden');

            // Очищаем форму
            document.getElementById('comment-form').reset();
        });
    </script>

</body>
</html>
