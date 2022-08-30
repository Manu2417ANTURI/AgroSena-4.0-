<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Costo Adicional') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="precio" value="{{ __('Precio')}}" />
                    <x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $costo->precio)" required autofocus />
                    <x-jet-label for="descripcion" value="{{ __('Descripcion')}}" />
                    <x-jet-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion', $costo->descripcion)" required autofocus />
                    <div class="flex justify-center">
                        <div class="p-2">
                            <div class="flex justify-end">
                                <a href="{{route('costos.index')}}">
                                    <x-jet-button>
                                        Volver
                                    </x-jet-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>