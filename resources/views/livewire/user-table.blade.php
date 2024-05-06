<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



            <div class="flex items-right justify-end py-2">

            <input wire:model.live.debounce.150ms="search" type="text" class="flex items-left justify-start py-2 block font-medium  text-sm px-28 py-2.5 text-center me-2 mb-2 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Buscar Usuário" required />
            
            </div>

            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-primary-500">
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('id')">Id</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('name')">Nome</th>
                        <th class="p-4 cursor-pointer text-center" x-on:click="sortBy('email')">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b border-primary-500">
                            <td class="px-4 py-4 text-center">{{ $user->id }}</td>
                            <td class="px-4 py-4 text-center">{{ $user->name }}</td>
                            <td class="px-4 py-4 text-center">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
