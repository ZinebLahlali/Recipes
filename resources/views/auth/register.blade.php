

<section class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>

        <!-- Errors -->
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Nom</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Mot de passe</label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Confirm mot de passe</label>
                <input type="password" name="password_confirmation"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Sign Up
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>
    </div>

</section>
@endsection