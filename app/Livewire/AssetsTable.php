<?php

namespace App\Livewire;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Designation;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class AssetsTable extends Component
{

    use WithPagination;

    //public $assets=[];

    public $search='';

    
    public function mount()
    {
        $this->assets = Asset::with('category')->paginate(10);// Buscar todos os ativos do banco de dados
    }


    public function render()
    {
        if(! $this->search){
            $this->mount();
        }else{
            $this->assets=Asset::where('name','like','%'.$this->search.'%')->paginate(10);
        }
        return view('livewire.assets-table', [
            'assets'=>$this->assets,
        ]);
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

    use WithFileUploads;

    public $categories;

    public $selectedCategory = null;

    public AssetForm $form;


    public function mount()
    {
        $this->categories = Category::all();
        
    }


    public function save()
    {
        
        $this->validate();
 
        $assetData = $this->form->all();

        if ($this->form->photo) {
            $filename = Str::slug($this->form->name) . '.' . $this->form->photo->getClientOriginalExtension();
            $path = $this->form->photo->storeAs('assets', $filename, 'public');
            $assetData['profile_photo_path'] = $path;
        }

        Asset::create($assetData);
        
        return $this->redirect('/assets');
    }

    public function render()
    {
        return view('livewire.asset-form');
    }

    

}