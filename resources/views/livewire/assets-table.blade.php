<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    <div class="flex items-right justify-end py-2">
            
        <button type="submit" class="text-white bg-secondary-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Novo Ativo</button>
    
    </div>

    <table class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('description')">Descrição</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('description')">Categoria</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('price')">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assets as $asset)
                <tr class="border-b border-primary-500">
                    <td class="px-4 py-4">{{ $asset->name }}</td>
                    <td class="px-4 py-4">{{ $asset->description }}</td>
                    <td class="px-4 py-4">{{ $asset->category->name }}</td>
                    <td class="px-4 py-4">{{ $asset->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
