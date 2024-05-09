<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="container mx-auto px-4 py-8">

        <x-navbar :isLoggedIn="auth()->check()" />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="bg-white  p-4 my-4 ">
                        <h3 class="text-lg font-semibold dark:text-black">{{ $post->title }}</h3>
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
