<?php

namespace App\Livewire;

use App\Livewire\Forms\DesignationForm;
use App\Models\Asset;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Project;
use App\Models\User;
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


class CreateDesignation extends Component
{
    public $projects;

    public $departments;

    public $assets;

    public $users;

    public $designations;





    public function mount()
    {
        $this->projects= Project::all();

        $this->departments= Department::all();

        $this->assets= Asset::all();

        $this->users= User::all();

    }

    public DesignationForm $form;

    public function save()
    {
        

        $this->validate();
 
        Designation::create(
            $this->form->all() 
        );

        
        return $this->redirect('/designations');
    }

    public function render()
    {
        return view('livewire.designation-form');
    }

}