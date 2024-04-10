<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectTable extends Component
{

    public $projects;

    public function mount()
    {
        $this->projects = Project::with('departments')->get();;
    }


    public function render()
    {
        return view('livewire.project-table');
    }
}
