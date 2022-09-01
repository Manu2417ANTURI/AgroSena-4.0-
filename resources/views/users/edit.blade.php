<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar rol') }}
        </h2>
    </x-slot>
<div class="card">
    <div class="card-body">

          <p class="h4">Nombre</p>
       <p class="form-control"> {{$user->name}}</p><br>
<h2> Listado de roles</h2>
        
       @foreach ($roles as $role)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="role" id="role">
            <label class="form-check-label" for="role">
                {{$role->name}}
            </label>
          </div>
        
                
         

        @endforeach
</div>
</div>
 
</x-app-layout>