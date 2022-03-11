<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="relative">
    <header class="shadow-lg bg-white mb-6">
        <nav class="w-full max-w-4xl mx-auto py-2 px-4">
            <ul class="flex justify-center items-center space-x-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="block p-2 decoration-blue-400 hover:underline underline-offset-8 {{ Route::is('dashboard') ? 'underline' : '' }}">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('login') }}" class="block p-2 decoration-blue-400 hover:underline underline-offset-8 {{ Route::is('login') ? 'underline' : '' }}">Login</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="block p-2 decoration-blue-400 hover:underline underline-offset-8 {{ Route::is('register') ? 'underline' : '' }}">Register</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="w-full max-w-4xl mx-auto">{{ $slot }}</main>

    @if (session('message'))
        <p
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 2500)"
            x-show="show"
            class="fixed py-3 px-6 text-white bg-blue-400 rounded-l-sm top-20 right-0">
            {{ session('message') }}
        </p>
    @endif

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>