@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-orange-50 py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            Bienvenue sur RecipeHub 🍽️
        </h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            RecipeHub est une plateforme dédiée aux passionnés de cuisine.
            Découvrez, partagez et enregistrez vos meilleures recettes en toute simplicité.
        </p>
    </div>
</section>

<!-- À PROPOS -->
<section class="py-16">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            C’est quoi RecipeHub ?
        </h2>
        <p class="text-gray-600 leading-relaxed">
            RecipeHub vous permet de consulter des recettes variées, de publier
            vos propres créations culinaires et de suivre l’évolution de la communauté.
            Notre objectif est de rendre la cuisine accessible à tous.
        </p>
    </div>
</section>

<!-- STATISTIQUES -->
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">
            Nos statistiques 📊
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-4xl font-bold text-orange-500">
                    {{ $stats['recipes'] }}
                </p>
                <p class="text-gray-600 mt-2">Recettes</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-4xl font-bold text-orange-500">
                    {{ $stats['users'] }}
                </p>
                <p class="text-gray-600 mt-2">Utilisateurs</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-4xl font-bold text-orange-500">
                    {{ $stats['categories'] }}
                </p>
                <p class="text-gray-600 mt-2">Catégories</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-4xl font-bold text-orange-500">
                    {{ $stats['likes'] }}
                </p>
                <p class="text-gray-600 mt-2">Likes</p>
            </div>

        </div>
    </div>
</section>

@endsection

