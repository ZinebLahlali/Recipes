<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- About -->
        <div>
            <h3 class="text-white text-lg font-semibold mb-3">🍰 Recettes</h3>
            <p class="text-sm leading-relaxed">
                Découvrez des recettes simples, délicieuses et faites avec amour.
                Cakes, desserts et plats du quotidien.
            </p>
        </div>

        <!-- Links -->
        <div>
            <h3 class="text-white text-lg font-semibold mb-3">Navigation</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ url('/') }}" class="hover:text-white transition">Accueil</a></li>
                <li><a href="{{ url('/recipes') }}" class="hover:text-white transition">Recettes</a></li>
                <li><a href="{{ url('/categories') }}" class="hover:text-white transition">Catégories</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <!-- Social -->
        <div>
            <h3 class="text-white text-lg font-semibold mb-3">Suivez-nous</h3>
            <div class="flex space-x-4 text-xl">
                <a href="#" class="hover:text-white transition">🌐</a>
                <a href="#" class="hover:text-white transition">📸</a>
                <a href="#" class="hover:text-white transition">🐦</a>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 text-center text-sm py-4">
        © {{ date('Y') }} Recettes — Tous droits réservés
    </div>
</footer>
