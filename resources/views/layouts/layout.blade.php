<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->

</head>

<body class="flex flex-col min-h-screen bg-neutral-300">
    <div class="flex-1 flex">
        <aside class="w-64 bg-white">
            <x-sidebar />
        </aside>

        <main class="flex-1 flex flex-col">
           <x-navbar />

            <div class="flex-1 overflow-y-auto p-4">
                <div class="bg-neutral-100 shadow-xl rounded-3xl p-6 h-full">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>