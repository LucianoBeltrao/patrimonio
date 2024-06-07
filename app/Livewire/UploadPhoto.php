<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\Category;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Str;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;
    public $assetId;

    public $assetname;

    public $categories;

    public $selectedCategory;

    public $categoryname;

    public $record;

    public $descricao;

    public $valor;

    public $photoasset;



    public function mount($assetId)
    {
        $this->$assetId = $assetId;
    }


    public function render()
    {
        $asset = Asset::find($this->assetId);

        $this->assetname = $asset->name;
        $this->record = $asset->record;
        $this->valor = $asset->price;
        $this->photoasset = $asset->profile_photo_path;

        $this->categories = Category::all();
        $this->selectedCategory = $asset->category_id;
        
        $categoryshow = Category::find($this->selectedCategory);
        $this->categoryname = $categoryshow->name;


        
        
    

        return view('livewire.show');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'required|image|max:1024', // 1MB Max
        ]);

        // Encontra o item pelo ID
        $asset = Asset::find($this->assetId);

        $filename =  Str::slug($asset->name) . '.' . $this->photo->getClientOriginalName();

        $path = $this->photo->storeAs('assets', $filename, 'public');

        $asset->update([
            'profile_photo_path' => $path
        ]);

        session()->flash('message', 'Photo successfully uploaded.');

        return redirect()->route('assets');
    }
}
