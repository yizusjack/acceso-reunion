<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Reunion de hoy') }}
            </h2>

            @if (auth()->user()->is_admin == 1)
            <a href="{{ route('reunion.create')}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Crear nueva reunion
                </button>
            </a>
            @endif
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-5">
            @if ($reunion )
                @if ($asistencia)
                    <div class="flex items-center justify-center min-h-screen bg-gray-900">
                        <div class="w-1/3 bg-gray-800 rounded-lg shadow-lg p-6 text-white">
                            Su codigo es 
                            <br>
                            <i>
                                {{ $asistencia->pivot->codigo }}
                            </i>
                        </div>
                    </div>
                @else
                <div class="flex items-center justify-center min-h-screen bg-gray-900">
                    <div class="w-1/3 bg-gray-800 rounded-lg shadow-lg p-6 text-white">
                        <h2 class="text-2xl font-bold mb-4">{{$reunion->nombre}}</h2>
                        <p class="text-gray-300 mb-6">
                            {{$reunion->descripcion}}
                        </p>
                        <a href="{{ route('asignar', ['reunion' => $reunion, 'user' => auth()->user()])}}">
                            <button class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 transition">
                                Asistí
                            </button>
                        </a>
                    </div>
                </div>
                @endif
            @else
                <div>
                    No hay reuniones hoy!!!!
                </div>
            @endif
            
        </div>
    </div>
</x-app-layout>
