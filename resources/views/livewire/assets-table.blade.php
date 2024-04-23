<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



            <div class="flex items-right justify-end py-2">

                <a href="{{ route('assetform') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Inserir Ativo </a>

            </div>

            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-primary-500">
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Nome</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Descrição</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('description')">Categoria</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Valor</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('price')">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                        <tr class="border-b border-primary-500">
                            <td class="px-4 py-4 ">{{ $asset->name }}</td>
                            <td class="px-4 py-4 ">{{ $asset->description }}</td>
                            <td class="px-4 py-4 ">{{ $asset->category->name }}</td>
                            <td class="px-4 py-4 ">{{ $asset->price }}</td>
                            <td class="px-4 py-4 "> <a href="{{ route('editasset', $asset->id) }}"
                                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"> Editar</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

