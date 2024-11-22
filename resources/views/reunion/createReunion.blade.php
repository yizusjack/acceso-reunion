<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between p-4">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Nueva reunion') }}
                </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-5">
            <form action="{{route('reunion.store')}}" method="POST">
                @csrf
                <div class="pb-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="nombre">
                        Nombre
                    </label>
                      <input id="nombre" name="nombre" class="appearance-none block w-full bg-gray-700 text-black-700 border border-red-500 rounded mb-3 leading-tight" type="text">
                </div>

                <div class="pb-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="descripcion">
                        Descripcion
                    </label>
                      <textarea id="descripcion" name="descripcion" class="appearance-none block w-full bg-gray-700 text-black-700 border border-red-500 rounded mb-3 leading-tight"></textarea>
                </div>

                <div class="pb-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="dia">
                        Fecha
                    </label>
                      <input id="dia" name="dia" class="appearance-none block w-full bg-gray-700 text-black-700 border border-red-500 rounded mb-3 leading-tight" type="date">
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
