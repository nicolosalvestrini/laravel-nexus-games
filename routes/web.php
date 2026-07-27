<?php

use App\Http\Controllers\GenereController;
use App\Http\Controllers\PiattaformaController;
use App\Http\Controllers\VideoGiocoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('videogiochi.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('videogiochi', VideoGiocoController::class)
        ->parameters(['videogiochi' => 'videoGioco']);
        
    Route::resource('generi', GenereController::class)
        ->except('show')
        ->parameters(['generi' => 'genere']);

    Route::resource('piattaforme', PiattaformaController::class)
        ->except('show')
        ->parameters(['piattaforme' => 'piattaforma']);
});

require __DIR__ . '/auth.php';
