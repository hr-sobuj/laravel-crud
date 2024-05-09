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

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="bg-white dark:bg-gray-700 p-4 my-4 rounded-md shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</h3>
                        @if ($post->thumbnail)
                            <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                class="my-4 rounded-lg">
                        @endif
                        <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
                        <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">Created at:
                            {{ $post->created_at->format('M d, Y') }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Last updated:
                            {{ $post->updated_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
