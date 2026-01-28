<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Recipes')</title>

    <!-- Tailwind CDN (dev only) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    @include('partials.header')

    <main class="flex-grow max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
