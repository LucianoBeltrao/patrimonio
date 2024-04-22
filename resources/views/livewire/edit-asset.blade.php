<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="flex items-right justify-end py-2">

                <a href="{{ route('assets') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Todos os Ativos </a>

            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="grid gap-6 mb-6 md:grid-cols-2 py-5">



                    <form wire:submit="updateAsset">

                        <div class="py-5">
                            <div>
                                <label for="asset_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id</label>
                                <input type="text" id="asset_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.asset_id" />
                            </div>
                            <div>
                                @error('form.asset_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="py-5">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                                <input type="text" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model.live="form.category_id" />
                            </div>
                            {{-- <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white" wire:model="category_id">Categoria</label>
                        <select wire:model.live="form.category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Defina uma categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>             --}}
                            <div>
                                @error('form.category_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="py-5">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do
                                    Ativo</label>
                                <input type="text" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.name" />
                            </div>
                            <div>
                                @error('form.name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="py-5">
                            <div>
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Informe as características do item aqui..." wire:model="form.description"></textarea>
                            </div>
                            <div>
                                @error('form.description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="py-5">
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                                <input type="text" id="company"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    wire:model="form.price" />
                            </div>

                            <div>
                                @error('form.price')
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

</div>
