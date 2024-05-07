<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserTable extends Component
{
    public $users;

    public $search='';

    public function mount()
    {
        $this->users = User::all(); // Buscar todos os usuários do banco de dados
    }

    public function render()
    {   
        if (! $this->search){
            $this->mount();
        }else{
            $this->users=User::where('name', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.user-table');

    }
}
