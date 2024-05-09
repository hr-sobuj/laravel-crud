@props(['isLoggedIn'])

<nav class="flex justify-between items-center">
    <a href="{{ route('home') }}" class="flex space-x-2 justify-center items-center">
        <img src="https://laravel.com/img/logomark.min.svg" alt="Logo" class="h-8">
        <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" class="h-8">
    </a>
    <div class="flex space-x-1">
        @if ($isLoggedIn)
            <a href="{{ route('posts.index') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">Register</a>
            @endif
        @endif
    </div>
</nav>
