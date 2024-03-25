<?php

namespace app\Livewire;

use Livewire\Component;

class ShowAssets extends Component
{
    public $message = 'Apenas um teste';

    public function render()
    {
        return view('livewire.show-assets');
    }
}
