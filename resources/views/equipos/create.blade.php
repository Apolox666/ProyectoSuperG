@extends('layouts.layout')
@section('content')

    <h1 class=" text-black text-3xl p-8 font-bold">Registrar un nuevo equipo</h1>
    <form method="POST" class="p-6" action="{{ route('computer.store') }}">
        @csrf

        <!-- Name -->
        <div class="flex gap-4">
            <div class="w-1/2">
                <x-input-label for="computer_name" :value="__('Nombre del equipo')" />
                <x-text-input id="computer_name" class="block mt-1 w-full {{ $errors->has('computer_name') ? 'border-red-600' : '' }}" type="text" name="computer_name" :value="old('computer_name')" 
                    autofocus autocomplete="computer_name" />
                <x-input-error :messages="$errors->get('computer_name')" class="mt-2" />

            </div>
            <div class="w-1/2">
                <x-input-label for="user" :value="__('Usuario a cargo del equipo')" />
                <x-text-input id="user" class="block mt-1 w-full {{ $errors->has('user') ? 'border-red-600' : '' }}" type="text" name="user" :value="old('user')"
                     autocomplete="user" />
                <x-input-error :messages="$errors->get('user')" class="mt-2" />
            </div>

        </div>

        <div class="flex gap-4 mt-16">
            <div class="w-1/2">
                <x-input-label for="fixed_asset" :value="__('Activo fijo')" />
                <x-text-input id="fixed_asset" class="block mt-1 w-full {{ $errors->has('fixed_asset') ? 'border-red-600' : '' }}" type="number" name="fixed_asset" :value="old('fixed_asset')"
                     autocomplete="fixed_asset" />
                <x-input-error :messages="$errors->get('fixed_asset')" class="mt-2" />
            </div>

            <div class="w-1/2">
                <x-input-label for="serial" :value="__('Numero serial')" />
                <x-text-input id="serial" class="block mt-1 w-full {{ $errors->has('serial') ? 'border-red-600' : '' }}" type="text" name="serial" :value="old('serial')"
                     autocomplete="username" />
                <x-input-error :messages="$errors->get('serial')" class="mt-2" />
            </div>
            <!-- Password -->
            
        </div>

        <div class="flex gap-4 mt-16 mb-16">
            <div class="w-1/2">
                <x-input-label for="process" :value="__('Proceso')" />
                <select name="process" id="process" class="border-gray-300 w-full focus:border-principal focus:ring-indigo-500 rounded-md shadow-sm {{ $errors->has('process') ? 'border-red-600' : '' }}">
                    <option value="1">Seleccione el proceso al cual pertenece el equipo</option>
                    <option value="2">Juridico</option>
                    <option value="3">Comercial</option>
                    <option value="4">TI</option>
                    <option value="5">Recursos Humanos</option>
                </select>
                <x-input-error :messages="$errors->get('process')" class="mt-2" />
            </div>
            <div class="w-1/2">
                <x-input-label for="maintenance_date" :value="__('Fecha de mantenimiento')" />
                <input class="border-gray-300 w-full focus:border-principal focus:ring-indigo-500 rounded-md shadow-sm  {{ $errors->has('maintenance_date') ? 'border-red-600' : '' }}" name="maintenance_date" type="date">
                <x-input-error :messages="$errors->get('maintenance_date')" class="mt-2" />
            </div>
        </div>

        

        <!-- Confirm Password -->

        <div class="flex items-center justify-end mt-4">
            <x-cancel-button class="ms-4">
                {{ __('Cancelar') }}
            </x-cancel-button>
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>

@stop
