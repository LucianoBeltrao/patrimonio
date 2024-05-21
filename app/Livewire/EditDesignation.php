<?php

namespace App\Livewire;

use App\Livewire\Forms\DesignationForm;
use App\Models\Asset;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class EditDesignation extends Component
{

    public DesignationForm $form;

    public $projects;
    public $departments;
    public $assets;
    public $users;

    public $selectedProject;
    public $selectedDepartment;
    public $selectedAsset;
    public $selectedUser;

    public $numberdesignation;



    public function mount(Designation $designation)
    {

        $this->form->setDesignation($designation);

        $this->projects = Project::all();
        $this->selectedProject = $this->form->project_id;

        $this->departments = Department::all();
        $this->selectedDepartment = $this->form->department_id;

        $this->assets = Asset::all();
        $this->selectedAsset = $this->form->asset_id;

        $this->users = User::all();
        $this->selectedUser = $this->form->user_id;

        $this->numberdesignation = $this->form->designation->id;
    }


    public function update()
    {

        $this->form->project_id = $this->selectedProject;

        $this->form->department_id = $this->selectedDepartment;

        $this->form->asset_id = $this->selectedAsset;

        $this->form->user_id = $this->selectedUser;

        $this->form->update();

        return $this->redirect('/designations');
    }



    public function render()
    {
        return view('livewire.edit-designation');
    }
}
