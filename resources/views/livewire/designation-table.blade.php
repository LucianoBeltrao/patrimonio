<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    

                <div class="flex items-right justify-end py-2">

                    <input wire:model.live.debounce.150ms="search" type="text" class="flex items-left justify-start py-2 block font-medium  text-sm px-28 py-2.5 text-center me-2 mb-2 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Buscar Ativo" required />


                    <a href="{{ route('assetform') }}"
                        class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Inserir Designação </a>
    
                </div>
    
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-primary-500">
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Projeto</th>
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Departamento</th>
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Registro</th>
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Ativo</th>
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Quantidade</th>
                            <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Responsável</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($designations as $designation)
                            <tr class="border-b border-primary-500">
                                <td class="px-4 py-4 text-center">{{ $designation->project->client}}</td>
                                <td class="px-4 py-4 text-center">{{ $designation->department->name}}</td>
                                <td class="px-4 py-4 text-center">{{ $designation->asset->record}}</td>
                                <td class="px-4 py-4 text-center">{{ $designation->asset->name}}</td>
                                <td class="px-4 py-4 text-center">{{ $designation->quantity}}</td>
                                <td class="px-4 py-4 text-center">{{ $designation->user->name}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
