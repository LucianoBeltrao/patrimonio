<?php

namespace App\Livewire;

use App\Models\Departments;
use Livewire\Component;

class DepartmentsTable extends Component
{
    public $departments;

    public function mount()
    {
        $this->departments = Departments::with('projects')->get(); // With para carregados os dados dos setores relacionados
    }

    public function render()
    {
        return view('livewire.departments-table');
    }
}
