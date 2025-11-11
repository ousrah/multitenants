<!-- resources/views/themes/modern-tech/layouts/app.blade.php -->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('direction', 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Script anti-flicker pour le mode sombre -->
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
    class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-200"
>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-theme::main-sidebar />

        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-theme::header />

            <!-- Main Content -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8 
                bg-slate-100 dark:bg-slate-800/50"
            >
                {{-- EXEMPLE D'UNE CARTE "SOPHISTIQUÉE" --}}
                <div class="mb-8 p-6 bg-white dark:bg-slate-800 rounded-xl shadow-md
                    border border-slate-200 dark:border-slate-700">
                    <h2 class="text-xl font-semibold mb-4">Bienvenue !</h2>
                    <p class="mb-6">Ceci est une carte avec les nouveaux styles du thème "Modern Tech".</p>
                    <button class="px-5 py-2 font-semibold text-white 
                        rounded-lg bg-gradient-to-r from-primary to-secondary
                        transition-all duration-300
                        hover:shadow-lg hover:shadow-primary/40 hover:-translate-y-px"
                    >
                        Action principale
                    </button>
                </div>
                
                {{ $slot }}
            </main>

            <!-- Footer -->
            <x-theme::footer />
        </div>
    </div>
</body>
</html>