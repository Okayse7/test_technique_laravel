<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Laravel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles 
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-primary text-white p-4 flex items-center justify-between">
        <h1 class="text-xl font-bold">Réservations Immobilières</h1>
        @auth
        <form method="POST" action="{{ route('logout') }}" style="display:inline">
            @csrf
            <button type="submit" class="ml-4 bg-white text-primary px-3 py-1 rounded">Déconnexion</button>
        </form>
        @endauth
    </header>

    <main class="p-6">
        @yield('content')
    </main>
    @livewireScripts 
</body>
</html>
