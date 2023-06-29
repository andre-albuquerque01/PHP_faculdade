<?php

use App\Http\Controllers\ProfileController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dishdash.home');
});

Route::get('/cardapio', function () {
    return view('dishdash.cardapio', ['person' => Person::class]);
})->middleware(['auth', 'verified'])->name('cardapio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
