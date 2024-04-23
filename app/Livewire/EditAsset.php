<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use App\Models\Asset;
use App\Models\Category;
use Livewire\Component;




class EditAsset extends Component
{
    public AssetForm $form;

    public function mount(Asset $asset)
    {

        $this->form->setAsset($asset);


    }

    
    public function update()
    {
        $this->form->update();
 
        return $this->redirect('/assets');
    }


    public function render()
    {
        return view('livewire.edit-asset');
    }
}
