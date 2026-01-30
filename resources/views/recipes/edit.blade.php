@extends('layout.app')

@section('title', 'Add Recipe')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold text-rose-500 mb-6 text-center">
        🍰 Add New Recipe
    </h2>

    <form method="POST" action="/recipes/{{$recipe->id}}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Title -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Title
            </label>
            <input  type="text"  name="title" value="{{$recipe->title}}"  required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="Cake au chocolat"
            >
        </div>

        <!-- Description -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Description
            </label>
            <textarea name="description" rows="3"  class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="Un cake moelleux et délicieux..."
            >{{$recipe->description}}</textarea>
        </div>

        <!-- Ingredients -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Ingredients
            </label>
            <textarea name="ingredients" rows="4"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="Farine, œufs, sucre, beurre..."
            >{{$recipe->ingredients}}</textarea>
        </div>

        <!-- Steps -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Steps
            </label>
            <textarea  name="steps" rows="4"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="1. Préchauffer le four..."
            >{{$recipe->steps}}</textarea>
        </div>

        <!-- Image URL-->
        <div>
            @if($recipe->image)
             <img src="{{  asset('storage/'.$recipe->image) }}" width="120" class="mb-2">
            @endif
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Image
            </label>
            <input  type="file" name="image"  value="{{$recipe->image}}   " 
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="">
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Category
            </label>
            <input type="text" name="category" value="{{$recipe->category}}" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none"
                placeholder="Dessert"
            >
        </div>

        <!-- Buttons -->
        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('recipes.index') }}" 
               class="text-gray-500 hover:text-gray-700">
                ← Back
            </a>

            <button type="submit"  class="bg-rose-500 text-white px-6 py-2 rounded-lg hover:bg-rose-600 transition">
                Save Recipe
            </button>
        </div>
    </form>
</div>

@endsection
