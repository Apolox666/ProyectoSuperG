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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
   
</head>

<body>
    <!-- component -->
    <div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
        <!-- Sidebar -->
        <x-sidebar />
        <!-- end Sidebar -->
        <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
            <!-- Nabvar -->
            <x-navbar />
            <!-- end Navbar -->
            <div class="main-content flex flex-col flex-grow p-4">
                @yield('content')

            </div>
            <footer class="footer px-4 py-6">
                <div class="footer-content">
                    <p class="text-sm text-gray-600 text-center">© Brandname 2020. All rights reserved. <a
                            href="https://twitter.com/iaminos">by iAmine</a></p>
                </div>
            </footer>
        </main>
    </div>
   
</body>
</html>
