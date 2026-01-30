<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function index()
    {
       $recipes = Recipe::all();
       
      
     return view('recipes.index', compact('recipes'));
       
    }


    public function getRecipeDetails($id)
    {
        $recipes = Recipe::findOrFail($id);
        return view('recipes.details',compact('recipes'));
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

     public function edit($id)
     { 
       $recipe = Recipe::findOrFail($id);
       return view('recipes.edit', compact('recipe')); 
     }
     
     public function update(Request $request, $id)
     {    $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('upload', 'public');
        }
         $recipes = Recipe::findOrFail($id);
        
         $recipes->title = $request->title; 
         $recipes->description = $request->description;
         $recipes->ingredients = $request->ingredients;
         $recipes->steps = $request->steps;
         $recipes->image = $path;
         $recipes->category = $request->category;

         $recipes->save();

         return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully');
   }
    
    
        public function destroy(Recipe $recipe)
        {
            if ($recipe->image) {
                Storage::disk('public')->delete($recipe->image);
            }


            $recipe->delete();

            return redirect()->route('recipes.index')
                            ->with('success', 'Recette supprimée avec succès');
        }


    public function home()
    {
        $stats = [
            'recipes' => Recipe::count(),
        ];

        return view('recipes.home', compact('stats'));
    }    



}