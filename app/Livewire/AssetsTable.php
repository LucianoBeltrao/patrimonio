<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use App\Models\Asset;
use App\Models\Category;
use Livewire\WithPagination;

class AssetsTable extends Component
{



    public $assets=[];

    public $search='';

    
    public function mount()
    {
        $this->assets = Asset::with('category')->get();// Buscar todos os ativos do banco de dados
    }


    public function render()
    {
        if(! $this->search){
            $this->assets=Asset::all();
        }else{
            $this->assets=Asset::where('name','like','%'.$this->search.'%')->get();
        }
        return view('livewire.assets-table');
    }

    public function delete(Asset $asset)
    {
            $asset->delete();
          
            session()->flash('message', 'Ativo excluído com sucesso.');
            return $this->redirect('/assets', navigate:true);
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



