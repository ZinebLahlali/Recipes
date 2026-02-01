@extends('layout.app')

@section('content')
<section class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <!-- Error message -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Mot de passe</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition"
            >
                Login
            </button>
        </form>

        <!-- Register link -->
        <p class="text-center text-sm text-gray-600 mt-4">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                Register
            </a>
        </p>
    </div>

</section>
@endsection