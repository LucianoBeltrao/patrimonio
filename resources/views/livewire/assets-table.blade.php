<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


            <div class="flex items-right justify-end py-2">

                <input wire:model.live.debounce.150ms="search" type="text" class="flex items-left justify-start py-2 block font-medium  text-sm px-28 py-2.5 text-center me-2 mb-2 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Buscar Ativo" required />

                <a href="{{ route('assetform') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Inserir Ativo </a>

            </div>

            <table class="w-full border-collapse table-sm">
                <thead>
                    <tr class="bg-primary-500">
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Registro</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Nome</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Descrição</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Categoria</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Valor</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Alterar</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                    @foreach ($assets as $asset)
                        <tr class="border-b border-primary-500">
                            <td class="px-4 py-4 ">{{ $asset->record }}</td>
                            <td class="px-4 py-4 ">{{ $asset->name }}</td>
                            <td class="px-4 py-4 ">{{ $asset->description }}</td>
                            <td class="px-4 py-4 ">{{ $asset->category->name }}</td>
                            <td class="px-4 py-4 ">{{ $asset->price }}</td>
                            <td class="px-4 py-4 "> <a href="{{ route('editasset', $asset->id) }}"
                                class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"> Editar</a>
                            <td class="px-4 py-4 "> <button wire:click="delete({{ $asset->id }})"
                                class="text-white p-4 cursor-pointer text-center"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                  </svg>
                                  </button> </td>
                        </tr>
                    @endforeach
                    </div>
                </tbody>
            </table>
            {{ $assets->links() }}
          
        </div>
    </div>
    
</div>


