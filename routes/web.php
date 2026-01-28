<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    echo "Ma plateforme de recettes";
});


Route::get('/index', [RecipeController::class, 'index']);

Route::get('/home', function () {
    echo "Ma plateforme de recettes";
});
