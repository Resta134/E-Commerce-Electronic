<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('web.homepage', [
        'title' => 'Homepage',
        // 'products' => Products::all(),
    ]);
})->name('homepage');
Route::get('/allproduct', function () {
    return view('components.allproduct', [
        'title' => 'Homepage',
        // 'products' => Products::all(),
    ]);
})->name('allproduct');
Route::get('/produkdetail', function () {
    return view('components.productdetail', [
        'title' => 'Homepage',
        // 'products' => Products::all(),
    ]);
})->name('allproduct');





// components.allproduct
// Halaman utama
// Route::get('/', [HomepageController::class, 'index'])->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
