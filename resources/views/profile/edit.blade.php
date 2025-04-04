<!DOCTYPE html>
<html lang="ru">
@include('hader') <!-- Подключение header -->

<head>
    <meta charset="UTF-8">
    <title>Редактировать профиль</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])

    <!-- Подключение шрифтов -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f4f4f4; /* Светлый фон страницы */
            color: #333; /* Темный текст для контраста */
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 500;
            margin-bottom: 2rem;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-size: 1rem;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            color: #333;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .input-field:focus {
            border-color: #0078d4;
            outline: none;
            background: #fff;
        }

        .submit-button {
            background-color: #0078d4;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #005fa3;
        }

        /* Стиль для аватара */
        .avatar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .avatar-container:hover {
            transform: scale(1.05);
        }

        .avatar-container img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            border: 5px solid #0078d4;
            transition: border-color 0.3s ease;
        }

        .avatar-container img:hover {
            border-color: #005fa3;
        }

        /* Стили для блока загрузки изображения */
        .avatar-upload {
            background: #f0f0f0;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .avatar-upload input[type="file"] {
            display: none;
        }

        .avatar-upload label {
            padding: 15px 25px;
            background-color: #0078d4;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .avatar-upload label:hover {
            background-color: #005fa3;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #777;
        }

        .footer a {
            color: #0078d4;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Контейнер с отступами -->
    <div class="container">

        <!-- Заголовок -->
        <h1>Редактировать профиль</h1>

        <!-- Форма для редактирования профиля -->
        <div class="form-container">
            <form id="avatarForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name" class="form-label">Имя:</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="input-field" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Электронная почта:</label>
                    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="input-field" required>
                </div>

                <!-- Новый email -->
                @if(Auth::user()->email_verified_at == null)
                    <div class="form-group">
                        <label for="verify-email" class="form-label">Подтверждение email:</label>
                        <button type="button" onclick="sendVerificationEmail()" class="submit-button">Отправить письмо для подтверждения</button>
                    </div>
                @endif

                <div class="form-group">
                    <button type="submit" class="submit-button">Обновить профиль</button>
                </div>
            </form>
        </div>

        <!-- Текущее фото профиля -->
        <div class="avatar-upload">
            <h3>Загрузить новое фото профиля</h3>
            <div class="avatar-container">
                @if(Auth::user()->avatar)
                    <img id="current-avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                @else
                    <img id="current-avatar" src="https://via.placeholder.com/150" alt="Default Avatar">
                @endif
            </div>
            <input type="file" id="avatar" name="avatar">
            <label for="avatar">Выбрать файл</label>
        </div>

    </div>

    <!-- Подключаем footer -->
    @include('footer')

    <!-- Подключаем JavaScript -->
    <script>
        function sendVerificationEmail() {
            // Отправка запроса на подтверждение email
            fetch('{{ route('verification.send') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            }).then(response => {
                if (response.status === 200) {
                    alert('Письмо для подтверждения было отправлено!');
                } else {
                    alert('Произошла ошибка при отправке письма');
                }
            });
        }
    </script>

</body>
</html>
