<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <p class="text-3xl font-medium text-gray-900 dark:text-white container mx-auto px-4 py-5">Detalhes do Ativo</p>

            <div class="flex items-right justify-end py-2">

                <form wire:submit.prevent="save">
                    <input type="file" wire:model="photo">

                    @error('photo') {{ $message }}@enderror
                 
                    <br>
                    <button type="submit">
                      Save photo</button>
                </form>

                @if ($photo)
                Photo Preview:
                <img src="{{ $photo->temporaryUrl() }}" width="200">
                @endif
                

            </div>


            
          
        </div>
    </div>
    
</div>


