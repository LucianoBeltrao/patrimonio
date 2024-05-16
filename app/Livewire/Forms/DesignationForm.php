<?php

namespace App\Livewire\Forms;

use App\Models\Designation;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DesignationForm extends Form
{
    public ?Designation $designation;

    #[Validate('min:1')]
    public $projects = '';

    #[Validate('min:1')]
    public $departments = '';
 
    #[Validate('min:1')]
    public $records = '';

    #[Validate('min:1')]
    public $assets = '';
    
    #[Validate('min:1')]
    public $quantity = '';

    #[Validate('rmin:1')]
    public $users = '';

    public function setDesignation(Designation $designation)
    {
        $this->designation = $designation;

        $this->projects = $designation->project;

        $this->departments = $designation->department;

        $this->records = $designation->record;

        $this->assets = $designation->asset;

        $this->quantity = $designation->quantity;

        $this->users = $designation->user;
    }

    public function update()

    {
        $this->designation->update(
            $this->all()
        );

    }
}
