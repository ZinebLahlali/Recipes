<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', function () {
//     return view('recipes.create');
// })->name('recipes.create');


Route::get('/accueil', function () {
    echo "Ma plateforme de recettes";
});


Route::get('/index', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes/create',[RecipeController::class, 'store'])->name('recipes.create');

