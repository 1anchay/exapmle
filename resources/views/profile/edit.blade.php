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
            background: #f4f4f4;
            color: #333;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .avatar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            text-align: center;
        }

        .avatar-container img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            border: 4px solid #0078d4;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .avatar-container img:hover {
            transform: scale(1.1);
            border-color: #005fa3;
        }

        .avatar-upload {
            margin-top: 10px;
        }

        .avatar-upload input[type="file"] {
            display: none;
        }

        .avatar-upload label {
            padding: 12px 24px;
            background-color: #0078d4;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .avatar-upload label:hover {
            background-color: #005fa3;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 1.1rem;
            color: #444;
            margin-bottom: 8px;
            display: block;
            font-weight: 600;
        }

        .input-field {
            width: 100%;
            padding: 14px;
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
            padding: 14px 28px;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submit-button:hover {
            background-color: #005fa3;
            transform: scale(1.05);
        }

        .profile-info {
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        .profile-info:hover {
            transform: translateY(-5px);
        }

        .profile-info h3 {
            font-size: 1.8rem;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .profile-info p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 15px;
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

    <!-- Основной контент -->
    <div class="container">
        <h1>Редактировать профиль</h1>

        <!-- Форма профиля -->
        <form id="avatarForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Контейнер для аватара -->
            <div class="avatar-container">
                @if(Auth::user()->avatar)
                    <img id="current-avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                @else
                    <img id="current-avatar" src="https://via.placeholder.com/150" alt="Default Avatar">
                @endif
                <div class="avatar-upload">
                    <input type="file" id="avatar" name="avatar">
                    <label for="avatar">Изменить аватар</label>
                </div>
            </div>

            <!-- Поле для имени -->
            <div class="form-group">
                <label for="name" class="form-label">Имя:</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="input-field" required>
            </div>

            <!-- Поле для email -->
            <div class="form-group">
                <label for="email" class="form-label">Электронная почта:</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="input-field" required>
            </div>

            <!-- Подтверждение email, если не подтвержден -->
            @if(Auth::user()->email_verified_at == null)
                <div class="form-group">
                    <label class="form-label">Подтверждение email:</label>
                    <button type="button" onclick="sendVerificationEmail()" class="submit-button">Отправить письмо для подтверждения</button>
                </div>
            @endif

            <!-- Кнопка для сохранения изменений -->
            <div class="form-group">
                <button type="submit" class="submit-button">Сохранить изменения</button>
            </div>
        </form>

        <!-- Информация о пользователе -->
        <div class="profile-info">
            <h3>Личная информация</h3>
            <p><strong>Имя:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            @if(Auth::user()->email_verified_at == null)
                <p><strong>Статус подтверждения email:</strong> Не подтверждено</p>
            @endif
        </div>
    </div>

    <!-- Подключение футера -->
    @include('footer')

    <script>
        function sendVerificationEmail() {
            fetch('{{ route('verification.send') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            }).then(response => {
                if (response.status === 200) {
                    alert('Письмо для подтверждения было отправлено!');
                } else {
                    alert('Ошибка при отправке письма');
                }
            });
        }
    </script>

</body>

</html>
