<div class="flex justify-center items-center h-screen rounded">
    <table  class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('id')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Descrição</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('email')">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="border-b border-primary-500">
                <td class="px-4 py-4">{{ $user->id }}</td>
                <td class="px-4 py-4">{{ $user->name }}</td>
                <td class="px-4 py-4">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
