<style>
    .active {
        background-color: #f0f0f0;
        /* Cambia el color de fondo como desees */
        color: #000;
        /* Cambia el color del texto como desees */
    }
</style>
<aside
    class=" sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-blue-500">

    <div class="sidebar-header flex items-center justify-center py-4">
        <div class=" justify-center">
            <img src="{{ asset('images/logo-supergiros.png') }}" width="200px">
        </div>
    </div>
    <div class="sidebar-content px-4 py-6 font-bold">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="{{ route('dashboard') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black ">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Projects</span>
            </li>
            <li class="my-px">
                <a href="{{ route('user.index') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg active text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="ml-3">Usuarios</span>
                </a>
            </li>

            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>
                    <span class="ml-3">Actividades</span>
                </a>
            </li>

            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                    <span class="ml-3">Grupos</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>
                    <span class="ml-3">Servicios</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>
                    <span class="ml-3">Productos</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white hover:bg-gray-100 hover:text-black">
                    <span class="flex items-center justify-center text-lg">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="ml-3">Profile</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.sidebar-content a');

        links.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remover la clase 'active' de todos los enlaces
                links.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Agregar la clase 'active' al enlace clickeado
                this.classList.add('active');
            });
        });
    });
</script>
