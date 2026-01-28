<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    echo "Ma plateforme de recettes";
});


Route::get('/home', function () {
   echo view("home");
});

