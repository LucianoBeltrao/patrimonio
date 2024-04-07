

<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto sm:px-6 lg:px-0 " >
    
    <table  class=" w-full text-sm text-left rtl:text-right text-black-100 dark:text-black-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b  dark:text-white">
            <tr class="bg-primary-500">
                <th scope="col" class="px-6 py-3">Nome</th>
                <th scope="col" class="px-6 py-3">Descrição</th>
                <th scope="col" class="px-6 py-3">Categoria</th>
                <th scope="col" class="px-6 py-3">Valor</th>
                <th scope="col" class="px-6 py-3">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assets as $asset)
            <tr class="border-b border-primary-500" class="bg-blue-600 border-b border-primary-500">
                <td scope="col" class="px-6 py-3">{{ $asset->name }}</td>
                <td scope="col" class="px-6 py-3">{{ $asset->description }}</td>
                <td scope="col" class="px-6 py-3">{{ $asset->category->name}}</td>
                <td scope="col" class="px-6 py-3">{{ $asset->price }}</td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text- hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

