<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetOrder Microservice</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <!-- Header with Login/Register Links -->
    <header class="w-full text-sm mb-6 not-has-[nav]:hidden absolute top-6 right-6">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="flex flex-col items-center justify-center px-6 py-8">
        <!-- PNG Логотип -->
        <div class="mb-8">
            <img src="{{ asset('apple-touch-icon.png') }}" alt="GetOrder Logo" class="w-24 h-24 rounded-full shadow-lg">
        </div>

        <!-- Назва і версія -->
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">GetOrder Microservice</h1>
            <p class="text-lg mt-2 text-gray-700 dark:text-gray-300">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>

        <!-- Інфо блок -->
        <div class="mt-6 text-center max-w-xl text-gray-600 dark:text-gray-400">
            Цей мікросервіс є частиною платформи <strong class="text-black dark:text-white">GetOrder</strong>. Він готовий до використання, налаштування і бою 🚀
        </div>

        <!-- Посилання -->
        <div class="mt-10 grid grid-cols-2 sm:grid-cols-4 gap-6 text-sm text-gray-600 dark:text-gray-400">
            <a href="https://getorder.biz" class="hover:underline hover:text-gray-900 dark:hover:text-white" target="_blank">GetOrder</a>
            <a href="https://orders.getorder.biz" class="hover:underline hover:text-gray-900 dark:hover:text-white" target="_blank">GetOrder UI</a>
            <a href="https://admin.getorder.biz/administrator/index.php" class="hover:underline hover:text-gray-900 dark:hover:text-white" target="_blank">GetOrder Admin</a>
            <a href="https://home.timc.biz" class="hover:underline hover:text-gray-900 dark:hover:text-white" target="_blank">GetOrder GitLab</a>
        </div>

        <!-- Нижній ряд -->
        <div class="mt-12 text-xs text-gray-500 dark:text-gray-400">
            Станом на {{ now()->format('Y-m-d H:i:s') }}
        </div>
    </div>

</body>
</html>
