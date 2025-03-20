<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Онлайн-курсы по IT</title>

    <!-- Подключение Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Подключение Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Дополнительные стили -->
    <style>
        .form-group input {
            border-radius: 8px;
        }

        .form-group button {
            transition: all 0.3s ease;
        }

        .form-group button:hover {
            background-color: #4CAF50;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="bg-gray-100 font-roboto">

    <div id="wrapper">
        <!-- Подключение шапки -->
        @include('hader')

        <!-- Основной контейнер -->
        <div id="content-container" class="max-w-4xl mx-auto px-4 py-8">

            <!-- Приветственный блок -->
            <header id="welcome-header" class="text-center mb-8">
                <h1 class="text-4xl font-bold text-indigo-600">Добро пожаловать в мир цифровых профессий!</h1>
                <p class="text-lg text-gray-700 mt-2">Присоединяйтесь к обучающей платформе и изучайте IT-навыки онлайн.</p>
            </header>

            <!-- Раздел регистрации -->
            <main id="content" class="bg-white p-8 rounded-lg shadow-xl">
                <div id="reg-container">
                    <h2 class="text-2xl font-semibold text-center text-indigo-600 mb-6">Зарегистрируйтесь и начните обучение!</h2>

                    <!-- Форма регистрации -->
                    <form id="registration-form" action="{{ route('register') }}" method="POST">
                        @csrf

                        <!-- Вывод ошибок формы, если они есть -->
                        @if ($errors->any())
                            <div class="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Имя -->
                        <div class="form-group mb-4">
                            <label for="name" class="block text-lg text-gray-700">Ваше имя:</label>
                            <input type="text" name="name" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ваше имя" required value="{{ old('name') }}">
                        </div>

                        <!-- Электронная почта -->
                        <div class="form-group mb-4">
                            <label for="email" class="block text-lg text-gray-700">Электронная почта:</label>
                            <input type="email" name="email" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Электронная почта" required value="{{ old('email') }}">
                        </div>

                        <!-- Пароль -->
                        <div class="form-group mb-4">
                            <label for="password" class="block text-lg text-gray-700">Пароль:</label>
                            <input type="password" name="password" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Пароль" required>
                        </div>

                        <!-- Подтверждение пароля -->
                        <div class="form-group mb-6">
                            <label for="password_confirmation" class="block text-lg text-gray-700">Повторите пароль:</label>
                            <input type="password" name="password_confirmation" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Повторите пароль" required>
                        </div>

                        <!-- Кнопка отправки -->
                        <div class="form-group">
                            <button type="submit" class="w-full p-4 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none transition">Зарегистрироваться</button>
                        </div>
                    </form>

                    <!-- Ссылка на страницу входа -->
                    <div class="text-center mt-4">
                        <p class="text-gray-700">Уже есть аккаунт? <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800">Войти</a></p>
                    </div>
                </div>
            </main>
        </div>

        <!-- Подключение подвала -->
        @include('footer')
    </div>

</body>

</html>
