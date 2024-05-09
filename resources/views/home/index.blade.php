<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <nav class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex space-x-1 justify-center items-center">
                <img src="https://laravel.com/img/logomark.min.svg" alt="Logo" class="h-8">
                <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" class="h-8">
            </a>
            <div class="flex space-x-1">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('posts.index') }}" class="text-black hover:text-gray-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-black hover:text-gray-700">Log in</a>
                        <span>|</span>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-black hover:text-gray-700">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        <form action="{{ route('home') }}" method="GET" class="mt-8">
            <div class="flex items-center space-x-4">
                <label for="start_date" class="text-black">Start Date:</label>
                <input type="date" name="start_date" id="start_date" class="rounded-md border border-gray-300 px-3 py-2">
                <label for="end_date" class="text-black">End Date:</label>
                <input type="date" name="end_date" id="end_date" class="rounded-md border border-gray-300 px-3 py-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Apply Filters</button>
            </div>
        </form>

        <div class="mt-8">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <h2 class="text-xl font-bold text-black">{{ $post->title }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
