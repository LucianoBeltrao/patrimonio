<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Str

class UploadPhoto extends Component
{
    Use  WithFileUploads;

    public $photo; 

    public function render()
    {
        
        return view('livewire.show');
    }

    public function storagePhoto()
    {
        $this->validate([
            'photo' => 'required|image|max:1024'
        ]);

        $nameFile = Str::slug(auth()->asset()->name);
        
        $this->photo->storeAs('assets');
    }
}
