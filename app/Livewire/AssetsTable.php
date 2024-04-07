<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use App\Models\Asset;


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
        return view('livewire.assets-form');
    }
}
