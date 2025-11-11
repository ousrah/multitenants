<!-- resources/views/layouts/app.blade.php (ou équivalent) -->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('direction', 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Script anti-flicker pour le mode sombre -->
    <!-- Ce script est correct, il applique la classe 'dark' à <html> avant le rendu de la page. -->
    <script>
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    </script>

    <!-- CSS & JS compilés par Vite -->
    {!! theme_vite(['assets/css/app.css', 'assets/js/app.js']) !!}
</head>
<body
    x-data="$store.app"
    {{-- CORRECTION: La directive x-bind:class a été supprimée. --}}
    {{-- La classe 'dark' est gérée sur la balise <html>, pas sur <body>. --}}
    {{-- Laisser cette directive ici est redondant et peut causer des problèmes. --}}
    class="bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200"
>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
  

        @if (tenant())
               <x-theme::main-sidebar-tenant />
        @else
               <x-theme::main-sidebar />
        @endif

        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-theme::header />

            <!-- Main Content -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <x-theme::footer />
        </div>
    </div>
 @stack('scripts')
</body>
</html>