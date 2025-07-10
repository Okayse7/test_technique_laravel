<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Laravel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-primary text-white p-4">
        <h1 class="text-xl font-bold">Réservations Immobilières</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
