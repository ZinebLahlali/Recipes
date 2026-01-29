<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
       $recipes = Recipe::all();
       
      
     return view('recipes.index', compact('recipes'));
       
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {  $validated = $request->validate([
        'title' => 'required|unique:recipes',
        'description' => 'required',
        'ingredients' => 'required',
        'steps' => 'required',
         'image' => 'required',
         'category' => 'required',
    ]);
        $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('upload', 'public');
        }

        $recipe = Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'steps' => $request->steps,
            'image' => $path,
            'category' => $request->category
        ]);
        echo "success";
        exit;
    }
      

   }




