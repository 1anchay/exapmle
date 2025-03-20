<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как стать IT-гением и не сойти с ума</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 text-white min-h-screen flex flex-col">
    @include('hader')

    <div class="container mx-auto px-4 py-10 flex-grow">
        <div class="max-w-3xl mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-2xl">
            <header class="text-center py-6">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">Как войти в IT и не пожалеть об этом</h1>
                <p class="text-lg text-gray-700 dark:text-gray-300 mt-2">Твой путь в мир технологий начинается здесь!</p>
            </header>
            
            <section class="p-6 rounded-lg">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Chersonesos_Greek_Colonnade_%28The_Antiquities_of_Chersonesos_in_Crimea%29.jpg" 
                     alt="Древние разработчики на собрании" 
                     class="w-full h-auto rounded-lg shadow-lg mb-6">
                
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 118 0v2m-4 5a5 5 0 01-5-5h10a5 5 0 01-5 5zm-4-5h8"></path>
                    </svg>
                    Добро пожаловать в мир кода, багов и кофе!
                </h2>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">Когда-то давно люди строили пирамиды, открывали новые земли и создавали произведения искусства. Сегодня же они... чинят баги в три часа ночи. 🧑‍💻☕</p>
                <p class="mt-2 text-lg text-gray-800 dark:text-gray-200">Наш проект создан для того, чтобы помочь вам плавно войти в мир IT и не убежать обратно в лес.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg text-center">
                        <img src="https://source.unsplash.com/400x250/?coding" class="rounded-lg mx-auto" alt="Кодинг">
                        <p class="mt-3 text-gray-900 dark:text-gray-300">Кодинг без боли</p>
                    </div>
                    <div class="p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg text-center">
                        <img src="https://source.unsplash.com/400x250/?hacker" class="rounded-lg mx-auto" alt="Хакатон">
                        <p class="mt-3 text-gray-900 dark:text-gray-300">Хакатоны и вызовы</p>
                    </div>
                </div>

                <p class="mt-6 text-xl font-bold">Что вас ждёт:</p>
                <ul class="list-disc list-inside mt-4 space-y-2 text-lg">
                    <li class="text-green-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Курсы, которые не вызывают сонливость
                    </li>
                    <li class="text-green-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Практика, от которой не хочется плакать
                    </li>
                    <li class="text-green-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Менторы, которые поддержат, а не скажут "Гугли"
                    </li>
                </ul>
                
                <p class="mt-6 text-lg font-medium text-gray-800 dark:text-gray-200">Присоединяйтесь к нам, и, возможно, через год вы будете говорить "Простая задачка на два часа" (и делать её две недели, как положено). 🚀</p>
            </section>
        </div>
    </div>
    
    @include('footer')
</body>
</html>
