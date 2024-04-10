<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        
        <form wire:submit="save">

            <div class="py-5">
                    <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white" wire:model="category_id">Categoria</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Defina uma categoria</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>            
                <div>
                    @error('form.category_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            

            <div class="py-5">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Ativo</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="form.name" />
                </div>
                <div>
                    @error('form.name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="py-5">
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Informe as características do item aqui..." wire:model="form.description"></textarea>   
                </div>
                <div>
                    @error('form.description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="py-5">
                <div>
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                    <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="form.price"/>
                </div> 

                <div>
                    @error('form.price')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        
        
            <div class="py-2">
            
                <button type="submit" class="text-white bg-secondary-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
            
            </div>

        </form>
        
    </div>

</div>