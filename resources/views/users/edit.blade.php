<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar rol') }}
        </h2>
    </x-slot>

    <div class="card-body">
          <p class="h4">Nombre</p>
       <p class="form-control"> {{$user->name}}</p>
<div></div>
 
</x-app-layout>