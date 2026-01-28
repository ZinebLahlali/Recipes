<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Ahmed";
        return view('home', compact('name'));
    }
}
