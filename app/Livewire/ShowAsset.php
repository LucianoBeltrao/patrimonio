<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Department;
use App\Models\Project;
use App\Models\Traceability;
use App\Models\User;
use Livewire\Component;


class ShowAsset extends Component
{

    public $assetId;
    public $assetname;
    public $categories;
    public $selectedCategory;
    public $categoryname;
    public $record;
    public $description;
    public $valor;
    public $brand;
    public $model;
    public $health;
    public $uptime;
    public $invoice;
    public $serial_number;
    public $photoasset;
    public $traceabilities;
    public $user;
    public $project;
    public $department;




    public function mount($assetId)
    {
        $this->$assetId = $assetId;
        $this->traceabilities = Traceability::where('asset_id', $assetId)->orderBy('created_at', 'desc')->get();
        $this->user = User::where('id', $assetId)->get();
        $this->project = Project::where('id', $assetId)->get();
        $this->department = Department::where('id', $assetId)->get();
    }


    public function render()
    {
        $asset = Asset::find($this->assetId);

        $this->assetname = $asset->name;
        $this->record = $asset->record;
        $this->description = $asset->description;
        $this->brand = $asset->brand;
        $this->model = $asset->model;
        $this->health = $asset->health;
        $this->uptime = $asset->uptime;
        $this->invoice = $asset->invoice;
        $this->serial_number = $asset->serial_number;
        $this->valor = $asset->price;
        $this->photoasset = $asset->profile_photo_path;

        $this->categories = Category::all();
        $this->selectedCategory = $asset->category_id;

        $categoryshow = Category::find($this->selectedCategory);
        $this->categoryname = $categoryshow->name;


        return view('livewire.show');

    }


}
