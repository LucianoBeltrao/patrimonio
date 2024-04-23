<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AssetsTable;
use App\Livewire\CreateAsset;
use App\Livewire\DepartmentsTable;
use App\Livewire\EditAsset;
use App\Livewire\Forms\AssetForm;
use App\Livewire\ProjectTable;
use App\Livewire\UserTable;





Route::get('/users', UserTable::class)->name('users');


Route::get('/assets', AssetsTable::class)->name('assets');
Route::get('/assetform', CreateAsset::class)->name('assetform');
Route::get('/editasset/{asset}', EditAsset::class)->name('editasset');


Route::get('/departments', DepartmentsTable::class)->name('departments');
//Route::get('/departmentform', CreateAsset::class)->name('assetform');


Route::get('/projects', ProjectTable::class)->name('projects');
//Route::get('/pejectform', CreateAsset::class)->name('assetform');







Route::get('/assetsform', CreateAsset::class)->name('assetsform');


Route::get('/', function () {
    return view('welcome');
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
