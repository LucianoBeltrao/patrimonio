<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserTable extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all(); // Buscar todos os usuários do banco de dados
    }

    public function render()
    {
        return view('livewire.user-table');
    }
}
