<?php

namespace App\Livewire;

use App\Models\Designation;
use Livewire\Component;

class DesignationTable extends Component
{
    public $designations;

    public function mount()
    {
        $this->designations = Designation::with('asset')->get();
    }

    
    public function render()
    {
        return view('livewire.designation-table');
    }
}
