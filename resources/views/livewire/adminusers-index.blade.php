<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class=" bg-white overflow-hidden  shadow-xl sm:rounded-lg">
        <input wire:model="search" class="form-control" placeholder="🔎Ingrese el nombre, correo, o id de un usuario">
    </div><br><br>
@if($users->count())
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table class="min-w-full">
            <thead class="border-b">
            <tr>
                <th scope="col"
                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Id
                </th>
                <th scope="col"
                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Nombre
                </th>
                <th scope="col"
                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Email
                </th>
                
            </tr>
        </thead>
        <tbody>
         @foreach ($users as $user)
         <tr>
            <td
            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$user->id}} </td>
            <td
            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$user->name}}</td>
            <td
            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$user->email}}</td>

            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               
                <a href="{{ route('users.edit', $user) }}">
                    <x-jet-button>Editar</x-jet-button>
                </a>
               
            </td>
         </tr>
         @endforeach

        </tbody>
    </table>
    {{$users->links()}}
   @else
   <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
       <strong> No hay registros </strong>
   </div>

    @endif
</div>

</div>
