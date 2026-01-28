@extends('layouts.app')

@section('title', 'All Recipes')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($recipes as $recipe)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                @if($recipe->image)
                    <img 
                        src="{{ asset('storage/' . $recipe->image) }}" 
                        alt="{{ $recipe->title }}"
                        class="w-full h-48 object-cover"
                    >
                @endif

                <div class="p-5">
                    <h3 class="text-xl font-semibold text-rose-500 mb-2">
                        {{ $recipe->title }}
                    </h3>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ Str::limit($recipe->description, 120) }}
                    </p>

                    <a href="{{ route('home', $recipe->id) }}"
                       class="inline-block text-sm font-medium text-rose-500 hover:text-rose-600">
                        Read more →
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-500 text-lg">
                AUCUNE RECETTE DISPONIBLE
            </p>
        @endforelse
    </div>
@endsection
