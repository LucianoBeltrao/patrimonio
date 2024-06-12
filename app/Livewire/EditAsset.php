<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use App\Models\Asset;
use App\Models\Category;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;




class EditAsset extends Component
{
    use WithFileUploads;

    public AssetForm $form;

    public $categories;

    public $selectedCategory;

    public $assetname;

    public $assetId;

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
        $this->form->update();


        session()->flash('message', 'Asset successfully uploaded.');

        return $this->redirect('/assets');
    }


    public function render()
    {
        return view('livewire.edit-asset');
    }

    
}
