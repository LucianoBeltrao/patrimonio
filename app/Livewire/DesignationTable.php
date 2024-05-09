<?php

namespace App\Livewire;

use App\Models\Designation;
use Livewire\Component;

class DesignationTable extends Component
{
    public $designations;

    public $assets;

    public $projects;
    
    public $departments;
    
    public $users;


    public function mount()
    {
        $this->designations = Designation::with('asset')->get();

        $this->assets = Designation::with('asset')->get();

        $this->projects = Designation::with('project')->get();

        $this->departments = Designation::with('department')->get();

        $this->users  = Designation::with('user')->get();
        

    }

    
    public function render()
    {
        return view('livewire.designation-table');
    }
}
