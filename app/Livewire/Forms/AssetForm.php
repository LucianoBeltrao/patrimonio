<?php

namespace App\Livewire\Forms;

use App\Models\Asset;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AssetForm extends Form
{
    #[Validate('min:1')]
    public $category_id = 1;
 
    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('min:5')]
    public $description = '';
    
    #[Validate('required|min:5')]
    public $price = '';


}
