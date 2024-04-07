
 <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto sm:px-6 lg:px-0 ">

        <form wire:submit="save">

            <input type="text" wire:model="form.name">
            <div>
                @error('form.name') <span class="error">{{ $message }}</span> @enderror
            </div>
        
            <input type="text" wire:model="form.descriptioon">
            <div>
                @error('form.description') <span class="error">{{ $message }}</span> @enderror
            </div>

            <input type="text" wire:model="form.value">
            <div>
                @error('form.value') <span class="error">{{ $message }}</span> @enderror
            </div>
        
            <button type="submit">Save</button>
        </form>

</div>
