<x-app-layout>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <br>
            <div class=" bg-white overflow-hidden  shadow-xl sm:rounded-lg">
              <nav class="navbar bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand  text-green-600 ">Lista de Fases</a>
                      
                    </div>
                  </nav>
            </div>
            <br>
            <div class="p-2">
                <div class="flex justify-end">
                    <a href="{{ route('fases.create') }}">
                        <x-jet-button>Crear</x-jet-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-green-600 px-6 py-4 text-left">
                                               <b></b> Nombre</b>
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-green-600 px-6 py-4 text-left">
                                                <b>Acciones</b>
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fases as $fase)
                                        <tr class="border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $fase->nombre }}
                                            </td>

                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('fases.show', $fase) }}">
                                                    <x-jet-button>Ver</x-jet-button>
                                                </a>
                                                <a href="{{ route('fases.edit', $fase) }}">
                                                    <x-jet-button>Editar</x-jet-button>
                                                </a>
                                                <form action="{{route('fases.destroy', $fase)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="inline-block px-4 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out " type="submit">
                                                        Eliminar
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<br>
<x-footer/>