<div class="mx-auto">
    <table  class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('description')">Descrição</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('price')">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assets as $asset)
            <tr>
                <td class="p-4">{{ $asset->name }}</td>
                <td class="p-4">{{ $asset->description }}</td>
                <td class="p-4">{{ $asset->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
