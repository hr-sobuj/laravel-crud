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

        <form action="{{ route('home') }}" method="GET" class="mt-8">
            <div class="flex items-center justify-center space-x-4">
                <label for="start_date" class="text-black">Start Date:</label>
                <input type="date" name="start_date" id="start_date"
                    class="rounded-md border border-gray-300 px-3 py-2">
                <label for="end_date" class="text-black">End Date:</label>
                <input type="date" name="end_date" id="end_date"
                    class="rounded-md border border-gray-300 px-3 py-2">
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Apply
                    Filters</button>
            </div>
        </form>

        <div class="mt-8">
            @foreach ($posts as $idx => $post)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-black">
                        <span>{{ $idx + 1 }}.</span>
                        <a href="{{ route('show', $post->id) }}"
                            class="hover:text-red-700 dark:hover:text-red-500">{{ $post->title }}</a>
                    </h2>
                    @auth
                        <div class="flex space-x-2">
                            <a href="{{ route('posts.edit', $post->id) }}"
                                class="hover:text-lime-700 text-lime-300 dark:hover:text-lime-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-500 hover:text-red-700 dark:text-red-300 dark:hover:text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
