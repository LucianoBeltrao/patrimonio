<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\Category;
use Livewire\Component;




class EditAsset extends Component
{
    public $asset_id, $categories, $name, $description, $price, $asset;

    
    public function mount($id)
    {

        $asset = Asset::where('id', $id)->first();

        $this->asset_id = $asset->id;
        // $this->categories = Category::all();

    }

    public function render()
    {
        return view('livewire.edit-asset');
    }
}
