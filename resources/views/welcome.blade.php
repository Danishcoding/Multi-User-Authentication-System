<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UserHub – Multi-User Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-900 font-sans">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-10 top-0 left-0">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 tracking-wide">
                <span class="block">UserHub</span>
                <span class="block text-lg text-gray-600 dark:text-gray-300 font-medium mt-1">
                    Multi-User Management System
                </span>
            </h1>

            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
        class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="text-center px-6">
            <h1 class="text-5xl md:text-6xl font-bold">Welcome to <span class="text-yellow-300">UserHub</span></h1>
            <p class="mt-4 text-lg text-gray-200">Your secure and powerful Multi-User Management System.</p>

            <div class="mt-6 space-x-3">
                <a href="{{ route('login') }}"
                    class="px-6 py-3 bg-white text-indigo-700 rounded-full font-semibold hover:bg-gray-100">User
                    Login</a>
                <a href="{{ route('admin.login') }}"
                    class="px-6 py-3 bg-yellow-400 text-gray-900 rounded-full font-semibold hover:bg-yellow-300">Admin
                    Login</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center py-4">
        <p>&copy; {{ date('Y') }} UserHub – Multi-User Management System. All rights reserved.</p>
    </footer>

</body>

</html>
