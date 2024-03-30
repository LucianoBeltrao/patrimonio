<div class="flex justify-center items-center h-screen rounded">
    <table  class="w-full border-collapse bg-secondary-100">
        <thead>
            <tr class="bg-primary-500">
                <th class="p-4 cursor-pointer" x-on:click="sortBy('projects')">Projeto</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('name')">Departamento</th>
                <th class="p-4 cursor-pointer" x-on:click="sortBy('city')">Cidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr class="border-b border-primary-500">
                <td class="px-4 py-4">{{ $department->projects->customer}}</td>
                <td class="px-4 py-4">{{ $department->name}}</td>
                <td class="px-4 py-4">{{ $department->projects->city}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
