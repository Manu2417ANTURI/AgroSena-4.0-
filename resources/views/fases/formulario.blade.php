@csrf
<div class="block">
<x-jet-label for="nombre" value="{{ __('Nombre')}}"/>
<x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $fase->nombre)" required autofocus />

<div class="flex justify-center">
<div class="p-2">
    <div class="flex justify-end">
    <a href="{{('fases.create')}}">
        <x-jet-button type="submit">
            Guardar
        </x-jet-button>
    </div>
</div>
</div>
</div>