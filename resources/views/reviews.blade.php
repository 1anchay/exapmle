<!-- resources/views/reviews.blade.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы студентов</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.js"></script>
</head>
<body class="bg-gray-100">

    <!-- Включаем header -->
    @include('hader')

    <!-- Основной контейнер с отзывами -->
    <div class="container mx-auto px-4 py-8">
        <!-- Заголовок страницы -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-teal-600">Комментарии студентов</h2>
            <p class="text-lg text-gray-600 mt-2">Присоединяйтесь к обсуждениям, делитесь мнениями и помогайте друг другу!</p>
        </div>

        <!-- Успешное сообщение -->
        <div id="success-message" class="bg-green-100 text-green-800 p-4 rounded-md mb-6 hidden">
            <strong>Успех!</strong> Ваш комментарий был успешно добавлен.
        </div>

        <!-- Форма для добавления комментария -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <h3 class="text-xl font-semibold mb-4 text-teal-600">Оставьте комментарий</h3>
            <form id="comment-form">
                <textarea id="content" class="w-full border border-gray-300 rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-500" rows="6" placeholder="Напишите свой комментарий..." required></textarea>
                <button type="submit" class="mt-4 bg-teal-600 text-white px-6 py-2 rounded-lg hover:bg-teal-700 transition-all duration-300 transform hover:scale-105">Отправить</button>
            </form>
        </div>

        <!-- Список комментариев -->
        <div id="comments-list" class="space-y-6">
            <!-- Комментарии будут вставляться сюда через JavaScript -->
        </div>
    </div>

    <!-- Включаем footer -->
    @include('includes.footer')

    <!-- Подключение скрипта для обработки формы -->
    <script>
        // Пример комментариев
        const comments = [
            { name: 'Иван Иванов', content: 'Отличный курс! Много полезной информации.' },
            { name: 'Мария Петрова', content: 'Прекрасный опыт обучения, рекомендую всем!' }
        ];

        // Функция для отображения комментариев
        function renderComments() {
            const commentsList = document.getElementById('comments-list');
            commentsList.innerHTML = ''; // Очищаем текущие комментарии

            comments.forEach(comment => {
                const commentDiv = document.createElement('div');
                commentDiv.classList.add('bg-gray-100', 'p-6', 'rounded-lg', 'shadow-lg', 'hover:shadow-xl', 'transition', 'duration-300');

                const commentContent = `
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-teal-600 text-white rounded-full flex items-center justify-center text-2xl mr-4">
                            ${comment.name.charAt(0)} <!-- Первая буква имени -->
                        </div>
                        <div>
                            <p class="text-lg font-semibold text-teal-600">${comment.name}</p>
                            <p class="text-sm text-gray-500">Только что</p>
                        </div>
                    </div>
                    <p class="text-gray-700">${comment.content}</p>
                `;

                commentDiv.innerHTML = commentContent;
                commentsList.appendChild(commentDiv);
            });
        }

        // Отображаем комментарии при загрузке страницы
        renderComments();

        // Обработчик отправки формы
        document.getElementById('comment-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Отменяем стандартное поведение формы

            // Получаем текст комментария
            const content = document.getElementById('content').value;

            if (content) {
                // Добавляем новый комментарий в массив
                comments.push({ name: 'Новый пользователь', content });

                // Очистить поле ввода
                document.getElementById('content').value = '';

                // Показать сообщение об успехе
                document.getElementById('success-message').classList.remove('hidden');

                // Перерисовать список комментариев
                renderComments();
            }
        });
    </script>

</body>
</html>
