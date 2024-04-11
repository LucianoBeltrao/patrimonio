<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use App\Models\Asset;
use App\Models\Category;


class AssetsTable extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::with('category')->get();// Buscar todos os ativos do banco de dados
    }


    public function render()
    {
        return view('livewire.assets-table');
    }
}


class CreateAsset extends Component
{
    public $categories;

    public $assets;

    public $selectedCategory = null;


    public function mount()
    {
        $this->categories = Category::all();
    }

    /* public function updatedSelectedCategory($category)
    {
        $this->assets = Asset::where('category_id', $category)->get();
    } */


    public AssetForm $form;

    public function save()
    {
        
        $this->validate();
 
        Asset::create(
            $this->form->all() 
        );

        
        return $this->redirect('/assets');
    }

    public function render()
    {
        return view('livewire.asset-form');
    }

}


