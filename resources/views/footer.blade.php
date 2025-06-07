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
                        <a href="{{ route('mission') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
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
<div class="border-t border-purple-900 pt-8">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start">
                <div class="h-10 w-10 bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400 font-russo">VR-КМБ</span>
            </div>
            <p class="text-sm text-purple-300 mt-2">&copy; 2025 Все права защищены. Курс молодого VR-бойца</p>
        </div>

        <div class="flex space-x-4">
            <!-- ВКонтакте -->
            <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.073 2H8.938C3.332 2 2 3.333 2 8.927v6.136C2 20.667 3.323 22 8.927 22h6.136C20.667 22 22 20.677 22 15.073V8.938C22 3.332 20.677 2 15.073 2zm3.073 14.27h-1.459c-.552 0-.718-.447-1.708-1.437-.864-.833-1.229-.937-1.448-.937-.302 0-.385.083-.385.5v1.312c0 .354-.115.563-1.042.563-1.51 0-3.19-.921-4.375-2.625-1.583-2.354-1.563-2.667-.021-4.583.938-1.166 2.104-2.333 2.104-1.604 0 .271-.271.333-.458.521-.24.24-.688.667-.99 1.021-.833.938-1.146 1.521-1.708 2.666-.188.406-.021.646.313.646h1.458c.406 0 .563-.083.708-.271.26-.344.552-.854.76-1.146.188-.292.375-.521.604-.521.5 0 .604.313.604.792v1.896c-.021.823-.24 1.021-.917 1.145-.188.042-.333.063-.5.063-.375 0-.5-.083-.5-.271V12.5c0-.521-.094-.625-.209-.729-.115-.104-.27-.125-.458-.125-.333 0-.667.167-.833.333l-.021.021c-.292.333-.792 1.021-.792 1.021s-.26.406-.74.406h-1.48c-.292 0-.438-.26-.313-.542.24-.542.771-1.375 1.23-1.896l1.23-1.292c.458-.458.656-.708 1.021-1.146.313-.375.708-.854 1.229-1.229.385-.281.781-.458 1.188-.458h1.834c.333 0 .417.135.417.448v1.823c0 .333-.135.448-.417.615-.24.146-.5.323-.729.521-.24.208-.448.417-.656.667-.188.229-.281.333-.24.521.042.188.271.271.563.271h1.292c1.333 0 1.792-.729 1.854-1.646v-.667c0-.385.115-.5.542-.5h1.459c.313 0 .417.135.417.417v1.729c-.01.49-.115.782-.865 1.521-.76.76-1.021 1.021-1.521 1.667-.24.313-.385.552-.302.813.083.26.417.26.792.26z"/>
                </svg>
            </a>

            <!-- Телеграм -->
            <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center hover:shadow-lg hover:shadow-blue-400/30 transition-all duration-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.03-.1.06-.2-.06-.3-.12-.1-.3-.02-.43.02-.18.06-3.1 1.97-4.38 2.83-.42.28-.8.42-1.15.41-.38-.01-1.11-.21-1.65-.39-.67-.22-1.2-.34-1.16-.72.02-.18.27-.36.74-.55 2.92-1.27 4.86-2.11 7.36-3.45.83-.44 1.66-.67 2.08-.62.48.05 1.4.32 1.24 1.88z"/>
                </svg>
            </a>

            <!-- Одноклассники -->
            <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 1.811c4.533 0 8.189 3.656 8.189 8.189 0 4.533-3.656 8.189-8.189 8.189-4.533 0-8.189-3.656-8.189-8.189 0-4.533 3.656-8.189 8.189-8.189zm-3.681 5.205c-.338 0-.612.274-.612.612v3.744c0 .338.274.612.612.612h1.557v1.557c0 .338.274.612.612.612h3.024c.338 0 .612-.274.612-.612v-1.557h1.557c.338 0 .612-.274.612-.612V9.628c0-.338-.274-.612-.612-.612h-1.557V7.459c0-.338-.274-.612-.612-.612H9.488c-.338 0-.612.274-.612.612v1.557H7.319zm.612 1.224h1.557c.338 0 .612.274.612.612v3.024c0 .338-.274.612-.612.612H7.931v-4.248zm5.138 0h1.557v4.248h-1.557c-.338 0-.612-.274-.612-.612V9.851c0-.338.274-.612.612-.612z"/>
                </svg>
            </a>

            <!-- Яндекс.Дзен -->
            <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center hover:shadow-lg hover:shadow-red-500/30 transition-all duration-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                </svg>
            </a>

            <!-- RuTube -->
            <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-purple-600 to-red-600 flex items-center justify-center hover:shadow-lg hover:shadow-purple-500/30 transition-all duration-300 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20.42 4.5H3.58c-.92 0-1.67.75-1.67 1.67v11.66c0 .92.75 1.67 1.67 1.67h16.84c.92 0 1.67-.75 1.67-1.67V6.17c0-.92-.75-1.67-1.67-1.67zm-1.74 7.08l-5.01 2.21c-.44.19-.95-.04-1.14-.48v-.01c-.07-.16-.1-.34-.1-.52V9.62c0-.57.46-1.03 1.03-1.03.18 0 .36.05.52.14l5.01 3.22c.42.27.54.82.27 1.24-.13.2-.33.33-.55.37z"/>
                </svg>
            </a>
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