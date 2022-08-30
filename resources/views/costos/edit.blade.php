<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Costo Adicional') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <form action="{{route('costos.update', $costo)}}" method="post">
                        @method('PUT')
                        @include('costos.formulario')
                    </form>
                </div>
            </div>
        </div>    
    </div>
</x-app-layout>