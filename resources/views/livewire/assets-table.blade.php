<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table  class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('description')">Descrição</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Categoria</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('price')">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assets as $asset)
            <tr class="border-b border-primary-500">
                <td class="px-4 py-4">{{ $asset->name }}</td>
                <td class="px-4 py-4">{{ $asset->description }}</td>
                <td class="px-4 py-4">{{ $asset->categories->name }}</td>
                <td class="px-4 py-4">{{ $asset->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
