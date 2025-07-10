<?php

use App\Http\Controllers\ProfileController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    $adr_img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUyrOKn_apqGUdfRBQ78a1DUmzqNdWEgYDyg&s'; // on va utiliser une image par défaut pour toutes les propriétés
    $properties = Property::all()->map(function ($property) use ($adr_img) {
        $property->image = $adr_img;
        return $property;
    });
    return view('home', compact('properties')); // on passe les propriétés à la vue pour la route home
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
