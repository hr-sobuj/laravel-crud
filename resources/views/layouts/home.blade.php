<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://laravel.com/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">
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
