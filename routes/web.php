<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AssetsTable;
use App\Livewire\DepartmentsTable;
use App\Livewire\ProjectTable;
use App\Livewire\UserTable;

// Route::get('assets', function () {
//     return view('livewire/show-assets');
// });

Route::get('/users', UserTable::class)->name('users');


Route::get('/assets', AssetsTable::class)->name('assets');


Route::get('/departments', DepartmentsTable::class)->name('departments');


Route::get('/projects', ProjectTable::class)->name('projects');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/assets', function () {
//     return view('livewire.show-assets');
// });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
