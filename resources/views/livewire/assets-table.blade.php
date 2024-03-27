<div class="flex justify-center items-center h-screen rounded">
    <table  class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('description')">Descrição</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('price')">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assets as $asset)
            <tr class="border-b border-primary-500">
                <td class="px-4 py-4">{{ $asset->name }}</td>
                <td class="px-4 py-4">{{ $asset->description }}</td>
                <td class="px-4 py-4">{{ $asset->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
