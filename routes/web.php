<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', function () {
//     return view('recipes.create');
// })->name('recipes.create');


Route::get('/accueil', function () {
    return view('home');
});


Route::get('/index', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{id}',[RecipeController::class, 'getRecipeDetails'])
->whereNumber('id')
->name('recipes.details');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes/create',[RecipeController::class, 'store'])->name('recipes.create');

Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/recipes/{id}', [RecipeController::class, 'update']);
Route::delete('recipes/{recipe}',[RecipeController::class, 'destroy'])->name('recipes.destroy');

Route::get('/home', [RecipeController::class, 'home'])->name('recipes.home');


