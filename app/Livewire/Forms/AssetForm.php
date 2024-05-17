<?php

namespace App\Livewire\Forms;

use App\Models\Asset;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AssetForm extends Form
{

    public ?Asset $asset;

    #[Validate('min:1')]
    public $record = '';

    #[Validate('min:1')]
    public $category_id = '';
 
    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('min:5')]
    public $description = '';
    
    #[Validate('required|min:5')]
    public $price = '';

    public function setAsset(Asset $asset)
    {
        $this->asset = $asset;

        $this->record = $asset->record;

        $this->category_id = $asset->category_id;

        $this->name = $asset->name;

        $this->description = $asset->description;

        $this->price = $asset->price;
    }

    public function update()

    {
        $this->asset->update(
            $this->all()
        );

    }
}
