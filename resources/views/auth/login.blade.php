<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Онлайн-курсы по IT</title>

    <!-- Подключение Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Подключение Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-roboto">

    <div id="wrapper">
        <!-- Подключение шапки -->
        @include('hader')

        <!-- Основной контейнер -->
        <div id="content-container" class="max-w-md mx-auto px-4 py-8">

            <!-- Приветственный блок -->
            <header id="welcome-header" class="text-center mb-8">
                <h1 class="text-4xl font-bold text-indigo-600">Добро пожаловать!</h1>
                <p class="text-lg text-gray-700 mt-2">Введите свои данные для входа в систему.</p>
            </header>

            <!-- Форма входа -->
            <main id="content" class="bg-white p-8 rounded-lg shadow-xl">
                <div id="login-container">
                    <h2 class="text-2xl font-semibold text-center text-indigo-600 mb-6">Вход в аккаунт</h2>

                    <!-- Форма входа -->
                    <form id="login-form" action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Вывод ошибок формы, если они есть -->
                        @if ($errors->any())
                            <div class="alert alert-danger bg-red-100 text-red-700 p-4 mb-4 rounded-lg shadow-md">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Электронная почта -->
                        <div class="form-group mb-4">
                            <label for="email" class="block text-lg text-gray-700">Электронная почта:</label>
                            <input type="email" name="email" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Электронная почта" required autofocus value="{{ old('email') }}">
                        </div>

                        <!-- Пароль -->
                        <div class="form-group mb-6">
                            <label for="password" class="block text-lg text-gray-700">Пароль:</label>
                            <input type="password" name="password" class="w-full p-4 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Пароль" required>
                        </div>

                        <!-- Кнопка отправки -->
                        <div class="form-group">
                            <button type="submit" class="w-full p-4 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none transition">Войти</button>
                        </div>
                    </form>

                    <!-- Ссылка на страницу регистрации -->
                    <div class="text-center mt-4">
                        <p class="text-gray-700">Нет аккаунта? <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800">Зарегистрироваться</a></p>
                    </div>
                </div>
            </main>
        </div>

        <!-- Подключение подвала -->
        @include('footer')
    </div>

</body>

</html>
