<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 dark:text-white">

    <x-navbar :isLoggedIn="auth()->check()" />

    <div class="container mx-auto px-4 py-8">

        @if($showFilter ?? false)
            <x-filter action="{{ route('home') }}" />
        @endif

        <div class="mt-8">
            @yield('content')
        </div>

    </div>
</body>

</html>
