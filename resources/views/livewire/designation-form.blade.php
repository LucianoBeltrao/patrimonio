<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="flex items-right justify-end py-2">

                <a href="{{ route('designations') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Alocações </a>

            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="grid gap-6 mb-6 md:grid-cols-2 py-5">

                    <form wire:submit="save">

                        <div class="py-5">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="projects">Projeto</label>
                            <select wire:model.live="form.projects"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha um Projeto</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->client }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.projects')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="py-5">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="departments">Departamento</label>
                            <select wire:model.live="form.departments"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha um Departamento</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.departments')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="assets">Ativo</label>
                            <select wire:model.live="form.assets"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha o Ativo</option>
                                @foreach ($assets as $asset)
                                    <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.assets')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="py-5">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="records">Ativo</label>
                            <select wire:model.live="form.records"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha o Registro</option>
                                @foreach ($records as $record)
                                    <option value="{{ $record->id }}">{{ $record->record }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.records')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="py-5">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                                wire:model="users">Responsável</label>
                            <select wire:model.live="form.users"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escolha o Registro</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('form.users')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade</label>
                                <input type="text" id="company"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.quantity" />
                            </div>

                            <div>
                                @error('form.quantity')
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