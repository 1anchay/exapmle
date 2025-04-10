<!-- Футер -->
<footer class="bg-gradient-to-r from-gray-900 to-indigo-900 py-12 relative overflow-hidden">
    <!-- Анимированный фон с цифровыми элементами -->
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-0 left-0 w-full h-full bg-grid-pattern"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-circuit-pattern opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            <!-- Блок "О проекте" с эффектом голограммы -->
            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-indigo-900/30 to-gray-800/30 border border-indigo-400/20 hover:border-indigo-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-indigo-400">О проекте</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('first.steps') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Первые шаги в IT
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Наша команда
                        </a>
                    </li>
                    <li>
                        <a href="mission.php" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Миссия и ценности
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Цифровые экскурсии" с 3D эффектом -->
            <div class="transform-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-purple-900/30 to-gray-800/30 border border-purple-400/20 hover:border-purple-400/50 transition-all duration-500 hover:-translate-y-1">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-indigo-400">Цифровые экскурсии</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="routes.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            Интерактивные маршруты
                        </a>
                    </li>
                    <li>
                        <a href="vr-tours.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            VR и AR-туры
                        </a>
                    </li>
                    <li>
                        <a href="feedback.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            Отзывы участников
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Обучение и развитие" с эффектом кода -->
            <div class="code-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-blue-900/30 to-gray-800/30 border border-blue-400/20 hover:border-blue-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-400">Обучение и развитие</h4>
                <ul class="space-y-3 font-mono">
                    <li>
                        <a href="for-organizers.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Для экскурсоводов
                        </a>
                    </li>
                    <li>
                        <a href="partnership.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Партнёрство в IT
                        </a>
                    </li>
                    <li>
                        <a href="training.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Курсы цифровых профессий
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Контакты" с эффектом голограммы -->
            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-teal-900/30 to-gray-800/30 border border-teal-400/20 hover:border-teal-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-cyan-400">Свяжитесь с нами</h4>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3.5 8.67v8.58a3 3 0 003 3h15v-9.67l-9 4.29-9-4.3zm0-2.67l9 4.29 9-4.29V5.08a3 3 0 00-3-3h-15a3 3 0 00-3 3v.92z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">vtar4a@gmail.com</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"/>
                                <path d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 00-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 00.043-1.391L6.859 3.513a1 1 0 00-1.391-.087l-2.17 1.861a1 1 0 00-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 00.648-.291l1.86-2.171a1 1 0 00-.086-1.391l-4.064-3.696z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">+7 (978) 346-19-85</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">ул. Экскурсионная, д. 5, Севастополь</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижняя часть футера с соцсетями -->
        <div class="border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center">
                        <div class="h-8 w-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-indigo-400">Цифровые путешествия</span>
                    </div>
                    <p class="text-sm text-gray-400 mt-2">&copy; 2025 Все права защищены</p>
                </div>

                <div class="flex space-x-6">
                    <a href="https://vk.com/1anchay" target="_blank" class="social-icon h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition-all duration-300 hover:rotate-12 hover:scale-110">
                        <img src="{{ asset('images/vk.png') }}" alt="VK" class="h-6 w-6">
                    </a>
                    <a href="https://t.me/nostars007" target="_blank" class="social-icon h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-500 transition-all duration-300 hover:rotate-12 hover:scale-110">
                        <img src="{{ asset('images/telegram.png') }}" alt="Telegram" class="h-6 w-6">
                    </a>
                    <a href="https://instagram.com/your_profile" target="_blank" class="social-icon h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 transition-all duration-300 hover:rotate-12 hover:scale-110">
                        <img src="{{ asset('images/insta.jfif') }}" alt="Instagram" class="h-6 w-6 rounded">
                    </a>
                    <a href="https://github.com/your_profile" target="_blank" class="social-icon h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-gray-700 transition-all duration-300 hover:rotate-12 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Анимированные элементы -->
    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 animate-pulse"></div>
</footer>

<style>
    /* Дополнительные стили для футера */
    .hologram-card {
        position: relative;
        overflow: hidden;
    }
    
    .hologram-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to bottom right,
            rgba(99, 102, 241, 0.1),
            rgba(99, 102, 241, 0.3),
            transparent
        );
        transform: rotate(30deg);
        animation: hologram 6s infinite linear;
        z-index: -1;
    }
    
    @keyframes hologram {
        0% { transform: rotate(30deg) translateX(-30%) translateY(-30%); }
        50% { transform: rotate(30deg) translateX(30%) translateY(30%); }
        100% { transform: rotate(30deg) translateX(-30%) translateY(-30%); }
    }
    
    .transform-card:hover {
        box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.4);
    }
    
    .code-card {
        position: relative;
    }
    
    .code-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: 
            linear-gradient(135deg, transparent 95%, rgba(56, 182, 255, 0.3) 95%),
            linear-gradient(225deg, transparent 95%, rgba(56, 182, 255, 0.3) 95%);
        background-size: 20px 20px;
        opacity: 0.3;
        z-index: -1;
    }
    
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, rgba(99, 102, 241, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(99, 102, 241, 0.1) 1px, transparent 1px);
        background-size: 20px 20px;
    }
    
    .bg-circuit-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    
    .social-icon {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    
    .social-icon:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>