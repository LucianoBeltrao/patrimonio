<?php

namespace App\Livewire;

use App\Livewire\Forms\DesignationForm;
use App\Models\Asset;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Project;
use App\Models\User;
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


class CreateDesignation extends Component
{
    public $projects;

    public $departments;

    public $records;

    public $assets;

    public $users;

    public $designations;


    public $selectedProject = null;
    public $selectedDepartment = null;
    public $selectedRecord = null;
    public $selectedAsset = null;
    public $selectedUser = null;



    public function mount()
    {
        $this->projects= Project::all();

        $this->departments= Department::all();

        $this->records= Asset::all();

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

        
        return $this->redirect('/designation');
    }

    public function render()
    {
        return view('livewire.designation-form');
    }

}