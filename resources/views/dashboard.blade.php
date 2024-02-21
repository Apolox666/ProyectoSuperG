@extends('layouts.layout')
@section('content')
   
        <div class="px-6 py-8">
            <div class=" max-w-7xl mx-auto shadow-lg">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-10">Bienvenid@ {{auth()->user()->name}} =)</h1>
                    <hr class="my-10">

                    <div class="grid grid-cols-2 gap-x-20">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Resumen</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <div class="p-4 bg-green-100 rounded-xl">
                                        <div class="font-bold text-xl text-gray-800 leading-none">Listado de computadores
                                        </div>
                                        <div class="mt-5">
                                            <button type="button"
                                                class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                Revisar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">20</div>
                                    <div class="mt-2">Mantenimientos asignados</div>
                                </div>
                                <div class="p-4 bg-blue-200 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">5,5</div>
                                    <div class="mt-2">Mantenimientos ejecutados</div>
                                </div>
                                <div class="col-span-2">
                                    <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                        <div class="font-bold text-xl leading-none">Mantenimientos atrasados ☹️</div>
                                        <div class="mt-2">0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Your tasks today</h2>
                            <div class="space-y-4">
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Number 10</div>
                                        <div class="text-gray-400 text-xs">4h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Blog and social posts</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>Deadline is today
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Grace Aroma</div>
                                        <div class="text-gray-400 text-xs">7d</div>
                                    </div>
                                    <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">New
                                        campaign review</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>New feedback
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Petz App</div>
                                        <div class="text-gray-400 text-xs">2h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and browser
                                        QA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
@stop
