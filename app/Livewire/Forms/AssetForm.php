<?php

namespace App\Livewire\Forms;

use App\Models\Asset;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AssetForm extends Form
{

    #[Validate('required|min:5')]
    public $name = '';
 
    #[Validate('min:5')]
    public $description = '';

    #[Validate('required|min:5')]
    public $value = '';

}
