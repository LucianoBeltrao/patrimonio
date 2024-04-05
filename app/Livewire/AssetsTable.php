<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Asset;

class AssetsTable extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::with('categories')->get();// Buscar todos os ativos do banco de dados
    }


    public function render()
    {
        return view('livewire.assets-table');
    }
}

