<aside class="flex h-screen fixed">
    <div class="p-6 bg-gray-800 shadow-lg h-full md:w-64 md:flex-shrink-0">
        <a href="{{ route('dashboard') }}">
            <img class=" mx-auto pb-6" src="{{ asset('images/logo.png') }}" width="160px" alt="">
        </a>

       
        <ul class="mt-10">
            <h6 class=" text-principal text-xl font-bold p-4 ">Utilidades</h6>
            <a href="{{ route('user.index') }}">
                <li class=" p-6  font-bold text-white items-center flex gap-4 hover:bg-gray-700 rounded-lg">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 14 18">
                        <path
                            d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <p>Usuarios</p>
                </li>
            </a>
            <a href="{{route('computer.index')}}">
                <li class="p-6 mt-2 font-bold text-white items-center flex gap-4 hover:bg-gray-700 rounded-lg">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14v4m-4 1h8M1 10h18M2 1h16a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                    </svg>
                    <p>Equipos</p>
                </li>
            </a>
            <a href="">
                <li class=" p-6 mt-2 font-bold text-white items-center flex gap-4 hover:bg-gray-700 rounded-lg">
                    <svg class="w-6 h-6 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                    </svg>
                    <p>Calendario</p>
                </li>
            </a>
        </ul>
        
        <ul class="mt-6">
            <h6 class=" text-principal text-xl font-bold p-4">Herramientas</h6>
            <a href="">
                <li class=" p-6 mt-2 font-bold  text-white items-center flex gap-4 hover:bg-gray-700 rounded-lg ">
                    <img src="{{ asset('img/icons/soporte.png') }}" width="30px" alt="">
                    <p>Soporte</p>
                </li>
            </a>
            <a href="">
                <li class="p-6 mt-2 font-bold text-white items-center flex gap-4 hover:bg-gray-700 rounded-lg">
                    <img src="{{ asset('img/icons/configuracion.png') }}" width="30px" alt="">
                    <p>Configuracion</p>
                </li>
            </a>
        </ul>
      

           
            
       


        
    </div>
    <div>

    </div>
</aside>
