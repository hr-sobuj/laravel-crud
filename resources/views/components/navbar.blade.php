@props(['isLoggedIn'])

<header class="bg-white dark:bg-gray-900 border-b dark:border-gray-800">
    <nav class="flex justify-between items-center container mx-auto px-4 py-6">
        <a href="{{ route('home') }}" class="flex space-x-2 justify-center items-center">
            <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" class="h-8">
        </a>
        <div class="flex space-x-1">
            @if ($isLoggedIn)
                <a href="{{ route('posts.index') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded dark:bg-teal-800 dark:hover:bg-teal-700">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded dark:bg-lime-800 dark:hover:bg-lime-700">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded dark:bg-indigo-800 dark:hover:bg-indigo-700">Register</a>
                @endif
            @endif
        </div>
    </nav>
</header>
