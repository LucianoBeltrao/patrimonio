<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use App\Models\Asset;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;




class EditAsset extends Component
{
    use WithFileUploads;

    public AssetForm $form;

    public $categories;

    public $selectedCategory;

    public $assetname;

    public $assetId;

    public $photo;

    public $asset;

    public function mount(Asset $asset)
    {

        $this->form->setAsset($asset);
        $this->categories = Category::all();
        $this->selectedCategory = $this->form->category_id;
        $this->assetname = $this->form->name;
        
    }


    public function update()
    {
        $this->form->category_id = $this->selectedCategory;

        $this->validate([
            'photo' => 'required|image|max:1024', // 1MB Max
        ]);

        // Encontra o item pelo ID
        $asset = Asset::find($this->asset);

        $filename =  Str::slug($this->assetname) . '.' . $this->photo->getClientOriginalName();

        $path = $this->photo->storeAs('assets', $filename, 'public');

        $this->form->update([
            'profile_photo_path' => $path
        ]);

        session()->flash('message', 'Photo successfully uploaded.');

        return $this->redirect('/assets');
    }


    public function render()
    {
        return view('livewire.edit-asset');
    }

    
}
