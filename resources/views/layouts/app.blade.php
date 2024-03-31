<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="favicon.png"> <!-- 32×32 -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-slate-100 text-lg">

    @include('layouts.navigation')

    <main class="min-h-screen mx-auto">
        {{ $slot }}
    </main>

    @include('layouts.footer')
</body>

</html>
