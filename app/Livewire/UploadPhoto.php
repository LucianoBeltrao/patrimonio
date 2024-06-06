<?php

namespace App\Livewire;

use App\Models\Asset;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Str;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;
    public $assetId;

    public function mount($assetId)
    {
        $this->$assetId = $assetId;
    }


    public function render()
    {
        return view('livewire.show');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'required|image|max:1024', // 1MB Max
        ]);

        // Encontra o item pelo ID
        $asset = Asset::find($this->assetId);

        $filename =  Str::slug($asset->name). '.' . $this->photo->getClientOriginalName();

        $path = $this->photo->storeAs('assets', $filename, 'public');

        $asset->update([
            'profile_photo_path' => $path
        ]);

        session()->flash('message', 'Photo successfully uploaded.');

        return redirect()->route('assets');
    }
}

// class UploadPhoto extends Component
// {
//     use WithFileUploads;

//     public $photo;
//     public $assetId; // Assumindo que você está passando o ID do asset para o componente

//     public function render()
//     {
//         return view('livewire.show');
//     }

//     public function storagePhoto()
//     {
//         $this->validate([
//             'photo' => 'required|image|max:1024'
//         ]);

//         // Encontra o asset pelo ID
//         $asset = Asset::find($this->assetId);

//         if ($asset) {
//             // Gera o nome do arquivo
//             $nameFile = Str::slug($asset->name) . '.' . $this->photo->getClientOriginalExtension();

//             // Armazena a foto no diretório 'assets'
//             if ($path = $this->photo->storeAs('assets', $nameFile, 'public')) {
//                 // Atualiza o caminho da foto no asset
//                 $asset->update([
//                     'profile_photo_path' => $path
//                 ]);
//             }

//             return redirect()->route('/assets');
//         } else {
//             session()->flash('error', 'Asset não encontrado.');
//         }
//     }
// }
