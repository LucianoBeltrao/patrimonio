<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <p
                class="text-3xl font-medium text-orange-500  bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400 dark:text-white container mx-auto px-4 py-5">
                Ativos Registrados
            </p>


            <div class="flex items-right justify-end py-2">

                <input wire:model.live.debounce.150ms="search" type="text"
                    class="flex items-left justify-start py-2 block font-medium  text-sm px-28 py-2.5 text-center me-2 mb-2 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" Buscar Ativo" required />

                <a href="{{ route('assetform') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Inserir Ativo </a>

            </div>

            <table class="w-full border-collapse table-sm">
                <thead>
                    <tr class="bg-primary-500">
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Foto</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Registro</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Nome</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Descrição</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Categoria</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Valor</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Alterar</th>

                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($assets as $asset)
                        
                            <tr class="border-b border-primary-500">
                                <td class="px-4 py-4 ">
                                    @if($asset->photo)

                                        <img src="{{ url("storage/{$asset->photo}") }}" alt="{{ $asset->name }}" class="rounded h-8 w-8" >

                                    @else

                                        <img src="{{ url('images/without-image.png') }}" alt="{{ $asset->name }}"  class="rounded-full h-8 w-9" >
                                    @endif
                                </td>
                                <td class="px-4 py-4 ">{{ $asset->record }}</td>
                                <td class="px-4 py-4 ">{{ $asset->name }}</td>
                                <td class="px-4 py-4 ">{{ $asset->description }}</td>
                                <td class="px-4 py-4 ">{{ $asset->category->name }}</td>
                                <td class="px-4 py-4 ">{{ $asset->price }}</td>
                                <td class="px-2 py-2 text-right flex items-right justify-end py-2">
                                    <a href="{{ route('show',  $asset->id) }}"
                                        class="text-white p-4 cursor-pointer text-center me-1 mb-4"><svg
                                            class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3">
                                            </path>
                                        </svg></a>
                                    <a href="{{ route('editasset', $asset->id) }}"
                                        class="text-white p-4 cursor-pointer text-center me-1 mb-2"> <svg
                                            class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z">
                                            </path>
                                            <path
                                                d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z">
                                            </path>
                                        </svg></a>
                                    <button wire:click="delete({{ $asset->id }})"
                                        class="text-white p-4 cursor-pointer text-center me-1 mb-3"><svg
                                            class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </div>
                </tbody>
            </table>
            {{ $assets->links() }}

        </div>
    </div>

</div>
