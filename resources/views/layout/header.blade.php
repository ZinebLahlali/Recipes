<header class="bg-rose-500 text-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        
        <!-- Logo / Site name -->
        <a href="{{ url('/') }}" class="text-2xl font-bold tracking-wide">
            🍰 Recettes
        </a>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-6 font-medium">
            <a href="{{ url('/') }}" class="hover:text-rose-200 transition">Accueil</a>
            <a href="{{ url('/index') }}" class="hover:text-rose-200 transition">Recettes</a>
            <a href="{{ url('/categories') }}" class="hover:text-rose-200 transition">Catégories</a>
            <a href="{{ url('/recipes/create') }}" class="hover:text-rose-200 transition">Ajouter Recipe</a>
        </nav>

        <!-- Mobile menu button (optionnel) -->
        <button class="md:hidden text-2xl">
            ☰
        </button>
    </div>
</header>
