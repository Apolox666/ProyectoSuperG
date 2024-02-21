<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->

    <title>Mantenimientos</title>
</head>

<body class=" flex flex-col min-h-screen bg-neutral-100">

    <header class="shadow-md bg-gray-800">
        <nav class="h-20  contenido  flex items-center justify-between">
            <a href="" class=" w-3/4 max-w-[190px]">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-full">
            </a>
            <ul class="flex gap-8 font-bold">
                <li>
                    <a href="" class="text-white">Inicio</a>
                </li>

                <li>
                    <a href="" class="text-white">Contacto</a>
                </li>
                @if (Route::has('login'))
             
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <li>
                        <a href="{{route('login')}}" class="button">Login</a>
                    </li>
                       
                    @endauth
            
                @endif

            </ul>
        </nav>
    </header>
    <main>
        <div class=" pt-32 flex container mx-auto">
            <div class=" w-2/4 h-96">
                <h1 class=" text-6xl text-teal-500 font-bold ">La herramienta de TI <br>para el agendamiento y control de
                    mantenimientos</h1>
                <p class=" text-3xl pt-9 font-bold">Tecsave provee un completo panel de control que facilita el agendamiento
                    de los mantenimientos
                    para los equipos activos de Supergiros
                </p>
    
            </div>
            <div class=" w-2/4 justify-center flex ">
                <img src="{{ asset('images/img.webp') }}" width="500px">
            </div>
        </div>
    </main>
    <footer class="mt-auto">
        <div class="bg-gray-800 py-4 text-gray-100">
            <div class="container mx-auto px-4">
                <div class="-mx-4 flex flex-wrap justify-between">
                    <div class="px-4 w-full text-center sm:w-auto sm:text-left font-bold text-white">
                        Copyright © 2020
                        <script>
                            new Date().getFullYear() > 2020 && document.write("- " + new Date().getFullYear())
                        </script>- 2024
                        Tecsave. Todos los derechos reservados.
                    </div>
                    <div class="px-4 w-full text-center text-principal sm:w-auto sm:text-left">
                        Made with ❤️ by Tailwindow.
                    </div>
                </div>
            </div>
        </div>

    </footer>


</body>

</html>
