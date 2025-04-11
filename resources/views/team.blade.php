<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наша команда - Сказания Херсонеса</title>
    
    <!-- Подключаем Tailwind CSS с дополнительными настройками -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif']
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Подключаем шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Подключаем Heroicons -->
    <script src="https://unpkg.com/@heroicons/react@2.0.16/dist/index.js"></script>
    
    <!-- Подключаем Headless UI -->
    <script src="https://unpkg.com/@headlessui/react@latest/dist/index.js"></script>
    
    <style>
        /* Кастомные стили */
        .team-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(145deg, #1f2937, #111827);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .glow-effect {
            position: relative;
            overflow: hidden;
        }
        
        .glow-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.2), transparent);
            transition: 0.5s;
        }
        
        .glow-effect:hover::before {
            left: 100%;
        }
        
        .skill-badge {
            transition: all 0.3s ease;
        }
        
        .skill-badge:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.5);
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }
        
        .tab-content {
            animation: fadeIn 0.5s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-inter min-h-screen">
    <div id="wrapper" class="flex flex-col min-h-screen">
        @include('hader')

        <!-- Hero Section -->
        <section class="relative py-20 overflow-hidden bg-gradient-to-br from-indigo-900/30 to-gray-900">
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-12 lg:mb-0">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 font-poppins">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Наша команда</span>
                        </h1>
                        <p class="text-xl text-gray-300 mb-8 max-w-lg">
                            Познакомьтесь с талантливыми профессионалами, которые делают обучение увлекательным и эффективным
                        </p>
                        <div class="flex space-x-4">
                            <a href="#team" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition-colors shadow-lg hover:shadow-xl flex items-center">
                                <span>Наша команда</span>
                                <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#join" class="px-6 py-3 border-2 border-indigo-600 text-indigo-400 hover:bg-indigo-900/30 rounded-lg font-medium transition-colors flex items-center">
                                <span>Присоединиться</span>
                                <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/4775/4775472.png" alt="Team Illustration" class="w-full max-w-md animate-float">
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="py-16 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-poppins">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Наши эксперты</span>
                    </h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        Профессионалы с реальным опытом, которые помогут вам освоить новые навыки
                    </p>
                </div>

                <!-- Tabs Navigation -->
                <div class="flex justify-center mb-12">
                    <div class="inline-flex rounded-lg bg-gray-800 p-1">
                        <button data-tab="all" class="tab-btn px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 active">Все</button>
                        <button data-tab="developers" class="tab-btn px-4 py-2 rounded-md text-sm font-medium transition-all duration-300">Разработчики</button>
                        <button data-tab="designers" class="tab-btn px-4 py-2 rounded-md text-sm font-medium transition-all duration-300">Дизайнеры</button>
                        <button data-tab="managers" class="tab-btn px-4 py-2 rounded-md text-sm font-medium transition-all duration-300">Менеджеры</button>
                    </div>
                </div>

                <!-- Team Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Member 1 -->
                    <div class="team-card rounded-xl overflow-hidden transition-all duration-300 hover:shadow-indigo-500/20" data-category="developers">
                        <div class="relative h-64 bg-gradient-to-br from-indigo-900/50 to-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/member1.jfif') }}" alt="Иван Живоглядов" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-600 text-white">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>
                                    Разработчик
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-1">Иван Живоглядов</h3>
                            <p class="text-indigo-400 mb-4">Руководитель проекта</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">JavaScript</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">React</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Node.js</span>
                            </div>
                            
                            <p class="text-gray-400 text-sm mb-4">Специалист с 10-летним опытом в веб-разработке и обучении. Создаёт курсы, которые делают сложное простым.</p>
                            
                            <div class="flex space-x-3">
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="team-card rounded-xl overflow-hidden transition-all duration-300 hover:shadow-purple-500/20" data-category="designers">
                        <div class="relative h-64 bg-gradient-to-br from-purple-900/50 to-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/member2.jpg') }}" alt="Евгений Белоконов" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-600 text-white">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                    Дизайнер
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-1">Евгений Белоконов</h3>
                            <p class="text-purple-400 mb-4">UI/UX Дизайнер</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Figma</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Photoshop</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Illustrator</span>
                            </div>
                            
                            <p class="text-gray-400 text-sm mb-4">Создаёт интуитивно понятные и эстетичные интерфейсы. Превращает сложные системы в простые и удобные продукты.</p>
                            
                            <div class="flex space-x-3">
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:text-white hover:bg-purple-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:text-white hover:bg-purple-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-purple-400 hover:text-white hover:bg-purple-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="team-card rounded-xl overflow-hidden transition-all duration-300 hover:shadow-blue-500/20" data-category="developers">
                        <div class="relative h-64 bg-gradient-to-br from-blue-900/50 to-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/member3.jpg') }}" alt="Богдан Демченко" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-600 text-white">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>
                                    Разработчик
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-1">Богдан Демченко</h3>
                            <p class="text-blue-400 mb-4">Full-stack разработчик</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Python</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Django</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">PostgreSQL</span>
                            </div>
                            
                            <p class="text-gray-400 text-sm mb-4">Специализируется на создании высоконагруженных систем. Учит студентов думать как инженеры, а не как кодеры.</p>
                            
                            <div class="flex space-x-3">
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-blue-400 hover:text-white hover:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-blue-400 hover:text-white hover:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-blue-400 hover:text-white hover:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="team-card rounded-xl overflow-hidden transition-all duration-300 hover:shadow-pink-500/20" data-category="managers">
                        <div class="relative h-64 bg-gradient-to-br from-pink-900/50 to-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/member4.jpg') }}" alt="Анна Светлова" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-pink-600 text-white">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                    </svg>
                                    Менеджер
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-1">Анна Светлова</h3>
                            <p class="text-pink-400 mb-4">Менеджер проектов</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Scrum</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Agile</span>
                                <span class="skill-badge px-2 py-1 bg-gray-800 text-xs rounded-full text-gray-300">Kanban</span>
                            </div>
                            
                            <p class="text-gray-400 text-sm mb-4">Организует рабочие процессы так, чтобы команда могла сосредоточиться на качестве продукта.</p>
                            
                            <div class="flex space-x-3">
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-pink-400 hover:text-white hover:bg-pink-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-pink-400 hover:text-white hover:bg-pink-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="social-icon w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-pink-400 hover:text-white hover:bg-pink-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Join Section -->
        <section id="join" class="py-16 bg-gradient-to-br from-indigo-900/30 to-gray-900">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-2xl overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <h2 class="text-3xl font-bold text-white mb-4 font-poppins">
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Присоединяйтесь к нам</span>
                            </h2>
                            <p class="text-gray-300 mb-6">
                                Мы всегда рады талантливым людям, которые хотят изменить мир образования. Отправьте нам своё резюме и расскажите, почему вы хотите работать с нами.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-400 mt-1 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="text-gray-300">Гибкий график и удалённая работа</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-400 mt-1 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="text-gray-300">Интересные проекты и профессиональный рост</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-400 mt-1 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="text-gray-300">Дружелюбная команда и поддержка</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/2 bg-gray-700/30 p-8 md:p-12">
                            <form class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Ваше имя</label>
                                    <input type="text" id="name" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white placeholder-gray-500 transition-all duration-300" placeholder="Иван Иванов">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                                    <input type="email" id="email" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white placeholder-gray-500 transition-all duration-300" placeholder="your@email.com">
                                </div>
                                <div>
                                    <label for="position" class="block text-sm font-medium text-gray-300 mb-1">Позиция</label>
                                    <select id="position" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white transition-all duration-300">
                                        <option>Выберите позицию</option>
                                        <option>Разработчик</option>
                                        <option>Дизайнер</option>
                                        <option>Менеджер проектов</option>
                                        <option>Контент-менеджер</option>
                                        <option>Другое</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Сообщение</label>
                                    <textarea id="message" rows="4" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white placeholder-gray-500 transition-all duration-300" placeholder="Расскажите о себе и почему вы хотите присоединиться к нам"></textarea>
                                </div>
                                <div>
                                    <label for="resume" class="block text-sm font-medium text-gray-300 mb-1">Резюме</label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700 border-dashed rounded-lg">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-400">
                                                <label for="file-upload" class="relative cursor-pointer bg-gray-800 rounded-md font-medium text-indigo-400 hover:text-indigo-300 focus-within:outline-none">
                                                    <span>Загрузить файл</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">или перетащите сюда</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PDF, DOC, DOCX до 10MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                        <span>Отправить заявку</span>
                                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-gray-800">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="p-6 bg-gray-900/50 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl font-bold text-indigo-400 mb-2">10+</div>
                        <div class="text-gray-400">Лет опыта</div>
                    </div>
                    <div class="p-6 bg-gray-900/50 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl font-bold text-indigo-400 mb-2">50+</div>
                        <div class="text-gray-400">Проектов</div>
                    </div>
                    <div class="p-6 bg-gray-900/50 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl font-bold text-indigo-400 mb-2">1000+</div>
                        <div class="text-gray-400">Студентов</div>
                    </div>
                    <div class="p-6 bg-gray-900/50 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl font-bold text-indigo-400 mb-2">24/7</div>
                        <div class="text-gray-400">Поддержка</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Plans Section -->
        <section class="py-16 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-poppins">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Наши планы</span>
                    </h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        Мы постоянно развиваемся и работаем над новыми проектами
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-800/50 backdrop-blur-sm rounded-xl p-8 border border-gray-700 hover:border-indigo-500 transition-all duration-300">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 bg-indigo-900/30 rounded-full flex items-center justify-center text-indigo-400">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 text-center">Новые курсы</h3>
                        <p class="text-gray-400 text-center mb-6">Разработка образовательных программ по самым востребованным направлениям</p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-indigo-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Blockchain разработка</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-indigo-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>AI и машинное обучение</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-indigo-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Кибербезопасность</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-800/50 backdrop-blur-sm rounded-xl p-8 border border-gray-700 hover:border-purple-500 transition-all duration-300">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 bg-purple-900/30 rounded-full flex items-center justify-center text-purple-400">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 text-center">Платформа</h3>
                        <p class="text-gray-400 text-center mb-6">Совершенствование образовательной платформы для лучшего опыта обучения</p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-purple-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Интерактивные задания</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-purple-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Система геймификации</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-purple-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Персональные рекомендации</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-800/50 backdrop-blur-sm rounded-xl p-8 border border-gray-700 hover:border-blue-500 transition-all duration-300">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 bg-blue-900/30 rounded-full flex items-center justify-center text-blue-400">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 text-center">Сообщество</h3>
                        <p class="text-gray-400 text-center mb-6">Развитие профессионального сообщества выпускников и партнёров</p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-blue-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Мероприятия и хакатоны</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-blue-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Программа наставничества</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-blue-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Партнёрства с компаниями</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </div>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab-btn');
        const teamMembers = document.querySelectorAll('.team-card');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active', 'bg-indigo-900/50', 'text-white'));
                
                // Add active class to clicked tab
                tab.classList.add('active', 'bg-indigo-900/50', 'text-white');
                
                // Get filter value
                const filter = tab.dataset.tab;
                
                // Filter team members
                teamMembers.forEach(member => {
                    if (filter === 'all' || member.dataset.category === filter) {
                        member.style.display = 'block';
                    } else {
                        member.style.display = 'none';
                    }
                });
            });
        });
        
        // Initialize first tab as active
        tabs[0].classList.add('active', 'bg-indigo-900/50', 'text-white');
        
        // Glow effect on hover
        const glowElements = document.querySelectorAll('.glow-effect');
        glowElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                element.classList.add('relative', 'overflow-hidden');
                const glow = document.createElement('div');
                glow.className = 'absolute inset-0 bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent opacity-0';
                glow.style.transform = 'translateX(-100%)';
                element.appendChild(glow);
                
                setTimeout(() => {
                    glow.style.transform = 'translateX(100%)';
                    glow.style.opacity = '1';
                    glow.style.transition = 'all 0.7s ease-in-out';
                }, 10);
                
                glow.addEventListener('transitionend', () => {
                    if (glow.parentNode) {
                        glow.parentNode.removeChild(glow);
                    }
                });
            });
        });
        
        // Animate elements when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        document.querySelectorAll('.team-card, .stats-item, .plan-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>