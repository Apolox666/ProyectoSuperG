@extends('layouts.layout')
@section('content')
    <h1 class="text-black text-3xl p-8 font-bold">Registro masivo de equipos</h1>
    <div class="relative overflow-x-auto p-8 mt-10 flex-col">
        <p>Registra grandes cantidades de equipos mediante un archivo de excel</p>
        <ul>
            Haz click <a class="text-green-600 font-bold" download="Formato" href="{{ asset('Libro1.xlsx') }}">aqui</a>
            para descargar el formato
        </ul>
        <form action="">
            <div class=" mt-8 flex justify-center gap-6 items-center">
                <p>La fecha que seleccione sera  la que los equipos que importará tendran el mantenimiento asignado</p>
                <input type="date" name="" id="">
            </div>

            <div class="pt-20">
                <label for="uploadFile1"
                    class="bg-white text-center rounded w-full max-w-[calc(100vw-2rem)] min-h-[300px] py-4 px-4 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 mx-auto font-[sans-serif] m-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mb-6 fill-gray-400" viewBox="0 0 24 24">
                        <path
                            d="M22 13a1 1 0 0 0-1 1v4.213A2.79 2.79 0 0 1 18.213 21H5.787A2.79 2.79 0 0 1 3 18.213V14a1 1 0 0 0-2 0v4.213A4.792 4.792 0 0 0 5.787 23h12.426A4.792 4.792 0 0 0 23 18.213V14a1 1 0 0 0-1-1Z"
                            data-original="#000000" />
                        <path
                            d="M6.707 8.707 11 4.414V17a1 1 0 0 0 2 0V4.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414Z"
                            data-original="#000000" />
                    </svg>
                    <p class="text-gray-400 font-semibold text-sm">Arrastra y suelta o <span class="text-[#007bff]">Escoge
                            un archivo</span> para subir</p>
                    <input type="file" required id='uploadFile1' class="hidden" onchange="displayFileName(this)" />
                    <p id="selectedFileName" class="text-xs text-gray-400 mt-2"></p>
                    <button type="button" id="clearFile" class="hidden text-xs text-red-500 cursor-pointer mt-2"
                        onclick="clearFileSelection()">Eliminar</button>
                </label>

            </div>
            <div class="flex items-center justify-end mt-20">
                <x-cancel-button class="ms-4">
                    {{ __('Cancelar') }}
                </x-cancel-button>
                <x-primary-button class="ms-4">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </form>

        <script>
            function displayFileName(input) {
                var fileName = input.files[0].name;
                document.getElementById('selectedFileName').textContent = fileName;
                document.getElementById('clearFile').style.display = 'inline-block';
            }

            function clearFileSelection() {
                var fileInput = document.getElementById('uploadFile1');
                fileInput.value = ''; // Clear the file input
                document.getElementById('selectedFileName').textContent = '';
                document.getElementById('clearFile').style.display = 'none';
            }
        </script>
    </div>
@stop
