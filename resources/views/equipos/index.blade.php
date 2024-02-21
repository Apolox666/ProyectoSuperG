@extends('layouts.layout')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <h1 class=" text-black text-3xl p-8 font-bold">Equipos registrados en el sistema</h1>
    <div class="relative overflow-x-auto p-8 mt-10">
        <div class="flex gap-8  items-center">
            <a href="{{ route('computer.create') }}"
                class="flex  bg-green-500  gap-2 hover:bg-green-400 shadow-md text-white font-bold p-4 mb-8 rounded-md items-center">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <path id="Vector"
                        d="M3 9V19.4C3 19.9601 3 20.2399 3.10899 20.4538C3.20487 20.642 3.35774 20.7952 3.5459 20.8911C3.7596 21 4.0395 21 4.59846 21H15.0001M14 13V10M14 10V7M14 10H11M14 10H17M7 13.8002V6.2002C7 5.08009 7 4.51962 7.21799 4.0918C7.40973 3.71547 7.71547 3.40973 8.0918 3.21799C8.51962 3 9.08009 3 10.2002 3H17.8002C18.9203 3 19.4801 3 19.9079 3.21799C20.2842 3.40973 20.5905 3.71547 20.7822 4.0918C21.0002 4.51962 21.0002 5.07969 21.0002 6.19978L21.0002 13.7998C21.0002 14.9199 21.0002 15.48 20.7822 15.9078C20.5905 16.2841 20.2842 16.5905 19.9079 16.7822C19.4805 17 18.9215 17 17.8036 17H10.1969C9.07899 17 8.5192 17 8.0918 16.7822C7.71547 16.5905 7.40973 16.2842 7.21799 15.9079C7 15.4801 7 14.9203 7 13.8002Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <p> Registrar equipo </p>
            </a>

            <a href="{{ route('computer.create') }}"
                class="flex  bg-red-500  gap-2 hover:bg-red-400 shadow-md   text-white font-bold p-4 mb-8 rounded-md items-center">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                </svg>

                <p> Eliminar todos </p>
            </a>
            <a href="{{ route('computer.import') }}"
                class="flex bg-blue-500 gap-2 hover:bg-blue-400 shadow-md text-white font-bold p-4 mb-8 rounded-md items-center">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" fill="#ffffff" viewBox="0 0 1920 1920"
                    xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="m807.186 686.592 272.864 272.864H0v112.94h1080.05l-272.864 272.978 79.736 79.849 409.296-409.183-409.296-409.184-79.736 79.736ZM1870.419 434.69l-329.221-329.11C1509.688 74.07 1465.979 56 1421.48 56H451.773v730.612h112.94V168.941h790.584v451.762h451.762v1129.405H564.714v-508.233h-112.94v621.173H1920V554.52c0-45.176-17.619-87.754-49.58-119.83Zm-402.181-242.37 315.443 315.442h-315.443V192.319Z"
                        fill-rule="evenodd"></path>

                </svg>
                <p>Importar listado de equipos</p>
            </a>



        </div>

        <table class="w-full text-sm text-left text-white rounded-xl">
            <thead class="text-xs text-white uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Activo fijo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Serial
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Proceso
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado de mantenimiento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de mantenimiento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>

                </tr>
            </thead>
            @foreach ($computer as $computer)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 computer-row">

                     
                    
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$computer->name}}
                        </td>
                            
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->user}}
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->fixed_asset}}
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->serial}}
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->process}}
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->state}}
                        </td>
                        <td class="px-6 py-4">
                            {{$computer->maintenance_date}}
                        </td>
                        <td class="px-6 py-4  flex gap-4">
                            <a href="" class=" px-4 p-2 bg-blue-500 flex  gap-2 rounded-md hover:bg-blue-400">
                                <svg class="w-[16px] h-[16px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                                    <path
                                        d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                                </svg>
                                Editar
                            </a>
                            <button class="px-4 p-2 bg-red-500 flex gap-2 rounded-md hover:bg-red-400 eliminar"
                                href="#" data-id="{{ $computer->id }}">
                                <svg class="w-[16px] h-[16px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                </svg>
                                Eliminar
                            </button>

                        </td>
                    
                    </tr>
                </tbody>
            @endforeach
        </table>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $('.eliminar').click(function() {
            var id = $(this).data('id'); // Obtener el valor del atributo data-id
            Swal.fire({
                title: '¿Estás seguro de borrar este usuario?',
                text: "Recuerda que esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ route('computer.destroy', ':id') }}".replace(':id', id),
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(respuesta) {
                            Swal.fire(
                                'Éxito',
                                'Cambios efectuados correctamente',
                                'success'
                            );
                            // Eliminar el elemento eliminado de la interfaz
                            $(`.eliminar[data-id=${id}]`).closest('.computer-row').remove();
                        },
                        error: function(respuesta) {
                            Swal.fire(
                                'Error',
                                'Error desconocido',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>
@stop
