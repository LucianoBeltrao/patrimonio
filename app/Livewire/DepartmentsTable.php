<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentsTable extends Component
{
    public $departments;

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function render()
    {
        return view('livewire.departments-table');
    }
}
