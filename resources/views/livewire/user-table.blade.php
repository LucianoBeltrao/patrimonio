<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table  class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('id')">Id</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Nome</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('email')">Email</th>
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
