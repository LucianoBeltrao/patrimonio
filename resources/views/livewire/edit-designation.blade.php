<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="flex items-right justify-end py-2">

                <a href="{{ route('designations') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Alocações </a>

            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <h2 class="text-3xl font-medium text-gray-900 dark:text-white container mx-auto px-3 py-4">Designação nº:
                    {{ $numberdesignation }}</h2>

                <div class="grid gap-6 mb-6 md:grid-cols-2 py-5">

                    <form wire:submit.prevent="update">

                        <div class="py-5">
                            <label for="project" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="project_id">Projeto</label>
                            <select wire:model="selectedProject" id="project"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha um Projeto</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->client }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.project_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="py-5">
                            <label for="departments"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="department_id">Departamento</label>
                            <select wire:model="selectedDepartment" id="departments"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha um Departamento</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.department_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <label for="asset" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="asset_id">Ativo</label>
                            <select wire:model="selectedAsset" id="assets"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha o Ativo</option>
                                @foreach ($assets as $asset)
                                    <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.asset_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <label for="user" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="user_id">Responsável</label>
                            <select wire:model="selectedUser" id="users"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha o Registro</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.user_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <div>
                                <label for="quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade</label>
                                <input type="text" id="quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.quantity" />
                            </div>

                            <div>
                                @error('form.quantity')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="py-5">
                            <div>
                                <label for="unitary_price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                                <input type="text" id="unitary_price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.unitary_price" />
                            </div>

                            <div>
                                @error('form.unitary_price')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="py-2">

                            <button type="submit"
                                class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Salvar</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
