<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RepresentationController;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
//…
|
*/

Route::redirect('/', '/homepage');

// Route::get('/homepage', function () {
//     return inertia('Homepage');
// });

// Nouvelle methode avec controlleur (et donc recupération de données)
Route::get('/homepage', [ShowController::class, 'indexVue'])->name('homepage_show');

Route::get('/representation_bis', function () {
    return inertia('Representation_bis');
});

Route::get('/shop', function () {
    return inertia('Shop');
});

Route::get('/news', function () {
    return inertia('News');
});

Route::get('/minichat', function () {
    return inertia('Minichat');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Old routes with blade php instead of Vue.js

Route::get('/artist', [ArtistController::class, 'index'])->name('artist_index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
	->where('id', '[0-9]+')->name('artist_show');

Route::get('/type', [TypeController::class, 'index'])->name('type_index');
Route::get('/type/{id}', [TypeController::class, 'show'])
	->where('id', '[0-9]+')->name('type_show');

Route::get('/locality', [LocalityController::class, 'index'])->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])
	->where('id', '[0-9]+')->name('locality_show');
		
Route::get('/role', [RoleController::class, 'index'])->name('role_index');
Route::get('/role/{id}', [RoleController::class, 'show'])
	->where('id', '[0-9]+')->name('role_show');

Route::get('location', [LocationController::class, 'index'])->name('location_index');
Route::get('location/{id}', [LocationController::class, 'show'])
	->where('id', '[0-9]+')->name('location_show');	

Route::get('/show', [ShowController::class, 'index'])->name('show_index');

Route::get('/show/{id}', [ShowController::class, 'show'])
	->where('id', '[0-9]+')->name('show_show');	

Route::get('/representation', [RepresentationController::class, 'index'])->name('representation_index');
Route::get('/representation/{id}', [RepresentationController::class, 'show'])
	->where('id', '[0-9]+')->name('representation_show');		