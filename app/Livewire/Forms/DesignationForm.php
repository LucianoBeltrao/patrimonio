<?php

namespace App\Livewire\Forms;

use App\Models\Designation;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DesignationForm extends Form
{
    public ?Designation $designation;

    #[Validate('min:1')]
    public $project_id = '';

    #[Validate('min:1')]
    public $department_id = '';

    #[Validate('min:1')]
    public $asset_id = '';
    
    #[Validate('min:1')]
    public $quantity = '';

    #[Validate('min:1')]
    public $user_id = '';

    #[Validate('min:1')]
    public $unitary_price;

    public function setDesignation(Designation $designation)
    {
        $this->designation = $designation;

        $this->project_id = $designation->project;

        $this->department_id = $designation->department;

        $this->asset_id = $designation->asset;

        $this->user_id = $designation->user;

        $this->quantity = $designation->quantity;

        $this->unitary_price = $designation->unitary_price;

        
    }

    public function update()

    {
        $this->designation->update(
            $this->all()
        );

    }
}
