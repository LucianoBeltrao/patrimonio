<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectTable extends Component
{

    public $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }


    public function render()
    {
        return view('livewire.project-table');
    }
}
