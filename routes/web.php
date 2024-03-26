<?php



use Illuminate\Support\Facades\Route;

use App\Livewire\ShowAssets;

// Route::get('assets', function () {
//     return view('livewire/show-assets');
// });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/assets', function () {
    return view('livewire.show-assets');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
